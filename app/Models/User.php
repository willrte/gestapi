<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 16:16
 */

namespace Models;

use RedBeanPHP\R as R;

class User
{

    public function getAllUsers(){
        return R::getAll('call getAllUsers();');
    }
    public function getUsersCount(){
        return R::getAll('call getUsersCount();');
    }
}
