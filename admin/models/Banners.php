<?php
class Banners
{
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
    }
   

}