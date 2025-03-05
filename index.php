<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-group{
            display: flex;
            align-items: center;
            padding: 5px 0;
        }
        .form-group label{
            width: 80px;
            font-weight: 600;
        }
        button{
            width: 100px;
            padding: 5px 10px;
            background-color: #0d6efd;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover{
            background-color:rgb(80, 129, 202);
        }
    </style>
    <title>Form Input PHP</title>
</head>
<body style="font-family:arial, sans-serif">
    <h1>Form Input</h1>
    <form action="" method="POST">
        <div class="form-group">
            <label for="nim">NIM    :</label>
            <input type="text" style="padding: 5px;" name="nim" id="nim" placeholder="NIM" required>
        </div>
        <br>
        <div class="form-group">
            <label for="name">Nama  :</label>
            <input type="text" style="padding: 5px;" name="name" id="name" placeholder="Nama" required>
        </div>
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $nim = $_POST['nim'];
            $name = $_POST['name'];
            echo "<h3>Hallo, $name $nim</h3>";
        }
    ?>
</body>
</html>