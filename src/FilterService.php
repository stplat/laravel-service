<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Stsp\LaravelRepository\Repository;

/**
 * FilterService
 * @package App\Services
 */
class FilterService
{
    private $repository;

    /**
     * Create a new service instance.
     *
     * @return void
     */
    public function __construct(Repository $repository)
    {
        $this->repository = app($repository);
    }

    /**
     * Make service execution.
     *
     * @param  object $data
     * @return Collection
     */
    public function make(object $data): Collection
    {
        return $this->repository->findItemsByFilters($data);
    }
}
