<?php
namespace turnier;

use SQLite3;

class database
{
    private $db;
    
    public function __construct($filename) {
        $this->db = new SQLite3('turnier.db');
    }

    
    
}

