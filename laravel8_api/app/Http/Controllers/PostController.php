<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        $response = [
            'message' => 'List post order by time',
            'data' => $post
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //set validation
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required',
        ]);
        //response error validation
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        //save to database
        $post = Post::create([
            'title'   => $request->title,
            'content' => $request->content
        ]);
        //success save to database
        if($post)
        {
            return response()->json([
                'success' => true,
                'message' => 'Post Created',
                'data'    => $post
            ], 201);
        }

        //failed save to database
        return response()->json([
            'success' => false,
            'message' => 'Post Failed to Save',
        ], 409);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find post by ID
        $post = Post::findOrfail($id);
        //make response JSON
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data'    => $post
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id); 
        //set validation
         $validator = Validator::make($request->all(),[
            'title' => 'required',
            'content' => 'required',
        ]);
        //response error validation
        if($validator->fails()){
            return response()->json($validator->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
       
        if($post)
        {
            //update post
            $post->update([
                'title' => $request->title,
                'content' => $request->content
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Post Updated',
                'data' => $post
            ], 200);
        }
        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Post Not Found',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //find post by ID
        $post = Post::findOrfail($id);
        if($post){
            //delete post
            $post->delete();
            
            return response()->json([
                'success' => true,
                'message' => 'Post Deleted'
            ],200);
        }

        //data post not found
        return response()->json([
            'success' => false,
            'message' => 'Post Not Found',
        ], 404);
    }
}
