<?php

declare(strict_types=1);

namespace App\Repository\Eloquent;

use App\Repository\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected mixed $model;

    /** BaseRepository constructor. */
    public function __construct(mixed $model = null)
    {
        $this->model = $model;
    }

    public function create(array $attributes): object
    {
        return $this->model->create($attributes);
    }

    public function find(int $id): object|null
    {
        return $this->model->find($id);
    }

    public function delete(int $id): bool|null
    {
        return $this->model->find($id)->delete();
    }

    public function update(int $id, array $attributes): object|null|bool
    {
        return $this->model->findOrFail($id)->update($attributes);
    }

    public function first(): object|null
    {
        return $this->model->first();
    }

    public function last(): object|null
    {
        return $this->model->orderByDesc('id')->first();
    }

    public function updateOrCreate(array $data, array $attributes): mixed
    {
        return $this->model->updateOrCreate($data, $attributes);
    }

}


