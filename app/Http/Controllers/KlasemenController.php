<?php

namespace App\Http\Controllers;

use App\Klasemen;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class KlasemenController extends Controller
{
    public function index(Request $request)
    {
        return Klasemen::orderBy('rank', 'asc')->get();
    }

    public function create(Request $request)
    {
        try {
            $this->validate($request, [
                'university' => 'bail|required',
                'rank' => 'bail|required',
                'gold' => 'bail|required',
                'silver' => 'bail|required',
                'bronze' => 'bail|required',
            ]);
            $data = $request->all();
            return Klasemen::create($data);
        } catch (ValidationException $th) {
            return response()->json([
                'status' => 'error',
                'errors' => $th->errors()
            ]);
        }
    }

    public function delete($id)
    {
        return Klasemen::destroy($id);
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $request->all();

            $item = Klasemen::findOrFail($id);

            $item->update($data);

            return response()->json([
                'status' => 'success'
            ]);
        } catch (ValidationException $th) {

            return response()->json([
                'status' => 'error',
                'error' => $th->errors()
            ], 423);
        }
    }
}
