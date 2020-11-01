<div class="panel-content row">
    @foreach ($blocks as $data)
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item active d-flex justify-content-between align-items-center">
                        
                    <span>
                        {!!$data->title!!}
                        @isset ($data->children[0])
                            <button class="btn btn-sm btn-primary delete" type="button" data-toggle="collapse" data-target="#collapse-{{$data->id}}" aria-expanded="false" aria-controls="collapse-{{$data->id}}">
                                <i class="voyager-angle-down"></i>
                            </button>
                        @endisset
                    </span>
                    <div>
                        
                        <a href="{{ route('voyager.blocks.create', [ 'parent_id' => $data->id]) }}" class="btn btn-sm btn-success pull-right view delete">
                            <i class="voyager-plus"></i> <span>Добавить</span>
                        </a>
                        @foreach($actions as $action)
                            @if (!method_exists($action, 'massAction'))
                                @include('voyager::bread.partials.actions', ['action' => $action])
                            @endif
                        @endforeach
                        
                    </div>
                </li>
                <ul class="list-group collapse" id="collapse-{{$data->id}}">
                    @if ($data->children)
                        @foreach ($data->children as $item)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>{!!$item->title!!}</span>
                                <div>
                                    @foreach($actions as $action)
                                        @if (!method_exists($action, 'massAction'))
                                            @include('voyager::bread.partials.actions', ['action' => $action, 'data' => $item])
                                        @endif
                                    @endforeach
                                </div>
                            </li>
                        @endforeach
                    @endif
                <ul>
            </ul>
        </div>
    @endforeach
</div>
