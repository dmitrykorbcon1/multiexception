<?php

namespace App;

class MultiException extends \Exception
{
    protected $errors = [];

    public function add(\Exception $exception)
    {
        $this->errors[] = $exception;
    }

    public function empty()
    {
        return empty($this->errors);
    }

    public function all()
    {
        return $this->errors;
    }
}
