<div class="panel-content row">
    @foreach ($blocks as $data)
        <div class="col">
            <ul class="list-group">
                <li class="list-group-item active d-flex justify-content-between align-items-center">
                        
                    <span>
                        {!!$data->title!!}
                        @isset ($data->children[0])
                            <button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapse-{{$data->id}}" aria-expanded="false" aria-controls="collapse-{{$data->id}}">
                                <i class="voyager-angle-down"></i>
                            </button>
                        @endisset
                    </span>
                    <div>
                        
                        <a href="{{ route('voyager.blocks.create', [ 'parent_id' => $data->id]) }}" class="btn btn-sm btn-success pull-right view add">
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
