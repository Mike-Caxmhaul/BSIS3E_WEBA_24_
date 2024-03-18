<?php 

class About
{
    public function about()
    {
        echo 'About/index';
    }
    public function test()
    {
        echo 'test';
    }
    public function history()
    {
        $this->view('history');
    }
}