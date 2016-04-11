<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 11:46 AM
 */
 ?>
 @extends('shared.layout')

 @section('content')

 @include('shared.alert')

 @foreach($posts as $post)
    <h3><a href="{{URL::to('read', $post->id)}}">{{$post->title}}</a> </h3>
    <p>{{$post->content}}</p>
    <p>
    {{ Form::open(array('url' => 'posts/delete/'.$post->id, 'class' => 'form-inline')) }}
        <a href="{{URL::to('posts/edit', $post->id)}}" class="btn btn-primary">Edit</a> |

        {{ Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick' =>
        'confirm("This post will be permanently deleted! Do you want to continue?")']) }}
   {{ Form::close() }}
     </p>
    <hr/>
 @endforeach

 @stop