<?php

namespace App\Bundles\Impression\Entities;

use App\Bundles\Impression\Http\Requests\StoreImpression;

class Author
{
    private $name;

    private $email;

    private $position;

    private $ip;

    public function __construct(array $data)
    {
        $this->name = $data[StoreImpression::FIELD_AUTHOR_FULL_NAME];
        $this->email = $data[StoreImpression::FIELD_AUTHOR_EMAIL];
        $this->position = $data[StoreImpression::FIELD_AUTHOR_POSITION] ?? "Потребитель";
        $this->ip = $data['author_ip'];
    }

    /**
     * @param StoreImpression $request
     * @return Author
     */
    public static function createFromRequest(StoreImpression $request): Author
    {
        return new static($request->getAuthorData());
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function position(): string
    {
        return $this->position;
    }

    /**
     * @return string
     */
    public function ip(): string
    {
        return $this->ip;
    }
}
