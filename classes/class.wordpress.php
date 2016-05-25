<?php

class Wordpress {
  public function action(){
    return ( new \ReflectionClass(Action::class) )
      ->newInstanceArgs( func_get_args() );
  }
}

