<?php

namespace Arins\Bo\Repositories\User;

use Arins\Repositories\Data\DataRepositoryInterface;

interface UserRepositoryInterface extends DataRepositoryInterface
{
    function all();
    function dnb();
}