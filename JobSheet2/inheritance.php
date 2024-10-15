<?php
// mendefinisikan kelas pengguna
class Pengguna {
    protected $nama;

    public function __construct($nama)  // konstruktor untuk menginisialisasi atribut nama
    {
        $this->nama = $nama;
    }

    // metode untuk mendapatkan nilai nama
    public function getNama(){
        return $this->nama; //mengembalikan nama
    }

}

// mendefinisikan kelas Dosen yang merupakan turunan dari kelas Pengguna
class Dosen extends Pengguna{
    private $matakuliah;

    public function __construct($nama,$matakuliah){ // konstruktor untuk menginisialisasi atribut nama dan mata kuliah
        parent::__construct($nama);
        $this->matakuliah = $matakuliah;
    }
    
    public function getMatakuliah(){  // metode untuk mendapatkan nilai mata kuliah
        return $this->matakuliah;
    }

    public function setMatakuliah($matakuliah){ // metode untuk mengatur nilai mata kuliah
        $this->matakuliah = $matakuliah;
    }  
}
// membuat objek dosen1 dari kelas Dosen dengan nama dan mata kuliah tertentu
$dosen1 = new Dosen ("Keysha Meinava", "Matematika Dikstrik");
// menampilkan informasi dosen dan mata kuliah 
echo "Dosen dengan nama ". $dosen1->getNama()." mengajar matakuliah ". $dosen1->getMatakuliah()."";

?>