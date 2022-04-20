<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;
use App\Models\Category;


class Postcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //el metodo get funciona para obtener todos los datos de la tabla funciona como
        // select * from table
    #$categories = Category::get();

    //con la funcion pluck sirve para obtener solo algunos campos de la base de datos
    //es lo mismo como select campo1, campo2 from table
    $categories = Category::pluck('id','title');
    //dd($categories);
    echo view('Dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //
         /* echo request("title");
        echo $request->input("slug"); */
        //dd();

        $validated = $request->validate([
            'title'=>"required|min:5|max:500",
            'slug'=>"required|min:5|max:500",
            'content'=>"required|min:7",
            'category_id'=>"required|integer",
            'description'=>"required|min:7",
            'posted'=>"required"
        ]);

        $validated = Validator::make($request->all(),StoreRequest::myRules());
        dd($validated);
        /* 
        $data = array_merge($request->all(), ['image'=>''] ); */
        //dd($data);
        Post::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
