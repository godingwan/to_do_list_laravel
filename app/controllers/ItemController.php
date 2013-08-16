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

  public function index()
  {
    // return all the items
    $items = $this->item->all();

    return View::make('items.index', compact('items'));
  }

  public function create()
  {
    return View::make('items.create');
  }

  public function store()
  {
    $input = Input::all();

    // checks the input with the validator rules from the Item model
    $v = Validator::make($input, Item::$rules);

    if ($v->passes())
    {
      $this->item->create($input);

      return Redirect::route('items.index');
    }

    return Redirect::route('items.create');
  }
}
