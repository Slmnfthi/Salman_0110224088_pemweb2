<?php

// Class Persegi Panjang 
class PersegiPanjang {
    public $panjang;
    public $lebar;

    // Konstruktor Persegi Panjang
    function __construct($panjang, $lebar) {
        if ($panjang <= 0 || $lebar <= 0) {
            throw new Exception("Panjang dan lebar harus lebih besar dari 0.");
        }
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    // Method Untuk Menghitung Luas
    function getLuas() {
        return $this->panjang * $this->lebar; 
    }

    // Method Untuk Menghitung Keliling
    function getKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Persegi Panjang</title>
</head>
<body>
    <div class="section">
        <h2>Contoh Penggunaan Persegi Panjang</h2>

        <?php
        try {
            $pp = new PersegiPanjang(12, 10);

            echo "Panjang = " . $pp->panjang . "<br>";
            echo "Lebar = " . $pp->lebar . "<br>";
            echo '<hr>';
            echo "Luas = " . $pp->getLuas() . "<br>";
            echo "Keliling = " . $pp->getKeliling() . "<br>";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
        ?>
    </div>
</body>
</html>