<?php

namespace Arins\Bo\Repositories\UserAdmin;

use Arins\Repositories\Data\EloquentRepository;
use Arins\Bo\Repositories\UserAdmin\UserAdminRepositoryInterface;

class UserAdminRepository extends EloquentRepository implements UserAdminRepositoryInterface
{

    //Override parent class [EloquentRepository.all()]
    public function all()
    {
        return $this->data->where('bo', true)->get();
    }

}