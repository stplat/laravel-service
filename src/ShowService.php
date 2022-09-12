<?php

namespace Stsp\LaravelService;

use Illuminate\Support\Collection;
use Stsp\LaravelRepository\Repository;
use Illuminate\Database\Eloquent\Model;


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
        $this->repository = $repository;
    }

    /**
     * Get item by id
     *
     * @param  int $id
     * @return Model
     */
    public function getItemById(int $id): Model
    {
        return $this->repository->findItemById($id);
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
