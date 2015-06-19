<?php

namespace App\Repository;
use App\User;

class UserRepository {


    public function getPlaces($id){
        return User::find($id)->with('places')->paginate(10);

    }
}