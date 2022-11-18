<?php

namespace app\core;

abstract class Model
{
    public function mapData($data) // mapiramo podatak u nesto
    {
        if($data !== null)
        {
            foreach($data as $key => $value) // posmatramo key value parove
            {
                if(property_exists($this,$key)) // ako postoji key u this objektu
                {
                    $this->{$key} = $value; // dodeljujemo vrednost propertiju sa key
                }
            }
        }
    }
}