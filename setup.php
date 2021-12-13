<?php

if(isset($_GET['row']) && isset($_GET['col'])){
    $numCells = abs($_GET['row']*$_GET['col']);
    $gameGrid = array();
    $gameGrid = array_pad($gameGrid,$numCells,0);
    if($numCells <= 5){
        for($i = 0; $i < $numCells; $i++){
            $gameGrid[i] = 1;
        } 
    } else {
        for($i = 0; $i < 5; $i++){
            $randCell = rand(0,$numCells-1);
            while($gameGrid[$randCell] == 1){ //make sure cell has not already been 'turned on'
                $randCell = rand(0,$numCells-1);
            }
            $gameGrid[$randCell] = 1;
        }
    }

    echo json_encode($gameGrid);

}
?>