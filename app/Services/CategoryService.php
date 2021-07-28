<?php
namespace App\Services;


use App\Repositories\Interfaces\CategoryRepositoryInterface;

class CategoryService
{
    protected $categoryRepository;

    /**
     * CategoryService constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getParentCategories($params) {
        return $this->categoryRepository->getParentCategories($params);
    }

    public function create($data) {
        try {
            $insert = [
                'name' => $data['name'],
                'slug' => $data['slug'],
                'position' => $data['position']
            ];
            $this->categoryRepository->create($insert);

            return true;
        } catch (\Exception $ex) {
            dd($ex);
            return false;
        }
    }
}
