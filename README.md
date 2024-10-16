# PraktikumWeb2
**OOP (Object-Oriented Programming)**  
Object Oriented Programming (OOP) atau dalam bahasa Indonesia dikenal dengan Pemrograman Berorientasi Objek (PBO) merupakan sebuah paradigma atau pendekatan pengembangan perangkat lunak yang memiliki struktur berbasis objek. Objek memiliki atribut dan metode yang dapat saling berinteraksi untuk memenuhi tujuan tertentu. OOP mempermudah pengembangan dan pemeliharaan program dengan cara memecah masalah kompleks menjadi bagian-bagian kecil yang dapat digunakan kembali.

**Konsep Utama:** <br>
- Kelas (Class): Rancangan atau cetak biru dari sebuah objek. Kelas mendefinisikan atribut (properti) dan perilaku (metode) objek.
- Objek (Object): Instance dari kelas. Objek memiliki data dan dapat melakukan aksi sesuai dengan metode yang didefinisikan dalam kelasnya.
- Encapsulation (Enkapsulasi): Membatasi akses ke properti dan metode suatu objek, biasanya dengan menggunakan modifier akses seperti private, public, atau protected.
- Inheritance (Pewarisan): Kemampuan suatu kelas untuk mewarisi properti dan metode dari kelas lain, memungkinkan penggunaan kembali kode.
- Polymorphism (Polimorfisme): Kemampuan untuk memanggil metode yang sama pada objek yang berbeda, namun hasilnya berbeda tergantung pada kelas objeknya.
- Abstraction (Abstraksi): Menyembunyikan detail implementasi dari pengguna dan hanya menampilkan fungsionalitas penting.
---

### Langkah-Langkah dalam Pembuatan Kelas:

1. **Menentukan Nama Kelas**  
   Nama kelas biasanya diawali dengan huruf kapital. Misalnya: `Mahasiswa`, `Dosen`.

2. **Menentukan Atribut**  
   Atribut adalah karakteristik atau properti dari kelas. Contoh untuk kelas `Mahasiswa` meliputi:
   - `nama`: Menyimpan nama mahasiswa.
   - `nim`: Menyimpan Nomor Induk Mahasiswa (NIM).
   - `jurusan`: Menyimpan jurusan mahasiswa.
```
class Mahasiswa {
    // atribut atau propeties
    public $nama;
    public $nim;
    public $jurusan;
}
```

3. **Menentukan Metode**  
   Metode adalah fungsi atau prosedur yang dapat dilakukan oleh objek. Metode dapat digunakan untuk mengubah atau mengakses atribut.  
```
 public function tampilkanData(){
    // mengembalikan informasi nama, nim, dan jurusan
    return "Nama saya adalah $this->nama dengan nim $this->nim, dari jurusan $this->jurusan.";}
```
---

### Atribut dan Metode
- **Atribut**: Menyimpan data atau keadaan dari objek.
- **Metode**: Operasi atau fungsi yang dilakukan oleh objek.

#### Contoh Coding:
![js1](https://github.com/user-attachments/assets/8e4758e6-6e0f-4fe5-9c15-17e9d1d47158)

Metode `tampilkanData()` dalam kelas `Mahasiswa` digunakan untuk menampilkan informasi lengkap tentang mahasiswa, seperti nama, NIM, dan jurusan. Saat dipanggil, metode ini menggabungkan nilai dari atribut objek (`$this->nama`, `$this->nim`, dan `$this->jurusan`) menjadi satu string. Ketika objek `Mahasiswa` dibuat dan metode ini dipanggil, hasilnya adalah tampilan yang jelas tentang data mahasiswa.

---

# Job Sheet 1

**INTRUKSI KERJA :**

1. **Membuat Class dan Object** <br>

a) Buat class `Mahasiswa` yang memiliki atribut `nama`, `nim`, dan `jurusan`.
```
<?php
// definisi kelas Mahasiswa
class Mahasiswa {
    // atribut atau propeties
    public $nama;
    public $nim;
    public $jurusan;
}
``` 
   **Definisi Kelas**: Kelas `Mahasiswa` didefinisikan menggunakan kata kunci `class`. Kelas ini memiliki beberapa atribut/properti yang merepresentasikan data mahasiswa, yaitu:
   - **nama**: Menyimpan nama mahasiswa.
   - **nim**: Menyimpan Nomor Induk Mahasiswa (NIM).
   - **jurusan**: Menyimpan jurusan mahasiswa.

b) Buat metode `tampilkanData()` dalam class `Mahasiswa`.
```
// metode tampilkan data
    public function tampilkanData(){
    // mengembalikan informasi nama, nim, dan jurusan
    return "Nama saya adalah $this->nama dengan nim $this->nim, dari jurusan $this->jurusan.";}
``` 
   **Metode tampilkanData**: Di dalam kelas, ada sebuah metode bernama tampilkanData. Metode ini berfungsi untuk mengembalikan string yang berisi informasi tentang nama, NIM, dan jurusan mahasiswa. Di dalam metode ini, digunakan kata kunci return untuk mengembalikan teks yang mencakup atribut kelas ($this->nama, $this->nim, dan $this->jurusan).
   
c) Instansiasi objek dari class `Mahasiswa` dan tampilkan data mahasiswa tersebut.
```
// membuat objek baru dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa ();
// // Mengisi atribut objek mahasiswa1 dengan data
$mahasiswa1->nama = "Vera Dupita";
$mahasiswa1->nim = "230202067";
$mahasiswa1->jurusan = "Komputer dan Bisnis";
// Menampilkan data mahasiswa dengan memanggil fungsi tampilkanData
echo $mahasiswa1->tampilkanData();
```  

   Objek mahasiswa1 ini adalah sebuah instance dari kelas Mahasiswa, yang berarti bahwa ia memiliki akses ke semua atribut dan metode yang didefinisikan di kelas Mahasiswa, kemudian memberikan nilai ke atribut-atribut objek mahasiswa1. Proses ini mengisi data yang spesifik untuk objek tersebut, yaitu nama mahasiswa, NIM, dan jurusannya. Terakhir, memanggil metode tampilkanData untuk menampilkan informasi mahasiswa.

   **Output :**  
   ![image](https://github.com/user-attachments/assets/1a804d6f-51d6-4e3a-af3a-6907a6ab56bf)

2. **Implementasi Constructor** <br>

a) Tambahkan constructor pada kelas `Mahasiswa` yang akan menginisialisasi atribut `nama`, `nim`, dan `jurusan`.
```
// constructor kelas mahasiswa untuk menginisialisasi atribut objek
    public function __construct($nama, $nim, $jurusan)
    {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
```
b) Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
```
// membuat objek baru dari kelas Mahasiswa dengan memberikan parameter nama, nim, dan jurusan
$mahasiswa1 = new Mahasiswa ("Vera Dupita", "230202067", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData(); // menampilkan data mahasiswa dengan memanggil metode tampilkanData
```

   **Proses Pembuatan Kelas :**
   - Kelas Mahasiswa didefinisikan dengan menggunakan kata kunci class.
   - Kelas ini memiliki tiga atribut (properties): $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan informasi tentang mahasiswa.
   - Fungsi __construct() berfungsi sebagai konstruktor yang digunakan untuk menginisialisasi atribut objek saat objek kelas Mahasiswa dibuat.
   - Konstruktor ini menerima tiga parameter: $nama, $nim, dan $jurusan, yang kemudian disimpan dalam atribut kelas menggunakan $this->.  

   **Penggunaan Metode : tampilData()**  
   - Metode ini bertugas untuk mengembalikan informasi mengenai mahasiswa dalam format string. Saat dipanggil, metode ini akan mengambil nilai dari atribut $nama, $nim, dan $jurusan, dan menggabungkannya dalam kalimat yang jelas dan informatif. Ketika kita memanggil metode ini dengan $mahasiswa1->tampilkanData(), PHP akan menjalankan metode tersebut dan mengembalikan string yang berisi informasi tentang nama, NIM, dan jurusan mahasiswa. Ini terjadi karena metode mengakses atribut objek melalui $this.  

   **Output :**  
   ![image](https://github.com/user-attachments/assets/7511b5df-6d40-4486-9ab5-f260fadac338)

3. **Membuat Metode Tambahan** <br>

a) Buat metode `updateJurusan()` dalam kelas `Mahasiswa` yang memungkinkan perubahan jurusan. <br>
b) Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.  
```
  // metode tampilkan data
    public function tampilkanData(){
    // mengembalikan informasi nama, nim, dan jurusan
    return  "Nama saya adalah $this->nama dengan nim $this->nim, dari jurusan $this->jurusan. <br>";}
    
    // fungsi untuk memperbarui jurusan
    public function updateJurusan($jurusanbaru){
    $this->jurusan = $jurusanbaru;
    }

}

// membuat objek baru dari kelas Mahasiswa dengan memberikan parameter nama, nim, dan jurusan
$mahasiswa1 = new Mahasiswa ("Vera Dupita", "230202067", "Komputer dan Bisnis");
echo $mahasiswa1->tampilkanData(); // menampilkan data mahasiswa dengan memanggil metode tampilkanData

// mengubah jurusan mahasiswa
$mahasiswa1->updateJurusan("Elektronika");
echo "<br><b>Setelah jurusan diupdate:<br></b>";
echo $mahasiswa1->tampilkanData(); //menampilkan data setelah update jurusan
```

   **Proses Pembuatan Kelas :**
   - Kelas Mahasiswa didefinisikan dengan menggunakan kata kunci class.
   - Kelas ini memiliki tiga atribut (properties): $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan informasi tentang mahasiswa.
   - Fungsi __construct() berfungsi sebagai konstruktor yang digunakan untuk menginisialisasi atribut objek saat objek kelas Mahasiswa dibuat.
   - Konstruktor ini menerima tiga parameter: $nama, $nim, dan $jurusan, yang kemudian disimpan dalam atribut kelas menggunakan $this->.  

   **Penggunaan Metode : Tampil Data ()**  
   - Metode ini bertugas untuk mengembalikan informasi mengenai nama, NIM, dan jurusan mahasiswa dalam format string yang dapat ditampilkan. Ketika metode ini dipanggil, ia akan menghasilkan kalimat yang menginformasikan data pribadi mahasiswa. Contoh Penggunaan: Setelah objek $mahasiswa1 dibuat, metode ini dipanggil dengan $mahasiswa1->tampilkanData(). Ini akan mengembalikan string yang berisi nama, NIM, dan jurusan dari objek $mahasiswa1.

   **Penggunaan Metode : Update Jurusan**  
   - Metode ini digunakan untuk memperbarui jurusan mahasiswa. Ia menerima satu parameter, yaitu $jurusanbaru, yang akan menggantikan nilai dari atribut $jurusan. Contoh    
     Penggunaan: Metode ini dipanggil dengan $mahasiswa1->updateJurusan("Elektronika"), yang akan mengubah jurusan mahasiswa dari "Komputer dan Bisnis" menjadi 
     "Elektronika". <br>  

   **Output :**  
   ![image](https://github.com/user-attachments/assets/109296c0-3b44-4917-a397-21c0862b4b7e)

4. **Penggunaan Atribut dan Metode** <br>

a) Ubah nilai atribut `nim` dari objek `Mahasiswa` menggunakan metode setter. <br>
b) Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode `tampilkanData()`.  
```
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
```
   **Proses Pembuatan Kelas :**
   - Kelas Mahasiswa didefinisikan dengan menggunakan kata kunci class.
   - Kelas ini memiliki tiga atribut (properties): $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan informasi tentang mahasiswa.
   - Fungsi __construct() berfungsi sebagai konstruktor yang digunakan untuk menginisialisasi atribut objek saat objek kelas Mahasiswa dibuat.
   - Konstruktor ini menerima tiga parameter: $nama, $nim, dan $jurusan, yang kemudian disimpan dalam atribut kelas menggunakan $this->.  

   **Penggunaan Metode : Tampil Data ()**  
   - Metode ini bertugas untuk mengembalikan informasi mengenai nama, NIM, dan jurusan mahasiswa dalam format string yang dapat ditampilkan. Ketika metode ini dipanggil, ia akan menghasilkan kalimat yang menginformasikan data pribadi mahasiswa. Contoh Penggunaan: Setelah objek $mahasiswa1 dibuat, metode ini dipanggil dengan $mahasiswa1->tampilkanData(). Ini akan mengembalikan string yang berisi nama, NIM, dan jurusan dari objek $mahasiswa1.

   **Penggunaan Metode : setNim**  
   - Metode ini digunakan untuk memperbarui NIM mahasiswa. Ia menerima satu parameter, yaitu $nimbaru, yang akan menggantikan nilai dari atribut $nim. Contoh Penggunaan: Metode ini dipanggil dengan $mahasiswa1->ubahNIM("123456789"), yang akan mengubah NIM mahasiswa dari "123456" menjadi "123456789".  

   **Output :**  
   ![image](https://github.com/user-attachments/assets/eefe14e2-bec8-4d64-834c-f53517c70cb0)


# TUGAS JS 1
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah. 
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen. 
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk 
menampilkan informasi tersebut.

**Hasil Coding :** <br>
```
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
```
<b> a.) Proses Pembuatan Kelas </b> <br> 
```
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
```
- Definisi Kelas: Kelas dosen didefinisikan menggunakan kata kunci class. Nama kelas menggunakan huruf kecil, namun sebaiknya mengikuti konvensi penamaan dengan huruf besar di awal (misalnya Dosen) untuk mengikuti praktik terbaik dalam pemrograman OOP. <br>
- Atribut (Properties): Kelas dosen memiliki tiga atribut yang didefinisikan sebagai public:
                        $nama: Menyimpan nama dosen.
                        $nip: Menyimpan Nomor Induk Pegawai (NIP) dosen.
                        $mataKuliah: Menyimpan nama mata kuliah yang diajarkan oleh dosen.
- Constructor: Fungsi __construct() berfungsi sebagai konstruktor yang menginisialisasi atribut objek saat objek dari kelas dosen dibuat. Parameter yang diterima oleh konstruktor adalah: $nama: untuk mengisi atribut $nama. $nip: untuk mengisi atribut $nip. $mataKuliah: untuk mengisi atribut $mataKuliah. Pada saat objek dosen dibuat, konstruktor ini dipanggil secara otomatis untuk menginisialisasi nilai atribut dengan parameter yang diberikan.

<b> b.) Penggunaan Metode </b> <br>
```
// metode tampilakn data
    public function tampilkanDosen(){
        // mengembalikan informasi nama, nip, dan matakuliah
        return "Nama : $this->nama <br>
                NIP : $this->nip <br>
                MataKuliah : $this->mataKuliah <br>";
    }
```
- Metode tampilkanDosen(): Metode ini berfungsi untuk mengembalikan informasi tentang dosen dalam bentuk string. Saat metode ini dipanggil, ia mengakses atribut objek menggunakan $this, dan mengembalikan string yang berisi: Nama Dosen, NIP Dosen, Mata Kuliah yang diajarkan <br>

**Output :** <br> <br>
![image](https://github.com/user-attachments/assets/dba3e5e6-b4ff-4c26-bcd2-07f792c5d34d)

 ---
# JOB Sheet2

**INTRUKSI KERJA :**

**1. Membuat Class dan Object** <br>

a) Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan. <br>
```
<?php
// definisi kelas Mahasiswa
class Mahasiswa {
    // atribut atau propeties
    public $nama;
    public $nim;
    public $jurusan;
```
Bagian ini mendefinisikan kelas Mahasiswa yang berisi atribut (properti) nama, nim, dan jurusan. Atribut menggunakan akses public sehingga bisa diakses dari luar kelas. <br><br>
b) Buat metode tampilkanData() dalam class Mahasiswa.
```
// metode tampilkan data
    public function tampilkanData(){
    // mengembalikan informasi nama, nim, dan jurusan
    return "Nama saya adalah $this->nama dengan nim $this->nim, dari jurusan $this->jurusan.";}
```
Metode tampilkanData dideklarasikan sebagai public. Fungsi ini akan mengembalikan string yang berisi informasi tentang nama, nim, dan jurusan mahasiswa. Penggunaan $this-> merujuk pada atribut yang ada di dalam objek saat ini. <br><br>
c) Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```
// membuat objek baru dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa ();
// // Mengisi atribut objek mahasiswa1 dengan data
$mahasiswa1->nama = "Vera Dupita";
$mahasiswa1->nim = "230202067";
$mahasiswa1->jurusan = "Komputer dan Bisnis";
// Menampilkan data mahasiswa dengan memanggil fungsi tampilkanData
echo $mahasiswa1->tampilkanData();
```
Baris ini membuat objek baru bernama $mahasiswa1 dari kelas Mahasiswa. Objek ini kemudian akan memiliki akses ke semua properti dan metode dalam kelas tersebut. Kemudian Baris-baris ini mengisi atribut $nama, $nim, dan $jurusan pada objek $mahasiswa1 dengan data yang sesuai. Properti diakses dengan tanda panah ->. Setelah itu, Metode tampilkanData() dipanggil pada objek $mahasiswa1, dan hasilnya dicetak menggunakan echo. Metode ini akan mengembalikan string yang berisi nama, nim, dan jurusan yang sebelumnya telah diatur. <br><br>
**Full Coding :** <br>
```
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
```
**Output :** <br>
![image](https://github.com/user-attachments/assets/a774d2dd-3ae8-4d2a-a858-cd061963c7d1) <br>

**2. Encapsulation** <br>

a) Ubah atribut dalam class Mahasiswa menjadi private.
```
<?php
// mendifinisikan kelas Mahasiswa
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;
```
Bagian ini mendefinisikan kelas Mahasiswa dengan atribut $nama, $nim, dan $jurusan. Atribut ini bersifat private, yang artinya tidak bisa diakses langsung dari luar kelas, hanya bisa diakses melalui metode getter dan setter. <br><br>
b) Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
```
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
```
 - getNama berfungsi untuk mengambil nilai dari atribut $nama, yang bersifat private. Karena $nama tidak bisa diakses langsung dari luar kelas, metode ini memungkinkan         kita mengakses nilainya secara tidak langsung. <br>
 - setNama berfungsi untuk mengatur nilai dari atribut $nama. Metode ini menerima parameter $nama yang kemudian digunakan untuk memperbarui nilai atribut $nama dalam           objek. <br>
 - getNim berfungsi untuk mengambil nilai dari atribut $nim, yang bersifat private. Karena $nim tidak bisa diakses langsung dari luar kelas, metode ini digunakan untuk         mengakses nilainya. <br>
 - setNim berfungsi untuk mengatur nilai dari atribut $nim. Metode ini menerima parameter $nim yang akan digunakan untuk memperbarui nilai atribut $nim. <br>
 - getJurusan berfungsi untuk mengambil nilai dari atribut $jurusan, yang bersifat private. Metode ini memungkinkan kita mengakses nilai $jurusan secara tidak langsung 
   dari luar kelas. <br>
 - setJurusan berfungsi untuk mengatur nilai dari atribut $jurusan. Metode ini menerima parameter $jurusan yang akan digunakan untuk memperbarui nilai atribut $jurusan. <br>
 
 c) Demonstrasikan akses ke atribut menggunakan metode getter dan setter
```
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
```
Objek $mahasiswa1 dibuat dari kelas Mahasiswa dengan parameter yang dioper ke constructor, yaitu "Dina Ayu", "230102069", dan "Komputer dan Bisnis". Kemudian, Metode getNama(), getNim(), dan getJurusan() digunakan untuk mengambil dan menampilkan nilai dari atribut $nama, $nim, dan $jurusan. Informasi ini dicetak sebelum ada perubahan pada atribut. Selanjutnya, ketika kita mengubah data menggunakan metode setter untuk mengubah nilai atribut $nama, $nim, dan $jurusan. Nilai baru diset menggunakan parameter yang dikirim ke masing-masing metode setter. Setelah nilai atribut diubah menggunakan setter, metode getter kembali dipanggil untuk menampilkan data yang telah diperbarui. <br><br>
**Full Coding :** <br>
```
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
```
**Output :** <br>
![image](https://github.com/user-attachments/assets/e25f226b-3f74-40c3-8c95-3e0a47d8e25c)


**3. Inheritance :** <br>

a) Buat class Pengguna dengan atribut nama dan metode getNama().
```
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
```
Script ini mendefinisikan kelas Pengguna yang memiliki atribut nama dengan access modifier protected. Kelas ini memiliki konstruktor yang digunakan untuk menginisialisasi nilai nama saat objek dibuat, dan metode getNama yang berfungsi sebagai getter untuk mengembalikan nilai atribut nama. Method ini digunakan untuk mendapatkan nama pengguna dari objek. <br>

b) Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
```
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
```
 - Kelas Dosen merupakan subclass dari Pengguna. Artinya, Dosen mewarisi atribut dan metode dari Pengguna. Dalam kelas Dosen, ada atribut tambahan yaitu $matakuliah yang      bersifat private. Kemudian terdapat konstructor dalam kelas Dosen, yang  memanggil konstruktor dari kelas induk (Pengguna) untuk menginisialisasi nama dosen dan    
   menginisialisasi mata kuliah yang diampu oleh dosen. <br>
 - Pada bagian script ini juga terdapat metode getMatakuliah, yaitu Getter yang digunakan untuk mendapatkan nilai atribut matakuliah dan metode setMatakuliah, yaitu Setter    yang digunakan untuk mengubah nilai atribut matakuliah. <br>
 
c) Instansiasi objek dari class Dosen dan tampilkan data dosen.
```
// membuat objek dosen1 dari kelas Dosen dengan nama dan mata kuliah tertentu
$dosen1 = new Dosen ("Keysha Meinava", "Matematika Dikstrik");
// menampilkan informasi dosen dan mata kuliah 
echo "Dosen dengan nama ". $dosen1->getNama()." mengajar matakuliah ". $dosen1->getMatakuliah()."";
```
Objek dosen1 dibuat dengan menggunakan kelas Dosen. Nama yang diberikan adalah "Keysha Meinava" dan mata kuliah yang diampu adalah "Matematika Diskrit". Saat objek ini dibuat, konstruktor di kelas Dosen dipanggil, yang pada gilirannya memanggil konstruktor kelas Pengguna untuk mengatur nama dosen. Kemudian, menggunakan metode getNama() dan getMatakuliah() untuk mengambil nama dosen dan mata kuliah yang diampu, lalu menampilkannya. <br><br>
**Full Coding :** <br>
```
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
```
**Output :** <br>
![image](https://github.com/user-attachments/assets/dac75fc5-3b38-4218-9d1b-82002ce4a8f8)

**4. Polymorphism :** <br>

a) Buat class Pengguna dengan metode aksesFitur().
```
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
```
Kelas Pengguna adalah kelas dasar yang memiliki satu atribut yaitu $nama yang disimpan sebagai protected. Atribut ini dapat diakses oleh kelas turunan. Kemudian, __construct($nama) bertugas untuk menginisialisasi atribut nama saat objek dari kelas ini dibuat, dan metode aksesFitur akan menampilkan bahwa pengguna memiliki akses fitur umum, dan ini bisa di-override oleh kelas turunan (dosen dan mahasiswa). <br>

b) Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
```
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
```
Metode aksesFitur di-override untuk menunjukkan bahwa dosen memiliki akses fitur tambahan, yaitu bisa menginput nilai. Sedangkan, pada kelas Mahasiswa Metode aksesFitur di override untuk menunjukkan bahwa mahasiswa hanya memiliki akses untuk melihat nilai. <br>

c) Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
```
// membuat objek dosen1 dari kelas Dosen dengan nama dan mata kuliah tertentu
$dosen1 = new Dosen ("Keysha Meinava", "Matematika Diskrit");
echo $dosen1->aksesFitur(); // menampilkan akses fitur dosen
echo "<br>";
// membuat objek mahasiswa1 dari kelas Mahasiswa dengan nama, NIM, dan jurusan tertentu
$mahasiswa1 = new Mahasiswa ("Dina Ayu", "230102069", "Komputer dan Bisnis");
echo $mahasiswa1->aksesFitur(); // menampilkan akses fitur mahasiswa
```
   - Objek dosen1 dibuat dengan nama "Keysha Meinava" yang mengajar mata kuliah "Matematika Diskrit". Setelah itu, metode aksesFitur pada dosen menampilkan informasi    
     tentang dosen dan hak aksesnya untuk menginput nilai. <br>
   - Objek mahasiswa1 dibuat dengan nama "Dina Ayu", NIM "230102069", dan jurusan "Komputer dan Bisnis". Metode aksesFitur pada mahasiswa menampilkan informasi tentang 
     mahasiswa dan hak aksesnya untuk melihat nilai. <br> <br>
     
**Full Coding :**
```
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
```
**Output :**
![image](https://github.com/user-attachments/assets/9f253a17-71c7-40f8-8b44-87adc62f5609)

**5. Abstraction** <br>

a) Buat class abstrak Pengguna dengan metode abstrak aksesFitur().
```
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
```
   - Kelas Pengguna merupakan kelas abstrak. Kelas abstrak adalah kelas yang tidak dapat dibuat objek langsung dari dalamnya. Di sini kelas Pengguna memiliki atribut nama       dengan akses modifier protected, artinya hanya kelas itu sendiri dan turunannya yang dapat mengakses atribut tersebut. <br>
   - Konstruktor __construct($nama) digunakan untuk menginisialisasi atribut nama ketika objek dari kelas turunan (seperti Dosen dan Mahasiswa) dibuat. <br>
   - Metode aksesFitur() adalah metode abstrak yang harus diimplementasikan oleh kelas turunannya. Ini berarti setiap kelas yang mewarisi kelas Pengguna wajib memiliki    
     implementasi dari metode ini. <br>

b) Implementasikan class Mahasiswa dan Dosen yang mengimplementasikan metode abstrak tersebut.
```
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
```
- Kelas Dosen adalah turunan dari Pengguna, sehingga mewarisi atribut nama dari kelas induknya. Atribut tambahan adalah matakuliah yang bersifat privat. Konstruktor di kelas ini menginisialisasi nama dan matakuliah. Metode aksesFitur() diimplementasikan untuk menunjukkan akses dosen dalam sistem, yaitu menginput nilai.
- Kelas Mahasiswa juga turunan dari Pengguna, sehingga mewarisi atribut nama. Atribut tambahan untuk mahasiswa adalah nim dan jurusan, yang bersifat privat. Konstruktor menginisialisasi nama, NIM, dan jurusan. Metode aksesFitur() menunjukkan akses mahasiswa dalam sistem, yaitu melihat nilai. <br>

c) Demonstrasikan dengan memanggil metode aksesFitur() dari objek yang diinstansiasi.
```
// membuat objek dosen1 dari kelas Dosen dengan nama dan mata kuliah tertentu
$dosen1 = new Dosen ("Keysha Meinava", "Matematika Diskrit");
echo $dosen1->aksesFitur(); // menampilkan akses fitur dosen
echo "<br>";

// membuat objek mahasiswa1 dari kelas Mahasiswa dengan nama, NIM, dan jurusan tertentu
$mahasiswa1 = new Mahasiswa ("Dina Ayu", "230102069", "Komputer dan Bisnis");
echo $mahasiswa1->aksesFitur(); // Menampilkan akses fitur mahasiswa
```
Objek `$dosen1` dibuat dari kelas `Dosen` dengan nama "Keysha Meinava" dan mata kuliah "Matematika Diskrit". Metode `aksesFitur()` dipanggil untuk menampilkan hak akses dosen, yaitu menginput nilai. Objek `$mahasiswa1` dibuat dari kelas `Mahasiswa` dengan nama "Dina Ayu", NIM "230102069", dan jurusan "Komputer dan Bisnis". Metode `aksesFitur()` dipanggil untuk menampilkan hak akses mahasiswa, yaitu melihat nilai. <br><br>
**Full Coding :**
```
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
```
**Output :**
![image](https://github.com/user-attachments/assets/56adfbfa-99ee-4b58-b930-9d55ac6668bb)

# JOB Sheet 3
**INTRUKSI KERJA :** <br>
**1. Inheritance** <br>
a) Buat kelas Person dengan atribut name dan metode getName().
```
<?php
// mendefinisikan kelas Person
class Person{
    protected $name; //atribut bersifat protected sehingga bisa diakses oleh kelas turunan
    // konstruktor untuk menginisialisasi atribut name
    public function __construct($name) 
    {
        $this->name = $name;
    }
    // metode untuk mengembalikan nilai atribut name
    public function getName(){
        return $this->name;
    }
}
```
   - Kelas Person didefinisikan menggunakan kata kunci class, dan Atribut $name ditetapkan sebagai protected, yang berarti atribut ini dapat diakses oleh kelas ini dan 
     juga 
     oleh kelas turunan, namun tidak bisa diakses secara langsung dari luar kelas. <br>
   - Konstruktor __construct() adalah fungsi khusus yang dipanggil secara otomatis saat objek baru dari kelas ini dibuat. Parameter $name digunakan untuk menginisialisasi 
     nilai atribut $name. Nilai ini ditetapkan ke atribut kelas menggunakan $this->name <br>
   - Metode getName() adalah fungsi publik yang digunakan untuk mengambil atau mengembalikan nilai dari atribut $name.
     Karena atribut $name bersifat protected, metode ini diperlukan untuk mengakses nilai tersebut dari luar kelas. <br>
     
b) Buat kelas Student yang mewarisi dari Person dan tambahkan atribut studentID serta metode getStudentID(). 
```
// kelas Student merupakan turunan dari kelas Person
class Student extends Person{
    public $studentID;
     // konstruktor untuk menginisialisasi atribut name dari kelas induk dan atribut studentID
    public function __construct($name,$studentID){
        parent::__construct($name);  // memanggil konstruktor dari kelas induk
        $this->studentID = $studentID; // menginisialisasi atribut studentID
    }
     public function getStudentID(){ // metode untuk mengembalikan nilai atribut studentID
        return $this->studentID;
     }
}
```
   - Kelas Student merupakan turunan dari kelas Person, yang berarti kelas Student mewarisi atribut dan metode dari kelas Person (termasuk atribut name dan metode   
     getName()). Atribut $studentID adalah atribut baru yang spesifik untuk kelas Student dan dideklarasikan sebagai public, artinya bisa diakses dari mana saja. <br>
   - Konstruktor kelas Student menerima dua parameter: $name dan $studentID. parent::__construct($name) digunakan untuk memanggil konstruktor dari kelas induk Person,    
     sehingga atribut name bisa diinisialisasi oleh kelas Person dan atribut $studentID diinisialisasi secara langsung di dalam konstruktor kelas Student dengan nilai yang 
     diberikan. <br> <br>
     
**Full Coding :**
```
<?php
// mendefinisikan kelas Person
class Person{
    protected $name; //atribut bersifat protected sehingga bisa diakses oleh kelas turunan
    // konstruktor untuk menginisialisasi atribut name
    public function __construct($name) 
    {
        $this->name = $name;
    }
    // metode untuk mengembalikan nilai atribut name
    public function getName(){
        return $this->name;
    }
}
// kelas Student merupakan turunan dari kelas Person
class Student extends Person{
    public $studentID;
     // konstruktor untuk menginisialisasi atribut name dari kelas induk dan atribut studentID
    public function __construct($name,$studentID){
        parent::__construct($name);  // memanggil konstruktor dari kelas induk
        $this->studentID = $studentID; // menginisialisasi atribut studentID
    }
     public function getStudentID(){ // metode untuk mengembalikan nilai atribut studentID
        return $this->studentID;
     }
}

// membuat objek dari kelas Student dengan nama dan studentID
$student1 = new Student ("Rafardhan Atala", "230101065");
// menampilkan nama mahasiswa dan studentID yang sudah ditentukan
echo "Mahasiswa " . $student1->getName() . " memiliki StudentID " . $student1->getStudentID() . "";
?>
```
**Output :** <br>
![image](https://github.com/user-attachments/assets/719c18d5-516b-4382-8583-cac3d10997b7)


**2. Polymorphism** <br>

a) Buat kelas Teacher yang juga mewarisi dari Person dan tambahkan atribut teacherID.
```
class Teacher extends Person{
    private $teacherID;
     // konstruktor untuk menginisialisasi atribut name dari kelas induk dan atribut teacherID
    public function __construct($name,$teacherID)
    {
        parent::__construct($name); // memanggil konstruktor dari kelas induk (Person)
        $this->teacherID = $teacherID; // menginisialisasi atribut teacherID
    }

    public function getTeacherID(){  // metode untuk mengembalikan nilai atribut teacherID
        return $this->teacherID;
    }
}
```
   - Kelas Teacher adalah turunan dari kelas Person. Ini berarti kelas Teacher akan mewarisi semua properti dan metode dari kelas Person. Atribut baru $teacherID    
   dideklarasikan sebagai private, artinya hanya dapat diakses dari dalam kelas Teacher saja.
   - Konstruktor ini menerima dua parameter, yaitu $name dan $teacherID. parent::__construct($name) digunakan untuk memanggil konstruktor dari kelas induk (Person) dan    
   menginisialisasi atribut name. Sedangkan atribut $teacherID diinisialisasi secara langsung di dalam kelas Teacher.
   - getTeacherID berfungsi untuk mengembalikan nilai dari atribut $teacherID. Karena atribut $teacherID bersifat private, metode ini diperlukan untuk mengaksesnya 
    dariluar kelas. <br>
    
b) Override metode getName() di kelas Student dan Teacher untuk menampilkan format berbeda.
  ```
// implementasi metode getName untuk kelas Student
     public function getName(){
        return "$this->name memiliki studentID " .$this->studentID. " <br>";
     }
  // implementasi metode getName untuk kelas Teacher
    public function getName(){
        return "Guru " .$this->name. " Memiliki teacherID " .$this->teacherID. "";
    }
  ```
   - metode getName() di-override (ditimpa) untuk memberikan implementasi yang berbeda dari metode yang sama di kelas Person yaitu mengembalikan nama murid dan juga    
     menampilkan studentID. <br>
   - metode getName() di-override (ditimpa) untuk memberikan implementasi yang berbeda dari metode yang sama di kelas Person dan menambahkan kata "Guru" sebelum 
     mengembalikan nama guru dan juga menampilkan teacherID. <br>

**Full Coding :**
```
<?php
// mendifinisikan kelas Person
class Person{
    protected $name; 

    // konstruktor untuk menginisialisasi atribut name
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(){ // metode yang harus diimplementasikan oleh kelas turunan
        return $this->name;
    }
}

// kelas Student merupakan turunan dari kelas Person
class Student extends Person{
    public $studentID;
    // kelas Student merupakan turunan dari kelas Person
    public function __construct($name,$studentID){
        parent::__construct($name); // memanggil konstruktor dari kelas induk (Person)
        $this->studentID = $studentID; // menginisialisasi atribut studentID
    }
     public function getStudentID(){ // metode untuk mengembalikan nilai atribut studentID
        return $this->studentID;
     }
      // implementasi metode getName untuk kelas Student
     public function getName(){
        return "$this->name memiliki studentID " .$this->studentID. " <br>";
     }
}
// kelas Teacher merupakan turunan dari kelas Person
class Teacher extends Person{
    private $teacherID;
     // konstruktor untuk menginisialisasi atribut name dari kelas induk dan atribut teacherID
    public function __construct($name,$teacherID)
    {
        parent::__construct($name); // memanggil konstruktor dari kelas induk (Person)
        $this->teacherID = $teacherID; // menginisialisasi atribut teacherID
    }

    public function getTeacherID(){  // metode untuk mengembalikan nilai atribut teacherID
        return $this->teacherID;
    }
    // implementasi metode getName untuk kelas Teacher
    public function getName(){
        return "Guru " .$this->name. " Memiliki teacherID " .$this->teacherID. "";
    }
}
// membuat objek dari kelas Student dengan nama dan studentID
$student1 = new Student ("Rafardhan Atala", "230101065");
echo $student1 ->getName(); // menampilkan nama dan studentID mahasiswa

// membuat objek dari kelas Teacher dengan nama dan teacherID
$teacher1 = new Teacher ("Ratna Dewi", "012898751");
echo $teacher1 ->getName ();// menampilkan nama dan teacherID guru

?>
```
**Output :** <br>
![image](https://github.com/user-attachments/assets/bb80e5f9-7309-4252-a5d3-cb33832cc562)

**3. Encapsulation:** <br>

a) Ubah atribut name dan studentID dalam kelas Student menjadi private.
```
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
```
  - Atribut name: Dideklarasikan sebagai private, sehingga hanya dapat diakses oleh metode dalam kelas ini, dan menggunakan metode getName() untuk mengembalikan nilai dari     atribut name, memungkinkan akses ke nama. <br>
  - Deklarasi Kelas: Kelas Student didefinisikan sebagai turunan dari kelas Person, artinya Student mewarisi semua atribut dan metode dari Person. <br>
  - Atribut studentID: Dideklarasikan sebagai private, hanya dapat diakses oleh metode dalam kelas Student, dan menggunakan metode getStudentID() untuk mengembalikan nilai     dari atribut studentID. <br>

b) Tambahkan metode setter dan getter untuk mengakses dan mengubah nilai atribut name dan studentID
```
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
```
- Method getName berfungsi mengembalikan nilai dari atribut $name. Metode ini memungkinkan akses ke nama tanpa mengubah nilai secara langsung dan method setName menerima parameter $name dan mengubah nilai atribut $name. Ini memungkinkan untuk memperbarui nama orang yang terdaftar. <br>
- Method getStudentID berfungsi mengembalikan nilai dari atribut $studentID. Ini memungkinkan akses ke ID siswa dan method setStudentID menerima parameter $studentID dan mengubah nilai atribut $studentID. Ini memungkinkan pembaruan ID siswa jika diperlukan. <br><br>

**Full Coding :**
```
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
```
**Output :** <br>
![image](https://github.com/user-attachments/assets/08652c20-45aa-4517-b19f-6aa428962f27)


**4. Abstraction:** <br>

a) Buat kelas abstrak Course dengan metode abstrak getCourseDetails().
```
<?php

abstract class Course {

      abstract public function getCourseDetails();

}
```
Course adalah kelas abstrak yang mendefinisikan struktur dasar dari suatu jenis kelas (course) tetapi tidak memberikan implementasi secara langsung, dan kelas ini memiliki metode abstrak getCourseDetails() yang harus diimplementasikan oleh kelas turunannya. Metode abstrak ini hanya memiliki deklarasi, tetapi tidak ada implementasi (isinya kosong) karena implementasi diserahkan ke kelas turunan. <br>

b) Buat kelas OnlineCourse dan OfflineCourse yang mengimplementasikan getCourseDetails() untuk memberikan detail yang berbeda.
```
class OnlineCourse extends Course{
    public function getCourseDetails() {
        return "Ini adalah kelas yang dilaksanakan secara zoom";
    }
}

class OfflineCourse extends Course{
    public function getCourseDetails() {
        return "Hari ini kelas dilaksanakna secara tatap muka";
    }
}
```
OnlineCourse adalah kelas turunan dari Course dan mengimplementasikan metode getCourseDetails(), ketika metode getCourseDetails() dipanggil, ia mengembalikan deskripsi bahwa kelas ini dilakukan secara online melalui Zoom dan Kelas OfflineCourse juga merupakan turunan dari Course dan mengimplementasikan metode getCourseDetails(), ketika metode getCourseDetails() dipanggil, ia mengembalikan deskripsi bahwa kelas ini dilaksanakan secara tatap muka. <br><br>

**Full Coding:**
```
<?php

abstract class Course {

      abstract public function getCourseDetails();

}

class OnlineCourse extends Course{
    public function getCourseDetails() {
        return "Ini adalah kelas yang dilaksanakan secara zoom";
    }
}

class OfflineCourse extends Course{
    public function getCourseDetails() {
        return "Hari ini kelas dilaksanakna secara tatap muka";
    }
}

$class1 = new OnlineCourse();
echo "Online course : " .$class1->getCourseDetails(). "<br>";

$class2 = new OfflineCourse();
echo "Offline course : " .$class2->getCourseDetails(). "";

?>
```
**Output :** <br>
![image](https://github.com/user-attachments/assets/fbccfb13-c73c-4773-b93b-81924f52111c)

# Tugas 1 Jobsheet 3
1. Implementasikan kelas Person sebagai induk dari Dosen dan Mahasiswa.
```
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
```
- Class Person adalah kelas dasar yang memiliki properti $nama yang dilindungi (protected) dan metode untuk mengatur (setNama) dan mendapatkan (getNama) nilai nama dan memiliki metode abstrak getRole() yang harus diimplementasikan oleh kelas turunannya. <br>

2. Gunakan konsep Inheritance untuk membuat hierarki kelas yang memungkinkan Dosen dan Mahasiswa memiliki atribut dan metode yang sesuai dengan perannya
```
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
```
- Class Dosen merupakan class yang mewarisi dari Person dengan tambahan properti $nip dan $matakuliah.
- Konstruktor menginisialisasi nama, NIP, dan mata kuliah, serta mengimplementasikan getNip, setNip, getMatakuliah, dan setMatakuliah.
- Class Mahasiswa merupakan class yang mewarisi dari Person dengan tambahan properti $nim dan $jurusan.
- Konstruktor menginisialisasi nama, NIM, dan jurusan, serta mengimplementasikan getNim, setNim, getJurusan, dan setJurusan. <br>

3. Terapkan Polymorphism dengan membuat metode getRole() di kelas Person dan override metode ini di kelas Dosen dan Mahasiswa untuk menampilkan peran yang 
berbeda.
```
<?php

// mendefinisikan class person
class Person {
    protected $nama; 
// metode yang harus diimplementasikan oleh kelas turunan
    public function getRole(){
        return "$this->nama"; // Mengembalikan nama sebagai peran
    }
}
class Dosen extends Person {
    private $nip; 
    private $matakuliah;
// Implementasi metode getRole untuk kelas Dosen
    public function getRole(){
        return "Dosen $this->nama mengajar matakuliah $this->matakuliah "; // Mengembalikan informasi tentang dosen dan mata kuliah
    }
}
class Mahasiswa extends Person{
    private $nim; 
    private $jurusan; 
public function getRole(){
        return "$this->nama dengan NIM $this->nim merupakan mahasiswa Jurusan $this->jurusan"; // Mengembalikan informasi tentang mahasiswa
    }
    
}
```
- Pada class Person memiliki metode abstrak getRole() yang harus diimplementasikan oleh kelas turunannya.
- Di kelas Person, metode getRole() hanya mengembalikan nilai dari properti $nama. Namun, di kelas Dosen, metode ini di-override untuk menambahkan informasi yang lebih spesifik tentang dosen, seperti NIP dan mata kuliah yang diajarkan.
- Di kelas Person, metode getRole() juga di-override oleh kelas Mahasiswa untuk memberikan informasi yang lebih lengkap tentang mahasiswa, termasuk NIM dan jurusan.

4. Gunakan Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim di 
kelas Mahasiswa.
```
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

    // Metode untuk mendapatkan NIP
    public function getNidn(){
        return $this->nidn; // Mengembalikan nilai NIP
    }

    // Metode untuk mengatur NIP
    public function setNidn ($nidn){
        return $this->nidn = $nidn; // Mengatur nilai NIP
    }
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

```
Atribut seperti $nidn, $matakuliah di kelas Dosen, dan $nim, $jurusan di kelas Mahasiswa menggunakan modifier private. Ini berarti atribut tersebut hanya bisa diakses dan dimodifikasi di dalam kelas itu sendiri. Untuk mengakses atau memodifikasi nilai atribut yang private, digunakan metode getter dan setter. Contohnya: getNidn() dan setNidn() di kelas Dosen digunakan untuk mengambil dan mengatur nilai dari atribut $nidn dan getJurusan() dan setJurusan() di kelas Mahasiswa digunakan untuk mengakses dan mengatur nilai dari atribut $jurusan. <br>


5. Buat kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
```
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
```
Terdapat sebuah kelas abstrak bernama Jurnal yang mendefinisikan metode abstrak getBuatJurnal() tanpa implementasi. Kelas ini tidak bisa diinstansiasi langsung, sehingga kelas turunannya, yaitu JurnalDosen dan JurnalMahasiswa, wajib mengimplementasikan metode tersebut sesuai konteksnya. Kelas JurnalDosen digunakan untuk jurnal yang berkaitan dengan dosen, sedangkan JurnalMahasiswa digunakan untuk jurnal yang berkaitan dengan mahasiswa. Masing-masing kelas turunan mengimplementasikan metode getBuatJurnal() untuk mengembalikan informasi sesuai dengan objek yang mereka tangani (dosen atau mahasiswa) <br><br>

**Hasil Coding :**
```
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

```
**Output :**

![image](https://github.com/user-attachments/assets/f18ce963-8729-405f-9960-feb3567c60c5) <br> <br>

Kode di atas menerapkan beberapa konsep dasar dalam Object-Oriented Programming (OOP), yaitu:

- Encapsulation (Enkapsulasi): Enkapsulasi diterapkan melalui penggunaan properti yang bersifat private dan protected pada kelas-kelas, seperti nama, nidn, dan matakuliah. Ini memastikan bahwa data tersebut hanya dapat diakses melalui metode yang disediakan, seperti getNidn(), setNidn(), dan getMatakuliah().
- Inheritance (Pewarisan): Pada kode ini, kelas Dosen dan Mahasiswa mewarisi properti dan metode dari kelas Person. Mereka juga meng-override metode getRole(), yang berarti mereka memberikan implementasi yang berbeda dari metode yang sama yang didefinisikan di kelas induk. Ini menunjukkan bagaimana subclass dapat memperluas atau memodifikasi perilaku dari kelas induk.
- Polymorphism (Polimorfisme): Polimorfisme memungkinkan objek dari kelas turunan (seperti Dosen dan Mahasiswa) untuk digunakan sebagai objek dari kelas induknya. Dalam hal ini, metode getRole() memberikan hasil yang berbeda tergantung pada apakah objek tersebut adalah Dosen atau Mahasiswa. Konsep ini juga diterapkan pada kelas abstrak Jurnal dengan metode abstrak getBuatJurnal(), di mana kelas JurnalDosen dan JurnalMahasiswa mengimplementasikan metode tersebut dengan cara yang berbeda.
- Abstraction (Abstraksi): Kelas Jurnal adalah contoh dari abstraksi. Kelas ini hanya mendefinisikan kerangka dari apa yang akan dilakukan tanpa memberikan detail implementasinya. Kelas turunan seperti JurnalDosen dan JurnalMahasiswa harus memberikan implementasi untuk metode abstrak getBuatJurnal(). Ini sesuai dengan prinsip abstraksi, yaitu menyembunyikan detail yang tidak perlu dan hanya menampilkan fungsi penting.







