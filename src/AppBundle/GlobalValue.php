<?php

namespace AppBundle;

final class GlobalValue
{
    
    public static $INDEX_HOME = 0;
    public static $INDEX_PROFESSIONNELS = 1;
    public static $INDEX_PARTICULIERS = 2;
    public static $INDEX_REALISATIONS = 3;
    public static $INDEX_CLIENTS = 4;
    public static $INDEX_CONTACT = 5;
    
    public static function getRandomData(array $list) 
    {
        $listIndex = array();
        for ($i = 0; $i < count($list); $i++)
        {
            $listIndex[] = $i;
        }
        shuffle($listIndex);
        
        $listSlider = array();
        for ($i = 0; $i < count($listIndex); $i++)
        {
            $listSlider[] = $list[$listIndex[$i]];
        }
        
        return $listSlider;
    }
    
}