<?php

class Detail extends Main_controller
{
  public function __construct()
  {
    parent::__construct();
  }
  public function index()
  {
    $this->load_views('detail');
  }
}
