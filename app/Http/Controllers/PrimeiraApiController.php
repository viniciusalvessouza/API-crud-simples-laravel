<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrimeiraApiRequest;
use App\Models\PrimeiraApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrimeiraApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = PrimeiraApi::all();
        return response()->json([
            'status'=>200,
            'data'=>$dados
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrimeiraApiRequest $request)
    {
        //dd($request->all());
        $dados = PrimeiraApi::create($request->all());
        
        return response()->json( [
            'status'=>true,
            'message'=>'Dados armazenados com sucesso',
            'data'=>$dados
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  indice $id 
     * @return \Illuminate\Http\Response
     */
    //\App\Models\PrimeiraApi  $primeiraApi
    public function show($id)
    {   
        $dados = PrimeiraApi::all()->find($id);
        return [
            'status'=>200,
            'data'=>$dados
        ];     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PrimeiraApi  $primeiraApi
     * @return \Illuminate\Http\Response
     */
    public function update(StorePrimeiraApiRequest $request,$id)
    {
        $dados = PrimeiraApi::all()->find($id);
        $dados->update($request->all());
        //$id;//$request->all();//$primeiraApi->update($request->all());
        //$data = PrimeiraApi::all()->find($id);

        // dd($primeiraApi);
        return response()->json([
            'status'=>true,
            'message'=>'Dados atualizados com sucesso',
            'data' => $request->all()
        ],200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PrimeiraApi  $primeiraApi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dados = PrimeiraApi::all()->find($id);
        $dados->destroy($id);
        return [
            'status'=>200,
            'message'=>'Dado Destruido',
            'data'=>''
        ];        
    }
}
