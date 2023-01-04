<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Models;

class BlogModel extends Model
{
    protected $table = 'posts';
    protected $allowedFields = ['title', 'slug', 'body']; // ohne dies könnte man andere fields in db einfügen 

    public function getPosts ($slug = null){

        if (! $slug)
        {
            return $this->findAll();

        }

        return $this->asArray()
                    ->where(['slug' => $slug])
                    ->first();

    }

}