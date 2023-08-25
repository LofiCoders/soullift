<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyStoryRequest;
use App\Http\Requests\StoreStoryRequest;
use App\Http\Requests\UpdateStoryRequest;
use App\Models\Story;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class StoryController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('story_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $stories = Story::with(['media'])->get();

        return view('admin.stories.index', compact('stories'));
    }

    public function create()
    {
        abort_if(Gate::denies('story_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stories.create');
    }

    public function store(StoreStoryRequest $request)
    {
        $story = Story::create($request->all());

        if ($request->input('featured_image', false)) {
            $story->addMedia(storage_path('tmp/uploads/'.basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $story->id]);
        }

        return redirect()->route('admin.stories.index');
    }

    public function edit(Story $story)
    {
        abort_if(Gate::denies('story_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stories.edit', compact('story'));
    }

    public function update(UpdateStoryRequest $request, Story $story)
    {
        $story->update($request->all());

        if ($request->input('featured_image', false)) {
            if (! $story->featured_image || $request->input('featured_image') !== $story->featured_image->file_name) {
                if ($story->featured_image) {
                    $story->featured_image->delete();
                }
                $story->addMedia(storage_path('tmp/uploads/'.basename($request->input('featured_image'))))->toMediaCollection('featured_image');
            }
        } elseif ($story->featured_image) {
            $story->featured_image->delete();
        }

        return redirect()->route('admin.stories.index');
    }

    public function show(Story $story)
    {
        abort_if(Gate::denies('story_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.stories.show', compact('story'));
    }

    public function destroy(Story $story)
    {
        abort_if(Gate::denies('story_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $story->delete();

        return back();
    }

    public function massDestroy(MassDestroyStoryRequest $request)
    {
        $stories = Story::find(request('ids'));

        foreach ($stories as $story) {
            $story->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('story_create') && Gate::denies('story_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model = new Story();
        $model->id = $request->input('crud_id', 0);
        $model->exists = true;
        $media = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
