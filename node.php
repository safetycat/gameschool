<?php

class Node {

  public $exits = [];

  var $room;


function setExit($exit, $node){
  $this->exits[$exit] = $node;
}


  function setLocationName($loc){
    $this->room = $loc;
  }

  function getLocation() {
    echo $this->room;
  }

}

?>