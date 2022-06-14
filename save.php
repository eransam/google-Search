<?php

//get the input from the form
$search = $_GET['search'];


//optional: //save the input in the session
// $_SESSION['input'] = $input;


// send the input to google search
$theUrl = "https://www.google.com/search?q=" . $search;

//redirect to the search result
header("Location: $theUrl");
