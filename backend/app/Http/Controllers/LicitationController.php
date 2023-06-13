<?php

namespace App\Http\Controllers;

use App\Models\Lic;
use Illuminate\Http\Request;

class LicitationController extends Controller
{
    public function allLicitation()
    {
        $licitations = Lic::all();
        return response()->json([
            'licitations' => $licitations,
            'message' => 'All successfully licitations',
            'code' => 200,
        ]);
    }

    public function detailIdLicitation($id)
    {
        $licitation = Lic::find($id);

        if (!$licitation) {
            return response()->json([
                'message' => 'Licitation not found',
                'code' => 404
            ], 404);
        }

        return response()->json($licitation);
    }
}
