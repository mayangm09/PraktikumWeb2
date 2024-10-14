# PraktikumWeb2

<b>OOP (Object-Oriented Programming) </b><br>
Object Oriented Programming (OOP) atau dalam bahasa Indonesia dikenal dengan Pemrograman Berorientasi Objek (PBO) merupakan sebuah paradigman/ pendekatan pengembangan perangkat lunak/program yang memiliki struktur berbasis objek serta memiliki atribut dan method yang dapat berinteraksi satu sama lain untuk memenuhi suatu tujuan.<br><br>
<b>Materi Pokok : </b><br>
<b>Class (Kelas) </b> <br>
Kelas adalah blueprint atau cetak biru untuk objek. Kelas mendefinisikan atribut dan metode yang akan dimiliki oleh objek yang dibuat dari kelas tersebut. Atribut atau properties adalah variabel yang menyimpan data untuk objek. Metode adalah fungsi yang ditentukan dalam kelas yang dapat dipanggil oleh
objek. <br><br>
Langkah - Langkah dalam pembuatan kelas : <br>
1. Menentukan nama kelas <br>
   Nama kelas diawal biasanya ditulis dengan huruf kapital. Misalnya, Mahasiswa, Dosen.
2. Menentukan Atribut <br>
   Atribut adalah karakteristik atau properti dari kelas. Misalnya, untuk kelas Mahasiwa berupa nama, nim, dan jurusan. <br><br>
   ![image](https://github.com/user-attachments/assets/d0047fcd-1648-49cc-b728-d5a7d8203e00)
3. Menentukan Metode <br>
   Metode adalah fungsi atau prosedur yang dapat dilakukan oleh objek. Metode dapat digunakan untuk mengubah atau mengakses atribut. <br> <br>
   ![image](https://github.com/user-attachments/assets/9c8a97d4-2999-42ca-9fbb-45b05721e36d)
   
<b>Atribut dan Metode </b> <br>
Atribut : Menyimpan data atau keadaan dari objek. <br>
Metode : Operasi atau fungsi yang dilakukan oleh objek. <br>
Contoh Coding : 
![js1](https://github.com/user-attachments/assets/8e4758e6-6e0f-4fe5-9c15-17e9d1d47158)
Metode tampilkanData() dalam kelas Mahasiswa digunakan untuk menampilkan informasi lengkap tentang mahasiswa, seperti nama, NIM, dan jurusan. Saat dipanggil, metode ini menggabungkan nilai dari atribut objek ($this->nama, $this->nim, dan $this->jurusan) menjadi satu string. Ketika objek Mahasiswa dibuat dan metode ini dipanggil, hasilnya adalah tampilan yang jelas tentang data mahasiswa.

# Instruksi Kerja
1. Membuat Class dan Object <br>
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan. <br>
- Buat metode tampilkanData() dalam class Mahasiswa. <br>
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut. <br> <br>
  ![class_object](https://github.com/user-attachments/assets/30c437b6-d87c-4d64-89fe-3a6d2a40636b)
  ![image](https://github.com/user-attachments/assets/32866974-4268-4129-a986-89c6af9cef53)
2. Implementasi Constructor <br>
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.
- Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat. <br><br>
![constructor](https://github.com/user-attachments/assets/41b60fd4-50e7-4ee8-92ea-07f313a8c04e)
![image](https://github.com/user-attachments/assets/5c37d799-a712-4b1e-9438-8bf30e40ecf2)
3. Membuat Metode Tambahan <br>
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.
- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat. <br><br>
![updatejurusan](https://github.com/user-attachments/assets/2541fd5f-0cde-4a98-9afb-3d044d6b67f7)
![image](https://github.com/user-attachments/assets/109296c0-3b44-4917-a397-21c0862b4b7e)
4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode tampilkanData(). <br><br>
![atribut](https://github.com/user-attachments/assets/34dc9682-f4fa-4d6b-9504-fed063fe04a1)
![image](https://github.com/user-attachments/assets/f546cb6d-32fe-4a11-8d73-ec18dcf45472)








    

   
