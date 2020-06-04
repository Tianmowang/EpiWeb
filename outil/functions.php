<?php

function active($url)
{
  if ($_SERVER['PHP_SELF'] == $url)
  {
    echo 'active';
  }
}

function Annee()
{
    $date = getdate();
    echo $date["year"];
}

function titre()
{
    $url = $_SERVER['PHP_SELF'];
    switch ($url) {
        case '/epiWeb/index.php':
            echo "Bienvenue sur EpiWeb";
            break;
        case '/epiWeb/company.php':
            echo "EpiWeb - L'agence";
            break;
        case '/epiWeb/services.php':
            echo "EpiWeb - Nos services";
            break;
            case '/epiWeb/contact.php':
                echo "EpiWeb - Contact";
                break;
        default:
            break;
    }
}