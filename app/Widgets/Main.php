<?php

namespace App\Widgets;

use \App\Models\Block;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Arrilot\Widgets\AbstractWidget;

class Main extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Block::count();
        $blocks = Block::where('parent_id', null)->with('children')->orderBy('order')->get();
        $string = Str::plural('Блок', $count);
        $dataType = Voyager::model('DataType')->where('slug', '=', 'blocks')->first();
        $getter = $dataType->server_side ? 'paginate' : 'get';
        $model = app($dataType->model_name);
        $query = $model::select('*');
        $dataTypeContent = call_user_func([$query->orderBy($model->getKeyName(), 'DESC'), $getter]);

        // Actions
        $actions = [];
        if (!empty($dataTypeContent->first())) {
            foreach (Voyager::actions() as $action) {
                $action = new $action($dataType, $dataTypeContent->first());

                if ($action->shouldActionDisplayOnDataType()) {
                    $actions[] = $action;
                }
            }
        }

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-file-text',
            'title'  => "{$count} {$string}",
            'blocks'  => $blocks,
            'dataType'  => $dataType,
            'actions'  => $actions,
            'text'   => __('voyager::dimmer.page_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.page_link_text'),
                'link' => route('voyager.blocks.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return true;
    }
}
