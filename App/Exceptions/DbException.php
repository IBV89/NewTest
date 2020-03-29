<?php


namespace App\Exceptions;


use Throwable;

class DbException extends \Exception
{
    protected $query;

    public function __construct($query, $message = "", $code = 0, Throwable $previous = null)
    {

        parent::__construct($message, $code, $previous);
        $this->query = $query;

    }

    public function getQuery()
    {
        return $this->query;
    }
}