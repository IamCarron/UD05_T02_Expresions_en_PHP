<?php
$fecha = $_POST['N1'];
    list($day,$month,$year)=explode("-",$fecha);
    if($month==1 && $day>20){
        echo "Aquario";
    }elseif($month==2 && $day<20){
         echo "Aquario";
    }elseif($month==2 && $day>18 ){
        echo "Piscis";
    }elseif($month==3 && $day<21){
         echo "Piscis";
    }elseif($month==3 && $day>20){
        echo "Aries";
    }elseif($month==4 && $day<21){
         echo "Aries";
    }elseif($month==4 && $day>20){
         echo "Tauro";
    }elseif($month==5 && $day<22){
         echo "Tauro";
    }elseif($month==5 && $day>21){
        echo "Gemini";
    }elseif ($month==6 && $day<22){
         echo "Gemini";
    }elseif($month==6 && $day>21){
        echo "Cancer";
    }elseif($month==7 && $day<24){
         echo "Cancer";
    }elseif($month==7 && $day>23){
        echo "Leo";
    }elseif($month==8 && $day<24){
         echo "Leo";
    }elseif($month==8 && $day>23){
        echo "Virgo";
    }elseif($month==9 && $day<24){
         echo "Virgo";
    }elseif($month==9 && $day>23){
        echo "Libra";
    }elseif($month==10 && $day<24){
         echo "Libra";
    }elseif($month==10 && $day>23){
        echo "Scorpio";
    }elseif($month==11 && $day<23){
         echo "Scorpio";
    }elseif($month==11 && $day>22){
        echo "Sagitario";
    }elseif($month==12 && $day<23){
         echo "Sagitario";
    }elseif($month==12 && $day>22){
        echo "Capricornio";
    }elseif($month==1 && $day<21){
         echo "Capricornio";
    }

?>