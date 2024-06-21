<?php

namespace Arins\Services\Role;

use Arins\Services\Role\RoleInterface;

class Role implements RoleInterface
{
    protected $result;

    /**
     * Comment template.
     *
     * @param  boolean     $par1
     * @param  int         $par2
     * @param  string      $par3
     * @param  string|null $par4
     * @param  mixed|null  $par5
     * @return array|string|int|boolean
     */


    public function __construct()
    {
    }

    public function test()
    {
        return 'Facade-Role-Test()';
    }

    public function allow($userRoles, ...$roles)
    {
        $result = false;

        foreach ($userRoles as $item) {

            foreach ($roles as $role) {
                
                if ($item->code == $role) {

                    return true;

                } //end if

            } //end loop roles

        } //end loop userRoles

        return $result;
    }

    public function deny($userRoles, ...$roles)
    {
        $result = true;

        foreach ($userRoles as $item) {

            foreach ($roles as $role) {

                if ($item->code != $role) {
                    return false;
                } //end if

            } //end loop roles

        } //end loop userRoles


        return $result;
    }

}
