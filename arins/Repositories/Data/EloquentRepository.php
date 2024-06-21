<?php

namespace Arins\Repositories\Data;

//use App\User;

abstract class EloquentRepository implements DataRepositoryInterface
{
    protected $data, $data1;

    public function __construct($parData, $parData1 = null)
    {
        $this->data = $parData;
        $this->data1 = $parData1;
    }

    public function all()
    {
        return $this->data->all();
    }

    public function first()
    {
        //TODO: Need to be tested
        return $this->data->all()->first();
    }

    public function find($parId)
    {
        //TODO: Need to be tested
        return $this->data->find($parId);
    }

    public function create($parData)
    {
        //TODO Code create data here
        return $this->data->all();
    }

    function update($parData)
    {
        //TODO Code update data here
        return $this->data->all();
    }

    function delete($parId)
    {
        //TODO Code delete data here
        return $this->data->all();
    }

}