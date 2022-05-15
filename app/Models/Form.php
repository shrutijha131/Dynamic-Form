<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;


     public static function getJson(){
        $json =   [
             "fields"=>[
                 [
                     "label"=>"Date of Birth (YYYY-MM-DD)",
                     "key"=>"birthday",
                     "isRequired"=>true,
                     "order"=> 1,
                     "isReadonly"=>false,
                     "type"=>"date"
                 ],
                 [
                    "label"=>"Sex",
                    "key"=>"sex",
                    "items"=>[
                        [
                            "value"=>"male",
                            "text"=>"Male"
                        ],
                        [
                            "value"=>"female",
                            "text"=>"Female"
                        ]
                        ],
                    "isRequired"=>true,
                    "order"=> 2,
                    "isReadonly"=>false,
                    "type"=>"dropdown"
                        ],
                [
                    "label"=>"Weight",
                    "key"=>"weight",
                    "isRequired"=>true,
                    "order"=> 3,
                    "isReadonly"=>false,
                    "type"=>"number",
                    "unit"=>"kg"
                ],
             ]
            ]; 

         return $json;
     }
}
