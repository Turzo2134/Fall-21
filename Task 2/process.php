<?php

	   $formdata = array(
	      'firstname'=> $_POST["firstname"],
	      'lastname'=> $_POST["lastname"],
	      'email'=>$_POST["email"],
	      'age'=>$_POST["age"],
	      'pwd'=>$_POST["pwd"],
	      'languague'=> $_POST["languague"],
	      'myfile'=> $_POST["myfile"],
	      'designation'=> $_POST["designation"]
	   );
       $existingdata = file_get_contents('data.json');
       $tempJSONdata = json_decode($existingdata);
       $tempJSONdata[] =$formdata;
  
	   $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   

	   if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);

    
	 echo "my value: ".$mydata[1]->lastName;

?>