<?php
//definis kelas dosen
class dosen {
    // atribut atau propeties
    public $nama;
    public $nip;
    public $mataKuliah;

    // constructor dosen untuk menginisialisasi atribut objek
    public function __construct($nama, $nip, $mataKuliah)
    {
      $this->nama = $nama;
      $this->nip = $nip;
      $this->mataKuliah = $mataKuliah;  
    }

    // metode tampilakn data
    public function tampilkanDosen(){
        // mengembalikan informasi nama, nip, dan matakuliah
        return "Nama : $this->nama <br>
                NIP : $this->nip <br>
                MataKuliah : $this->mataKuliah <br>";
    }
}

// membuat objek baru dari kelas dosen dengan memberikan parameter nama, nip, dan Mata Kuliah
$dosen1 = new dosen ("Keysha Meinava", "1234567", "Struktur Data");
echo $dosen1->tampilkanDosen(); // menampilkan data mahasiswa dengan memanggil metode tampilkanDosen

?>