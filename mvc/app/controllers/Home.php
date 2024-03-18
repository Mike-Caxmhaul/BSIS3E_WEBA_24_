<?php 

class Home extends Controller
{
    public function index()
    {
     $model = new Model();
    $arr['fname'] = 'justin';
    $data = $model->where($arr);
    show($data);
     $this->view('home');
    }
}