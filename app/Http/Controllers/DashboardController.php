<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use app\Models\License; // Correct capitalization for namespace

class DashboardController extends Controller
{
    public function index($datacenter)
    {
        $licenses = License::where('datacenter_id', $datacenter)->get();

        return Inertia::render('Dashboard', [
            'licenses' => $licenses
        ]);
    }

    public function create()
    {
        return Inertia::render('Licenses/Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'equipment_type' => 'required',
            'model' => 'required',
            'serial_number' => 'required',
            'license_type' => 'required',
            'expiration_date' => 'required|date',
        ]);

        License::create($request->all());

        return redirect()->back()->with('success', 'License added successfully.');
    }

    public function edit($id)
    {
        $license = License::findOrFail($id);

        return Inertia::render('Licenses/Edit', [
            'license' => $license
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'equipment_type' => 'required',
            'model' => 'required',
            'serial_number' => 'required',
            'license_type' => 'required',
            'expiration_date' => 'required|date',
        ]);

        $license = License::findOrFail($id);
        $license->update($request->all());

        return redirect()->back()->with('success', 'License updated successfully.');
    }

    public function destroy($id)
    {
        $license = License::findOrFail($id);
        $license->delete();

        return redirect()->back()->with('success', 'License deleted successfully.');
    }
}
