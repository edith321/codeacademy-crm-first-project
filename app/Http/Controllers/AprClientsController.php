<?php namespace App\Http\Controllers;

use App\models\AprClients;
use App\models\AprProjects;
use Illuminate\Routing\Controller;

class AprClientsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /aprcliients
	 *
	 * @return Response
	 */
	public function index()
	{


        $configuration = [];
        $configuration["clients"] = AprClients::with(['projectsData'])->get();
	    $configuration['totalCount'] = sizeof($configuration['clients']);

	    return view('content.clients', $configuration);

    }

	/**
	 * Show the form for creating a new resource.
	 * GET /aprcliients/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aprcliients
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /aprcliients/{id}
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
	 * GET /aprcliients/{id}/edit
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
	 * PUT /aprcliients/{id}
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
	 * DELETE /aprcliients/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}