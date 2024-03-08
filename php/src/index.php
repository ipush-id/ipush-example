<?php 
include "../vendor/autoload.php";
use Zuramai\Ipush\Ipush;

$ipush = new Ipush(
    // API URL
    "wss://api.ipush.id/ws",
    // APP ID
    "970a7dd0-cb3b-4c9f-bfed-da1d6b4b40c2",
    // API KEY
    "a6f8dfc65c46ab2b2ad0d68fe9c97610a9da4fe149bd52de965e2197",
    // API SECRET
    "8a7c5275b5e76e6b554ce6af1a4161f44a33e6408203e206daa6a482"
);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];

    $ipush->trigger("my-channel", "my-event", [
        'product' => $product,
        'price' => $price,
    ]);
    echo "message sent!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
    <div class="container p-4">
        <form method="POST">
            <p>(Ipush Test)</p>
            <h1>Payment</h1>
            <select name="product" id="product" class="form-control mb-3">
                <option value="valorant_points_223">223 Valorant Point</option>
                <option value="valorant_points_223">500 Valorant Point</option>
            </select>
            <input type="number" placeholder="Price" class="form-control mb-3" name="price">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
</body>
</html>