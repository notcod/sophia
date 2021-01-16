<?php

namespace Requests;

class Post extends \Controller
{
    public function __construct()
    {
        $this->ifToken();
        $this->method = $this->model("Users");
    }
    public function index()
    {
        $this->back();
    }
    public function signin()
    {
        $this->method->set([
            ['username', 'clean'],
            ['password', 'md50']
        ]);
        $this->return(
            $this->method->signin()
        );
    }
    public function signup()
    {
        $this->method->set([
            ['email', 'isEmail'],
            ['username', [['clean'], ['length', ['4']]]],
            ['password', 'md50'],
            ['password2', 'md50']
        ]);
        $this->return(
            $this->method->signup()
        );
    }
    public function change_password()
    {
        $this->method->set([
            ['current', 'md50'], 
            ['password', 'md50'], 
            ['password2', 'md50']
        ]);
        $this->return(
            $this->method->changePassword()
        );
    }
    public function reset()
    {
        $this->method->set([
            ['email', 'isEmail']
        ]);
        $this->return(
            $this->method->RecoveryPassword()
        );
    }
    public function recovery()
    {
        $this->method->set([
            ['ID', [['clean'], ['int']]],
            ['hash', [['clean']]],
            ['password', [['md50'], ['length', ['4']]]], 
            ['password2', [['md50'], ['length', ['4']]]], 
        ]);
        $this->return(
            $this->method->newPassword()
        );
    }
}
