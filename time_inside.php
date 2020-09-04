<?php

function insideTwoTimes($timeToSearch, $minTmie, $maxTime) {
    
    $dt1 = DateTime::createFromFormat("H:i", $timeToSearch);
    $dt2 = DateTime::createFromFormat("H:i", $minTmie);
    $dt3 = DateTime::createFromFormat("H:i", $maxTime);
    
    if ($dt2>=$dt3){
        $dt4 = DateTime::createFromFormat("H:i", "23:59");
        
        if ($dt1>=$dt2&&$dt1<=$dt4){
            return true;
        } else {
            
            $dt5 = DateTime::createFromFormat("H:i", "00:00");
            $dt5->modify("+1 day");
            $dt1->modify("+1 day");
            $dt3->modify("+1 day");
            
            if ($dt1>=$dt5&&$dt1<$dt3){
                return true;
            }
            return false;
        }
    } else {
        if ($dt1>=$dt2&&$dt1<$dt3){
            return true;
        }
        return false;
    }
}

// Tests
echo +insideTwoTimes("17:00", "18:00", "03:00") . "\n";
echo +insideTwoTimes("04:00", "18:00", "03:00") . "\n";
echo +insideTwoTimes("22:00", "18:00", "03:00") . "\n";
echo +insideTwoTimes("02:00", "18:00", "03:00") . "\n";
