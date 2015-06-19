<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Http\Requests\CreatePlaceRequest;
use App\Repository\PlaceRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;


class PlacesController extends Controller {

	/**
	 * @var PlaceRepository
	 */
	private $place;

	/**
	 * @var CreatePlaceRequest
	 */

	public function __construct(PlaceRepository $place){

		$this->place = $place;
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{

		if( $request->exists("state")){

		$places = $this->place->getByCityAndState($request->all());

		}else
		{
		  $places = $this->place->returnWithPaginate();
		}

		return view('places.index', ['places' => $places ]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('places.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param CreatePlaceRequest $request
	 * @return Response
	 */
	public function store(CreatePlaceRequest $request)
	{
		return $this->place->create($request->all());
//		return Input::all();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$place = $this->place->getById($id);
		$images = $place->images()->get();
		return view('places.show', ['place' => $place, 'images' => $images]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$place = $this->place->getById($id);
		return view('places.edit', ['place' => $place]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int $id
	 * @param CreatePlaceRequest $request
	 * @return Response
	 */
	public function update($id, CreatePlaceRequest $request)
	{
		$this->place->update($id, $request->all());
		return Redirect::back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $id;
	}

	public function updateImage($id, Request $request){

//		return $request->file('photo');
		$this->place->updateImage($id, $request->file('photo'));
		return Redirect::back();

	}

	public function getAssociatedPlaces(){

		$places = $this->place->getByUserId(Auth::user()->id);
		return view("users.home", ["places" => $places]);
	}

}
