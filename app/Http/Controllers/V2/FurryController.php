<?php

namespace App\Http\Controllers\V2;

use App\Http\Controllers\Controller;
use App\Http\Resources\Furry;
use App\Http\Resources\FurryCollection;

class FurryController extends Controller
{
    private $hardcodedData;

    public function __construct()
    {
        $this->hardcodedData = collect([
            new Furry(['id' => 1, 'name' => 'Furry A']),
            new Furry(['id' => 2, 'name' => 'Furry B']),
            new Furry(['id' => 3, 'name' => 'Furry X']),
            new Furry(['id' => 4, 'name' => 'Furry Y']),
            new Furry(['id' => 5, 'name' => 'Furry Z']),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return FurryCollection|array|\Illuminate\Http\Response
     */
    public function index()
    {
        return new FurryCollection($this->hardcodedData);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->hardcodedData->where('id', $id)->first();
    }
}
