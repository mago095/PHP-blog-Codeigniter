<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
    public function index()
    {

        $model = new BlogModel();
        $data['news'] = $model->getPosts(); //brings posts from database

        echo view('templates/header', $data);
        echo view('pages/home');
        echo view('templates/footer');
    }

    function showme ($page = 'home'){

        if (! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            //we dont have a page for that
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

        }
        
        echo view('templates/header');
        echo view('pages/' .$page);
        echo view('templates/footer');
    }
}
