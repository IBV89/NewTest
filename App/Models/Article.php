<?php

namespace App\Models;

use App\Db;
use App\Model;

class Article extends Model
{
    public const TABLE = 'news';
    public $title;
    public $content;
    public $author_id;

    public static function lastNews()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . self::TABLE . ' ORDER BY id DESC LIMIT 3';
        $data = $db->query($sql, [], self::class);
        return $data;
    }

    public function getAuthorName($id)
    {
        if (isset($this->author_id)) {
            $author = new Author();
            $name = $author->findById($id)->title;
            return $name;
        } else {
            return false;
        }

    }


}