<?php
namespace App\Http\Controllers;

use App\Models\Accident;
use Illuminate\Http\Request;

class AccidentController extends Controller
{
    public function index()
    {
        return Accident::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'accidentRef' => 'required|string',
            'accidentTypeID' => 'required|integer',
            'accidentDate' => 'required|date',
            'companyID' => 'required|integer',
            'depotID' => 'required|integer',
            'personTypeID' => 'required|integer',
            'forename' => 'nullable|string',
            'surname' => 'nullable|string',
            'hasAnalysisCompleted' => 'required|boolean',
            'investigationDetails' => 'nullable|string',
            'accidentSignOffID' => 'nullable|integer',
            'SHAManagerSignOffID' => 'nullable|integer',
            'regionalMDSignOffID' => 'nullable|integer',
            'esgHeadSignOffID' => 'nullable|integer',
            'isDeleted' => 'required|boolean',
        ]);

        return Accident::create($validatedData);
    }

    public function show($id)
    {
        return Accident::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $accident = Accident::findOrFail($id);
        $validatedData = $request->validate([
            'accidentRef' => 'sometimes|required|string',
            'accidentTypeID' => 'sometimes|required|integer',
            'accidentDate' => 'sometimes|required|date',
            'companyID' => 'sometimes|required|integer',
            'depotID' => 'sometimes|required|integer',
            'personTypeID' => 'sometimes|required|integer',
            'forename' => 'nullable|string',
            'surname' => 'nullable|string',
            'hasAnalysisCompleted' => 'required|boolean',
            'investigationDetails' => 'nullable|string',
            'accidentSignOffID' => 'nullable|integer',
            'SHAManagerSignOffID' => 'nullable|integer',
            'regionalMDSignOffID' => 'nullable|integer',
            'esgHeadSignOffID' => 'nullable|integer',
            'isDeleted' => 'required|boolean',
        ]);

        $accident->update($validatedData);

        return $accident;
    }

    public function destroy($id)
    {
        $accident = Accident::findOrFail($id);
        $accident->delete();

        return response()->json(null, 204);
    }
}
