<?php

class Select {
    public $name;    // name of the select field
    public $value;   // option values

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setValue($value) {
        if(is_array($value)){
            foreach ($value as $key => $browser) {
                $this->value[] = $browser;
            }
        }
    }

    public function getValue() {
        return $this->value;
    }

    public function makeOptions($value) {
        foreach ($value as $key) {
            echo "<option value='$key'>" .$key. "</option>";

        }

    }
    public function makeSelect() {
        echo "<select name=" .$this->getName(). "><br>";
        echo "<option value='' selected>Choose browser</option>";
        echo $this->makeOptions($this->value);
        echo "</select>";

    }
}
?>
