<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <title>Naturreservatet</title>
</head>
<body>
    <h1>Naturreservatet:</h1>
    <form action="./results.php" method="POST">
        <p>Antal Apor:</p>
        <input type="number" name="apor"><br>
        <p>Antal Giraffer:</p>
        <input type="number" name="giraffer"><br>
        <p>Antal Tigrar:</p>
        <input type="number" name="tigrar"><br>
        <p>Antal Kokosnötter:</p>
        <input type="number" name="kokos"><br><br>
        <button type="submit" id="submit">Ditt naturreservat</button>
    </form>
</body>
</html>