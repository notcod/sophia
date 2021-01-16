<?php
namespace Controllers;
class Servicer extends \Sophia\Controller
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
    
    public function new()
    {
        $this->view([
            'page' => 'new',
            'title' => 'Hello phones',
        ]);
    }
    public function phones()
    {
        $this->view([
            'page' => 'phones',
            'title' => 'Hello phones',
        ]);
    }
}
