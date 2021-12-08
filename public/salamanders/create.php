<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $salamanderName = $_POST['salamanderName'] ?? '';
  $salamanderHabitat = $_POST['salamanderHabitat'] ?? '';
  $salamanderDescription = $_POST['salamanderDescription'] ?? '';

  echo "Form parameters<br>";
  echo "Salamander name: " . $salamanderName . "<br>";
  echo "Salamander habitat: " . $salamanderHabitat . "<br>";
  echo "Salamander description: " . $salamanderDescription . "<br>";
} else {
  redirect_to(url_for('salamanders/new.php'));
}

?>
