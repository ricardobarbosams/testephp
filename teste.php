<?php 
function get_things( $x ) {
 
  $l = array();
  $l = array();
  $l = array();
  $l = array();
  $l = array();
  $l = array();
 
  for ( $i = 0; $i < count( $x ); $i++ ) {
 
    if ( true === $x[ $i ] ) {
      array_push( $l, $x[ $i ] );
    }
 
  }
 
  return $l;
 
}

?>
