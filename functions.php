<?php


// se la stringa passata come parametro contiene @ e . allora restituisco true altrimenti false
function checkMail($mail){

  $result = false;

  if(str_contains($mail, '@') && str_contains($mail, '.')){
    return true;
  }

  return $result;
}