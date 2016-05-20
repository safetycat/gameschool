<?php

class Node {

  var $north;
  var $east;
  var $south;
  var $west;
  var $location;

  // function __construct($loc) {
  //   if(isset($loc)){
  //     $this->setLocationName($loc)
  //   }
  // }

  function setNorth($node){
    $this->north = $node;
  }

  function setEast($node){
    $this->east = $node;
  }

  function setSouth($node){
    $this->south = $node;
  }

  function setWest($node){
    $this->west = $node;
  }

  function setLocationName($loc){
    $this->location = $loc;
  }

  function getLocation() {
    echo $this->location;
  }

}

?>