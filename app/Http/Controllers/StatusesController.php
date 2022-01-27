<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusesController extends Controller
{
    public function index()
    {
        $statuses = Status::all();

        return view('statuses.index', ['statuses' => $statuses]);
    }

    public function create()
    {
        return view('statuses.create');
    }

    public function store()
    {
        request()->validate([
            'statusname' => 'required',
            'slugname' => 'required',
            'order' => 'required',
            'userid' => 'required',
        ]);

        Status::create([
            'statusname' => request('statusname'),
            'slugname' => request('slugname'),
            'order' => request('order'),
            'userid' => request('userid'),
        ]);

        return redirect('/statuses');
    }

    public function edit(Status $status)
    {
        return view('statuses.edit', ['status' => $status]);
    }

    public function update(Status $status)
    {
        request()->validate([
            'statusname' => 'required',
            'slugname' => 'required',
            'order' => 'required',
            'userid' => 'required',
        ]);

        $status->update([
            'statusname' => request('statusname'),
            'slugname' => request('slugname'),
            'order' => request('order'),
            'userid' => request('userid'),
        ]);

        return redirect('/statuses');
    }

    public function destroy(Status $status)
    {
        $status->delete();

        return redirect('/statuses');
    }
}
