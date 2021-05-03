<?php
 switch($_GET["accion"]){
  case 'SetData':
    include("../Class/class-form.php");
    echo Form::SetForm($_POST);
  break;
  case 'GetData':
    include("../Class/class-form.php");
    echo Form::GetForm();
  break;
 };
?>