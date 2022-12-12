<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 6 Praktikum Pemweb</title>
  
  
  <?php
  function convertToRoman($num)
  {
    $numerals = array(
      'M' => 1000,
      'CM' => 900,
      'D' => 500,
      'CD' => 400,
      'C' => 100,
      'XC' => 90,
      'L' => 50,
      'XL' => 40,
      'X' => 10,
      'IX' => 9,
      'V' => 5,
      'IV' => 4,
      'I' => 1
    );

    $result = '';

    foreach ($numerals as $roman => $int) {
      while ($num >= $int) {
        $result .= $roman;
        $num -= $int;
      }
    }

    return $result;
  }

  ?>
</head>

<body>
  <form>
    <label> Angka yang ingin diubah ke dalam bentu Bentuk Romawi : </label> <br>
    <input name="angka" type="text" placeholder="Masukkan angka " />
    <button>Submit</button>
  </form>
  <?php

  $angka = @$_GET['angka'];

  echo convertToRoman($angka);

  ?>
</body>

</html>