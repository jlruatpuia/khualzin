<?php

function SerializeArray($array){
  $result = null;
  foreach ($array as $key => $value) {
    $result = $value . ', ';
  }
  dd($result);
  return $result;
}

function setAttribute($value) {
  return json_encode($value);
}

function getAttribute($value) {
  return json_decode($value);
}

function getTownName($id) {
    $town = \App\Models\Town::find($id);
    return $town->town_name;
}
