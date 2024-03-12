<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tra cứu danh bạ điện tử TLU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
    include('header/user/index.php');

?>


<main>
    <div class="banner">
        <img src="" alt="banner">
    </div>
    <div class="container-fluid mt-2">
        <div class="row">
            <div id="container">
                
                <?php
                // Dữ liệu của các thẻ card
                    $cardData = [
                        ['imgSrc' => 'path_to_image1.jpg', 'title' => 'Chi tiết', 'link' => 'link_to_card1'],
                        ['imgSrc' => 'path_to_image2.jpg', 'title' => 'Chi tiết', 'link' => 'link_to_card2'],
                        ['imgSrc' => 'path_to_image2.jpg', 'title' => 'Chi tiết', 'link' => 'link_to_card2'],
                        ['imgSrc' => 'path_to_image2.jpg', 'title' => 'Chi tiết', 'link' => 'link_to_card2'],
                        // Thêm dữ liệu cho các thẻ card khác nếu cần
                        
                    ];
                    $cardData[0]['content'] = 'Khoa công nghệ thông tin';
                    $cardData[1]['content'] = 'Khoa công trình';
                    $cardData[2]['content'] = 'Khoa công';
                    $cardData[3]['content'] = 'Khoa công trình';

                    // Lặp qua dữ liệu của các thẻ card và tạo các phần tử HTML tương ứng
                    foreach ($cardData as $card) {
                        echo '<div class="col-md-4">';
                        echo '<div class="card" style="width: 18rem;">';
                        echo '<img src="' . $card['imgSrc'] . '" class="card-img-top" alt="...">';
                        echo '<div class="card-body">';
                        echo '<h5 class="card-title">';
                        echo '<a href="' . $card['link'] . '" class="text-decoration-none">' . $card['title'] . '</a>';
                        echo '</h5>';
                        echo '<p>' . $card['content'] .  '</p>';
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
                        

        </div>
    </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>