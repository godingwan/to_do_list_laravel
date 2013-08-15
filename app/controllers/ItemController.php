<?php

class ItemController extends BaseController
{
  public function getIndex()
  {
    return View::make('item/index');
  }
}
