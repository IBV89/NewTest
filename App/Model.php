<?php

namespace App;

abstract class Model
{

    public $id;

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE, [],
            static::class);
    }

    public static function findById($id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $id = [':id' => $id];
        $data = $db->query($sql, $id, static::class);
        if (empty($data)) {
            return false;
        } else {
            return $data[0];
        }
    }
}