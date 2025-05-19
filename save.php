<?php
	$firstname = $_GET['fname'];
	$lastname = $_GET['lname'];

	echo $firstname;

?>

<hr>

<?php

class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

?>


<hr>


<?php

$apple = new Fruit("Apple");
echo $apple->get_name();

?>
<?php
    
    $color = "Red";

    if($color == "Red")
    {
      echo "Hii!!!!!!!!! $color", " ".$color. "!";
      echo "Hii!!!!!!!!! $color", $color;
      echo "Hii!!!!!!!!! $color" .$color. "!";
    }

    $name = "Alice";
    $age = 25;
    echo "Name: ", $name, ", Age: ", $age;

?>