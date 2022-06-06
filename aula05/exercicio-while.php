<select name="" id="">
  <option selected value="">Selecione o Ano</option>

  <?php
  $ano = 2022;

  while ($ano >= 1900) {
    echo "<option>{$ano}</option>";
    $ano--;
  }
  ?>
</select>

<select name="" id="">
  <option selected value="">Selecione o Ano</option>

  <?php
  $ano = 1900;

  while ($ano <= 2022) {
    echo "<option>{$ano}</option>";
    $ano++;
  }
  ?>
</select>