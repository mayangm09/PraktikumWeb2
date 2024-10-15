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

**Instruksi Kerja:**

1. **Membuat Class dan Object**
   - Buat class `Mahasiswa` yang memiliki atribut `nama`, `nim`, dan `jurusan`.  <br><br>
   ![image](https://github.com/user-attachments/assets/64a4931c-b88a-4952-add2-dc0c391435e4) <br>
**Definisi Kelas**: Kelas `Mahasiswa` didefinisikan menggunakan kata kunci `class`. Kelas ini memiliki beberapa atribut/properti yang merepresentasikan data mahasiswa, yaitu:

      - **nama**: Menyimpan nama mahasiswa.
      - **nim**: Menyimpan Nomor Induk Mahasiswa (NIM).
      - **jurusan**: Menyimpan jurusan mahasiswa.

   - Buat metode `tampilkanData()` dalam class `Mahasiswa`. <br><br>
    ![image](https://github.com/user-attachments/assets/c7bb0c9e-cde1-4366-b105-1c3f4d0882a1)
     **Metode tampilkanData**: Di dalam kelas, ada sebuah metode bernama tampilkanData. Metode ini berfungsi untuk mengembalikan string yang berisi informasi tentang nama, NIM, dan jurusan mahasiswa. Di dalam metode ini, digunakan kata kunci return untuk mengembalikan teks yang mencakup atribut kelas ($this->nama, $this->nim, dan $this->jurusan).
   
   - Instansiasi objek dari class `Mahasiswa` dan tampilkan data mahasiswa tersebut. <br><br>
   ![image](https://github.com/user-attachments/assets/47db161f-6843-4642-b7bd-ed864a793c71)
   Objek mahasiswa1 ini adalah sebuah instance dari kelas Mahasiswa, yang berarti bahwa ia memiliki akses ke semua atribut dan metode yang didefinisikan di kelas Mahasiswa, kemudian memberikan nilai ke atribut-atribut objek mahasiswa1. Proses ini mengisi data yang spesifik untuk objek tersebut, yaitu nama mahasiswa, NIM, dan jurusannya.  Terakhir, memanggil metode tampilkanData untuk menampilkan informasi mahasiswa.

      <b>Output : </b> <br>
      ![image](https://github.com/user-attachments/assets/1a804d6f-51d6-4e3a-af3a-6907a6ab56bf)

2. **Implementasi Constructor**
   - Tambahkan constructor pada kelas `Mahasiswa` yang akan menginisialisasi atribut `nama`, `nim`, dan `jurusan`. <br>
   - Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat. <br><br>
   ![image](https://github.com/user-attachments/assets/db3da8a1-883b-4f65-8e54-8f4c45a12a36)
      Metode __construct adalah konstruktor yang dijalankan saat objek dari kelas dibuat.
      Konstruktor ini menerima tiga parameter ($nama, $nim, dan $jurusan) dan menginisialisasi atribut objek menggunakan this->.

     **Output :**
     ![image](https://github.com/user-attachments/assets/7511b5df-6d40-4486-9ab5-f260fadac338)


3. **Membuat Metode Tambahan**
   - Buat metode `updateJurusan()` dalam kelas `Mahasiswa` yang memungkinkan perubahan jurusan.
   - Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.  <br><br>
   ![image](https://github.com/user-attachments/assets/03e38cc9-80d3-48c5-8f76-0f3ffd99d1d3)
       tampilkanData(): Metode ini mengembalikan string yang berisi informasi tentang nama, nim, dan jurusan mahasiswa. Metode ini menggunakan interpolasi string untuk menyisipkan nilai atribut ke dalam kalimat. Selanjutnya updateJurusan($jurusanbaru): Metode ini digunakan untuk memperbarui jurusan mahasiswa. Ia menerima parameter $jurusanbaru dan menetapkan nilai baru ke atribut $jurusan. <br>
       
     **Output :** <br>
   ![image](https://github.com/user-attachments/assets/109296c0-3b44-4917-a397-21c0862b4b7e)

4. **Penggunaan Atribut dan Metode**
   - Ubah nilai atribut `nim` dari objek `Mahasiswa` menggunakan metode setter.
   - Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode `tampilkanData()`.  
   ![atribut](https://github.com/user-attachments/assets/34dc9682-f4fa-4d6b-9504-fed063fe04a1)  
   ![image](https://github.com/user-attachments/assets/f546cb6d-32fe-4a11-8d73-ec18dcf45472)

---


    

   
