<?php

namespace app\Repository;

use App\Place;
use Storage;

class PlaceRepository {


    public function getAll()
    {

        return Place::All();
    }

    public function returnWithPaginate($limit)
    {

        return Place::paginate($limit);
    }

    public function create($input)
    {

        $this->creation(new Place, $input);

    }

    public function getById($input)
    {

        return Place::findOrFail($input);
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
        Storage::delete(public_path() . "/images/" . $place->photo);
        $name = $this->createImage($input);
        $place->photo = $name;
        $place->save();

    }

    protected function createImage($photo){

            $name = $photo->getClientOriginalName();
            $photo->move(public_path() . "/images", $name);
            return $name;
    }
}

