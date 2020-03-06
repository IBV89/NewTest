<?php

namespace App;

abstract class Model
{

    public $id;

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC', [],
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

    protected function insert()
    {
        $fields = get_object_vars($this);

        $cols = [];
        $data = [];
        foreach ($fields as $name=>$value) {
            if ('id' == $name) {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE . '
         (' . implode(',', $cols) . ') 
         VALUES 
         (' . implode(',', array_keys($data)) . ')';

        $db = new Db();
        $db->execute($sql, $data);
        $this->id = $db->getLastId();
    }

    protected function update()
    {

        $fields = get_object_vars($this);
        $cols = [];
        $data = [];
        foreach ($fields as $name=>$value) {
            $data[':' . $name] = $value;
            if ('id' == $name) {
                continue;
            }
            $cols[] = $name . '=:' . $name;

        }
        $sql = 'UPDATE ' . static::TABLE . ' SET ' .
            implode(',', $cols) . ' WHERE id=:id';
        $db = new Db();
        $db->execute($sql, $data);

    }

    public function save()
    {
        if (!isset($this->id)) {
            $this->insert();
        } else{
            $this->update();
        }

    }

    public function delete()
    {
        $fields = get_object_vars($this);
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id IN (:id)';
        $data = [];
        foreach ($fields as $name=>$value) {
            if ($name!='id') {
                continue;
            }
            $data[':' . $name] = $value;
        }
        $db = new Db();
        $db->execute($sql, $data);

    }
}