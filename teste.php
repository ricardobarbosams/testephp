<?php 
public function get_things( $x ) {
 
  $l = array();
 
  for ( $i = 0; $i < count( $x ); $i++ ) {
 
    if ( true === $x[ $i ] ) {
      array_push( $l, $x[ $i ] );
    }
 
  }
 
  return $l;
 
}

?>
