<?php
// Path untuk run ./vendor/bin/phpunit --bootstrap vendor/autoload.php FileName.php
// Menggunakan framework phpUnit
use PHPUnit\Framework\TestCase;

// Case yang mau di test
require_once "WordCount.php";

// Class untuk run testing
class SimpleTest extends TestCase{
    public function testCountWords(){
        // inisialisasi class
        $Wc = new WordCount();

        // Kita masukkan parameter sesuai jumlah kata (output harus sesuai)
        $TestSentence = "My name is Latansa Bima"; // 5 kata
        $WordCount = $Wc->countWords($TestSentence);

        // Kita assert equal, ekspektasi harus sesuai dengan panjang kata, jika benar maka WordCount berfungsi dengan baik
        $this->assertEquals(5, $WordCount);
    }
}
?>