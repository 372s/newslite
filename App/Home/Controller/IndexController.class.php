<?php
namespace Home\Controller;

class IndexController extends BaseController
{
    public function index()
    {
        $this->display('Index/index');
    }

    public function getList()
    {
        $this->display();
    }

    public function detail()
    {
        $this->display('detail');
    }
}