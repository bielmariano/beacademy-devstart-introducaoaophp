<select name="" id="">
  <option selected value="">Selecione o Dia</option>

  <?php
  $dia = 1;

  for ($dia = 1; $dia <= 31; $dia++) {
    echo "<option>{$dia}</option>";

  }

  ?>
</select>
<select name="" id="">
  <option selected value="">Selecione o Mês</option>

  <?php
  $mes = 1;

  for ($mes = 1; $mes <= 12; $mes++) {
    echo "<option>{$mes}</option>";

  }

  ?>
</select>