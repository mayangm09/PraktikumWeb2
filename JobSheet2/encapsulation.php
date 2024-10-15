<?php
// mendifinisikan kelas Mahasiswa
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;

    // constructor untuk menginisialisasi atribut
    public function __construct($nama,$nim,$jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function getNama(){ //metode untuk mendapatkan nilai nama
        return $this->nama;
    }

    public function setNama($nama){ //metode untuk mengatur nilai nama
        $this->nama = $nama;
    }

    public function getNim(){ //metode untuk mendapatkan nilai nim
        return $this->nim;
    }

    public function setNim($nim){ //metode untuk mengatur nilai nim
        $this->nim = $nim;
    }
    
    public function getJurusan(){ //metode untuk mendapatkan nilai jurusan
        return $this->jurusan;
    }

    public function setJurusan($jurusan){ //metode untuk mengatur nilai jurusan
        $this->jurusan = $jurusan;
    }

}

// membuat objek mahasiswa1 dari kelas Mahasiswa dengan data tertentu
$mahasiswa1 = new Mahasiswa("Dina Ayu", "230102069", "Komputer dan Bisnis");
// Menampilkan informasi mahasiswa sebelum diubah
echo "Nama: " . $mahasiswa1-> getNama() . "<br>";
echo "Nim: " . $mahasiswa1-> getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1-> getJurusan() . "<br>";

// Mengubah nama, nim dan jurusan  menggunakan setter
$mahasiswa1->setNama ("Mayang Maharani");
$mahasiswa1->setNim ("230202067");
$mahasiswa1->setJurusan ("Rekayasa Mesin Pertanian");
// Menampilkan data setelah diubah
echo "<br><b>Setelah data diupdate:<br></b>";
echo "Nama: " . $mahasiswa1-> getNama() . "<br>";
echo "Nim: " . $mahasiswa1-> getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1-> getJurusan() . "<br>";
?>