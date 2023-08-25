<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBiographyRequest;
use App\Http\Requests\UpdateBiographyRequest;
use App\Models\Biography;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class BiographyController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('biography_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $biographies = Biography::with(['author', 'media'])->get();

        return view('admin.biographies.index', compact('biographies'));
    }

    public function edit(Biography $biography)
    {
        abort_if(Gate::denies('biography_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $authors = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $biography->load('author');

        return view('admin.biographies.edit', compact('authors', 'biography'));
    }

    public function update(UpdateBiographyRequest $request, Biography $biography)
    {
        $biography->update($request->all());

        if ($request->input('profile_image', false)) {
            if (! $biography->profile_image || $request->input('profile_image') !== $biography->profile_image->file_name) {
                if ($biography->profile_image) {
                    $biography->profile_image->delete();
                }
                $biography->addMedia(storage_path('tmp/uploads/'.basename($request->input('profile_image'))))->toMediaCollection('profile_image');
            }
        } elseif ($biography->profile_image) {
            $biography->profile_image->delete();
        }

        return redirect()->route('admin.biographies.index');
    }

    public function show(Biography $biography)
    {
        abort_if(Gate::denies('biography_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $biography->load('author');

        return view('admin.biographies.show', compact('biography'));
    }

    public function destroy(Biography $biography)
    {
        abort_if(Gate::denies('biography_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $biography->delete();

        return back();
    }

    public function massDestroy(MassDestroyBiographyRequest $request)
    {
        $biographies = Biography::find(request('ids'));

        foreach ($biographies as $biography) {
            $biography->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('biography_create') && Gate::denies('biography_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model = new Biography();
        $model->id = $request->input('crud_id', 0);
        $model->exists = true;
        $media = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
