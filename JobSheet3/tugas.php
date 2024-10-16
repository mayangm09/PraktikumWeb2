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
    private $nidn; 
    private $matakuliah; 

    // Konstruktor untuk menginisialisasi nama, NIDN, dan mata kuliah
    public function __construct($nama,$nidn,$matakuliah)
    {
        parent::__construct($nama); // Memanggil konstruktor dari kelas induk
        $this->nidn =  $nidn; // Mengatur nilai NIDN
        $this->matakuliah = $matakuliah; // Mengatur nilai mata kuliah
    }

    // Metode untuk mendapatkan NIDN
    public function getNidn(){
        return $this->nidn; // Mengembalikan nilai NIDN
    }

    // Metode untuk mengatur NIDN
    public function setNidn ($nidn){
        $this->nidn = $nidn; // Mengatur nilai NIDN
    }
    
    // Metode untuk mendapatkan mata kuliah
    public function getMatakuliah(){
        return $this->matakuliah; // Mengembalikan nilai mata kuliah
    }

    // Metode untuk mengatur mata kuliah
    public function setMatakuliah ($matakuliah){
        $this->matakuliah = $matakuliah; // Mengatur nilai mata kuliah
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
    public function setNim ($nim){
        $this->nim = $nim; // Mengatur nilai NIM
    }
    
    // Metode untuk mendapatkan jurusan
    public function getJurusan(){
        return $this->jurusan; // Mengembalikan nilai jurusan
    }

    // Metode untuk mengatur jurusan
    public function setJurusan ($jurusan){
        $this->jurusan = $jurusan; // Mengatur nilai jurusan
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
class JurnalDosen extends Jurnal {
    private $dosen; 
    
    // Konstruktor untuk menginisialisasi dosen
    public function __construct(Dosen $dosen) // Menggunakan objek Dosen
    {
        $this->dosen = $dosen; // Mengatur nilai dosen
    }

    // Implementasi metode abstrak untuk membuat jurnal dosen
    public function getBuatJurnal(){
        return "Jurnal Dosen: " . $this->dosen->getNama() . " dapat mengajukan pembuatan Jurnal sesuai dengan Hak Akses yang diberikan"; 
    }
}

// Kelas untuk jurnal mahasiswa yang mewarisi dari Jurnal
class JurnalMahasiswa extends Jurnal {
    private $mahasiswa; 
    
    // Konstruktor untuk menginisialisasi mahasiswa
    public function __construct(Mahasiswa $mahasiswa) // Menggunakan objek Mahasiswa
    {
        $this->mahasiswa = $mahasiswa; // Mengatur nilai mahasiswa
    }

    // Implementasi metode abstrak untuk membuat jurnal mahasiswa
    public function getBuatJurnal(){
        return "Jurnal Mahasiswa: " . $this->mahasiswa->getNama() . " dapat mengakses Jurnal atau membuat Jurnal jika mempunyai akses"; 
    }
}
// Membuat objek Dosen
$dosen1 = new Dosen ("Keysha Meinava","456798341", "Alpro");
// Membuat objek Mahasiswa
$mahasiswa1 = new Mahasiswa ("Mayang Maharani", "230101089","Elektronika");
// Membuat objek Jurnal Dosen
$jurnal1 = new JurnalDosen($dosen1);
// Membuat objek Jurnal Mahasiswa
$jurnal2 = new JurnalMahasiswa($mahasiswa1);

// Menampilkan informasi
echo $dosen1->getRole(); // Menampilkan peran dosen
echo "<br>";
echo $mahasiswa1->getRole(); // Menampilkan peran mahasiswa
echo "<br>";
echo $jurnal1->getBuatJurnal(); // Menampilkan informasi jurnal dosen
echo "<br>";
echo $jurnal2->getBuatJurnal(); // Menampilkan informasi jurnal mahasiswa

