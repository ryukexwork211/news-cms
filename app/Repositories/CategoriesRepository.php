<?php

namespace App\Repositories;

use App\Models\Categories;
use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoriesRepository extends BaseRepository implements CategoryRepositoryInterface
{

    public function getModel(): string
    {
        return Categories::class;
    }

    public function getParentCategories($params)
    {
        // TODO: search

        return $this->model->where('parent_id', null)->orderBy('position')->get();
    }

    public function createCategory($data)
    {
        return $this->model->create($data);
    }
}
