<?php
/**
 * Created by PhpStorm.
 * User: usersio
 * Date: 18/03/19
 * Time: 16:16
 */

namespace Models;

use RedBeanPHP\R as R;

class Vehicle
{

    public function getAllVehicles(){
        return R::getAll('call getAllVehicles();');
    }
    public function getOneVehicle($idVehicle){
    return R::findOne('vehicle','where id = ?',[$idVehicle]);
    }

    public function getVehiclesCount(){
        return R::getAll('call getVehicleCount();');
    }
//          couleur / categorie / marque / kilometres / registration / capacity
    public function getVehicleSearch($idColor,$idCategory,$idBrand,$kilometers ){
        $query = 'SELECT vehicle.model, vehicle.nbPlaces, vehicle.kilometers, vehicle.registration, vehicle.capacity, vehicleColor.libelle as \'color\'
                  , vehicleCategory.libelle as \'category\', vehicleBrand.libelle as \'brand\' 
                  FROM vehicle, vehicleColor, vehicleBrand, vehicleCategory 
                  WHERE vehicle.idColor = vehicleColor.id 
                  AND vehicle.idBrand = vehicleBrand.id 
                  AND vehicle.idCategory = vehicleCategory.id ';
        if ($idColor != 0){
            $query.= ' AND vehicleColor.id ='.$idColor;
        }
        if ($idCategory != 0){
            $query.= ' AND vehicleCategory.id ='.$idCategory;
        }
        if ($idBrand != 0){
            $query.= ' AND vehicleBrand.id ='.$idBrand;
        }
        if ($kilometers != 0){
            $query.= ' and vehicle.kilometers >='.$kilometers;
        }
//        var_dump($query);
//        exit();
        return R::getAll($query);
        //return R::getAll('CALL getVehicleSearchFull(?,?,?);', [$idColor,$idCategory,$idBrand]);

    }

    public function addVehicle($idBrand, $model, $idCategory, $idColor,$idAgency, $nbPlaces,$kilometers,$registration,$capacity){
        return R::exec('INSERT INTO `vehicle` (`id`, `idBrand`, `model`, `idCategory`, `idColor`, `idAgency`, `nbPlaces`, `kilometers`, `registration`, `capacity`) 
        VALUES (NULL,?,?,?,?,?,?,?,?,?);', [$idBrand,$model,$idCategory,$idColor,$idAgency,$nbPlaces,$kilometers,$registration,$capacity]);

    }
    public function deleteVehicle($idVehicle){
        return R::exec('DELETE FROM vehicle WHERE id = ?;',[$idVehicle]);
    }


}