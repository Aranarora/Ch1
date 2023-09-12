<?php 
$name = 'Raj';
$name  = 'Aran Arora';
$price = 2;

$offers = [
  ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
  ['name' => 'Mints',  'price' => 3, 'stock' => 66,],
  ['name' => 'Fudge',  'price' => 4, 'stock' => 97,],
];
$nutrition = [
    'fat'   => 38,
    'sugar' => 51,
    'salt'  => 0.25,
    'protein' => 2.6,
];
$nutrition['fat']   = 36;
$nutrition['fiber'] = 2.1;
$nutrition['protein'] = 7.3;
$best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Licorice',
    'Bubble gum', 'Toffee', 'Jelly beans',];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Ch1</title>
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?php echo $name; ?></h2>
    <h2>Best Sellers</h2>
    <ul>
      <li><?php echo $best_sellers[0]; ?></li>
      <li><?php echo $best_sellers[1]; ?></li>
      <li><?php echo $best_sellers[2]; ?></li>
      <li><?php echo $best_sellers[4]; ?></li>
      <li><?php echo $best_sellers[5]; ?></li>
    </ul>
    <h2>Nutrition (per 100g)</h2>
    <p>Fat:   <?php echo $nutrition['fat']; ?>%</p>
    <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
    <p>Salt:  <?php echo $nutrition['salt']; ?>%</p>
    <p>Protein:  <?php echo $nutrition['protein']; ?>%</p>
    <p>Fiber:  <?php echo $nutrition['fiber']; ?>%</p>
    <p>The cost of your candy is 
       $<?php echo $price; ?> per pack.</p>
  </body>
</html>