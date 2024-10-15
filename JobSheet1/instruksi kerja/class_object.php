<?php
// definisi kelas Mahasiswa
class Mahasiswa {
    // atribut atau propeties
    public $nama;
    public $nim;
    public $jurusan;

    // metode tampilkan data
    public function tampilkanData(){
    // mengembalikan informasi nama, nim, dan jurusan
    return "Nama saya adalah $this->nama dengan nim $this->nim, dari jurusan $this->jurusan.";}

}
// membuat objek baru dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa ();
// // Mengisi atribut objek mahasiswa1 dengan data
$mahasiswa1->nama = "Vera Dupita";
$mahasiswa1->nim = "230202067";
$mahasiswa1->jurusan = "Komputer dan Bisnis";
// Menampilkan data mahasiswa dengan memanggil fungsi tampilkanData
echo $mahasiswa1->tampilkanData();

?>