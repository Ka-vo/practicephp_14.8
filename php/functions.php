<?php
function getUsersList()
{
  $file = 'C:\OpenServer\domains\localhost\practicePHP14.8\credentails.json';
  $json_array = json_decode(file_get_contents($file), true);

  return  $json_array;
  // return [
  //   'Gena Buckin' => sha1('туфли'),
  //   '1' => sha1('1'),
  //   'Boris Britva' => sha1('хренпопадешь'),
  // ];
}
//print_r(getUsersList());
//echo "<pre>";


function existsUser($login)
{
  return !empty(getUsersList()[$login]);
}
//echo var_export(existsUser("Naruto"));
//echo "<pre>";


function checkPassword($login, $password)
{
  return (!empty(getUsersList()[$login]) && (getUsersList()[$login] == sha1($password)));
}
//echo var_export(checkPassword('Gena Buckin', 'туфлиf'));
//echo "<pre>";


function getCurrentUser()
{
  var_dump($_SESSION['login']);
  return $_SESSION['login'] ?? null;
}

//echo getCurrentUser();
