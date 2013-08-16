<?php

class Item extends Eloquent {
  // add things that I want to be not mass assignable in here
  protected $guarded = array();

  public static $rules = array(
    'title' => 'required'
  );
}
