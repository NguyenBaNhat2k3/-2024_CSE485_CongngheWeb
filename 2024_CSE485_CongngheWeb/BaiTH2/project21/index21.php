<?php
$Items = [[
  "id"=> 1,
    "image" => "assets/picture.jpg",
    "Title"=> "Silent One, The",
  "Price"=> 86,
  "Description"=> "Cheese - Brie"
], [
  "id"=> 2,
  "image"=> "assets/imagine/picture.jpg",
  "Title"=> "Fly Away Home",
  "Price"=> 80,
  "Description"=> "Napkin - Beverge, White 2 - Ply"
], [
  "id"=> 3,
  "image"=> "assets/imagine/picture.jpg",
  "Title"=> "Red Ensign",
  "Price"=> 62,
  "Description"=> "Island Oasis - Mango Daiquiri"
], [
  "id"=> 4,
  "image"=> "assets/imagine/picture.jpg",
  "Title"=> "Thesis on a Homicide",
  "Price"=> 76,
  "Description"=> "Tuna - Salad Premix"
], [
  "id"=> 5,
  "image"=> "assets/imagine/picture.jpg",
  "Title"=> "Sniper, The",
  "Price"=> 33,
  "Description"=> "Steampan - Half Size Shallow"
], [
  "id"=> 6,
  "image"=> "assets/imagine/picture.jpg",
  "Title"=> "Mariage ak Mendoza",
  "Price"=> 18,
  "Description"=> "Juice - Pineapple, 48 Oz"
]];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($Items) / $itemsPerPage);
$currentPageItems = array_slice($Items, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<html lang="en">
<link href="project21.css" rel="stylesheet">
<head>

    <title>ISHOP</title>
</head>
<body>
<div class="product-List ">
    <?php
    foreach ($currentPageItems as $item) {
        echo '<div class="product">';
        echo "<img src='{$item["Image"]}'> ";
        echo "<h5>{$item["Title"]}</h5>";
        echo "<h3>{$item["Price"]}</h3>";
        echo "<p>{$item["Description"]}</p>";
        echo '</div>';
    }
    ?>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>
</body>
</html>