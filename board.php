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

$stairWay->setExit('North', $ballRoom );
$stairWay->setExit('West',$diningRoom );
$stairWay->setExit('East', $library );
$stairWay->setExit('South', $hall );

$ballRoom->setExit('West', $kitchen);
$ballRoom->setExit('South', $stairWay );

$kitchen->setExit('East', $ballRoom );
$kitchen->setExit('South', $diningRoom );

$diningRoom->setExit('North', $kitchen );
$diningRoom->setExit('East', $stairWay );
$diningRoom->setExit('South', $lounge );

$lounge->setExit('North', $diningRoom );

$hall->setExit('North', $stairWay );
$hall->setExit('East', $study );

$study->setExit('West', $hall);

$library->setExit('North', $conservatory );
$library->setExit('West',$stairWay );

$conservatory->setExit('South', $library );
?>