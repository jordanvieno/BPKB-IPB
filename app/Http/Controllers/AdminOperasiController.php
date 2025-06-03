<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\Request;

class AdminOperasiController extends Controller
{
    // Show the operasi page with current numbers
public function index()
    {
        // Retrieve all operasi records
        $operations = Operation::all();

        \Log::info('AdminOperasiController@index operations:', $operations->toArray());

        // Prepare data and maxValues arrays
        $data = [];
        $maxValues = [];
        foreach ($operations as $operation) {
            $data[$operation->category] = $operation->value;
            $maxValues[$operation->category] = $operation->max_value;
        }

        return view('admin.operasi', compact('data', 'maxValues'));
    }

    // Handle update form submission
public function update(Request $request)
    {
        \Log::info('AdminOperasiController@update called');
        \Log::info('Request data: ', $request->all());

        // Retrieve all operasi records
        $operations = Operation::all();

        // Prepare validation rules based on max_value
        $rules = [];
        foreach ($operations as $operation) {
            $rules[$operation->category] = 'required|integer|min:0|max:' . $operation->max_value;
        }
        $validated = $request->validate($rules);

        \Log::info('Validated data: ', $validated);

        // Update operasi values in database
        foreach ($validated as $category => $value) {
            $updated = Operation::where('category', $category)->update(['value' => $value]);
            \Log::info("Updated category: $category with value: $value, result: $updated");
        }

        return redirect()->route('admin.operasi.index')->with('success', 'Data updated successfully.');
    }

    // API method to return operasi data as JSON
    public function getOperasiData()
    {
        $operations = Operation::all();

        $data = [];
        foreach ($operations as $operation) {
            $data[$operation->category] = $operation->value;
        }

        return response()->json($data);
    }
}
