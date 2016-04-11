<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 10:15 AM
 */
 ?>
 @extends("shared.layout")
 @section('content')

 @foreach($posts as $post)
    <h3><a href="{{URL::to('read', $post->id)}}">{{$post->title}}</a> </h3>
    <p>{{$post->content}}</p>
    <hr/>
 @endforeach

 @stop