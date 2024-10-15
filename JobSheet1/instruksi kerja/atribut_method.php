<?php

// definisi kelas Mahasiswa
class Mahasiswa {
// atribut atau propeties
    public $nama;
    public $nim;
    public $jurusan;

     // constructor kelas mahasiswa untuk menginisialisasi atribut objek
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // metode tampilkan data
    public function tampilkanData(){
    // mengembalikan informasi nama, nim, dan jurusan
    return  "Nama saya adalah $this->nama dengan nim $this->nim, dari jurusan $this->jurusan. <br>";}
    
    // fungsi untuk memperbarui jurusan
    public function updateJurusan($jurusanbaru){
    $this->jurusan = $jurusanbaru;
    }

    public function setNim($nimbaru){
        $this->nim = $nimbaru;
    }
}

// membuat objek baru dari kelas Mahasiswa dengan memberikan parameter nama, nim, dan jurusan
$mahasiswa1 = new Mahasiswa ("Vera Dupita", "230202067", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData(); // menampilkan data mahasiswa dengan memanggil metode tampilkanData

$mahasiswa1->updateJurusan("Elektronika"); // mengubah jurusan mahasiswa
echo "<br><b>Setelah jurusan diupdate:<br></b>";
echo $mahasiswa1->tampilkanData(); //menampilkan data setelah update jurusan

$mahasiswa1->setNim("230202061"); //mengubah nim mahasiswa
echo "<br><b>Setelah nim diubah:<br></b>"; 
echo $mahasiswa1->tampilkanData(); //menampilkan data setelah update nim
?>