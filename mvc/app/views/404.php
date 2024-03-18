<?php 

class _404 extends Controller
{
    public function error()
    {
     $this->view('404');
    }
    public function test()
    {
        echo 'test';
    }
}