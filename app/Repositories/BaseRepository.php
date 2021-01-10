<?php
namespace Repository;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Collection\Collection;

Abstract class BaseRepository {

    abstract function model();

    public function getAll(): Collection
    {
        return $this->model()::all();
    }

    public function getAllByPaginate(int $perPage = 30): Collection
    {
        return $this->model()::paginate($perPage);
    }

    public function findByID($id): Model
    {
        return $this->model()::find($id);
    }

    public function findOrFailByID($id): Model
    {
        return $this->model()::findOrFail($id);
    }

    public function create(array $modelData)
    {
        return $this->model()::create($modelData);
    }

    public function updateByID($id, array $modelData)
    {
        $model = $this->findOrFailByID($id);
        return $model->update($modelData);
    }

    public function updateAndReloadByID($id, array $modelData)
    {
        $model = $this->findOrFailByID($id);
        $model->update($modelData);
        return $model->reload();
    }
}
