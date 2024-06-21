<?php

namespace Arins\A0\Repositories\A0;

use Arins\Repositories\Data\EloquentRepository;
use Arins\A0\Repositories\A0\A0RepositoryInterface;

class A0Repository extends EloquentRepository implements A0RepositoryInterface
{

    // //Override parent class [BaseRepository.all()]
    // public function all()
    // {
    //     return $this->data->where('bo', true)->get();
    // }

}