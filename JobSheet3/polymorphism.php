<?php
// mendifinisikan kelas Person
class Person{
    protected $name; 

    // konstruktor untuk menginisialisasi atribut name
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){ // metode yang harus diimplementasikan oleh kelas turunan
        return $this->name;
    }
}

// kelas Student merupakan turunan dari kelas Person
class Student extends Person{
    public $studentID;
    // kelas Student merupakan turunan dari kelas Person
    public function __construct($name,$studentID){
        parent::__construct($name); // memanggil konstruktor dari kelas induk (Person)
        $this->studentID = $studentID; // menginisialisasi atribut studentID
    }
     public function getStudentID(){ // metode untuk mengembalikan nilai atribut studentID
        return $this->studentID;
     }
      // implementasi metode getName untuk kelas Student
     public function getName(){
        return "$this->name memiliki studentID " .$this->studentID. " <br>";
     }
}
// kelas Teacher merupakan turunan dari kelas Person
class Teacher extends Person{
    private $teacherID;
     // konstruktor untuk menginisialisasi atribut name dari kelas induk dan atribut teacherID
    public function __construct($name,$teacherID)
    {
        parent::__construct($name); // memanggil konstruktor dari kelas induk (Person)
        $this->teacherID = $teacherID; // menginisialisasi atribut teacherID
    }

    public function getTeacherID(){  // metode untuk mengembalikan nilai atribut teacherID
        return $this->teacherID;
    }
    // implementasi metode getName untuk kelas Teacher
    public function getName(){
        return "Guru " .$this->name. " Memiliki teacherID " .$this->teacherID. "";
    }
}
// membuat objek dari kelas Student dengan nama dan studentID
$student1 = new Student ("Rafardhan Atala", "230101065");
echo $student1 ->getName(); // menampilkan nama dan studentID mahasiswa

// membuat objek dari kelas Teacher dengan nama dan teacherID
$teacher1 = new Teacher ("Ratna Dewi", "012898751");
echo $teacher1 ->getName ();// menampilkan nama dan teacherID guru

?>