<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/11/2016
 * Time: 11:08 AM
 */

use Illuminate\Database;

class Post extends Eloquent{
    protected $fillable = array('title', 'content');

} 