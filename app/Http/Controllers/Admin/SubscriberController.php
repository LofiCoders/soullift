<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Gate;
use Symfony\Component\HttpFoundation\Response;

class SubscriberController extends Controller
{
    public function __invoke()
    {
        abort_if(Gate::denies('subscriber_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $subscribers = Subscriber::all();

        return view('admin.subscribers.index', compact('subscribers'));
    }
}
