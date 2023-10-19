# WKPL_SEM3
Tugas Workshop Kualitas Perangkat Lunak

Penjelasan Tugas Minggu 9 - Test Case dan Unit Testing memakai PHPUnit
-- WordCount.php --
Kita membuat sebuah kelas bernama WordCount yang didalamnya terdapat function countWords() dengan parameter $sentence. Fungsi dari function ini adalah untuk return atau mengembalikan nilai perhitungan / count dari explode.
Explode sendiri adalah fungsi php yang memiliki fungsi sebagai pemisah string. jadi sebuah string akan di pecahkan menurut tanda pisah yang di tentukan sendiri. jadi string yang telah di pecah, akan menjadi array. cara penulisannya : explode().
-- SimpleTest.php -- 
Di dalam file ini kita membutuhkan sebuah framework dari PHPUnit sendiri yaitu TestCase, dibuktikan dengan command " use PHPUnit\Framework\TestCase;
Lalu kita beri perintah require untuk mengambil function dari file WordCount.php
Di dalam class SimpleTest ini meng extends dari class TestCase yang merupakan framework dari PHPUnit, kemudian kita inisialisasikan file WordCount tadi dengan $Wc, dan kita beri function $TestSentence untuk membuat String yang akan dicoba
Lalu buat function WordCount yang mengambil inisialisasi dari $Wc tadi yang didalamnya kita mengambil function countWords dari file WordCount dengan parameter $TestSentence yang akan diisi oleh string yang ditambahkan tadi
Yang terakhir kita beri function assertEquals untuk membandingkan nilai yang ada di dalam assertEquals ini dengan yang ada di dalam function $TestSentence. Jika benar output akan muncul OK, jika salah maka akan muncul FAILURES!
