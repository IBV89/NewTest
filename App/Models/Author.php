<?php


namespace App\Models;


use App\Model;

class Author extends Model
{
    public $id;
    public $title;
    const TABLE = 'author';
}