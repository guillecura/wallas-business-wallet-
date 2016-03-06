<?php
if ($t_item['id'] == 1) {
  // Unipersonal de Servicios
  $subtotal = round($v_item[0], 2);
  $base = round(($subtotal * ($t_item["c_base"] / 100)), 2);
  $iva = round(($subtotal * ($t_item["iva"] / 100)), 2);
  $total = round(($subtotal + $iva), 2);
  $bps = round($t_item["bps"], 2);
  $total_k = round($total / 1000, 0);

  $fonasa_1 = $t_item["fonasa_1"];
  $fonasa_2 = ($base * ($t_item["fonasa_2"] / 100));
  if ($fonasa_1 >= $fonasa_2) {
    $fonasa = round($fonasa_1, 2);
  } else {
    $fonasa = round($fonasa_2, 2);
  }

  $irpf_1 = $t_item["irpf_1"];
  $irpf_2 = $t_item["irpf_2"];
  $irpf_3 = $t_item["irpf_3"];
  $irpf_4 = $t_item["irpf_4"];
  $irpf_5 = $t_item["irpf_5"];
  $irpf_6 = $t_item["irpf_6"];

  $irpf_1_val = $t_item["irpf_1_val"];
  $irpf_2_val = $t_item["irpf_2_val"];
  $irpf_3_val = $t_item["irpf_3_val"];
  $irpf_4_val = $t_item["irpf_4_val"];
  $irpf_5_val = $t_item["irpf_5_val"];
  $irpf_6_val = $t_item["irpf_6_val"];

  $f1_irpf = ($base - $irpf_1) * ($irpf_1_val / 100);
  $f2_irpf = (($base - $irpf_2) * ($irpf_2_val / 100)) +
             (($irpf_2 - $irpf1) * ($irpf_1_val / 100));
  $f3_irpf = (($base - $irpf_3) * ($irpf_3_val / 100)) +
             (($irpf_3 - $irpf2) * ($irpf_2_val / 100)) +
             (($irpf_2 - $irpf1) * ($irpf_1_val / 100));
  $f4_irpf = (($base - $irpf_4) * ($irpf_4_val / 100)) +
             (($irpf_4 - $irpf3) * ($irpf_3_val / 100)) +
             (($irpf_3 - $irpf2) * ($irpf_2_val / 100)) +
             (($irpf_2 - $irpf1) * ($irpf_1_val / 100));
  $f5_irpf = (($base - $irpf_5) * ($irpf_5_val / 100)) +
             (($irpf_5 - $irpf4) * ($irpf_4_val / 100)) +
             (($irpf_4 - $irpf3) * ($irpf_3_val / 100)) +
             (($irpf_3 - $irpf2) * ($irpf_2_val / 100)) +
             (($irpf_2 - $irpf1) * ($irpf_1_val / 100));
  $f6_irpf = (($base - $irpf_6) * ($irpf_6_val / 100)) +
             (($irpf_6 - $irpf5) * ($irpf_5_val / 100)) +
             (($irpf_5 - $irpf4) * ($irpf_4_val / 100)) +
             (($irpf_4 - $irpf3) * ($irpf_3_val / 100)) +
             (($irpf_3 - $irpf2) * ($irpf_2_val / 100)) +
             (($irpf_2 - $irpf1) * ($irpf_1_val / 100));

  if ($base >= $irpf_1) {
    if ($base >= $irpf_2) {
      if ($base >= $irpf_3) {
        if ($base >= $irpf_4) {
          if ($base >= $irpf_5) {
            if ($base >= $irpf_6) {
              $irpf = round($f6_irpf, 2);
            } else {
              $irpf = round($f5_irpf, 2);
            }
          } else {
            $irpf = round($f4_irpf, 2);
          }
        } else {
          $irpf = round($f3_irpf, 2);
        }
      } else {
        $irpf = round($f2_irpf, 2);
      }
    } else {
      $irpf = round($f1_irpf, 2);
    }
  } else {
    $irpf = round(0, 2);
  }

  $taxes = $iva + $bps + $fonasa + $irpf;
  $taxes_k = round($taxes / 1000, 0);

  $floyd = round($total - $taxes, 2);
  $floyd_k = round($floyd / 1000, 0);

  if ($total == 0) {
    $avg = 0;
  } else {
    $avg = round((100 - ($floyd * 100 / $total)), 0);
  }
}
?>
