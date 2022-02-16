<?php
    class User {
        private $jenisKelamin, $umur, $tinggiBadan, $beratBadan;

        public function __construct($jenisKelamin, $umur, $tinggiBadan, $beratBadan) {
            $this -> jenisKelamin = $jenisKelamin;
            $this -> umur = $umur;
            $this -> tinggiBadan = $tinggiBadan;
            $this -> beratBadan = $beratBadan;
        }

        public function hitungKalori() {
            if ($this -> jenisKelamin == 'Perempuan') {
                $hitung = ceil(((447.6 + 9.25 * $this -> beratBadan) + (3.10 * $this -> tinggiBadan) - (4.33 * $this -> umur)) * 1.2);
            } else {
                $hitung = ceil(((88.4 + 13.4 * $this -> beratBadan) + (4.8 * $this -> tinggiBadan) - (5.68 * $this -> umur)) * 1.2);
            }
            return $hitung;
        }
    }
?>