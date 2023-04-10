<?php 
function input($name, $value,$type,$placeholder){
    $form="
    <div class=\" form-group my-4\">
                
                <input type='$type' name='$name' placeholder='$placeholder' class=\"form-control\" value='$value'>
            </div>";
            echo $form;
}
?>