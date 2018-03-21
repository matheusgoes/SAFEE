<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index() {
           $data['breadcrumbs'] = ["", "Dashboard"];
           $data['tasks'] = [
                   [
                           'name' => 'Design New Dashboard',
                           'progress' => '87',
                           'color' => 'danger'
                   ],
                   [
                           'name' => 'Create Home Page',
                           'progress' => '76',
                           'color' => 'warning'
                   ],
                   [
                           'name' => 'Some Other Task',
                           'progress' => '32',
                           'color' => 'success'
                   ],
                   [
                           'name' => 'Start Building Website',
                           'progress' => '56',
                           'color' => 'info'
                   ],
                   [
                           'name' => 'Develop an Awesome Algorithm',
                           'progress' => '10',
                           'color' => 'success'
                   ]
           ];
           //return view('dashboard')->with($data);
           return view('screens.dashboard', ["page_title" => "Dashboard"])->with($data);
     }
     /**
      * Show contracts screen
      * @var [type]
      */
     public function contratos(){
       $data['breadcrumbs'] = ["", "Contratos"];
       return view('screens.contratos', ["page_title" => "Contratos"])->with($data);
     }

     /**
      * Show faturas screen
      */
     public function faturas(){
       $data['breadcrumbs'] = ["", "Faturas"];
       return view('screens.faturas', ["page_title" => "Faturas"])->with($data);
     }

     /**
      * Show reactive relatory
      */
     public function avaliacao_reativo()
     {
       $data['breadcrumbs'] = ["", "Relatórios", "Avaliação de Reativo"];
       return view('screens.relatorios.reativo', ["page_title" => "Avaliação de Reativo"])->with($data);
     }

     /**
      * Show demand reduction screen
      */
     public function reducao_demanda()
     {
       $data['breadcrumbs'] = ["", "Relatórios", "Redução de Demanda"];
       return view('screens.relatorios.reducao_demanda', ["page_title" => "Relatório de Redução de Demanda"])->with($data);
     }

     /**
      * Show ultrapassagem de demanda
      */
     public function ultrapassagem_demanda()
     {
       $data['breadcrumbs'] = ["", "Relatórios", "Ultrapassagem de Demanda"];
       return view('screens.relatorios.ultrapassagem_demanda', ["page_title" => "Relatório de Ultrapassagem de Demanda"])->with($data);
     }

     /**
      * Show Analise Tarifária
      */
     public function analise_tarifaria()
     {
       $data['breadcrumbs'] = ["", "Relatórios", "Análise Tarifária"];
       return view('screens.relatorios.analise_tarifaria', ["page_title" => "Análise Tarifária"])->with($data);
     }

     /**
      * Show Tarifa Minima
      */
     public function tarifa_minima()
     {
       $data['breadcrumbs'] = ["", "Relatórios", "Tarifa Mínima"];
       return view('screens.relatorios.tarifa_minima', ["page_title" => "Tarifa Mínima"])->with($data);
     }
}
