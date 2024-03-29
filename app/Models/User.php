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
    public function getOneUser($idUser){
        return R::findOne('user','where id = ?',[$idUser]);
    }
    public function getUsersCount(){
        return R::getAll('call getUserCount();');
    }

    public function addUser($idType, $name, $firstname, $email,$password, $adrRoad,$adrCity,$adrPC,$numTel){
        return R::exec('INSERT INTO `user` (`id`, `idType`, `name`, `firstname`, `email`, `password`, `adrRoad`, `adrCity`, `adrPC`, `numTel`) 
        VALUES (NULL,?,?,?,?,?,?,?,?,?);', [$idType,$name,$firstname,$email,$password,$adrRoad,$adrCity,$adrPC,$numTel]);
//        $user = R::dispense('user');
//        $user->idType= $idType;
//        $user->name= $name;
//        $user->firstname= $firstname;
//        $user->email= $email;
//        $user->password= $password;
//        $user->adrRoad= $adrRoad;
//        $user->adrCity= $adrCity;
//        $user->adrPC= $adrPC;
//        $user->numTel= $numTel;
//        R::store($user);
    }
    public function deleteUser($id){
        return R::exec('DELETE FROM user WHERE id = ?;',[$id]);
    }
    public function updateUser($idType,$name,$firstname,$email,$password,$adrRoad,$adrCity,$adrPC,$numTel,$id){
        return R::exec('update user set `idType` = ?, `name` = ?,`firstname` = ?,`email` = ?,`password` = ?,`adrRoad` = ?,
                            `adrCity` = ?,`adrPC` = ?,`numTel` = ? where `id` = ? ',[$idType,$name,$firstname,$email,$password,$adrRoad,$adrCity,$adrPC,$numTel,$id]);
    }
}
