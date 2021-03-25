<?php
// var_dump($_POST);

$data = array_map('trim', $_POST);
$errors = [];

// validation
if (empty($data['user_name'])) {
  $errors[] = 'Le nom est manquant';
}
if (empty($data['user_firstname'])) {
  $errors[] = 'Le prénom est manquant';
}
if (empty($data['user_email'])) {
  $errors[] = 'Le mail est manquant';
}
if(!filter_var($data['user_email'], FILTER_VALIDATE_EMAIL)){
  $errors[] = "L’adresse mail n’est pas au bon format.";
}
if (empty($data['user_phone'])) {
  $errors[] = 'Le numéro de téléphone est manquant';
}

if (!empty($errors)) {
  for($i=0;$i< count($errors);$i++) {
    echo $errors[$i]. "<br>";
  }
} else {
  echo 'Merci '. $_POST['user_firstname'] . ' ' . $_POST['user_name'] . ' de nous avoir contacté à propos de ' . $_POST['user_topic'] . "<br>";
  echo 'Un de nos conseiller vous contactera soit à l’adresse ' . $_POST['user_email'] . ' ou par téléphone au ' . $_POST['user_phone'] . ' dans les plus brefs délais pour traiter votre demande :' . "<br>" ;
  echo $_POST['user_message'];// handle the form data, e.g. save in database
}



