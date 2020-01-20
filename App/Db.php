<?php

namespace App;


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
        $sth->execute($data);
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