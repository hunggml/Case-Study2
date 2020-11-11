<?php

namespace PD\model;

use PDO;

class connDB
{
    protected $dns;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dns = 'mysql:host=localhost;dbname=caseModule2';
        $this->user = 'root';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        return new PDO($this->dns, $this->user, $this->password);
    }

}