<?php namespace App\Http\Controllers;

use App\models\AprProjectsLoginsConnections;
use Illuminate\Routing\Controller;

class AprProjectsLoginsConnectionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /aprprojectsloginsconnections
	 *
	 * @return Response
	 */
	public function index()
	{
        return AprProjectsLoginsConnections::with(['projectsLoginsData'])->get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /aprprojectsloginsconnections/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aprprojectsloginsconnections
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /aprprojectsloginsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /aprprojectsloginsconnections/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /aprprojectsloginsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /aprprojectsloginsconnections/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}