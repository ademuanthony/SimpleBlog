<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 11:39 AM
 */
 ?>
 @extends('shared.layout')

 @section('content')
 <h2>{{$post->title}}</h2>
 <p>{{$post->content}}</p>
 @stop