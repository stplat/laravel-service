<?php

namespace Stsp\LaravelService;

use Stsp\LaravelRepository\Repository;

/**
 * StoreService
 * @package Stsp\LaravelService
 */
class StoreService
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
     * Make service execution.
     *
     * @param  object $data
     * @return bool
     */
    public function make(object $data): bool
    {
        return $this->repository->save($data);
    }
}
