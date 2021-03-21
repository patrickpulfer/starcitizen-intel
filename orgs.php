<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Star Citizen Intel">
  <meta name="keywords" content="Star Citizen Intel">
  <meta name="author" content="Patrick.Pulfer1@gmail.com">
  <title>Star Citizen Intel 2</title>
  <script src="https://kit.fontawesome.com/126469e40c.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="./resources/css/main.css">
  <meta name="theme-color" content="#302c2e" />
</head>
<body style="font-size: 100%; font-family: Arial;">

<header>
    <nav class="navbar navbar-expand-lg navbar-custom bg-dark" style="background-color: #202020;">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
          aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#">SC INTEL</a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <!--            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Home</a>
            </li>
          </ul>-->
        </div>
      </div>
    </nav>
  </header>
  <br>
  <main>
    <div class="container">
      <div class="row">
        <div class="container" align="center">
          <img width-max="200px" class="img-fluid"
            src="https://d1.awsstatic.com/gamedev/lumberyard/starcitizen_assets/starcitizen_logo_ltgrey.f922d3d33c6220b54d49946c41332f6da2cee728.png" />
          <br>
          <font size="16">INTEL</font>
        </div>
      </div>
    </div>
  </main>
  <br><br>
  <main class="container">



<?php

// Debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$json = file_get_contents('https://api.starcitizen-api.com/7251613ae2ec7b792655ce6659e2745d/v1/live/organization_members/ALPT?rank=1');
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;">';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';


$json = file_get_contents('https://api.starcitizen-api.com/7251613ae2ec7b792655ce6659e2745d/v1/live/organization_members/ALPT?rank=2');
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;">';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';


$json = file_get_contents('https://api.starcitizen-api.com/7251613ae2ec7b792655ce6659e2745d/v1/live/organization_members/ALPT?rank=3');
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;">';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';


$json = file_get_contents('https://api.starcitizen-api.com/7251613ae2ec7b792655ce6659e2745d/v1/live/organization_members/ALPT?rank=4');
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;" >';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';


$json = file_get_contents('https://api.starcitizen-api.com/7251613ae2ec7b792655ce6659e2745d/v1/live/organization_members/ALPT?rank=5');
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;">';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';

?>
</main>
<!--
stdClass Object ( [data] => Array ( 
    [0] => stdClass Object ( 
    [display] => Kanga 
    [handle] => KangaPT 
    [image] => https://robertsspaceindustries.com/media/2y0xoynaqa3vjr/avatar/Black-Hole.jpg 
    [rank] => Comando Operacional 
    [roles] => Array ( [0] => Ranks & Roles [1] => Recrutamento ) 
    [stars] => 5 ) 
    
    [1] => stdClass Object ( 
    [display] => vi7alis 
    [handle] => Vi7alis 
    [image] => https://robertsspaceindustries.com/media/zcbemyrvkho5br/avatar/012001013-750x750.png 
    [rank] => Comando Operacional 
    [roles] => Array ( [0] => Comando ) 
    [stars] => 5 ) 
    
    [2] => stdClass Object ( 
            [display] => Duke of Goa [ALPT] 
            [handle] => Afonso-Albuquerque 
            [image] => https://robertsspaceindustries.com/media/1hj3qkuevu1bgr/avatar/Duke-Of-Goa.jpg 
            [rank] => Comando Operacional [roles] => Array ( ) [stars] => 5 ) [3] => stdClass Object ( [display] => Richard SaintField [handle] => rsaintfield [image] => https://robertsspaceindustries.com/media/78mfk2vpyi2ezr/avatar/Richardeve.jpg [rank] => Comando Operacional [roles] => Array ( [0] => Comando ) [stars] => 5 ) [4] => stdClass Object ( [display] => neo_azores [handle] => neo_azores [image] => https://robertsspaceindustries.com/media/yo3n91b6kix3wr/avatar/InitiativeCompass.png [rank] => Comando Operacional [roles] => Array ( ) [stars] => 5 ) [5] => stdClass Object ( [display] => Krux [ALPT] [handle] => IKrux [image] => https://robertsspaceindustries.com [rank] => Comando Operacional [roles] => Array ( [0] => Comando [1] => Ranks & Roles [2] => Recrutamento [3] => Marketing ) [stars] => 5 ) [6] => stdClass Object ( [display] => Xarpas [handle] => Xarpas [image] => https://robertsspaceindustries.com/rsi/static/images/account/avatar_default_big.jpg [rank] => Comando Operacional [roles] => Array ( [0] => Comando ) [stars] => 5 ) [7] => stdClass Object ( [display] => Mo0oner [ALPT] [handle] => Mo0oner [image] => https://robertsspaceindustries.com/media/xcryrbwcx2pndr/avatar/Moon.png [rank] => Comando Operacional [roles] => Array ( [0] => Comando [1] => Ranks & Roles [2] => Recrutamento [3] => Marketing ) [stars] => 5 ) ) [message] => ok [source] => live [success] => 1
    -->


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <script src="./resources/js/main.js"></script>
</body>

</html>

<!--

<section style="display:flex; justify-content: space-evenly">
  <br><br>Rank 1:<br><br>
  <div class="card" style="width: 100px;">
    <img width="100" height="100" src="https://robertsspaceindustries.com/media/2y0xoynaqa3vjr/avatar/Black-Hole.jpg" \>
    <div class="card-body">
      <h5 class="card-title">KangaPT</h5>
      <p class="card-text">
        <br>Display: Kanga
        <br>Rank: Comando Operacional
        <br>Stars: 5
        <br>Roles: Array
      </p>
    </div>
</div>
<div class="card" style="width: 18rem;"><img width="100" height="100" src="https://robertsspaceindustries.com/media/zcbemyrvkho5br/avatar/012001013-750x750.png" \><div class="card-body"><h5 class="card-title">Vi7alis</h5><p class="card-text"><br>Display: vi7alis<br>Rank: Comando Operacional<br>Stars: 5<br>Roles: Array
(
    [0] => Comando
)
</p></div></div>

-->