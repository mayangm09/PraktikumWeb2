# PraktikumWeb2

**OOP (Object-Oriented Programming)**  
Object Oriented Programming (OOP) atau dalam bahasa Indonesia dikenal dengan Pemrograman Berorientasi Objek (PBO) merupakan sebuah paradigma atau pendekatan pengembangan perangkat lunak yang memiliki struktur berbasis objek. Objek memiliki atribut dan metode yang dapat saling berinteraksi untuk memenuhi tujuan tertentu.

---

## Materi Pokok:

### Class (Kelas)
Kelas adalah blueprint atau cetak biru untuk objek. Kelas mendefinisikan atribut dan metode yang akan dimiliki oleh objek yang dibuat dari kelas tersebut. 

- **Atribut (properties)**: Variabel yang menyimpan data untuk objek.
- **Metode**: Fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh objek.

---

### Langkah-Langkah dalam Pembuatan Kelas:

1. **Menentukan Nama Kelas**  
   Nama kelas biasanya diawali dengan huruf kapital. Misalnya: `Mahasiswa`, `Dosen`.

2. **Menentukan Atribut**  
   Atribut adalah karakteristik atau properti dari kelas. Contoh untuk kelas `Mahasiswa` meliputi:
   - `nama`: Menyimpan nama mahasiswa.
   - `nim`: Menyimpan Nomor Induk Mahasiswa (NIM).
   - `jurusan`: Menyimpan jurusan mahasiswa.

   ![image](https://github.com/user-attachments/assets/d0047fcd-1648-49cc-b728-d5a7d8203e00)

3. **Menentukan Metode**  
   Metode adalah fungsi atau prosedur yang dapat dilakukan oleh objek. Metode dapat digunakan untuk mengubah atau mengakses atribut.  

   ![image](https://github.com/user-attachments/assets/9c8a97d4-2999-42ca-9fbb-45b05721e36d)

---

### Atribut dan Metode
- **Atribut**: Menyimpan data atau keadaan dari objek.
- **Metode**: Operasi atau fungsi yang dilakukan oleh objek.

#### Contoh Coding:
![js1](https://github.com/user-attachments/assets/8e4758e6-6e0f-4fe5-9c15-17e9d1d47158)

Metode `tampilkanData()` dalam kelas `Mahasiswa` digunakan untuk menampilkan informasi lengkap tentang mahasiswa, seperti nama, NIM, dan jurusan. Saat dipanggil, metode ini menggabungkan nilai dari atribut objek (`$this->nama`, `$this->nim`, dan `$this->jurusan`) menjadi satu string. Ketika objek `Mahasiswa` dibuat dan metode ini dipanggil, hasilnya adalah tampilan yang jelas tentang data mahasiswa.

---

# JOB Sheet 1

**INTRUKSI KERJA :**

1. **Membuat Class dan Object**
   - Buat class `Mahasiswa` yang memiliki atribut `nama`, `nim`, dan `jurusan`.  
   
   ![image](https://github.com/user-attachments/assets/64a4931c-b88a-4952-add2-dc0c391435e4)  

   **Definisi Kelas**: Kelas `Mahasiswa` didefinisikan menggunakan kata kunci `class`. Kelas ini memiliki beberapa atribut/properti yang merepresentasikan data mahasiswa, yaitu:
   - **nama**: Menyimpan nama mahasiswa.
   - **nim**: Menyimpan Nomor Induk Mahasiswa (NIM).
   - **jurusan**: Menyimpan jurusan mahasiswa.

   - Buat metode `tampilkanData()` dalam class `Mahasiswa`.  

   ![image](https://github.com/user-attachments/assets/c7bb0c9e-cde1-4366-b105-1c3f4d0882a1)  
   
   **Metode tampilkanData**: Di dalam kelas, ada sebuah metode bernama tampilkanData. Metode ini berfungsi untuk mengembalikan string yang berisi informasi tentang nama, NIM, dan jurusan mahasiswa. Di dalam metode ini, digunakan kata kunci return untuk mengembalikan teks yang mencakup atribut kelas ($this->nama, $this->nim, dan $this->jurusan).
   
   - Instansiasi objek dari class `Mahasiswa` dan tampilkan data mahasiswa tersebut.  

   ![image](https://github.com/user-attachments/assets/47db161f-6843-4642-b7bd-ed864a793c71)  

   Objek mahasiswa1 ini adalah sebuah instance dari kelas Mahasiswa, yang berarti bahwa ia memiliki akses ke semua atribut dan metode yang didefinisikan di kelas Mahasiswa, kemudian memberikan nilai ke atribut-atribut objek mahasiswa1. Proses ini mengisi data yang spesifik untuk objek tersebut, yaitu nama mahasiswa, NIM, dan jurusannya. Terakhir, memanggil metode tampilkanData untuk menampilkan informasi mahasiswa.

   **Output :**  
   ![image](https://github.com/user-attachments/assets/1a804d6f-51d6-4e3a-af3a-6907a6ab56bf)

2. **Implementasi Constructor**
   - Tambahkan constructor pada kelas `Mahasiswa` yang akan menginisialisasi atribut `nama`, `nim`, dan `jurusan`. 
   - Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.  

   ![image](https://github.com/user-attachments/assets/7228625a-fb03-46ac-9f79-62381c112571)

   **Proses Pembuatan Kelas :**
   - Kelas Mahasiswa didefinisikan dengan menggunakan kata kunci class.
   - Kelas ini memiliki tiga atribut (properties): $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan informasi tentang mahasiswa.
   - Fungsi __construct() berfungsi sebagai konstruktor yang digunakan untuk menginisialisasi atribut objek saat objek kelas Mahasiswa dibuat.
   - Konstruktor ini menerima tiga parameter: $nama, $nim, dan $jurusan, yang kemudian disimpan dalam atribut kelas menggunakan $this->.  

   **Penggunaan Metode : tampilData()**  
   - Metode ini bertugas untuk mengembalikan informasi mengenai mahasiswa dalam format string. Saat dipanggil, metode ini akan mengambil nilai dari atribut $nama, $nim, dan $jurusan, dan menggabungkannya dalam kalimat yang jelas dan informatif. Ketika kita memanggil metode ini dengan $mahasiswa1->tampilkanData(), PHP akan menjalankan metode tersebut dan mengembalikan string yang berisi informasi tentang nama, NIM, dan jurusan mahasiswa. Ini terjadi karena metode mengakses atribut objek melalui $this.  

   **Output :**  
   ![image](https://github.com/user-attachments/assets/7511b5df-6d40-4486-9ab5-f260fadac338)

3. **Membuat Metode Tambahan**
   - Buat metode `updateJurusan()` dalam kelas `Mahasiswa` yang memungkinkan perubahan jurusan.
   - Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.  

   ![image](https://github.com/user-attachments/assets/03970178-bb2f-41e8-b7fa-4049d0453d42)

   **Proses Pembuatan Kelas :**
   - Kelas Mahasiswa didefinisikan dengan menggunakan kata kunci class.
   - Kelas ini memiliki tiga atribut (properties): $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan informasi tentang mahasiswa.
   - Fungsi __construct() berfungsi sebagai konstruktor yang digunakan untuk menginisialisasi atribut objek saat objek kelas Mahasiswa dibuat.
   - Konstruktor ini menerima tiga parameter: $nama, $nim, dan $jurusan, yang kemudian disimpan dalam atribut kelas menggunakan $this->.  

   **Penggunaan Metode : Tampil Data ()**  
   - Metode ini bertugas untuk mengembalikan informasi mengenai nama, NIM, dan jurusan mahasiswa dalam format string yang dapat ditampilkan. Ketika metode ini dipanggil, ia akan menghasilkan kalimat yang menginformasikan data pribadi mahasiswa. Contoh Penggunaan: Setelah objek $mahasiswa1 dibuat, metode ini dipanggil dengan $mahasiswa1->tampilkanData(). Ini akan mengembalikan string yang berisi nama, NIM, dan jurusan dari objek $mahasiswa1.

   **Penggunaan Metode : Update Jurusan**  
   - Metode ini digunakan untuk memperbarui jurusan mahasiswa. Ia menerima satu parameter, yaitu $jurusanbaru, yang akan menggantikan nilai dari atribut $jurusan. Contoh Penggunaan: Metode ini dipanggil dengan $mahasiswa1->updateJurusan("Elektronika"), yang akan mengubah jurusan mahasiswa dari "Komputer dan Bisnis" menjadi "Elektronika".  

   **Output :**  
   ![image](https://github.com/user-attachments/assets/109296c0-3b44-4917-a397-21c0862b4b7e)

4. **Penggunaan Atribut dan Metode**
   - Ubah nilai atribut `nim` dari objek `Mahasiswa` menggunakan metode setter.
   - Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode `tampilkanData()`.  

   ![image](https://github.com/user-attachments/assets/aca91c97-2de4-402f-aa57-163c319b00e3)


   **Proses Pembuatan Kelas :**
   - Kelas Mahasiswa didefinisikan dengan menggunakan kata kunci class.
   - Kelas ini memiliki tiga atribut (properties): $nama, $nim, dan $jurusan. Atribut ini digunakan untuk menyimpan informasi tentang mahasiswa.
   - Fungsi __construct() berfungsi sebagai konstruktor yang digunakan untuk menginisialisasi atribut objek saat objek kelas Mahasiswa dibuat.
   - Konstruktor ini menerima tiga parameter: $nama, $nim, dan $jurusan, yang kemudian disimpan dalam atribut kelas menggunakan $this->.  

   **Penggunaan Metode : Tampil Data ()**  
   - Metode ini bertugas untuk mengembalikan informasi mengenai nama, NIM, dan jurusan mahasiswa dalam format string yang dapat ditampilkan. Ketika metode ini dipanggil, ia akan menghasilkan kalimat yang menginformasikan data pribadi mahasiswa. Contoh Penggunaan: Setelah objek $mahasiswa1 dibuat, metode ini dipanggil dengan $mahasiswa1->tampilkanData(). Ini akan mengembalikan string yang berisi nama, NIM, dan jurusan dari objek $mahasiswa1.

   **Penggunaan Metode : Ubah NIM**  
   - Metode ini digunakan untuk memperbarui NIM mahasiswa. Ia menerima satu parameter, yaitu $nimbaru, yang akan menggantikan nilai dari atribut $nim. Contoh Penggunaan: Metode ini dipanggil dengan $mahasiswa1->ubahNIM("123456789"), yang akan mengubah NIM mahasiswa dari "123456" menjadi "123456789".  

   **Output :**  
   ![image](https://github.com/user-attachments/assets/eefe14e2-bec8-4d64-834c-f53517c70cb0)


**TUGAS :**
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah. 
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen. 
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk 
menampilkan informasi tersebut.

**Hasil Coding :** <br>
![dosen tgs](https://github.com/user-attachments/assets/ce09367a-9385-4751-b866-49739c9fa5d4) <br>
<b> a.) Proses Pembuatan Kelas </b> <br> 
![image](https://github.com/user-attachments/assets/784a6d2e-661d-494b-852f-11eb79c83dc4) <br>
- Definisi Kelas: Kelas dosen didefinisikan menggunakan kata kunci class. Nama kelas menggunakan huruf kecil, namun sebaiknya mengikuti konvensi penamaan dengan huruf besar di awal (misalnya Dosen) untuk mengikuti praktik terbaik dalam pemrograman OOP. <br>
- Atribut (Properties): Kelas dosen memiliki tiga atribut yang didefinisikan sebagai public:
                        $nama: Menyimpan nama dosen.
                        $nip: Menyimpan Nomor Induk Pegawai (NIP) dosen.
                        $mataKuliah: Menyimpan nama mata kuliah yang diajarkan oleh dosen.
- Constructor: Fungsi __construct() berfungsi sebagai konstruktor yang menginisialisasi atribut objek saat objek dari kelas dosen dibuat. Parameter yang diterima oleh konstruktor adalah: $nama: untuk mengisi atribut $nama. $nip: untuk mengisi atribut $nip. $mataKuliah: untuk mengisi atribut $mataKuliah. Pada saat objek dosen dibuat, konstruktor ini dipanggil secara otomatis untuk menginisialisasi nilai atribut dengan parameter yang diberikan.

<b> b.) Penggunaan Metode </b> <br>
![image](https://github.com/user-attachments/assets/21a46d06-fc78-44ef-ae82-6757e8a061af)
- Metode tampilkanDosen(): Metode ini berfungsi untuk mengembalikan informasi tentang dosen dalam bentuk string. Saat metode ini dipanggil, ia mengakses atribut objek menggunakan $this, dan mengembalikan string yang berisi: Nama Dosen, NIP Dosen, Mata Kuliah yang diajarkan <br>

**Output :** <br> <br>
![image](https://github.com/user-attachments/assets/dba3e5e6-b4ff-4c26-bcd2-07f792c5d34d)

 ---
# JOB Sheet2

**INTRUKSI KERJA :**

**1. Membuat Class dan Object**
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan. <br>
  ![image](https://github.com/user-attachments/assets/4b56d4d9-80a7-43aa-883f-7cc485ba9c8e) <br>
Bagian ini mendefinisikan kelas Mahasiswa yang berisi atribut (properti) nama, nim, dan jurusan. Atribut menggunakan akses public sehingga bisa diakses dari luar kelas.
- Buat metode tampilkanData() dalam class Mahasiswa.
![image](https://github.com/user-attachments/assets/5ec436e1-fa5e-49b6-8514-84e9c2156e0f) <br>
Metode tampilkanData dideklarasikan sebagai public. Fungsi ini akan mengembalikan string yang berisi informasi tentang nama, nim, dan jurusan mahasiswa. Penggunaan $this-> merujuk pada atribut yang ada di dalam objek saat ini.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
![image](https://github.com/user-attachments/assets/e6098c9c-68ce-465c-a03b-bdd6b4cd38c8) <br>
Baris ini membuat objek baru bernama $mahasiswa1 dari kelas Mahasiswa. Objek ini kemudian akan memiliki akses ke semua properti dan metode dalam kelas tersebut. Kemudian Baris-baris ini mengisi atribut $nama, $nim, dan $jurusan pada objek $mahasiswa1 dengan data yang sesuai. Properti diakses dengan tanda panah ->. Setelah itu, Metode tampilkanData() dipanggil pada objek $mahasiswa1, dan hasilnya dicetak menggunakan echo. Metode ini akan mengembalikan string yang berisi nama, nim, dan jurusan yang sebelumnya telah diatur. <br>
**Coding :** <br>
![classj2](https://github.com/user-attachments/assets/ad87934d-94d6-411f-ab01-57e0949e997d) <br>
**Output :** <br>
![image](https://github.com/user-attachments/assets/a774d2dd-3ae8-4d2a-a858-cd061963c7d1) <br>

**2. Encapsulation**
- Ubah atribut dalam class Mahasiswa menjadi private.
```
<?php
// mendifinisikan kelas Mahasiswa
class Mahasiswa {
    private $nama;
    private $nim;
    private $jurusan;
```
Bagian ini mendefinisikan kelas Mahasiswa dengan atribut $nama, $nim, dan $jurusan. Atribut ini bersifat private, yang artinya tidak bisa diakses langsung dari luar kelas, hanya bisa diakses melalui metode getter dan setter.
- Buat metode getter dan setter untuk atribut nama, nim, dan jurusan.
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
a) getNama berfungsi untuk mengambil nilai dari atribut $nama, yang bersifat private. Karena $nama tidak bisa diakses langsung dari luar kelas, metode ini memungkinkan         kita mengakses nilainya secara tidak langsung. <br>
b) setNama berfungsi untuk mengatur nilai dari atribut $nama. Metode ini menerima parameter $nama yang kemudian digunakan untuk memperbarui nilai atribut $nama dalam           objek. <br>
c) getNim berfungsi untuk mengambil nilai dari atribut $nim, yang bersifat private. Karena $nim tidak bisa diakses langsung dari luar kelas, metode ini digunakan untuk         mengakses nilainya. <br>
d) setNim berfungsi untuk mengatur nilai dari atribut $nim. Metode ini menerima parameter $nim yang akan digunakan untuk memperbarui nilai atribut $nim. <br>
e) getJurusan berfungsi untuk mengambil nilai dari atribut $jurusan, yang bersifat private. Metode ini memungkinkan kita mengakses nilai $jurusan secara tidak langsung dari luar kelas. <br>
f) setJurusan berfungsi untuk mengatur nilai dari atribut $jurusan. Metode ini menerima parameter $jurusan yang akan digunakan untuk memperbarui nilai atribut $jurusan.
   - Demonstrasikan akses ke atribut menggunakan metode getter dan setter
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
Objek $mahasiswa1 dibuat dari kelas Mahasiswa dengan parameter yang dioper ke constructor, yaitu "Dina Ayu", "230102069", dan "Komputer dan Bisnis". Kemudian, Metode getNama(), getNim(), dan getJurusan() digunakan untuk mengambil dan menampilkan nilai dari atribut $nama, $nim, dan $jurusan. Informasi ini dicetak sebelum ada perubahan pada atribut. Selanjutnya, ketika kita mengubah data menggunakan metode setter untuk mengubah nilai atribut $nama, $nim, dan $jurusan. Nilai baru diset menggunakan parameter yang dikirim ke masing-masing metode setter. Setelah nilai atribut diubah menggunakan setter, metode getter kembali dipanggil untuk menampilkan data yang telah diperbarui. <br>
**Coding :** <br>
![encapj2](https://github.com/user-attachments/assets/66e4a780-b3bf-4f2e-a57c-6617f8cc5310)
**Output :** <br>
![image](https://github.com/user-attachments/assets/e25f226b-3f74-40c3-8c95-3e0a47d8e25c)


**3. Inheritance :**
- Buat class Pengguna dengan atribut nama dan metode getNama().
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
Script ini mendefinisikan kelas Pengguna yang memiliki atribut nama dengan access modifier protected. Kelas ini memiliki konstruktor yang digunakan untuk menginisialisasi nilai nama saat objek dibuat. Dan metode getNama berfungsi sebagai getter untuk mengembalikan nilai atribut nama. Ini digunakan untuk mendapatkan nama pengguna dari objek.
- Buat class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
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
Kelas Dosen merupakan subclass dari Pengguna. Artinya, Dosen mewarisi atribut dan metode dari Pengguna. Dalam kelas Dosen, ada atribut tambahan yaitu $matakuliah yang bersifat private. Kemudian terdapat konstructor dalam kelas Dosen, yang  memanggil konstruktor dari kelas induk (Pengguna) untuk menginisialisasi nama dosen dan menginisialisasi mata kuliah yang diampu oleh dosen. <br>
Pada bagian script ini juga terdapat metode getMatakuliah, yaitu Getter yang digunakan untuk mendapatkan nilai atribut matakuliah dan metode setMatakuliah, yaitu Setter yang digunakan untuk mengubah nilai atribut matakuliah.
- Instansiasi objek dari class Dosen dan tampilkan data dosen.
```
// membuat objek dosen1 dari kelas Dosen dengan nama dan mata kuliah tertentu
$dosen1 = new Dosen ("Keysha Meinava", "Matematika Dikstrik");
// menampilkan informasi dosen dan mata kuliah 
echo "Dosen dengan nama ". $dosen1->getNama()." mengajar matakuliah ". $dosen1->getMatakuliah()."";
```
Objek dosen1 dibuat dengan menggunakan kelas Dosen. Nama yang diberikan adalah "Keysha Meinava" dan mata kuliah yang diampu adalah "Matematika Diskrit". Saat objek ini dibuat, konstruktor di kelas Dosen dipanggil, yang pada gilirannya memanggil konstruktor kelas Pengguna untuk mengatur nama dosen. Kemudian, menggunakan metode getNama() dan getMatakuliah() untuk mengambil nama dosen dan mata kuliah yang diampu, lalu menampilkannya.
**Coding :** <br>
![inheri2](https://github.com/user-attachments/assets/80907775-a03a-443d-95ec-03557d2ec887)
**Output :** <br>
![image](https://github.com/user-attachments/assets/dac75fc5-3b38-4218-9d1b-82002ce4a8f8)

**4. Polymorphism :**
- Buat class Pengguna dengan metode aksesFitur().
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
Kelas Pengguna adalah kelas dasar yang memiliki satu atribut yaitu $nama yang disimpan sebagai protected. Atribut ini dapat diakses oleh kelas turunan. Kemudian, __construct($nama) bertugas untuk menginisialisasi atribut nama saat objek dari kelas ini dibuat, dan metode aksesFitur akan menampilkan bahwa pengguna memiliki akses fitur umum, dan ini bisa di-override oleh kelas turunan (dosen dan mahasiswa).
- Implementasikan aksesFitur() dengan cara berbeda di class Dosen dan Mahasiswa.
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
Metode aksesFitur di-override untuk menunjukkan bahwa dosen memiliki akses fitur tambahan, yaitu bisa menginput nilai. Sedangkan, pada kelas Mahasiswa Metode aksesFitur di override untuk menunjukkan bahwa mahasiswa hanya memiliki akses untuk melihat nilai. 
- Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode aksesFitur().
```
// membuat objek dosen1 dari kelas Dosen dengan nama dan mata kuliah tertentu
$dosen1 = new Dosen ("Keysha Meinava", "Matematika Diskrit");
echo $dosen1->aksesFitur(); // menampilkan akses fitur dosen
echo "<br>";
// membuat objek mahasiswa1 dari kelas Mahasiswa dengan nama, NIM, dan jurusan tertentu
$mahasiswa1 = new Mahasiswa ("Dina Ayu", "230102069", "Komputer dan Bisnis");
echo $mahasiswa1->aksesFitur(); // menampilkan akses fitur mahasiswa
```
Objek dosen1 dibuat dengan nama "Keysha Meinava" dan mengajar mata kuliah "Matematika Diskrit". Kemudian, metode aksesFitur untuk dosen menampilkan informasi tentang dosen dan akses mereka untuk menginput nilai.
Objek mahasiswa1 dibuat dengan nama "Dina Ayu", NIM "230102069", dan jurusan "Komputer dan Bisnis". Metode aksesFitur untuk mahasiswa menampilkan informasi tentang mahasiswa dan akses mereka untuk melihat nilai
