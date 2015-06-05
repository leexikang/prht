<?php

namespace app\Repository;
use App\Place;
use App\User;

class PlaceRepository {


    public function getAll(){

        return Place::All();
    }

    public function returnWithPaginate($limit){

        return Place::paginate($limit);
    }

     public function create($input){

         $place = new Place();
         $place->name = $input['name'];
         $place->address = $input['address'];
         $place->description = $input['description'];
         $place->state = $input['state'];
         $place->city = $input['city'];
         $place->user_id = 11; // *** sub ****

         if($photo = $input['photo']){

             $name = $photo->getClientOriginalName();
             $photo->move(public_path() . "/images", $name);
             $place->photo = $name;
         }

         $place->save();

         return $input;

    }

    public function getById($input){

        return Place::findOrFail($input);
    }

}