<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;




class ArticleController extends Controller
{
    private $list = [
        ['title' => 'Controllertitle1', 'id' => 1, 'content' => 'content1'],
        ['title' => 'Controllertitle2', 'id' => 2, 'content' => 'content2']
    ];
    public function index()
    {
        // $data = Faker::create();
        // $array []= [
        //     'id' => $data->idate,
        //     'title' => $data->title,
        //     'body'=> $data->sentence,
        //     'created_at'=> $data->creditCardExpirationDate,
        //     'updated_at'=> $data->date_timestamp_get,
        // ];

        return response()->json(['data'=>$this->list]);
    }

    public function show($id)
    {
        return response()->json(['data'=>array_filter($this->list, function ($q) use ($id) {
            return $q['id'] == $id;
        })]);
    }
}
