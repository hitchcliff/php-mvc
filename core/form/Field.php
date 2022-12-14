<?php

namespace app\core\form;
use app\core\Model;

class Field
{
  public const TYPE_TEXT = 'text';
  public const TYPE_NUMBER = 'number';
  public const TYPE_EMAIL = 'email';
  public const TYPE_PASSWORD = 'password';

  public string $type;
  public Model $model;
  public string $attribute;

  public function __construct(Model $model, $attribute)
  {
    $this->type = self::TYPE_TEXT;
    $this->model = $model;
    $this->attribute = $attribute;
  }

  public function __toString()
  {
    return sprintf(
      '<div>
          <label>%s</label>
	        <input name="%s" type="%s" placeholder="Enter %s" value="%s" class="%s">
          <span>%s</span>
      </div>',
      $this->attribute,
      $this->attribute,
      $this->type,
      $this->attribute,
      $this->model->{ $this->attribute},
      $this->model->hasError($this->attribute) ? "is-invalid" : "",
      $this->model->getFirstError($this->attribute),
    );
  }

  public function passwordField()
  {
    $this->type = self::TYPE_PASSWORD;
    return $this;
  }
}