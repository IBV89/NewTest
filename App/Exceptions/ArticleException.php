<?php


namespace App\Exceptions;


class ArticleException extends \Exception
{
    public function getError()
    {
        return $this->message;
    }
}