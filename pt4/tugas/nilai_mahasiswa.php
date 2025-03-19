<?php
class NilaiMahasiswa {
    public $nama;
    public $matakuliah;
    public $nilai_uts;
    public $nilai_uas;
    public $nilai_tugas;

    public const PERSENTASE_UTS = 0.25;
    public const PERSENTASE_UAS = 0.30;
    public const PERSENTASE_TUGAS = 0.45;

    public function __construct($nama = "", $matakuliah = "", $nilai_uts = 0, $nilai_uas = 0, $nilai_tugas = 0) {
        $this->nama = $nama;
        $this->matakuliah = $matakuliah;
        $this->nilai_uts = $nilai_uts;
        $this->nilai_uas = $nilai_uas;
        $this->nilai_tugas = $nilai_tugas;
    }

    public function nilaiAkhir() {
        return ($this->nilai_uts * self::PERSENTASE_UTS) +
               ($this->nilai_uas * self::PERSENTASE_UAS) +
               ($this->nilai_tugas * self::PERSENTASE_TUGAS);
    }

    public function kelulusan() {
        return $this->nilaiAkhir() >= 60 ? "Lulus" : "Tidak Lulus";
    }
}
?>