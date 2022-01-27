<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SecurityFeature;

class SecurityFeaturesController extends Controller
{
    public function index()
    {
        $securityfeatures = SecurityFeature::all();

        return view('securityfeatures.index', ['securityfeatures' => $securityfeatures]);
    }

    public function create()
    {
        return view('securityfeatures.create');
    }

    public function store()
    {
        request()->validate([
            'featureid' => 'required',
            'featurename' => 'required',
        ]);

        SecurityFeature::create([
            'featureid' => request('featureid'),
            'featurename' => request('featurename'),
        ]);

        return redirect('/securityfeatures');
    }

    public function edit(SecurityFeature $securityfeature)
    {
        return view('securityfeatures.edit', ['securityfeature' => $securityfeature]);
    }

    public function update(SecurityFeature $securityfeature)
    {
        request()->validate([
            'featureid' => 'required',
            'featurename' => 'required',
        ]);

        $securityfeature->update([
            'featureid' => request('featureid'),
            'featurename' => request('featurename'),
        ]);

        return redirect('/securityfeatures');
    }

    public function destroy(SecurityFeature $securityfeature)
    {
        $securityfeature->delete();

        return redirect('/securityfeatures');
    }
}
