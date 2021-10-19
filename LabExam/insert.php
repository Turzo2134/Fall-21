<?php

	  
	      $firstname= $_POST["firstname"];
	      $lastname= $_POST["lastname"];
	      $email=$_POST["email"];
	      $Gender=$_POST["Gender"];
	      $Mobile=$_POST["Mobile"];
	      $date= $_POST["date"];
	      $hsc= $_POST["hsc"];
	      $ssc= $_POST["ssc"];
          $course= $_POST["course"];
          $year= $_POST["year"];
          $Semester= $_POST["Semester"];

          if ( ! empty($firstname) || !empty($lastname) || !empty($email) || !empty($Gender) ||

              !empty ($Mobile) || !empty($date) || !empty($hsc) || !empty($ssc) || !empty($course) 
              || !empty($year) || !empty($Semester)) {
                  $host = "localhost";
                  $dbUsername = "root";
                  $dbPassword = "";
                  $dbname = "aiub";

$conn = new mysqli($host, $dbUsername, $dbPassword ,$dbname );

              } else {
                  echo "All field are required";
                  die();
              }
	 