<?php
namespace Controllers;
class Home extends \Sophia\Controller
{
    public function __construct()
    {
        $this->data = [
            'style' => ['bootstrap','Poppins','fontawesome','theme'],
            'script' => ['jquery', 'popper', 'bootstrap', 'sweetalert2', 'cookie'],
        ];
    }
    
    public function index()
    {
        $this->view([
            'page' => 'index',
            'title' => "Sophia PHP minimalistc framework" ,
        ]);
    }
}
