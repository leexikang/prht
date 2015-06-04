<?php

namespace app\Repository;
use App\Image;


class ImageRepository {

    /**
     * @param $inputs Symfony upload file object
     */
    public function create($inputs){


        foreach($inputs as $input){

            $images = new Image();
            $name = $input->getClientOriginalName();
            $input->move(public_path() . "/images", $name);
            $images->image = $name;
            $images->place_id = 1; //sub
            $images->save();

        }



    }
}