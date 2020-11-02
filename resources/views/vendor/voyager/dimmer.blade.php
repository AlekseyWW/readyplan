<div class="row">
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Настройки сайта</h3>
            </div>
            <div class="panel-body" style="padding-top: 20px;">
                <h3>
                    <img style="max-width: 200px" src="/storage/{{setting('site.logo')}}" alt="">
                </h3>
                <h3><small>Название:</small><br><b>{{setting('site.title')}}</b></h3>
                <p><small>Описание:</small><br><b>{{setting('site.description')}}<b></p>
                <p><small>Телефон:</small><br><b>{{setting('site.phone')}}<b></p>
                <p><small>Почта:</small><br><b>{{setting('site.email')}}<b></p>
            </div>
            <div class="panel-footer clearfix">
                <a href="{{route('voyager.settings.index')}}" class="btn btn-primary btn-lg">Изменить</a>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        @foreach ($blocks as $data)
            <div class="list-group">
                <div class="list-group-item d-flex justify-content-between align-items-center">
                        
                    <span class="d-flex">
                        @if (isset($data->children[0]))
                            <button style="margin-right: 8px" class="btn btn-sm btn-default" type="button" data-toggle="collapse" data-target="#collapse-{{$data->id}}" aria-expanded="false" aria-controls="collapse-{{$data->id}}">
                                <i class="voyager-angle-down"></i>
                            </button>
                        @else
                            <span style="width: 52px;"></span>
                        @endif
                        <h4>{!!$data->title!!}</h4>
                    </span>
                    <div style="min-width: 184px;">
                        
                        <a href="{{ route('voyager.blocks.create', [ 'parent_id' => $data->id]) }}" class="btn btn-sm btn-success pull-right view add">
                            <i class="voyager-plus"></i>
                        </a>
                        @foreach($actions as $action)
                            @if (!method_exists($action, 'massAction'))
                                @include('voyager::bread.partials.actions', ['action' => $action])
                            @endif
                        @endforeach
                        
                    </div>
                </div>
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
            </div>
        @endforeach
    </div>

</div>

{{-- Single delete modal --}}
<div class="modal modal-danger fade" tabindex="-1" id="delete_modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ __('voyager::generic.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><i class="voyager-trash"></i> {{ __('voyager::generic.delete_question') }} {{ strtolower($dataType->getTranslatedAttribute('display_name_singular')) }}?</h4>
            </div>
            <div class="modal-footer">
                <form action="#" id="delete_form" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger pull-right delete-confirm" value="{{ __('voyager::generic.delete_confirm') }}">
                </form>
                <button type="button" class="btn btn-default pull-right" data-dismiss="modal">{{ __('voyager::generic.cancel') }}</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@section('javascript')
    <!-- DataTables -->
    @if(!$dataType->server_side && config('dashboard.data_tables.responsive'))
        <script src="{{ voyager_asset('lib/js/dataTables.responsive.min.js') }}"></script>
    @endif
    <script>
        $(document).ready(function () {

            $('.select_all').on('click', function(e) {
                $('input[name="row_id"]').prop('checked', $(this).prop('checked')).trigger('change');
            });
        });


        var deleteFormAction;
        $('li').on('click', '.delete', function (e) {
            $('#delete_form')[0].action = '{{ route('voyager.'.$dataType->slug.'.destroy', '__id') }}'.replace('__id', $(this).data('id'));
            $('#delete_modal').modal('show');
        });

        $('input[name="row_id"]').on('change', function () {
            var ids = [];
            $('input[name="row_id"]').each(function() {
                if ($(this).is(':checked')) {
                    ids.push($(this).val());
                }
            });
            $('.selected_ids').val(ids);
        });
    </script>
@stop
