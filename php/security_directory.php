<?php
$arr = [
  '11'=> 'certificate-1',
  'certificate-2-2'=> 'certificate-2',
  'certificate-3-3'=> 'certificate-3',
  '44'=> 'certificate-4',
  'certificate-5-5'=> 'certificate-5',
  'certificate-6-6'=> 'certificate-6',
  'certificate-7-7'=> 'certificate-7',

];

?>

<?php
 foreach ($arr as $name => $val)
 {   if (is_numeric($key)) {
?>
<div class="carousel-security-directory">
  <img src="../img/safety/<?php echo $val; ?>.jpg" class="img-security-directory" alt="...">
</div>
<div class="popup">
  <img src="../img/safety/<?php echo $name; ?>.jpg" class="img-popup" alt="...">
  <div class="closed-window"></div>
</div>
<?php
} else {
?>
<a href="../img/safety/<?php echo $name; ?>.pdf" class="carousel-security-directory"><img src="../img/safety/<?php echo $val; ?>.jpg"></a>
<?php
}}
?>
