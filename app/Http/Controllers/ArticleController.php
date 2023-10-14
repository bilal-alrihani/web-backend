<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Faker::create();
        $array []= [
            'id' => $data->idate,
            'title' => $data->title,
            'body'=> $data->sentence,
            'created_at'=> $data->creditCardExpirationDate,
            'updated_at'=> $data->date_timestamp_get,
        ];
        return $array;
    }

    public function show($id)
    {
    }
}
