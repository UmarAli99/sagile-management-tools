<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CodingStandard;

class CodingStandardsController extends Controller
{
    public function index()
    {
        $codingstandards = CodingStandard::all();

        return view('codingstandards.index', ['codingstandards' => $codingstandards]);
    }

    public function create()
    {
        return view('codingstandards.create');
    }

    public function store()
    {
        request()->validate([
            'codingid' => 'required',
            'featuretitle' => 'required',
        ]);

        CodingStandard::create([
            'codingid' => request('codingid'),
            'featuretitle' => request('featuretitle')
        ]);

        return redirect('/codingstandards');
    }

    public function edit(CodingStandard $codingstandard)
    {
        return view('codingstandards.edit', ['codingstandard' => $codingstandard]);
    }

    public function update(CodingStandard $codingstandard)
    {
        request()->validate([
            'codingid' => 'required',
            'featuretitle' => 'required',
        ]);

        $codingstandard->update([
            'codingid' => request('codingid'),
            'featuretitle' => request('featuretitle'),
        ]);

        return redirect('/codingstandards');
    }

    public function destroy(CodingStandard $codingstandard)
    {
        $codingstandard->delete();

        return redirect('/codingstandards');
    }
}
