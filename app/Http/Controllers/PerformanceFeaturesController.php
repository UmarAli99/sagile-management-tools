<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerformanceFeature;

class PerformanceFeaturesController extends Controller
{
    public function index()
    {
        $performancefeatures = PerformanceFeature::all();

        return view('performancefeatures.index', ['performancefeatures' => $performancefeatures]);
    }

    public function create()
    {
        return view('performancefeatures.create');
    }

    public function store()
    {
        request()->validate([
            'featureid' => 'required',
            'featurename' => 'required',
        ]);

        PerformanceFeature::create([
            'featureid' => request('featureid'),
            'featurename' => request('featurename'),
        ]);

        return redirect('/performancefeatures');
    }

    public function edit(PerformanceFeature $performancefeature)
    {
        return view('performancefeatures.edit', ['performancefeature' => $performancefeature]);
    }

    public function update(PerformanceFeature $performancefeature)
    {
        request()->validate([
            'featureid' => 'required',
            'featurename' => 'required',
        ]);

        $performancefeature->update([
            'featureid' => request('featureid'),
            'featurename' => request('featurename'),
        ]);

        return redirect('/performancefeatures');
    }

    public function destroy(PerformanceFeature $performancefeature)
    {
        $performancefeature->delete();

        return redirect('/performancefeatures');
    }
}
