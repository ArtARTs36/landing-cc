<?php

namespace App\Bundles\Impression\Repository;

use App\Abstracts\Repository;
use App\Bundles\Impression\Entities\Author;
use App\Models\Impression;
use Illuminate\Support\Collection;

class ImpressionRepository extends Repository
{
    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Impression::class;
    }

    /**
     * @param int $limit
     * @return Collection
     */
    public function top(int $limit): Collection
    {
        return $this->newQuery()
            ->latest(Impression::UPDATED_AT)
            ->where(Impression::FIELD_IS_ACTIVE, true)
            ->limit($limit)
            ->get();
    }

    /**
     * @return Collection
     */
    public function allActive(): Collection
    {
        return $this->newQuery()
            ->latest(Impression::UPDATED_AT)
            ->where(Impression::FIELD_IS_ACTIVE, true)
            ->get();
    }

    /**
     * @param Author $author
     * @param string $message
     * @param bool $active
     * @return Impression
     */
    public function create(Author $author, string $message, bool $active): Impression
    {
        return $this->newQuery()
            ->create([
                Impression::FIELD_AUTHOR_FULL_NAME => $author->name(),
                Impression::FIELD_AUTHOR_POSITION => $author->position(),
                Impression::FIELD_AUTHOR_EMAIL => $author->email(),
                Impression::FIELD_AUTHOR_IP => $author->ip(),
                Impression::FIELD_MESSAGE => $message,
                Impression::FIELD_IS_ACTIVE => $active,
            ]);
    }
}
