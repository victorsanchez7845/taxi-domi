<?php

namespace App\Http\Controllers\Api\Autocomplete;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Traits\ApiTrait;

class AutocompleteController extends Controller
{
    use ApiTrait;

    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'keyword' => 'required|min:3|max:35',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => [
                    'code' => 'required_params',
                    'message' => $validator->errors()->all()
                ]
            ], 422);
        }

        $destination_id = 3; // Punta Cana / República Dominicana

        $data = ApiTrait::autocomplete(
            $request->keyword,
            $destination_id
        );

        return response()->json($data, 200);
    }
}