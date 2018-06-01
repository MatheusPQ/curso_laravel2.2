<?php

namespace App\Repos;

use App\Post as PostModel;
use App\Repos\AbstractRepo;
use App\Contracts\RepoInterface;

//Agora tds repositorios que criar, extender e implementar abaixo
class Post extends AbstractRepo implements RepoInterface {

    protected $model;

    public function __construct(PostModel $model){
        $this->model = $model;
    }

}