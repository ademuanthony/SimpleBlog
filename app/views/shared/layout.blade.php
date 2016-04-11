<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 10:04 AM
 */
 ?>


 <!doctype html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Simple Blog</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
 </head>
 <body>

 <nav class="navbar navbar-default">
   <div class="container-fluid">
     <div class="navbar-header">
       <a class="navbar-brand" href="{{ URL::to('/') }}">Simple Blog</a>
     </div>
     <div class="nav navbar-nav navbar-right">
         <li>
            <a href="{{ URL::to('/') }}">Home</a>
         </li>
         <li><a href="{{ URL::to('posts') }}">Manage Posts</a></li>
         <li><a href="{{ URL::to('posts/add') }}">New Post</a></li>
     </div>
   </div>
 </nav>

 <main>
    <h2 class="text-center">Anyone can post! Anyone can read!! Let's do it!!!</h2>
    <hr/>
     <div class="container">
         @yield('content')
     </div>
 </main>

 </body>
 </html>