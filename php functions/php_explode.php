<?php 

$emails = "admin1@chopbox.app,admin2@chopbox.app,fongohmartin@chopbox.app";
//    $exploded = explode(",",$emails);

    $exploded = explode(",",$emails);

    // ($exploded);
 


// echo $exploded[2];

// echo "My email is   " . $exploded[2];

// foreach ($emails as $email) {
//     print_r("My email is   " . $exploded[$email]);
// }


foreach ($exploded as $explode) {
    // print_r( "$explode <br>");
  print_r( $explode . "<br>" );     
  }





?>