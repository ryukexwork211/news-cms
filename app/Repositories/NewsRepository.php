<?php

namespace App\Repositories;

use App\Models\News;

class NewsRepository extends BaseRepository
{

    public function getModel(): string
    {
        return News::class;
    }
}
