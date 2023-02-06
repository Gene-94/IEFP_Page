<?php

$page = "Notes";

$current_user_id = 1;
 
$userNotes = get_notes("where user_id = ?", [$current_user_id]);

//dd(user_name(1, $users));

require('views/notes.view.php');