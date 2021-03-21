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
  <link rel="stylesheet" href="../resources/css/main.css">
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
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
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
        <form action="." align="center" method="get">
          <div class="form-group">
            <br>
            <input type="text" class="form-control" id="org" name="org" placeholder="Enter Organization Name" required>
          </div>
          <br><input type="submit" class="btn btn-success" id="Search" />&nbsp;
          <a class="btn btn-primary" href="https://pweb.solutions/starcitizen/intel/"/>Back to Player Intel</a>
          <br><br>
        </form>

      </div>
    </div>
  </main>
  <br><br>
  <main class="container" align="center">
    

<?php

// Debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Global Variables
if (isset($_GET['org'])){
  define("ORGANIZATION", htmlspecialchars($_GET['org']));
};

  define("HOST", "https://api.starcitizen-api.com/");
  define("API_KEY","7251613ae2ec7b792655ce6659e2745d");
  define("VERSION","/v1/live/");

// Org Overview
if (isset($_GET['org'])){

  $url = HOST . API_KEY . VERSION . 'organization/' . ORGANIZATION; 
  $json = file_get_contents($url);
  $obj = json_decode($json);
  $obj2 = $obj->data;

  $total = count((array)$obj2);


  if($total <> 0){
  echo '<hr />';
  echo '<img width="300" height="300" src="' . $obj2->logo . '" style="display: block; margin-left: auto; margin-right: auto;" />';
  echo '<h1>' . $obj2->name . '</h1>';
  echo '<p>' . $obj2->headline->plaintext . '</p>';
  echo '<a target="_blank" class="btn btn-primary" href="' . $obj2->url . '">Org Page</a>';
  echo '&nbsp;&nbsp;';
  echo '<a target="_blank" class="btn btn-primary" href="' . $obj2->url . '/members">Members</a>';

echo '<br><hr /><br>';

$url = HOST . API_KEY . VERSION . 'organization_members/' . ORGANIZATION . '?rank=1'; 
$json = file_get_contents($url);
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;">';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text" align="left">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';

$url = HOST . API_KEY . VERSION . 'organization_members/' . ORGANIZATION . '?rank=2'; 
$json = file_get_contents($url);
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;">';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text" align="left">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';

$url = HOST . API_KEY . VERSION . 'organization_members/' . ORGANIZATION . '?rank=3'; 
$json = file_get_contents($url);
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;">';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text" align="left">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';

$url = HOST . API_KEY . VERSION . 'organization_members/' . ORGANIZATION . '?rank=4'; 
$json = file_get_contents($url);
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;" >';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text" align="left">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';

$url = HOST . API_KEY . VERSION . 'organization_members/' . ORGANIZATION . '?rank=5'; 
$json = file_get_contents($url);
$obj = json_decode($json);
$obj2 = $obj->data;

echo '<h2>' . $obj2[0]->rank .'</h2>';
echo '<section class="d-flex flex-wrap justify-content-between align-items-center" style="gap:10px;">';
foreach($obj2 as $value){
    echo '<div class="card info_card" style="width:300px" style="margin:5px;">';
    echo '<img width="100" height="100" src="' . $value->image . '" style="display: block; margin-left: auto; margin-right: auto;" />';
    echo '<div class="card-body">';
    echo '<h5 class="card-title" align="center">'. $value->handle . '</h5>';
    echo '<p class="card-text" align="left">';
    echo '<br>Display: ' . $value->display;
    echo '<br>Stars: ' . $value->stars;
    echo '<br>Roles: ';
    print_r($value->roles);
    echo '</p>';
    echo '</div></div>';
}
echo '</section>';
echo '<br><hr /><br>';
}
else{
  echo '<p style="color:red; font-size: 150%;">No ORG found!</p>';
};
};

?>
  <p align="center" style="font-size: 90%;">
    Star Citizen INTEL is a third-party tool that consumes Star Citizen technologies. Any of the trademarks, service marks, collective marks, design rights or similar rights that are mentioned or used are the property of their respective owners.
  </p>
  <p align="center" style="font-size: 90%;">
    Coded by <a target="_blank" href="mailto:patrick.pulfer1@gmail.com">Patrick Pulfer</a>
  </p>

</main>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
  <script src="../resources/js/main.js"></script>
</body>

</html>