<?php

namespace app\index\controller;

class Index
{
    public function index()
    {
        return '这时首页';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
