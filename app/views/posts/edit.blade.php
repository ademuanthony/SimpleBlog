<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 12:02 PM
 */
  ?>
  @extends('shared.layout')
   @section('content')

   <h2>Manage post</h2>
   {{ Form::model($post, array('url' => 'posts/update/'.$post->id)) }}


    {{Form::input('hidden', 'id')}}

     <div class="form-group">
        {{ Form::label('title', 'Title:', ['class' => 'control-label']) }}
        {{ Form::text('title', null, ['class' => 'form-control']) }}
     </div>

     <div class="form-group">
        {{ Form::label('content', 'Body:', ['class' => 'control-label']) }}
        {{ Form::textarea('content', null, ['class' => 'form-control']) }}
     </div>

     {{ Form::submit('Create New Post', ['class' => 'btn btn-primary']) }}

    {{ Form::close() }}
   @stop