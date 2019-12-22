<?php

include 'log.php';

class pwned
{
    public function pwn()
    {
        system($this->command);
    }
}

class ReadFile
{
    public function __tostring()
    {
        return file_get_contents($this->filename);
    }
    public function __destrut()
    {
        $this->secret->pwn();
    }
}

class User
{
    public $username;
    public $isAdmin;

    public function PrintData(){
        if ($this->isAdmin){
            echo $this->username . " is an admin\n";
        } else {
            echo $this->username . " is not an admin\n";
        }
    }
}

//$obj = new User();
//$obj->username = 'shagun';
//$obj->isAdmin = FALSE;  //Changing the boolean leads to change in the output as is evaluated by the function
//echo serialize($obj); //prints how the php serialization is handled of the object
//output:
//  O:4:"User":2:{s:8:"username";s:6:"shagun";s:7:"isAdmin";b:1;}


//Adding vlunerable code 

 $obj  = unserialize($_POST['shagun']);
 $obj->PrintData();

?>

