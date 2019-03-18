<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 02/12/18
 * Time: 18:41
 */

namespace Models;

use RedBeanPHP\R as R;

class Connexion
{
    public function isConnected($username, $password)
    {
        return R::exec('call isConnected(?, ?);',[$username, $password]);
    }

    public function getRights($username, $password)
    {
        return R::getAll('call getRights(?, ?);',[$username, $password]);
    }

    /**
     * CREATE DEFINER=`usersio`@`%` PROCEDURE `getIdFromConnectedUser`(IN i_login char(32), IN i_password char(32))
        BEGIN
        SELECT idEmployee FROM Account
        WHERE loginAccount = i_login
        AND passwordAccount = i_password;
        END
     */
    public function getIdFromConnectedUser($username, $password)
    {
        return R::getAll('call getIdFromConnectedUser(?, ?);',[$username, $password]);
    }


}