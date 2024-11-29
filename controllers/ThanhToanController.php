<?php
class ThanhToanController
{

    public $modelThanhToan;

    public function __construct()
    {
        $this->modelThanhToan = new ThanhToan();
    }

    public function getAllData(){
        require_once './views/thanhtoan.php';
    }

    }
