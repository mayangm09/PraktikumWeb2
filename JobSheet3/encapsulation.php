<?php
// mendefinisikan kelas Person
class Person{
    private $name;

     // konstruktor untuk menginisialisasi atribut name
    public function __construct($name)
    {
        $this->name = $name; // inisialisasi atribut name saat objek dibuat
    }

    public function getName(){ // metode untuk mengembalikan nilai atribut name
        return $this->name; // mengembalikan nilai name
    }

    public function setName($name){ // metode untuk mengubah nilai atribut name
        $this->name = $name; // mengubah nilai name
    }
}

class Student extends Person{ // kelas Student merupakan turunan dari kelas Person
    private $studentID;

    // konstruktor untuk menginisialisasi atribut name dari kelas induk dan atribut studentID
    public function __construct($name,$studentID){
        parent::__construct($name); // memanggil konstruktor kelas induk
        $this->studentID = $studentID; // inisialisasi atribut studentID
    }
    // metode untuk mengembalikan nilai studentID
     public function getStudentID(){
        return $this->studentID; // mengembalikan nilai studentID
     }

    // metode untuk mengubah nilai atribut studentID
     public function setStudentID($studentID){
        $this->studentID = $studentID; // mengubah nilai studentID
     }
}


// membuat objek dari kelas Student dengan nama dan studentID
$student1 = new Student ("Rafardhan Atala", "230101065");
// menampilkan nama mahasiswa dan studentID yang sudah ditentukan
echo "Mahasiswa " . $student1->getName() . " memiliki StudentID " . $student1->getStudentID() . "<br><br>";


// mengubah nilai atribut name dan studentID menggunakan sette
echo $student1->setName("Mark Lee");
echo $student1->setStudentID("230203061");

// menampilkan hasil setelah perubahan
echo "<b>Setelah Nama dan StudentID diubah : </b><br>";
echo "Mahasiswa " . $student1->getName() . " memiliki StudentID " . $student1->getStudentID() . "";
?>