<?php
 switch($_GET["accion"]){
  case 'SetData':
    include("class-form.php");
    echo Form::SetForm($_POST);
  break;
  case 'GetData':
    include("class-form.php");
    echo Form::GetForm();
  break;
 };
?>