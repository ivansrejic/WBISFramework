<?php

namespace app\models;
use app\core\Model;

class RegistrationModel extends Model
{
    public string $email ; //Ovi propertiji treba da imaju isto ime kao i input polja odakle uzimamo info da bi onaj mapData radio
    public string $password ;


}