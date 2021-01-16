<?php
namespace Controllers;
class Wolf extends \Sophia\Controller
{
    public function __construct()
    {
        $this->data = [
            'style' => ['bootstrap','Poppins', 'theme'],
            'script' => ['jquery', 'popper', 'bootstrap', 'sweetalert2', 'cookie','fontawesome6'],
        ];
    }
    
    public function index()
    {
        $this->view([
            'page' => 'index',
            'title' => "VukForexa" ,
        ]);
    }
}
