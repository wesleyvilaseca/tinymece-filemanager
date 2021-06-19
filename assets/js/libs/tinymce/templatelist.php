<?php
include '../../../../config/config.php';

$list = [
    (object)["title"=> "email adress", "description"=> "email adress", "url" => FILEMANAGER['TEMPLATELIST'] .  "teste.html"]
];

echo json_encode($list);