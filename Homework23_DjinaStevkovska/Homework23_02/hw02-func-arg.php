<?php
$conditions = array('Sunshine', 'Clouds', 'Rain', 'Hail', 'Sleet', 'Snow', 'Wind', 'Cold', 'Heat');
function createConditionOptions ($conditions) {
    for($i=0; count($conditions) > $i; $i++) 
        echo '<input type="checkbox" name="weather[]" value=" '.$conditions[$i].' ">';
        echo '<label for=" '.$conditions[$i].' ">' . ucfirst($conditions[$i]) . '</label><br>';
    }
}
createConditionOptions($conditions);
?>