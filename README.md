# RepositoryAPK
Tugas Akhir Praktikum APK - TE 2021

## Tutorial Instalasi
```
note: pastikan laptop anda telah ter install xampp
```
1. Clone repository, `git clone https://github.com/NnA301023/RepositoryAPK.git`
2. Create folder `repos` di dalam folder `htdocs` dan copy semua file dan folder di dalam folder `RepositoryAPK` ke folder `repos`
3. Start `MySQL` dan `Apache` webserver di xampp
4. Open MySQL database di path `localhost/phpmyadmin`
5. Create database baru dengan nama `repository`
6. Copy command sql di `schema_sql/repository.sql` dan execute di menu SQL
7. Delete table `user` dan Create table `user` baru dari command sql di `schema_sql/user.sql`
8. Access web di `localhost/repos/index.php`