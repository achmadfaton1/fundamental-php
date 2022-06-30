<?php
class Student{
    private $name;
    // private $id;
    // private $gender;

    function __construct($name){
        $this->name = $name;
        // $this->id = $id;
        // $this->gender = $gender;
    }
    // function gender(){
    //     if($this->gender = "man"){
    //         return "true";
    //     }
    //     return "false";
    // }

    function getName(){
        return $this->name;
    }

    function setName($name){
         $this->name = $name;
    }

    // function getGender(){
    //     return $this->gender;
    // }
    // function setGender($gender){
    //     $this->gender = $gender;
    // }
}

// $student = new Student("Fatoni",7021, "man");

// $student2 = new Student("Achmad",2, "man");

// echo $student->name;

// echo $student->gender();

$student->setName("Achmad");

echo $student->getName();

// $student->setGender("man");

// echo $student->getGender();
