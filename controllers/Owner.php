<?php
namespace Controllers;
class Owner extends \Sophia\Controller
{
    public function __construct()
    {
        $this->data = [
            'style' => ['bootstrap','Roboto','sidebar','fontawesome','theme'],
            'script' => ['jquery', 'popper', 'bootstrap','sidebar'],
        ];
    }
    
    public function index()
    {
        $this->view([
            'page' => 'index',
            'title' => 'Hello',
        ]);
    }
}
