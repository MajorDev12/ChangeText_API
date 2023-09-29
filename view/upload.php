<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        input{
            width: 30vw;
            height: 40vh;
        }
    </style>
</head>
<body>
    <form action="process-upload.php" method="post">
        <input type="file" name="file" id="">
        <input type="file" name="file1" id="">
        <input type="submit" name="upload" value="upload">
    </form>
</body>
</html>