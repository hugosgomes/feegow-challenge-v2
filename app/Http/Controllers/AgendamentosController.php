<?php

namespace App\Http\Controllers;

use App\Api\FeegowApi;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class AgendamentosController.
 *
 * @package namespace App\Http\Controllers;
 */
class AgendamentosController extends Controller
{
    public function index()
    {
        $specialtiesList = FeegowApi::getSpecialists();
        $pacientsListSource = FeegowApi::getPacientsListSource();
        return view('agendamentos.index', compact('specialtiesList', 'pacientsListSource'));
    }

    public function getProfessionals($unity_id){
        $professionals = FeegowApi::getProfessionals($unity_id);
        return json_encode($professionals);
    }
}
