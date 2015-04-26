<?php namespace App\Http\Controllers;

use App\Cita;
use App\Contacto;
use Input;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Cita $cita)
	{
        return view('contactos.index', compact('cita'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Cita $cita)
	{
        return view('contactos.create', compact('cita'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Cita $cita)
	{
        $input = Input::all();
        $input['cita_id'] = $cita->id;
        Contacto::create( $input );

        return Redirect::route('citas.show', $cita->slug)->with('message', 'Contacto created.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Cita $cita, Contacto $contacto)
	{
        return view('contactos.show', compact('cita', 'contacto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Cita $cita, Contacto $contacto)
	{
        return view('contactos.edit', compact('cita', 'contacto'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Cita $cita, Contacto $contacto)
	{
        $input = array_except(Input::all(), '_method');
        $contacto->update($input);

        return Redirect::route('citas.contactos.show', [$cita->slug, $contacto->slug])->with('message', 'Contacto updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Cita $cita, Contacto $contacto)
	{
        $contacto->delete();

        return Redirect::route('citas.show', $cita->slug)->with('message', 'Contacto deleted.');
	}

}
