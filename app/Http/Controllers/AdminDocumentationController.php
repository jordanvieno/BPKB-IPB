<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;

class AdminDocumentationController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'admin']);
    }

    /**
     * Display a listing of the documentations.
     */
    public function index()
    {
        $documentations = \App\Models\Documentation::orderBy('date', 'desc')->get();
        return view('admin.dokumentasi.index', compact('documentations'));
    }

    /**
     * Show the form for creating a new documentation.
     */
    public function create()
    {
        return view('admin.dokumentasi.create');
    }

    /**
     * Store a newly created documentation in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string',
            'date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('description', 'date');

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('documentations', 'public');
            $data['photo_path'] = $photoPath;
        }

        Documentation::create($data);

        return redirect()->route('admin.dokumentasi.index')->with('success', 'Documentation created successfully.');
    }

    /**
     * Display the specified documentation.
     */
    public function show(Documentation $documentation)
    {
        return view('admin.dokumentasi.show', compact('documentation'));
    }

    /**
     * Show the form for editing the specified documentation.
     */
    public function edit(Documentation $documentation)
    {
        return view('admin.dokumentasi.edit', compact('documentation'));
    }

    /**
     * Update the specified documentation in storage.
     */
    public function update(Request $request, Documentation $documentation)
    {
        $request->validate([
            'description' => 'required|string',
            'date' => 'required|date',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only('description', 'date');

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('documentations', 'public');
            $data['photo_path'] = $photoPath;
        }

        $documentation->update($data);

        return redirect()->route('admin.dokumentasi.index')->with('success', 'Documentation updated successfully.');
    }

    /**
     * Remove the specified documentation from storage.
     */
    public function destroy(Documentation $documentation)
    {
        $documentation->delete();

        return redirect()->route('admin.dokumentasi.index')->with('success', 'Documentation deleted successfully.');
    }
}
