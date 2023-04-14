<div class="list-carousel">

<?php
$arr = [
  '01'=> 'Component 8',
  '02'=> 'Component 8',
  '03'=> 'Component 8',
  '04'=> 'Component 8',
  '05'=> 'Component 8',
  '06'=> 'Component 8',
  '07'=> 'Component 8',
  '08'=> 'Component 8',
  '09'=> 'Component 8',
  '10'=> 'Component 8',
  '11'=> 'Component 8',
  '12'=> 'Component 8',
  '13'=> 'Component 8',
  '14'=> 'Component 8',
  '15'=> 'Component 8',
  '16'=> 'Component 8',
  '17'=> 'Component 8',
  '18'=> 'Component 8',

];

?>

<?php
 foreach ($arr as $name => $val)
 {
 ?>

<div class="carousel-item">
  <img src="../img/<?php echo $val; ?>.png" class="d-block w-100" alt="...">
  <p>Жидкий грунт</p>
</div>

<?php
} 
?>

</div> 
