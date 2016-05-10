<?php

/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */
class IndexController extends Controller
{
    public function index()
    {
        echo '<h4 align="center">Welcome To Using YuYiPHP Framework !</h4>';

        return $this->display('index.html');
    }

    public function show()
    {
        echo 'this is show method !';
    }

    public function add()
    {
        echo 'this is add method !';
    }
}