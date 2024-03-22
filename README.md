# Dokumentasi Skrip

Dokumentasi ini menyajikan informasi mengenai berbagai skrip yang tersedia dalam repositori ini. Setiap skrip memiliki deskripsi singkat, input yang diperlukan, output yang dihasilkan, serta keterangan tambahan untuk penggunaan.

---

## 1. Parser Total Pembelian

### Deskripsi
Skrip ini bertugas untuk mengurai jumlah total pembelian dari sebuah string input dan memberikan dua representasi yang berbeda.

### Input
"Total pembelian baju dinas sebesar Rp.757.000"

### Output
- `757.000`
- `757000`

---

## 2. Parser Detail Barang

### Deskripsi
Skrip ini mengurai detail suatu barang dari string input dan menetapkan informasi tersebut ke dalam variabel-variabel sesuai dengan format yang ditentukan.

### Input
"Kd brg=7328482, NmBrg=Buavita Jambu, HrBrg:8.500, QtyBrg=2, TtlBayar:17.000"

### Output
```php
$Kd_Brg = 7328482;
$NmBrg = "Buavita Jambu"; 
$HrBrg = 8.500; 
$QtyBrg = 2; 
$TtlBayar = 17.000;
```

## 3.) Menghitung Kemunculan

### Deskripsi
Skrip ini menghitung jumlah kemunculan digit 8 dalam rentang angka dari 1 hingga 100 menggunakan sebuah perulangan.

### Output
Jumlah kemunculan digit 8 dari 1 hingga 100.


## 4.) Manipulasi String 

### Deskripsi
Skrip ini mengembalikan string input tanpa mengalami manipulasi apapun.

### Input
"Saya sangat suka coding php dan python"

### Output
"Saya sangat suka coding php dan python"

## 5.) Panggilan Fungsi 

### Deskripsi
Skrip ini mendefinisikan sebuah fungsi jumlah yang mengalikan parameter masukannya dengan 1 dan mengembalikan hasilnya. Kemudian, fungsi ini dipanggil dengan nilai tertentu dan hasilnya dicetak.

## Input
$no = 100; function jumlah($no){ return(1*$no); } echo jumlah[10];

## Output
Hasil pemanggilan fungsi jumlah dengan parameter 10.
