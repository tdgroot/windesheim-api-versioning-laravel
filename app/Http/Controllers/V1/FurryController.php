<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;

class FurryController extends Controller
{
    private $hardcodedData = [
        [
            'id' => 1,
            'name' => 'Furry A'
        ],
        [
            'id' => 2,
            'name' => 'Furry X'
        ]
    ];

    /**
     * Display a listing of the resource.
     *
     * @return array|\Illuminate\Http\Response
     */
    public function index()
    {
        return $this->hardcodedData;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return collect($this->hardcodedData)->where('id', $id)->first();
    }
}
