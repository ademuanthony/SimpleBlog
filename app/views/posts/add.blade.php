<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 12:03 PM
 */
 ?>
 @extends('shared.layout')
 @section('content')


   <h2>New post</h2>
   {{ Form::open(array('url' => 'posts/create')) }}

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