<?php 
include "../vendor/autoload.php";
use Zuramai\Ipush\Ipush;

$ipush = new Ipush(
    "wss://api.ipush.id/ws",
    "7fa9d1ba-93ff-42eb-9a9b-b0b0e33d6ad0",
    "3b39c1f4671e0c029998ebb33742755ced7aeaac466e2f6c0491b348",
    "218fe3a0717462e903c8c51eaba6fec7d77b25c2d56c1f493ae1b3da"
);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];

    $ipush->trigger("notifications", "payment-success", [
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