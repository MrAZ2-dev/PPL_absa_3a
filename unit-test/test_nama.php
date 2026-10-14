<?php

require_once 'validatornama.php';

try {
    validateName("Absa Zeta Zetira");
    echo "PASS: Nama 'Absa Zeta Zetira' diterima\n";
} catch (InvalidArgumentException $e) {
    echo "FAIL: Nama 'Absa Zeta Zetira' tidak diterima. Error: " . $e->getMessage() . "\n";
}

try {
    validateName("");
    echo "FAIL: Nama kosong diterima, padahal seharusnya ditolak\n";
} catch (InvalidArgumentException $e) {
    echo "PASS: Nama kosong ditolak. Error: " . $e->getMessage() . "\n";
}

try {
    validateName("12345");
    echo "PASS: Nama '12345' diterima\n";
} catch (InvalidArgumentException $e) {
    echo "FAIL: Nama '12345' tidak diterima. Error: " . $e->getMessage() . "\n";
}