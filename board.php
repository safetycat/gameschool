<?php
$stairWay   = new Node();
$hall       = new Node();
$diningRoom = new Node();
$kitchen    = new Node();
$ballRoom   = new Node();
$conservatory = new Node();
$library    = new Node();
$study      = new Node();
$lounge     = new Node();

$stairWay->setLocationName("Stair Way");
$hall->setLocationName("Hall");
$diningRoom->setLocationName("Dining Room");
$kitchen->setLocationName("Kitchen");
$ballRoom->setLocationName("Ball Room");
$conservatory->setLocationName("Conservatory");
$library->setLocationName("Library");
$study->setLocationName("Study");
$lounge->setLocationName("Lounge");

// build the board

$stairWay->setNorth($ballRoom);
$stairWay->setWest($diningRoom);
$stairWay->setEast($library);
$stairWay->setSouth($hall);

$ballRoom->setWest($kitchen);
$ballRoom->setSouth($stairWay);

$kitchen->setEast($ballRoom);
$kitchen->setSouth($diningRoom);

$diningRoom->setNorth($kitchen);
$diningRoom->setEast($stairWay);
$diningRoom->setSouth($lounge);

$lounge->setNorth($diningRoom);

$hall->setNorth($stairWay);
$hall->setEast($study);

$study->setWest($hall);

$library->setWest($stairWay);
$library->setNorth($conservatory);

$conservatory->setSouth($library);

?>