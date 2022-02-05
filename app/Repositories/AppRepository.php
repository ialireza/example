<?php
namespace App\Repositories;

abstract class AppRepository
{
    protected $myModel;

    abstract public function myModel();

    public function __construct()
    {
        $this->myModel = app($this->myModel());
    }

    public function getAll()
    {
        return $this->myModel->get();
    }

    public function selectedItem(string $row = 'id', int $itemId)
    {
        return $this->myModel->where($row, $itemId)
            ->first();
    }

    public function itemsWith(string $with)
    {
        return $this->myModel->with($with)
            ->get();
    }
}
