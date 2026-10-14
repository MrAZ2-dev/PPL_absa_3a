<?php

function validateName($name){
    if (!is_string($name)){
        throw new InvalidArgumentException("Nama harus berupa string");
    }
    if (trim($name) === ""){
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    if (preg_match('/[0-9]/', $name)){
        throw new InvalidArgumentException("Nama tidak boleh mengandung angka");
    }
    return true;
}