<?php 
  include('./VIEW/header.php');

  if(isset($_GET['firstName']) && isset($_GET['lastName']) && isset($_GET['age'])){
    $firstname = filter_input(INPUT_GET, 'firstName', FILTER_UNSAFE_RAW);
    $lastname = filter_input(INPUT_GET, 'lastName', FILTER_UNSAFE_RAW);    
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_NUMBER_INT);
    if (!empty($firstname) && !empty($lastname) && !empty($age))
      include('./VIEW/altMain.php');
    else{
      include('./VIEW/main.php');
      echo "<script defer>alert('Missing or Incorrect Data!');</script>";
    }
  }
  else 
      include('./VIEW/main.php');

  include('./VIEW/footer.php');
?>