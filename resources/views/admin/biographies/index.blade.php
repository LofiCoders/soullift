@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.biography.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Biography">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.biography.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.biography.fields.title') }}
                        </th>
                        <th>
                            {{ trans('cruds.biography.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.biography.fields.tiktok') }}
                        </th>
                        <th>
                            {{ trans('cruds.biography.fields.profile_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.biography.fields.author') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($biographies as $key => $biography)
                        <tr data-entry-id="{{ $biography->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $biography->id ?? '' }}
                            </td>
                            <td>
                                {{ $biography->title ?? '' }}
                            </td>
                            <td>
                                {{ $biography->email ?? '' }}
                            </td>
                            <td>
                                {{ $biography->tiktok ?? '' }}
                            </td>
                            <td>
                                @if($biography->profile_image)
                                    <a href="{{ $biography->profile_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $biography->profile_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $biography->author->name ?? '' }}
                            </td>
                            <td>
                                @can('biography_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.biographies.show', $biography->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('biography_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.biographies.edit', $biography->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('biography_delete')
                                    <form action="{{ route('admin.biographies.destroy', $biography->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('biography_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.biographies.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Biography:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection