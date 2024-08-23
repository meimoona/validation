<?php
//define veriables and set to empty values 
$name=$email=$password="";
$nameERR=$emailERR=$passweordERR="";
  
//function to sanitize data 
function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;

}
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //validation name
    if(empty($_post["name"])){
        $nameErr="NAME is required";

    }else{
        $name=test_input($_POST["name"]);
        //check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z-']*$/",$name)){
            $nameErr="Only letters and white space allowed";

        }
    }
    //validation email 
    if(emoty($_POST["EMAIL"])){
        $emailErr="Email is required";

    }else{
        $email =test_input ($_POST["email"]);
        //check if emails well-formed
        if(!filter_var($email,FILTER_VALIDATION_EMAIL)){
            $emailErr="INVALID EMAIL FORMET";

        }
    }
    //VALIDTION POASSWORD 
    if(emoty($_POST["PASSWORD"])){
        $emailErr="password is required";

    
    }else{
        $email=test-input($_POST["PASSWORD"]);
        //CHECK PASSWORD STRENTH(MINIMUM 8 CHARACTERS,AT LEAST 1 NUMBER)
        IF(STRLEN($password)<8||!preg_match("/[0_9]/",$password)){
            $passweordErr="password must be at least 8 characters long and include at least one
            number";
        }
    }
}