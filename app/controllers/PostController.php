<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 11:44 AM
 */

class PostController extends BaseController{

    public function index(){
        $posts = Post::all();
        return View::make('posts.index')->with('posts', $posts);
    }

    public function add(){
        return View::make('posts.add');
    }

    public function create(){
        Post::create(Input::all());
        Session::flash('flash_message', 'Post successfully added!');
        return Redirect::route('posts');
    }


    public function edit($id){
        $post = Post::find($id);
        return View::make('posts.edit')->with('post', $post);
    }

    public function update($id){
        $post = Post::findOrFail($id);
        $post->fill(Input::all())->save();
        Session::flash('flash_message', 'Post successfully updated!');
        return Redirect::route('posts');
    }

    public function delete($id){
        Post::find($id)->delete($id);
        Session::flash('flash_message', 'Post successfully deleted');
        return Redirect::back();
    }
} 