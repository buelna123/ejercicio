<?php
namespace App\MySQL;
use mysqli;
class Conexion extends mysqli
{

    // sobreescribir el constructor de Conexion
    public function __construct()
    {
        $host = '127.0.0.1';
        $username = 'root';
        $passwd = 'toor2';
        $dbname = 'moodle';
        $port = 3306;
        
        parent::__construct($host, $username, $passwd, $dbname, $port);
    }

}