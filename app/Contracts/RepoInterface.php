<?php

namespace App\Contracts;

interface RepoInterface {
    public function getAll();
    public function find($id);
    public function create($data);
}