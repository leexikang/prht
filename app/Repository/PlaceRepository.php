<?php

namespace App\Repository;

use App\Place;
use File;
use Illuminate\Pagination\LengthAwarePaginator;

class PlaceRepository {


    public function getAll()
    {
    }

    public function returnWithPaginate()
    {
        return Place::with('user')->paginate(10);
    }

    public function create($input)
    {

        $this->creation(new Place, $input);

    }

    public function getById($input)
    {

        return Place::findOrFail($input);
    }

    public  function getByUserId($id){

        return Place::where("user_id" , $id)->with('user')->paginate(10);
    }
    public function update($id, $input)
    {

        $this->creation($this->getById($id), $input);

    }

    protected function creation(Place $place, $input)
    {

        $place->name = $input['name'];
        $place->address = $input['address'];
        $place->description = $input['description'];
        $place->state = $input['state'];
        $place->city = $input['city'];
        $place->user_id = 11; // *** sub ****

        if (isset($input['photo']))
        {
            $place->photo = $this->createImage($input['photo']);
        }

        $place->save();
    }

    public function updateImage($id, $input){

        $place = $this->getById($id);
        File::delete(public_path() . "/images/" ,$place->photo);
        $place->photo = $this->createImage($input);
        $place->save();

    }

    protected function createImage($photo){

            $name = $photo->getClientOriginalName();
            $photo->move(public_path() . "/images", $name);
            return $name;
    }

    public function getByCityAndState($input){

        $state = $input['state'];
        $city = $input['city'];

        if($city == "All"){

            return Place::where('state', $state)->with('user')->paginate(10);
        }
        return Place::stateCity($state, $city)->with('user')->paginate(10);
    }
}

