<?php
include "models/festival.php";
include "models/books.php";
    switch($_GET['festival']){
        case 'show':
            $result=showFestival();
            include "views/festival/allFestival.php";
            break;
        case 'festivalDetail': 
            
            $result=showFestivalByID();
            $relid=$result['religion_id'];
            $book=showTopBook($relid);
            include "views/festival/festivalDetail.php";
            break;
        
        
    }
