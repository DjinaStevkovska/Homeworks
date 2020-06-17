<?php
namespace Djina\Select;


abstract class ASelect {
    public $name;
    public $values;

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setValue($value) {
        if(is_array($value)) {
            foreach ($value as $key => $browser) {
                $this->values[] = $browser;
            }
        }
    }

    public function getValue() {
        return $this->values;
    }

    protected function makeOptions($value) {
        foreach ($value as $key) {
            echo "<option value='$key'>" .$key. "</option>";
        }
    }

    abstract public function makeSelect();

    // public abstract function makeSelect() {
    //     echo "<select name =" .$this->getName(). "class=/".BOOTSTRAP_SELECT_CLASS."><br>";
    //     echo "<option value='' selected>Choose Browser</option>";
    //     echo $this->makeOptions($this->value);
    //     echo "</select>";
    // }
}