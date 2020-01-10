<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    public const TABLE = 'news';
    public $title;
    public $content;

    public static function lastNews()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        $data = $db->query($sql, [], self::class);
        return $data;
    }


}