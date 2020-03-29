<?php

namespace App;


use App\Exceptions\DbException;

class Db
{
    protected $dbh;
    public function __construct()
    {
        $config = new Config();
        $this->dbh = new \PDO('mysql:host=' . $config->data['host'] .
            ';dbname=' . $config->data['dbname'],
            $config->data['user'], $config->data['pass']);
    }

    public function query($sql, $data = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($data);
        if (!$res) {
            throw new DbException($sql, 'Запрос не может быть выполнен');
        }
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function execute($sql, $data = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($data);
    }
    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }

}