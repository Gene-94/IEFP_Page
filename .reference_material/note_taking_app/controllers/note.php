<?php

$page = "Note";

$current_user_id = 1;

$note = get_note($_GET['id']);


if ($note['user_id'] !== $current_user_id){
    status_err(403); //unauthorized
}



$user = get_user($note['user_id']);




require ('views/note.view.php');


