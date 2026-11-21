<?php

// CLASS INDUK
class Segitiga
{
    public $tinggi = 0;
    public $alas = 0;
    public $sisi = 0;

    function Settinggi($tinggi)
    {
        $this->tinggi = $tinggi;
    }

    function Setalas($alas)
    {
        $this->alas = $alas;
    }

    function Setsisi($sisi)
    {
        $this->sisi = $sisi;
    }

    function Gettinggi()
    {
        return $this->tinggi;
    }

    function Getalas()
    {
        return $this->alas;
    }

    function Getsisi()
    {
        return $this->sisi;
    }

    function SetAllData($tinggi, $alas, $sisi)
    {
        $this->tinggi = $tinggi;
        $this->alas = $alas;
        $this->sisi = $sisi;
    }
}

// CLASS TURUNAN 1
class SamaKaki extends Segitiga
{
    function HitungLuas()
    {
        return 0.5 * $this->alas * $this->tinggi;
    }

    function HitungKeliling()
    {
        return $this->alas + (2 * $this->sisi);
    }
}

// CLASS TURUNAN 2
class SikuSiku extends Segitiga
{
    function HitungLuas()
    {
        return 0.5 * $this->alas * $this->tinggi;
    }

    function HitungKeliling()
    {
        return $this->alas + $this->tinggi + $this->sisi;
    }
}

// CLASS TURUNAN 3
class SamaSisi extends Segitiga
{
    function HitungLuas()
    {
        return (sqrt(3) / 4) * pow($this->sisi, 2);
    }

    function HitungKeliling()
    {
        return 3 * $this->sisi;
    }
}

// MEMBUAT OBJEK
if (isset($_POST['hitung'])) {

    $tinggi = $_POST['tinggi'];
    $alas = $_POST['alas'];
    $sisi = $_POST['sisi'];

    $segitiga1 = new SamaKaki();
    $segitiga1->SetAllData($tinggi, $alas, $sisi);

    $segitiga2 = new SikuSiku();
    $segitiga2->SetAllData($tinggi, $alas, $sisi);

    $segitiga3 = new SamaSisi();
    $segitiga3->SetAllData($tinggi, $alas, $sisi);

    echo "<h2>HASIL PERHITUNGAN SEGITIGA</h2>";

    echo "<h3>1. Segitiga Sama Kaki</h3>";
    echo "Luas : " . $segitiga1->HitungLuas() . "<br>";
    echo "Keliling : " . $segitiga1->HitungKeliling() . "<br>";
    echo "Tinggi : " . $segitiga1->Gettinggi() . "<br>";
    echo "Alas : " . $segitiga1->Getalas() . "<br>";
    echo "Sisi : " . $segitiga1->Getsisi() . "<br>";

    echo "<h3>2. Segitiga Siku-Siku</h3>";
    echo "Luas : " . $segitiga2->HitungLuas() . "<br>";
    echo "Keliling : " . $segitiga2->HitungKeliling() . "<br>";
    echo "Tinggi : " . $segitiga1->Gettinggi() . "<br>";
    echo "Alas : " . $segitiga1->Getalas() . "<br>";
    echo "Sisi : " . $segitiga1->Getsisi() . "<br>";

    echo "<h3>3. Segitiga Sama Sisi</h3>";
    echo "Luas : " . round($segitiga3->HitungLuas(), 2) . "<br>";
    echo "Keliling : " . $segitiga3->HitungKeliling() . "<br>";
    echo "Tinggi : " . $segitiga1->Gettinggi() . "<br>";
    echo "Alas : " . $segitiga1->Getalas() . "<br>";
    echo "Sisi : " . $segitiga1->Getsisi() . "<br>";
}

?>

<br>
<a href="index.php">Kembali</a>
