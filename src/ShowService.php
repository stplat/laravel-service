<?php

namespace Stsp\LaravelService;

use Illuminate\Support\Collection;
use Stsp\LaravelRepository\Repository;


/**
 * ShowService
 * @package Stsp\LaravelService
 */
class ShowService
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
     * Get item by id
     *
     * @param  int $id
     * @return Collection
     */
    public function getItemById(int $id): Collection
    {
        return collect($this->repository->findItemById($id));
    }

    /**
     * Get all items
     *
     * @return Collection
     */
    public function getAllItems(): Collection
    {
        return $this->repository->findAllItems();
    }
}
