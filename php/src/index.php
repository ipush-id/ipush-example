<?php 
include "../vendor/autoload.php";
use Ipush\Ipush;

$ipush = new Ipush(
    // API URL
    "ws://localhost:3000/ws",
    // APP ID
    "e8f272e3-8fe2-47d8-a914-f7887f69c0a6",
    // API KEY
    "51633001e1f666255830eac035a4162b715af63323055e803b962e13",
    // API SECRET
    "51633001e1f666255830eac035a4162b715af63323055e803b962e13"
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