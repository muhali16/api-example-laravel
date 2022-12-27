<?php

namespace App\Http\Controllers;

use App\Helpers\ApiFormatter;
use App\Models\Book;
use App\Http\Requests\PostBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Book::all();

        if($data){
            return ApiFormatter::createApi(200, "Success", $data);
        } else {
            return ApiFormatter::createApi(404, "Failed");
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PostBookRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostBookRequest $request)
    {
        $validateBook = $request->validated();
        $data = Book::create($validateBook);
        $book = Book::find($data->id)->get();

        if($book){
            return ApiFormatter::createApi(200, "Success", $book);
        } else {
            return ApiFormatter::createApi(400, "Failed");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Book::where("id", $id)->get();

        if(count($data) > 0){
            return ApiFormatter::createApi(200, "Success", $data);
        } else {
            return ApiFormatter::createApi(404, "Failed");
        }
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PostBookRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostBookRequest $request, $id)
    {
        $validateBook = $request->validated();
        $data = Book::where("id", $id)->update($validateBook);
        if($data){
            return ApiFormatter::createApi(200, "Success", $data);
        } else {
            return ApiFormatter::createApi(404, "Failed");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Book::where("id", $id)->delete();

        if($data) {
            return ApiFormatter::createApi(200, "Success");
        } else {
            return ApiFormatter::createApi(400, "Failed");
        }
    }
}
