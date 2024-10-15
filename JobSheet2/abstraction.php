<?php
// mendefinisikan kelas abstrak Pengguna
abstract class Pengguna{
    protected $nama; // atribut protected untuk menyimpan nama pengguna

    public function __construct($nama) // konstruktor untuk menginisialisasi atribut nama
    {
        $this->nama = $nama; // mengatur nama dengan nilai yang diberikan
    }

    abstract public function aksesFitur ();  // metode abstrak yang harus diimplementasikan oleh kelas turunan
}

class Dosen extends Pengguna { // mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna
    private $matakuliah; // atribut privat untuk menyimpan mata kuliah

    // konstruktor untuk menginisialisasi nama dan mata kuliah
    public function __construct($nama,$matakuliah){
        parent:: __construct($nama); // memanggil konstruktor dari kelas induk
        $this->matakuliah = $matakuliah;
    }
    
    public function aksesFitur() {  // implementasi metode aksesFitur untuk kelas Dosen
        return "Dosen " . $this->nama . " yang mengajar matakuliah " . $this->matakuliah . " memiliki akses untuk menginput nilai.";
    }

}
// mendefinisikan kelas Mahasiswa yang merupakan turunan dari kelas Pengguna
class Mahasiswa extends Pengguna {
    // atribut privat untuk menyimpan NIM dan jurusan mahasiswa
    private $nim;
    private $jurusan;

    // konstruktor untuk menginisialisasi nama, NIM, dan jurusan
    public function __construct($nama,$nim,$jurusan){
        parent::__construct($nama); // memanggil konstruktor dari kelas induk
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
echo $mahasiswa1->aksesFitur(); // Menampilkan akses fitur mahasiswa
 ?>

