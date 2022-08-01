<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\Recomendacion;
use Illuminate\Http\Request;
use DB;
//use Input;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $recomendacion = $request->recomendacion;
        $resultado = $request->resultado;
    
        $recomendacion = (json_decode($recomendacion));
        foreach($recomendacion as $rc){
            foreach($rc as $c){
                $rmd[] = $c->recomendacion;
            }
        }

        //dd($rmd);
       
        $obj = 0;
        return view('resultado',compact('rmd','resultado' ));
    }

    public function load(Request $request)
    {
        $recomendacion = $request->recomendacion;
        $resultado = $request->resultado;
    
        $recomendacion = (json_decode($recomendacion));
        foreach($recomendacion as $rc){
            foreach($rc as $c){
                $rmd[] = $c->recomendacion;
            }
        }

        //dd($rmd);
       
        $obj = 0;
        return view('load',compact('rmd','resultado' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->correcta);
       
        $i = 1; $c = 0;
        foreach ($request->correcta as $cr) {
            $pregunta[]=  [ 
                'pregunta_id' => $i,
                'correcta' => $cr,
            ];
            if($cr == 1){ //si es correcta
               $c++;
            } else { // es incorrecta
                /*$recomendacion[] = Recomendacion::select('recomendacion')
                ->where('pregunta_id', '=', $i)
                ->get(); */
               // $recomendacion[] = Recomendacion::where('pregunta_id', '=', $i)->get(); 
                 $recomendacion[] = DB::table('recomendacions')
               ->where('recomendacions.pregunta_id', $i)
               ->select('recomendacions.recomendacion')->get(); 
            }
            $i++;
        } 

        $recomendacion = (json_encode($recomendacion));

        $test = new Test;
        if ($test->save()) {
            $pregunta_ids = $pregunta;
            $test->pregunta()->sync($pregunta_ids);           
        }

        // Redireccionar según cantidad de repuestas correctas 

        if($c <= 2){ //critico
           $resultado = 1;           
        } elseif($c>2 && $c<=4) {//moderado
            $resultado = 2; 
        }else{ //correcto
            $resultado = 3;    
        }

        //return redirect()->route('item.show', ['id' => $item->id]);

       return redirect()->route('load',compact('resultado', 'recomendacion'));

        //return view('repuesta.resultado',compact('resultado', 'recomendacion'));
        //$recomendacion = 4;

        //return redirect()->route('resultado', array('recomendacion' => $recomendacion));
       
        //return view('resultado',compact('resultado', 'recomendacion' ));

      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
