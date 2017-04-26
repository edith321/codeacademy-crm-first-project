<?php namespace App\Http\Controllers;

use App\models\AprProjects;
use Illuminate\Routing\Controller;

class AprProjectsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /aprprojects
	 *
	 * @return Response
	 */
	public function index()
	{
        //return AprProjects::with(['clientsData'])->get();

       $configuration = [];
        $configuration["projects"] = AprProjects::with(['clientsData', 'projectsTypesPersonsConnections'])->get()->toArray();
        //$configuration['totalCount'] = sizeof($configuration['clients']);

        return view('content.projects', $configuration);

    }

	/**
	 * Show the form for creating a new resource.
	 * GET /aprprojects/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /aprprojects
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /aprprojects/{id}
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
	 * GET /aprprojects/{id}/edit
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
	 * PUT /aprprojects/{id}
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
	 * DELETE /aprprojects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}