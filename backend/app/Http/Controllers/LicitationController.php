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

    public  function createLicitation(Request  $request)
    {
        try {
            $licitation  =  new  Lic();
            $licitation->nu_fase  =  $request->input('nu_fase');
            $licitation->nu_edital  =  $request->input('nu_edital');
            $licitation->modalidade  =  $request->input('modalidade');
            $licitation->data_abertura  =  $request->input('data_abertura');
            $licitation->nome_licitador  =  $request->input('nome_licitador');
            $licitation->cnpj_licitador  =  $request->input('cnpj_licitador');
            $licitation->prioridade  =  $request->input('prioridade');
            $licitation->objeto  =  $request->input('objeto');
            $licitation->save();

            return response()->json([
                'message'  =>  'Licitation created successfully',
                'code'  =>  201
            ]);
        } catch (\Exception  $error) {
            return response()->json([
                $error  =>  'Failed to create licitation',
                'code'  =>  500
            ]);
        }
    }
}
