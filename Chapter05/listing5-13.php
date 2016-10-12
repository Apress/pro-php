<?php
class ParentBase {
  public static function render() {
    return get_called_class();
  }
}
class Decendant extends ParentBase {}

echo Descendant::render();