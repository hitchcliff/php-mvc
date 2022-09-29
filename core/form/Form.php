<?php

namespace app\core\form;
use app\core\Model;

class Form
{
  public function begin(string $action, string $method)
  {
    echo sprintf('<form action="%s" method="%s">', $action, $method);
    return new Form();
  }

  public function end()
  {
    echo '</form>';
  }

  public function field(Model $method, $attribute)
  {
    return new Field($method, $attribute);
  }

}