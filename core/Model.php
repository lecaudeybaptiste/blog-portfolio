<?php

class Model
{
    protected $db;

    public function __construct()
    {
        $config = require __DIR__ . '/../config/config.php';
        $this->db = new PDO("mysql:host=localhost;dbname=" . $config['db_name'], $config['db_user'], $config['db_pass']);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}