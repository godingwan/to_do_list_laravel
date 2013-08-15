<?php

class ItemController extends BaseController
{
  public function showIndex()
  {
    return View::make('item/index');
  }
}
