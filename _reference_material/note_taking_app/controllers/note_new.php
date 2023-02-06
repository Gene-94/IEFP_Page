<?php

$page = "New Note";

$current_user_id = 1;



if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $note = trim($_POST['note_body']);
    if(!empty($note)){
        add_note([$note, $current_user_id]);
       // echo "<script>location.href='/notes';</script>";
       header('location: /notes');
       die();
    }else{
        $isEmpty = true;
    }
}

require ('views/new_note.view.php');