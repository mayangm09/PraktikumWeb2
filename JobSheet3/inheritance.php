<?php
// mendefinisikan kelas Person
class Person{
    protected $name; //atribut bersifat protected sehingga bisa diakses oleh kelas turunan
    // konstruktor untuk menginisialisasi atribut name
    public function __construct($name) 
    {
        $this->name = $name;
    }
    // metode untuk mengembalikan nilai atribut name
    public function getName(){
        return $this->name;
    }
}
// kelas Student merupakan turunan dari kelas Person
class Student extends Person{
    public $studentID;
     // konstruktor untuk menginisialisasi atribut name dari kelas induk dan atribut studentID
    public function __construct($name,$studentID){
        parent::__construct($name);  // memanggil konstruktor dari kelas induk
        $this->studentID = $studentID; // menginisialisasi atribut studentID
    }
     public function getStudentID(){ // metode untuk mengembalikan nilai atribut studentID
        return $this->studentID;
     }
}

// membuat objek dari kelas Student dengan nama dan studentID
$student1 = new Student ("Rafardhan Atala", "230101065");
// menampilkan nama mahasiswa dan studentID yang sudah ditentukan
echo "Mahasiswa " . $student1->getName() . " memiliki StudentID " . $student1->getStudentID() . "";
?>