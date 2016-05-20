<?php

class Node {

  public $exits = [];

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

function setExit($node, $exit){
  $this->exits[$exit] = $node;
}


  // function setNorth($node){
  //   $this->north = $node;
  // }

  // function setEast($node){
  //   $this->east = $node;
  // }

  // function setSouth($node){
  //   $this->south = $node;
  // }

  // function setWest($node){
  //   $this->west = $node;
  // }

  function setLocationName($loc){
    $this->location = $loc;
  }

  function getLocation() {
    echo $this->location;
  }

}

?>