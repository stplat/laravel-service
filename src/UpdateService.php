<?php

namespace App\Services;

use Stsp\LaravelRepository\Repository;


/**
 * UpdateService
 * @package App\Services
 */
class UpdateService
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
     * @return bool
     */
    public function make(object $data): bool
    {
        return $this->repository->update($data);
    }
}