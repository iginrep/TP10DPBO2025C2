# TP10DPBO2025C2

# JANJI

Saya Muhammad Igin Adigholib dengan NIM 2301125 mengerjakan Tugas Praktikum 10 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Desain Program
![WhatsApp Image 2025-05-23 at 19 31 22_e09ee7b3](https://github.com/user-attachments/assets/9513b078-a0f1-4550-ae9a-43aa44b2d3d2)

Aplikasi Mini Soccer Management System dirancang untuk mengelola data pengguna, lapangan, dan pemesanan lapangan mini soccer. Aplikasi ini menggunakan arsitektur Model-View-ViewModel (MVVM) untuk memisahkan logika bisnis, data, dan tampilan. Dengan pendekatan ini, aplikasi menjadi lebih terstruktur, mudah dipelihara, dan dapat dikembangkan lebih lanjut.

### Komponen Utama:

1. **Model**: Berisi logika untuk berinteraksi dengan database menggunakan PDO. Model ini mencakup file `UserModel.php`, `FieldModel.php`, dan `BookingModel.php`.
2. **ViewModel**: Menghubungkan data dari model ke view. ViewModel ini mencakup file `UserViewModel.php`, `FieldViewModel.php`, dan `BookingViewModel.php`.
3. **View**: Berisi file PHP untuk menampilkan data kepada pengguna. View mencakup form dan daftar untuk entitas pengguna, lapangan, dan pemesanan.
4. **Template**: File `header.php` dan `footer.php` digunakan untuk memberikan tata letak yang konsisten di seluruh halaman aplikasi.

## Penjelasan Alur

1. **Routing**:

   - File `index.php` bertindak sebagai router utama yang menentukan entitas (`user`, `field`, `booking`) dan aksi (`list`, `add`, `save`, `update`, `delete`) berdasarkan parameter URL.

2. **CRUD Operasi**:

   - **List**: Data dari database diambil melalui ViewModel dan ditampilkan di halaman daftar.
   - **Add**: Form ditampilkan untuk menambahkan data baru. Data yang dimasukkan pengguna dikirim ke server untuk disimpan di database.
   - **Save**: Data dari form disimpan ke database melalui Model.
   - **Update**: Data yang ada diambil dari database dan ditampilkan di form untuk diedit. Setelah diedit, data diperbarui di database.
   - **Delete**: Data dihapus dari database berdasarkan ID yang dipilih.

3. **Interaksi Database**:

   - Database `mini_soccer` memiliki tiga tabel utama: `users`, `fields`, dan `bookings`. Tabel-tabel ini memiliki relasi yang sesuai untuk mengelola data pemesanan lapangan.
   - Semua interaksi database dilakukan menggunakan PDO dengan prepared statements untuk mencegah SQL Injection.

4. **Tampilan**:
   - Aplikasi menggunakan Bootstrap untuk memberikan tampilan yang modern dan responsif.
   - Navigasi utama memungkinkan pengguna untuk berpindah antara halaman pengguna, lapangan, dan pemesanan dengan mudah.

## Dokumentasi


https://github.com/user-attachments/assets/e51888d1-bb4d-4a43-bca7-529ca140a274

