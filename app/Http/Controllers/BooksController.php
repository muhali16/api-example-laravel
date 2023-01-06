<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\BookResource;
use App\Http\Requests\PostBookRequest;
use App\Traits\HttpResponse;

class BooksController extends Controller
{
    use HttpResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::all();
        return BookResource::collection($book);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostBookRequest $request)
    {
        $validate = $request->validated();
        $book = Book::create($validate);
        if(!$book) {
            return $this->error($validate, "Failed store the book.", 400);
        }

        return $this->success(new BookResource($book), "Success store the book", 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return $this->success(new BookResource($book), "Success show the book");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(PostBookRequest $request, Book $book)
    {
        $validate = $request->validated();
        $bookUpdate = $book->update($validate);
        if(!$bookUpdate){
            return $this->error($validate, "Failed update the book.", 400);
        }

        return $this->success(new BookResource($book), "Success update the book.", 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return $this->success(null, "Success delete the book.", 204);
    }
}
