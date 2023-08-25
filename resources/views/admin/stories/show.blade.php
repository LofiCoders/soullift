@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.story.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.stories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.story.fields.id') }}
                        </th>
                        <td>
                            {{ $story->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.story.fields.title') }}
                        </th>
                        <td>
                            {{ $story->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.story.fields.body') }}
                        </th>
                        <td>
                            {{ $story->body }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.story.fields.featured_image') }}
                        </th>
                        <td>
                            @if($story->featured_image)
                                <a href="{{ $story->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $story->featured_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.stories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection