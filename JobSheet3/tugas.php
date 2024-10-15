<?php

// mendefinisikan class person
class Person {
    protected $nama; 

    // Konstruktor untuk menginisialisasi nama
    public function __construct($nama)
    {
        $this->nama = $nama; // Mengatur nilai nama
    }

    // Metode untuk mendapatkan nama
    public function getNama(){
        return $this->nama; // Mengembalikan nilai nama
    }

    // Metode untuk mengatur nama
    public function setNama($nama){
        $this->nama = $nama; // Mengatur nilai nama
    }

    // metode yang harus diimplementasikan oleh kelas turunan
    public function getRole(){
        return "$this->nama"; // Mengembalikan nama sebagai peran
    }
}

// Kelas Dosen yang mewarisi dari Person
class Dosen extends Person {
    private $nip; 
    private $matakuliah; 

    // Konstruktor untuk menginisialisasi nama, NIP, dan mata kuliah
    public function __construct($nama,$nip,$matakuliah)
    {
        parent::__construct($nama); // Memanggil konstruktor dari kelas induk
        $this->nip =  $nip; // Mengatur nilai NIP
        $this->matakuliah = $matakuliah; // Mengatur nilai mata kuliah
    }

    // Metode untuk mendapatkan NIP
    public function getNip(){
        return $this->nip; // Mengembalikan nilai NIP
    }

    // Metode untuk mengatur NIP
    public function setNip ($nip){
        return $this->nip = $nip; // Mengatur nilai NIP
    }
    
    // Metode untuk mendapatkan mata kuliah
    public function geMatakuliah(){
        return $this->matakuliah; // Mengembalikan nilai mata kuliah
    }

    // Metode untuk mengatur mata kuliah
    public function setMatakuliah ($matakuliah){
        return $this->matakuliah = $matakuliah; // Mengatur nilai mata kuliah
    }

    // Implementasi metode getRole untuk kelas Dosen
    public function getRole(){
        return "Dosen $this->nama mengajar matakuliah $this->matakuliah "; // Mengembalikan informasi tentang dosen dan mata kuliah
    }
}

// Kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person{
    private $nim; 
    private $jurusan; 

    // Konstruktor untuk menginisialisasi nama, NIM, dan jurusan
    public function __construct($nama,$nim,$jurusan)
    {
        parent::__construct($nama); // Memanggil konstruktor dari kelas induk
        $this->nim = $nim; // Mengatur nilai NIM
        $this->jurusan = $jurusan; // Mengatur nilai jurusan
    }
    
    // Metode untuk mendapatkan NIM
    public function getNim(){
        return $this->nim; // Mengembalikan nilai NIM
    }

    // Metode untuk mengatur NIM
    public function setNip ($nim){
        return $this->nim = $nim; // Mengatur nilai NIM
    }
    
    // Metode untuk mendapatkan jurusan
    public function getJurusan(){
        return $this->jurusan; // Mengembalikan nilai jurusan
    }

    // Metode untuk mengatur jurusan
    public function setJurusan ($jurusan){
        return $this->jurusan = $jurusan; // Mengatur nilai jurusan
    }

    // Implementasi metode getRole untuk kelas Mahasiswa
    public function getRole(){
        return "$this->nama dengan NIM $this->nim merupakan mahasiswa Jurusan $this->jurusan"; // Mengembalikan informasi tentang mahasiswa
    }
    
}

// Kelas abstrak Jurnal
abstract class Jurnal {
    abstract public function getBuatJurnal(); // Metode abstrak untuk membuat jurnal
}

// Kelas untuk jurnal dosen yang mewarisi dari Jurnal
class JurnalDosen extends Jurnal{
    private $dosen; 
    
    // Konstruktor untuk menginisialisasi dosen
    public function __construct($dosen)
    {
        $this->dosen = $dosen; // Mengatur nilai dosen
    }
    
    // Metode untuk mendapatkan dosen
    public function getDosen(){
        return $this->dosen; // Mengembalikan nilai dosen
    }

    // Implementasi metode abstrak untuk membuat jurnal dosen
    public function getBuatJurnal(){
        return "Jurnal Dosen : $this->dosen"; // Mengembalikan informasi jurnal dosen
    }
}

// Kelas untuk jurnal mahasiswa yang mewarisi dari Jurnal
class JurnalMahasiswa extends Jurnal{
    private $mahasiswa; 
    
    // Konstruktor untuk menginisialisasi mahasiswa
    public function __construct($mahasiswa)
    {
        $this->mahasiswa = $mahasiswa; // Mengatur nilai mahasiswa
    }

    // Metode untuk mendapatkan mahasiswa
    public function getMahasiswa(){
        return $this->mahasiswa; // Mengembalikan nilai mahasiswa
    }

    // Implementasi metode abstrak untuk membuat jurnal mahasiswa
    public function getBuatJurnal(){
        return "Jurnal Mahasiswa : $this->mahasiswa"; // Mengembalikan informasi jurnal mahasiswa
    }
}

// Membuat objek Dosen
$dosen1 = new Dosen ("Keysha Meinava","456798341", "Alpro");
// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa ("Mayang Maharani", "230101089","Elektronika");
// Membuat objek Jurnal Dosen
$jurnal1 = new JurnalDosen ("Dosen dapat mengajukan pembuatan Jurnal sesuai dengan Hak Akses yang diberikan");
// Membuat objek Jurnal Mahasiswa
$jurnal2 = new JurnalMahasiswa ("Mahasiswa dapat mengakses Jurnal atau membuat Jurnal jika mempunyai akses") ;

// Menampilkan informasi
echo $dosen1->getRole(); // Menampilkan peran dosen
echo "<br>";
echo $mahasiswa1->getRole(); // Menampilkan peran mahasiswa
echo "<br>";
echo $jurnal1->getBuatJurnal(); // Menampilkan informasi jurnal dosen
echo "<br>";
echo $jurnal2->getBuatJurnal(); // Menampilkan informasi jurnal mahasiswa
?>
