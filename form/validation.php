<?php

function validation($request){//postの配列

  $errors = [];

  if(empty($request['your_name'])){
    $errors[] = '使命は必須だよ';
  }
  return $errors;
}
