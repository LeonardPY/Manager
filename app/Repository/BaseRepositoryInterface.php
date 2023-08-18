<?php

declare(strict_types=1);


namespace App\Repository;

/**
 * Interface BaseRepositoryInterface.
 */
interface BaseRepositoryInterface
{
    public function create(array $attributes);

    /**
     * @param int $id
     * @return mixed
     */
    public function find(int $id);

    public function delete(int $id);

    public function first();

    public function last();

    public function updateOrCreate(array $data, array $attributes): mixed;
}
