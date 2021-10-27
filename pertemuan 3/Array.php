<?php

// membuat array
$animals = ['kucing', 'ikan', 'burung'];

// mengakses array
echo $animals[2];

for ($i = 0; $i < count($animals); $i++) {
  if ($data == $animals[$i]) {
    echo $i;
  }
}