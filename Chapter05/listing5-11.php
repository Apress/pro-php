<?php
class ParentBase {
  static $property = 'Parent Value';
  public static function render() {
    return self::$property;
  }
}
class Descendant extends ParentBase {
  static $property = 'Descendant Value';
}
echo Descendant::render();