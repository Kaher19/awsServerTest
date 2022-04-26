<?php

namespace App\Http\Controllers;

use App\Http\Requests\AlumnoRequest;
use App\Models\Alumno;

class AlumnoController extends Controller
{

    private $alumnos;

    public function __construct(){
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->alumnos = Alumno::factory()->count(3)->make();
        return response()->json(
            $this->alumnos->jsonSerialize(), 200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AlumnoRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlumnoRequest $request)
    {
        $alumno = new Alumno($request->matricula,$request->nombre,$request->apellido);
        $this->alumnos[] = $alumno->toArray();
        $this->alumnos[] = $alumno->toArray();
        $this->alumnos[] = $alumno->toArray();
        $this->alumnos[] = $alumno->toArray();
        return response()->json(
            ['data' => $this->alumnos], 201
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AlumnoRequest $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlumnoRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
