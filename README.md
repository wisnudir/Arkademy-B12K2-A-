<img src="https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/asset/larkademy.png" width="100"><br/>
# Arkademy-B12K2-A-
Jawaban test Arkademy Batch 12 Kloter 2, atas nama **Andika Satya Wisnu**.

## #Jawaban 1-5
Jawaban soal 1-5 menggunakan bahasa **Javascript**, bisa langsung dijalankan di online editor.<br/>

Secara umum JSON (JavaScript Object Notation) merupakan format data yang digunakan untuk penyimpanan dan pertukaran data.
Sehingga kegunaan JSON dalam REST API digunakan sebagai standar format data untuk bertukar data antar client dan server atau antar aplikasi, dengan adanya JSON maka data dapat dibaca oleh aplikasi/web dengan bahasa pemrograman apapun.<br/><br/>


## #Jawaban 6
Jawaban soal 6 saya jadikan satu di folder **soal6**.<br/>
Untuk menjalankannya, import file sql [**arkademy.sql**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/arkademy.sql).<br/>
Jalankan file **index.php**, dan seharusnya web sudah bisa dipakai.

### Jawaban 6A
```SQL
SELECT 
nama.id as id,
nama.nama as name, 
nama.id_work as id_work, 
nama.id_salary as id_salary, 
work.name as workname,
kategori.salary as salary 
FROM nama 
JOIN work ON nama.id_work = work.id 
JOIN kategori ON nama.id_salary = kategori.id
```
Query tersebut akan menghasilkan tabel seperti dibawah ini:<br/>
![Tabel Hasil Query Gabungan](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/asset/img/6A-tabel-gabungan.PNG)
<br/>Dengan catatan sebelumnya telah menjalankan query [**arkademy.sql**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/arkademy.sql), untuk membangun tabel-tabel yang akan digabungkan/direlasikan.

### Jawaban 6B
Tampilan halaman **Home**:<br/>
<img src="https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/asset/img/6B-Home.PNG" width="85%"><br/><br/>
Tampilan halaman **Add**:<br/>
<img src="https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/asset/img/6B-Add.PNG" width="85%"><br/><br/>
Tampilan halaman **Delete**:<br/>
<img src="https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/asset/img/6B-Delete.PNG" width="85%"><br/><br/>
Tampilan halaman **Edit**:<br/>
<img src="https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/asset/img/6B-Edit.PNG" width="85%"><br/><br/>

### Jawaban 6C
###### - KONEKSI
Pertama ada file untuk koneksi web dengan database yaitu file [**koneksi.php**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/koneksi.php).
###### - READ
Script untuk menampilkan data terdapat dalam file [**index.php**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/index.php) line 34-52.
###### - CREATE
Script untuk menambahkan data terdapat dalam file [**index.php**(Form)](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/index.php) line 83-100 dan [**proses_add_data.php**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/proses_add_data.php)
###### - UPDATE
Script untuk mengedit data terdapat dalam file [**index.php**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/index.php) line 124-138, [**ajax_edit_data.php**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/ajax_edit_data.php), dan [**proses_edit_data.php**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/proses_edit_data.php).
###### - DELETE
Script untuk menghapus data terdapat dalam file [**index.php**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/index.php) line 140-154, dan [**ajax_del_data.php**](https://github.com/wisnudir/Arkademy-B12K2-A-/blob/master/soal6/ajax_del_data.php)
