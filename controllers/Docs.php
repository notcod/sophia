<?php
namespace Controllers;
class Docs extends \Sophia\Controller
{
    public function __construct()
    {
        $this->data = [
            'style' => ['bootstrap','Roboto','sidebar','theme'],
            'script' => ['jquery', 'popper', 'bootstrap','sidebar','fontawesome6'],
        ];
    }
    
    public function index()
    {
        $this->view([
            'page' => 'index',
            'title' => 'Documentation overview',
            'description' => 'Sophia documentation overview',
            'keywords' => 'Sophia documentation overview',
        ]);
    }
    public function controllers()
    {
        $this->view([
            'page' => 'controllers',
            'title' => 'Controllers documentation',
            'description' => 'Sophia controllers documentation',
            'keywords' => 'Sophia controllers documentation',
        ]);
    }
    public function models()
    {
        $this->view([
            'page' => 'models',
            'title' => 'Models documentation',
            'description' => 'Sophia models documentation',
            'keywords' => 'Sophia models documentation',
        ]);
    }
    public function views()
    {
        $this->view([
            'page' => 'views',
            'title' => 'Views documentation',
            'description' => 'Sophia views documentation',
            'keywords' => 'Sophia views documentation',
        ]);
    }
    public function requests()
    {
        $this->view([
            'page' => 'requests',
            'title' => 'Requests documentation',
            'description' => 'Sophia requests documentation',
            'keywords' => 'Sophia requests documentation',
        ]);
    }
    public function template()
    {
        $this->view([
            'page' => 'template',
            'title' => 'Template documentation',
            'description' => 'Sophia template documentation',
            'keywords' => 'Sophia template documentation',
        ]);
    }
    public function support()
    {
        $this->view([
            'page' => 'support',
            'title' => 'Support',
            'description' => 'Sophia support',
            'keywords' => 'Sophia support',
        ]);
    }
}
