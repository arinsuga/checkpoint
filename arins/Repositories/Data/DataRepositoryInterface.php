<?php

namespace Arins\Repositories\Data;

interface DataRepositoryInterface
{
    function all();
    function first();
    function find($parId);
    function create($parData);
    function update($parData);
    function delete($parId);

}