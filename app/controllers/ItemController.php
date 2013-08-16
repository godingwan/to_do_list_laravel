<?php

class ItemController extends BaseController
{
  // create variable
  protected $item;

  // create constructor
  public function __construct(Item $item)
  {
    $this->item = $item;
  }

  public function getIndex()
  {
    // return all the items
    $items = $this->item->all();

    return View::make('items.index', compact('items'));
  }
}
