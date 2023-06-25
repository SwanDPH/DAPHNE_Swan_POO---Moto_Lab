<?php
spl_autoload_register(function ($class_name){


if(str_ends_with($class_name,'Controller')){
    include 'Controller/'.$class_name.'.php';
} else if(str_ends_with($class_name,'Manager')){
    include 'Model/manager/'.$class_name.'.php';
} else {
    include 'Model/class/'.$class_name.'.php';
}
});
?>