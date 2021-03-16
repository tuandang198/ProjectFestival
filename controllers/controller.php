<?php
include "models/festival.php";
include "models/companyInfo.php";
    switch($_GET['option']){
        case 'home':
            $result=showRandFestival();
            include "layout/home.php"; 
            break;
        case 'aboutus':
            $result=showAboutUs();
            include "views/aboutus/aboutus.php";
            break;
        case 'galleryfestival':
            $result=showGallery();
            include "views/gallery/galleryfestival.php";
            break;
        case 'gallerybook':
            $result=showBookGallery();
            include "views/gallery/gallerybook.php";
            break;
        case 'feedback':
            include "views/aboutus/feedback.php";
            break;
            
    }
