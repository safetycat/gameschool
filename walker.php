<?php

class Walker {

  var $north;
  var $east;
  var $south;
  var $west;
  var $location;

  function initialiseLocation($node) {
    $this->location = $node;
  }


  function takeCommand($command){
    switch ($command) {
      case 'n':
        $this->location = $this->location->north;
        break;

      case 'e':
        $this->location = $this->location->east;
        break;

      case 's':
        $this->location = $this->location->south;
        break;

      case 'w':
        $this->location = $this->location->west;
        break;

      default:
        # code...
        break;
    }
  }

  function whereAreYou() {
    $this->location->getLocation();
  }

}

?>