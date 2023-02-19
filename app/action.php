<?php

include('config/Db.php');
$d = new Db;
$pdo = $d->connect();

foreach ($_POST['name'] as $key => $value) {

    $q = 'INSERT INTO  user(name, email, mobile) VALUES(:name,:email,:mobile)';
    $sts = $pdo->prepare($q);
    $sts->execute([
        'name' => $value,
        'email' => $_POST['email'][$key],
        'mobile' => $_POST['mobile'][$key]
    ]);
}


echo 'Items inserted Successfully';
