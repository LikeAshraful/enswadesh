<?php
namespace Repository;

Abstract class BaseRepository {

    abstract function model();

    public function findByID($id)
    {
        return $this->model()::find($id);
    }

    public function findOrFailByID($id)
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
        return $model()->update($modelData);
    }

    public function updateAndReloadByID($id, array $modelData)
    {
        $model = $this->findOrFailByID($id);
        $model()->update($modelData);
        return $model->reload();
    }
}
