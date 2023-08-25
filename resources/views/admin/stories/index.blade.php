@extends('layouts.admin')
@section('content')
@can('story_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.stories.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.story.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.story.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Story">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.story.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.story.fields.title') }}
                        </th>
                       
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stories as $key => $story)
                        <tr data-entry-id="{{ $story->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $story->id ?? '' }}
                            </td>
                            <td>
                                {{ $story->title ?? '' }}
                            </td>
                            <td>
                                @can('story_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.stories.show', $story->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('story_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.stories.edit', $story->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('story_delete')
                                    <form action="{{ route('admin.stories.destroy', $story->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Story:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection