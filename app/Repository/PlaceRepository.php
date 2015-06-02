<?php

namespace app\Repository;
use App\Place;

class PlaceRepository {


    public function getAll(){

        return Place::All();
    }

    public function returnWithPaginate($limit){

        return Place::paginate($limit);
    }

}