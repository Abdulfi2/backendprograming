<?php

// membuat fungsi
function HitungLuasLingkaran($JariJari) {
    $phi = 3.14;
    $LuasLingkaran = $phi * $JariJari * $JariJari;
    return $LuasLingkaran;
}

echo HitungLuasLingkaran(7),'<br>';
echo HitungLuasLingkaran(21),'<br>';
echo HitungLuasLingkaran(28);
