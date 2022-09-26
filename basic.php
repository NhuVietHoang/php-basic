
<?php
// include "db-connect.php";
// $query="SELECT * FROM products ORDER BY id";
// $data=mysqli_query($conn, $query); 
echo "1";
class Person{
    public $name ="";
    public $age = 0;
    public $interest =[];
    public function __construct($name,$age,$interest=[]){
         $this->name = $name;
         $this->age = $age;
         $this->interest = $interest;
    }
    public function getInfo(){
        return "name:$this->name age:$this->age";
    }
    public function getInterest(){
        return $this->interest;
    }
}
$person = new Person("hoang",22,["game","muzic","sleep"]);
echo $person->getInfo();
$interest = $person->getInterest();
foreach($interest as $key=>$value){
    echo"$key";
    echo "$val";
}