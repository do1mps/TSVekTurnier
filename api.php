<?php
//Paramter GET: Group Number

//Internal:
// Sort the Table (1st: Points, 2nd: Goal1/2, 3rd: last hit)
$arr = array("Tabelle" =>
    array(
        "1" => array("Name" => "TSV Eintracht Karlsfeld",
                    "Punkte" => 6,
                    "Tore1" => 8,
                    "Tore2" => 7
                    ),
        "2" => array("Name" => "TSV 1865 Dachau",
                    "Punkte" => 5,
                    "Tore1" => 5,
                    "Tore2" => 4
                    ),
        "3" => array("Name" => "Manschaft 3",
                    "Punkte" => 5,
                    "Tore1" => 5,
                    "Tore2" => 4
                    ),
        "4" => array("Name" => "Manschaft 4",
                    "Punkte" => 5,
                    "Tore1" => 5,
                    "Tore2" => 4
                    )
    )
);

/* $arr = array( "Gruppe 2" =>
array(
    "1" => "Manschaft 5",
    "2" => "Manschaft 6",
    "3" => "Manschaft 7",
    "4" => "Manschaft 8"
), "Gruppe 3" =>
array(
    "1" => "Manschaft 9",
    "2" => "Mannschft 10",
    "3" => "Manschaft 11",
    "4" => "Manschaft 12"
)
*/


echo json_encode($arr);

?>