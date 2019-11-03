<meta charset = "UTF-8">
<?php
/**
 * ������ ������� ��������
 * =======================
 * $text - �����
 */
?>

<? $good=$goods->Catalog();
  foreach($good as $row)
  {
      echo "<br>". $row[1] . $row[2] . $row[3];
  }
?>
