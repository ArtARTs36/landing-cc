<?php

namespace App\Bundles\Gallery\Repositories;

use App\Bundles\Gallery\Models\Album;
use App\Contracts\Repository;

class AlbumRepository extends Repository
{
    protected function getModelClass(): string
    {
        return Album::class;
    }

    public function create(string $key, string $name): Album
    {
        return $this->newQuery()->create([
            Album::FIELD_KEY => $key,
            Album::FIELD_NAME => $name,
        ]);
    }

    public function findByKey(string $key): Album
    {
        return $this
            ->newQuery()
            ->select(['id'])
            ->where(Album::FIELD_KEY, $key)
            ->firstOrFail();
    }
}
