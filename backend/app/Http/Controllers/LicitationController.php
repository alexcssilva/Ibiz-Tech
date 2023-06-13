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
}
