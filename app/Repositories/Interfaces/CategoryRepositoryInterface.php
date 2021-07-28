<?php

namespace App\Repositories\Interfaces;

interface CategoryRepositoryInterface extends RepositoryInterface
{
    /**
     * Get list parent categories
     * @param $params
     * @return mixed
     */
    public function getParentCategories($params);

}
