<?php

class Person {

  public $fname;

  public $lname;

  public function __construct($fname, $lname) {

    $this->fname = $fname;

    $this->lname = $lname;

  }

  public function info() {

    echo "My name is {$this->fname} {$this->lname}";

  }
}

// Strawberry is inherited from Fruit
class Student extends Person {

	public $age;

	public function __construct($fname, $lname, $age) {

		parent::__construct($fname, $lname);

		$this->age = $age;
	}

	public function message() {

		parent::info();
		echo " and my age is {$this->age}";
	}
}

$student = new Student("Kevin Dale", "Tabayocyoc", 29);
$student->message();
?>