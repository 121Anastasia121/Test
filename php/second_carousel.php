<div class="list-carousel_block_third">

<?php
$arr = [
  '01'=> 'Rectangle 344',
  '02'=> 'Rectangle 336',
  '03'=> 'Rectangle 344',
  '04'=> 'Rectangle 336',
  '05'=> 'Rectangle 344',
  '06'=> 'Rectangle 336',
  '07'=> 'Rectangle 344',
  '08'=> 'Rectangle 336',
  '09'=> 'Rectangle 344',
  '10'=> 'Rectangle 336',
  '11'=> 'Rectangle 344',
  '12'=> 'Rectangle 336',
  '13'=> 'Rectangle 344',
  '14'=> 'Rectangle 336',
  '15'=> 'Rectangle 344',
  '16'=> 'Rectangle 336',
  '17'=> 'Rectangle 344',
  '18'=> 'Rectangle 336',

];

?>

<?php
 foreach ($arr as $name => $val)
 {
 ?>

<div class="carousel-item_block_third">
  <img data-lazy="../img/<?php echo $val; ?>.png" class="d-block w-100" alt="...">
</div>

<?php
} 
?>

</div>
