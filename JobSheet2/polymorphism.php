<?php
// mendifinisikan kelas pengguna
class Pengguna{
    protected $nama; // atribut protected untuk menyimpan nama pengguna

    public function __construct($nama)  // konstruktor untuk menginisialisasi atribut nama
    {
        $this->nama = $nama;
    }

    public function aksesFitur (){  // metode yang harus diimplementasikan oleh kelas turunan
        return "Pengguna " . $this->nama . " memiliki akses fitur umum.";
    }
}

// mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna {
    private $matakuliah;  // atribut privat untuk menyimpan mata kuliah yang diajarkan

    public function __construct($nama,$matakuliah){ // konstruktor untuk menginisialisasi nama dan mata kuliah
        parent:: __construct($nama); // memanggil konstruktor dari kelas induk
        $this->matakuliah = $matakuliah; // mengatur mata kuliah
    }
    
    public function aksesFitur() {   // implementasi metode aksesFitur untuk kelas Dosen
        return "Dosen " . $this->nama . " yang mengajar matakuliah " . $this->matakuliah . " memiliki akses untuk menginput nilai.";
    }

}

class Mahasiswa extends Pengguna { // mendefinisikan kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
    // atribut privat untuk menyimpan NIM dan jurusan mahasiswa
    private $nim;
    private $jurusan;

    // konstruktor untuk menginisialisasi nama, NIM, dan jurusan
    public function __construct($nama,$nim,$jurusan){
        parent::__construct($nama);
        $this->nim = $nim;
        $this->jurusan =$jurusan;
    }
     // implementasi metode aksesFitur untuk kelas Mahasiswa
    public function aksesFitur() {
        return "Mahasiswa bernama " . $this->nama . " dengan NIM " . $this->nim . ", jurusan " . $this->jurusan . " memiliki akses untuk melihat nilai.";
    }
    
}
// membuat objek dosen1 dari kelas Dosen dengan nama dan mata kuliah tertentu
$dosen1 = new Dosen ("Keysha Meinava", "Matematika Diskrit");
echo $dosen1->aksesFitur(); // menampilkan akses fitur dosen
echo "<br>";
// membuat objek mahasiswa1 dari kelas Mahasiswa dengan nama, NIM, dan jurusan tertentu
$mahasiswa1 = new Mahasiswa ("Dina Ayu", "230102069", "Komputer dan Bisnis");
echo $mahasiswa1->aksesFitur(); // menampilkan akses fitur mahasiswa
 ?>

