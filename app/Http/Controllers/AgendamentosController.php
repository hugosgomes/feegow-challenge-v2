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
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialtiesList = FeegowApi::getSpecialists();
        $professionalsList = FeegowApi::getProfessionals(247);
        $pacientsListSource = FeegowApi::getPacientsListSource();
        dd($pacientsListSource);
        return view('agendamentos.index', compact('agendamentos'));
    }
}
