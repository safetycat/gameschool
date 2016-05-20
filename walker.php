<?php

class Walker {

  var $location;

  function initialiseLocation($node) {
    $this->location = $node;
  }


  function takeCommand($command){
    switch ($command) {
      case 'n':
      $direction = 'North';
        //$this->location = $this->location->exits['north'];
        break;

      case 'e':
        //$this->location = $this->location->east;
      $direction = 'East';
        break;

      case 's':
        //$this->location = $this->location->south;
       $direction = 'South';
        break;

      case 'w':
        //$this->location = $this->location->west;
      $direction = 'West';
        break;

      default:
        $direction = '';
        break;
    }
    if(isset($this->location->exits[$direction])){
      $this->location = $this->location->exits[$direction];
    }
    
  }

  function whereAreYou() {
    $this->location->getLocation();
  }

}

?>