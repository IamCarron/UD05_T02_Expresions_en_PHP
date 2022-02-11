<?php
            $hora = $_POST['N1'];
            $minutos = $_POST['N2'];
            $tiempototal = ($hora * 3600) + ($minutos * 60);  
            $medianoche = 86400 - $tiempototal; 
            echo "El tiempo restante para media noche es $medianoche";
            ?>