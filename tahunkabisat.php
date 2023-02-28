<?php

$thn = 1880;

var_dump($thn);

if(($thn % 4 == 0) & ($thn % 100 != 0) | ($thn % 400 == 0)) {
        echo "Tahun $thn adalah Tahun Kabisat";
    }  else {
        echo "Tahun $thn adalah Bukan Tahun Kabisat";
    }