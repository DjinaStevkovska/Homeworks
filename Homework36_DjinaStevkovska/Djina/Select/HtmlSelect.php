<?php

namespace Djina\Select;

class HtmlSelect {
    public function makeSelect() {
        makeOptions();
        echo "<select name =" .$this->getName(). "class=/".BOOTSTRAP_SELECT_CLASS."><br>";
        // echo "<option value='' selected>Choose Browser</option>";
        // echo $this->makeOptions($this->value);
        $this->makeOptions($this->getValue());
        echo "</select>";
     }
}
