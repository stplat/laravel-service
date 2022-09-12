<?php

namespace App\Services;

use Stsp\LaravelRepository\Repository;

/**
 * DestroyService
 * @package App\Services
 */
class DestroyService
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
     * @param  int $id
     * @return bool
     */
    public function make(int $id): bool
    {
        return $this->repository->delete($id);
    }
}