<?php

namespace Arins\Bo\Repositories\User;

use App\User;
use Arins\Repositories\Data\EloquentRepository;
use Arins\Bo\Repositories\User\UserRepositoryInterface;

class UserRepository extends EloquentRepository
                     implements UserRepositoryInterface

// class UserRepository implements UserRepositoryInterface
                                
{
    protected $data;

    public function __construct($parData)
    {
        $this->data = $parData;
    }

    public function all()
    {
        return $this->data->where('bo', false)->get();
        //return 'Berhasil allBo';
    }

    public function dnb()
    {
        return $this->data->where('dept', 'DNB')->get();
        //return 'Berhasil allBo';
    }

}