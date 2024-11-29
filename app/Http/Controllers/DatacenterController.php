<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datacenter;

class DatacenterController extends Controller
{
    public function index()
    {
        // Fetch all datacenters to display for selection
        $datacenters = Datacenter::all();

        return view('datacenters.index', compact('datacenters'));
    }

    public function setDatacenter(Request $request)
    {
        $request->validate([
            'datacenter' => 'required|exists:datacenters,id',
        ]);

        // Save selected datacenter in session
        $datacenter = Datacenter::find($request->datacenter);
        session(['datacenter' => $datacenter->id]);

        return redirect()->route('dashboard', ['datacenter' => $datacenter->id]);
    }
}
