<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 1:43 PM
 */
 ?>
 @if($errors->any())
     <div class="alert alert-danger">
         @foreach($errors->all() as $error)
             <p>{{ $error }}</p>
         @endforeach
     </div>
 @endif

 @if(Session::has('flash_message'))
     <div class="alert alert-success">
         {{ Session::get('flash_message') }}
     </div>
 @endif