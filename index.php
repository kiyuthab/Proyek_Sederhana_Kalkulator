<?php
    include "fungsi.php";
    $kalku = new Kalkulator();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body{
            background-color: #73A9AD;
        }
        .card{
            border-radius: 20px;
            margin-top: 95px;
            margin-bottom: 60px;
            padding: 35px;
            height: 400px;
            box-shadow: 1px 15px 15px 3px #000;
        }

        .card-body{
            display: flex;
            justify-content: center;
            margin-top: 35px;
            margin-right: 20px;
        }
        h1{
            text-align: center;
        }
        button{
            margin-top: 50px;
            margin-left: 50px;
            
        }
    </style>
</head>
<body>

<div class ="container">
<div class="d-flex justify-content-center">
<div class="card">
    <H1><?php echo 'Latihan Membuat Program <br> dengan OOP PHP'; ?></H1>
<div class="card-body">
    <form method="POST">
    <input type="text" name="x" size="3"> 
    <select name="operasi">
    <option value="tambah">+</option>
    <option value="kali">x</option>
    <option value="kurang">-</option>
    <option value="bagi">/</option>
    </select> 
    <input type="text" name="y" size="3"> 
    <label>=</label>
    <br>
    <button type="submit" value="Hitung" class="btn btn-primary">Hitung</button>
    <p><?php echo '</form>';?></p>
        <?php if ($_POST) {?>
            <?php $x = $_POST['x'];?>
            <?php $y = $_POST['y'];?>
                <?php if ($_POST['operasi'] == "tambah") {?>
                <p><?php echo "" .$kalku->setTambah($x, $y)."<br /><br />";?></p>
                <?php }elseif ($_POST['operasi'] == "kali"){?>
                <p><?php echo "" .$kalku->setKali($x, $y)."<br /><br />"; ?></p>
                <?php }elseif ($_POST['operasi'] == "kurang"){?>
                <p><?php echo "" .$kalku->setKurang($x, $y)."<br /><br />"; ?></p>
                <?php }elseif ($_POST['operasi'] == "bagi"){?>
                <p><?php echo "" .$kalku->setBagi($x, $y)."<br /><br />";
                }?></p>
        <?php }?>
    </div>
</body>
</html>