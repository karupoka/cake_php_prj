<?php
// 文字列のみを許可する
// ①
if (!isset($_POST['name'])) {
    $name = null;
} elseif (!is_string($_POST['name'])) {
    $name = false;
} else {
    $name = $_POST['name'];
}

// ②
$name = filter_input(INPUT_POST, 'name');
if (is_string($name)) {
    /* 文字列として送信されてきた場合のみ実行したい処理 */
}



// 文字列を強制する
// ①
if (!isset($_POST['name']) || !is_string($_POST['name'])) {
  $name = '';
} else {
  $name = $_POST['name'];
}

// ②
$name = (string)filter_input(INPUT_POST, 'name');


// 1次元配列を強制する。
// ①
if (isset($_POST['items'])) {
  $items = $_POST['items'];
  if (!is_array($items)) {
      $items = [$items];
  }
  foreach ($items as $key => $value) {
      if (!is_string($value)) {
          unset($items[$key]);
      }
  }
} else {
  $items = [];
}

// ②
$items = isset($_POST['items']) ? (array)$_POST['items'] : [];
$items = array_filter($items, 'is_string');





// テキストボックスの場合、から文字に備える
foreach (['a', 'b', 'c'] as $i) {
  $texts[$i] =
      isset($_POST['text'][$i]) && is_string($_POST['text'][$i]) ?
      $_POST['text'][$i] :
      ''
  ;
}


// チェックボックスの場合、true false で判定
// key で判定
foreach (['a', 'b', 'c'] as $i) {
  $checks[$i] = isset($_POST['checks'][$i]);
}

// 値で判定
$checks = isset($_POST['checks']) ? (array)$_POST['checks'] : [];
$checks = array_values(array_intersect($checks, ['a', 'b', 'c']));