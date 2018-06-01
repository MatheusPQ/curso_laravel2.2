<?php

namespace App\Repos;

abstract class AbstractRepo {

    public function __construct(PostModel $model){
        $this->model = $model;
    }

    public function getAll(){
        return $this->model->all();
    }

    public function find($id){
        return $this->model->find($id);
    }
    
    public function create($data){

    }

}