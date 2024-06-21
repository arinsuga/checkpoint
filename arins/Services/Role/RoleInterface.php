<?php
namespace Arins\Services\Role;

interface RoleInterface
{
    function test();
    function allow($userRoles, ...$roles);
    function deny($userRoles, ...$roles);
    
}
