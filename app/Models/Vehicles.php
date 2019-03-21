<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 16:16
 */

namespace Models;

use RedBeanPHP\R as R;

class Vehicles
{

    public function getAllVehicles(){
        return R::getAll('call getAllVehicles();');
    }
//    public function getVehicleSearch($idColor = 0 ,$idCategory = 0 ,$idBrand = 0 ){
//        $query = 'SELECT vehicle.id,vehicle.model, vehicle.nbPlaces, vehicle.kilometers, vehicle.registration, vehicle.capacity, vehicleColor.libelle, vehicleCategory.libelle, vehicleBrand.libelle
//                  FROM vehicle, vehicleColor, vehicleBrand, vehicleCategory
//                  WHERE vehicle.idColor = vehicleColor.id ';
//        if ($idColor != 0){
//            $query+= ' AND vehicleColor.id ='.$idColor;
//        }
//        if ($idCategory != 0){
//            $query+= ' AND vehicleCategory.id ='.$idCategory;
//        }
//        if ($idBrand != 0){
//            $query+= ' AND vehicleBrand.id ='.$idBrand;
//        }
//
//
//        return R::getAll($query);
//        //return R::getAll('CALL getVehicleSearchFull(?,?,?);', [$idColor,$idCategory,$idBrand]);
//        exit();
//    }

}