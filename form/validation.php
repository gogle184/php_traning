<?php

function validation($request){//postの配列

  $errors = [];

  if(empty($request['your_name']) || 20 < mb_strlen($request['your_name'])){
    $errors[] = '使命は必須だよ。20文字以内にしてね';
  }

  if(empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)){
    $errors[] = 'メールアドレスは必須だよ。正しい形式で入力してね';
  }

  if(!empty($request['url'])){
    if(!filter_var($request['url'], FILTER_VALIDATE_URL)){
      $errors[] = 'urlは正しい形式で入力してね';
    }
  }

  if(!isset($request['gender']) ){
    $errors[] = '性別は必須だよ。';
  }

  if(empty($request['age']) || 6 < $request['age']){
    $errors[] = '年齢は必須だよ。';
  }

  if(empty($request['contact']) || 200 < mb_strlen($request['contact'])){
    $errors[] = 'お問い合わせ内容は必須だよ。200文字以内にしてね';
  }

  if(empty($request['caution'])){
    $errors[] = '注意事項入れてや';
  }
  return $errors;
}
