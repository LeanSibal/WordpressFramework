<?php
class Action {
  private $tag = '';
  private $priority = 10;
  private $accepted_args = 1;

  public function __construct( $tag = '' , $function = null ){
    $this->tag = $tag;

    if( is_callable( $function ) ) {
      $args_count = ( new ReflectionObject( $function ) )->getMethod('__invoke')->getNumberOfParameters();
      if( $args_count ) {
        $this->accepted_args = $args_count;
      }
    }

    add_action( $this->tag, $function, $this->priority, $this->accepted_args);

  }

}
