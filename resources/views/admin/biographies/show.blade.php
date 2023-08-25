@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.show') }} {{ trans('cruds.biography.title') }}
        </div>

        <div class="card-body">
            <div class="form-group">
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.biographies.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
                <table class="table table-bordered table-striped">
                    <tbody>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.id') }}
                            </th>
                            <td>
                                {{ $biography->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.title') }}
                            </th>
                            <td>
                                {{ $biography->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.description') }}
                            </th>
                            <td>
                                {{ $biography->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.email') }}
                            </th>
                            <td>
                                {{ $biography->email }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.instagram') }}
                            </th>
                            <td>
                                {{ $biography->instagram }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.facebook') }}
                            </th>
                            <td>
                                {{ $biography->facebook }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.youtube') }}
                            </th>
                            <td>
                                {{ $biography->youtube }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.twitter') }}
                            </th>
                            <td>
                                {{ $biography->twitter }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.tiktok') }}
                            </th>
                            <td>
                                {{ $biography->tiktok }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.profile_image') }}
                            </th>
                            <td>
                                @if ($biography->profile_image)
                                    <a href="{{ $biography->profile_image->getUrl() }}" target="_blank"
                                        style="display: inline-block">
                                        <img src="{{ $biography->profile_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.biography.fields.author') }}
                            </th>
                            <td>
                                {{ $biography->author->name ?? '' }}
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <a class="btn btn-default" href="{{ route('admin.biographies.index') }}">
                        {{ trans('global.back_to_list') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
