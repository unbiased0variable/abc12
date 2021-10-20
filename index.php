<!DOCTYPE html>
<html lang=en>
<head>
    <title>Assignment 1 - Abhilasha Joshi</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

<?php
$links = array(
   0 => array(
      "name" => "SWAROVSKI Women's Dazzling Swan Jewelry Collection",
      "price" => 105.95,
      "description" => "This swan pendant combines the precision and quality of sparkling pink and white Swarovski crystals with cool romance for your everyday look, for an eye-catching fashion accessory",
      "image" => "https://m.media-amazon.com/images/I/61gjtaZt2WL._AC_UL320_.jpg",  
    ),
    1 => array(
      "name" => "Michael Kors Blush Rush Rose Gold",
      "price" => 60.77,
      "description" => "A perfect gift for that special someone, this sweet Michael Kors Jewelry slider bracelet is set with a polished rose gold-tone heart charm with pavé crystal halo",
      "image" => "https://m.media-amazon.com/images/I/711KqbjIvhL._AC_UL320_.jpg",  
    ),
	2 => array(
      "name" => "Betsey Johnson Mismatch Stud Earrings",
      "price" => 24.25,
      "description" =>"Mismatched pink glitter rose button earrings embellished with mixed stones and delicate pearls.",
      "image" => "https://m.media-amazon.com/images/I/81oS4t4TN8S._AC_UL320_.jpg",  
    ),
	3 => array(
      "name" => "SWAROVSKI Women's Solitaire Crystal",
      "price" => 92.99,
      "description" => "This rhodium plated silver necklace combines the precision and quality of sparkling Swarovski crystals with a timeless necklace design, to add a touch of glamour to everyday",
      "image" => "https://m.media-amazon.com/images/I/51iy94QT6DL._AC_UL320_.jpg",  
    ),
	4 => array(
      "name" => "Sterling Silver Diamond Heart Pendant Necklace ",
      "price" => 154.80,
      "description" => "All our diamond suppliers confirm that they comply with the Kimberley Process to ensure that their diamonds are conflict free.",
      "image" => "https://m.media-amazon.com/images/I/71LNKzbtOaL._AC_UL320_.jpg",  
    ),
	5 => array(
      "name" => "SWAROVSKI Women's Ginger Crystal Jewelry Collection",
      "price" => 89.00,
      "description" => "spice up any outfit with this ginger bangle bracelet, combining the precision and quality of brilliant Swarovski crystals with a rose-gold tone plated band and chain",
      "image" => "https://m.media-amazon.com/images/I/71Bb3h+ggSL._AC_UL320_.jpg",  
    ),
	6 => array(
      "name" => "SWAROVSKI Women's Dazzling Swan Jewelry Collection",
      "price" => 349.88,
      "description" => " Genuine Hypoallergenic 925 sterling gold, Nickel free, lead free, cadmium free 100% safe for sensitive skin",
      "image" => "https://m.media-amazon.com/images/I/51BpoBOONuL._AC_UL320_.jpg",  
    ),
	7 => array(
      "name" => "Birthstone Necklace/Earring",
      "price" => 24.99,
      "description" => "This item is an ideal gift for your Wife , Mom , Daughter , Grandma , Girlfriend , Friends , your special someone or just a gift for yourself.",
      "image" => "https://m.media-amazon.com/images/I/61nIOlD0bHL._AC_UL320_.jpg",  
    ),
);
	// echo "<pre/>";
	// print_r($links);
?>
<div class="container">
	<div class="header">
		<h1>Flora Jewellers</h1>
	</div> 


<!-- HOME PAGE ------------------------------------------------------------------ -->

	<section class="home-page">
		<div class="group-images">
      <?php 
					foreach($links as $item){
				?>
			<div class="item">

				<div class="item-image">
					<img src="<?php echo $item["image"]?>" alt="image" height="150px">
				</div>
				<h2 class="item-title"><a href="index.php"><?php echo $item["name"]?></a></h2>
				<p><a class="item-details">$<?php echo $item["price"]?></a></p>
				<p><a class="item-details"><?php echo $item["description"]?></a></p>

			</div>
      <?php 
					}
				?>
		</div>
	</section>


</div>


</body>
</html>