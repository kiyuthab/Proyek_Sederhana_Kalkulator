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
    <title>Kalkulator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        table{
            border-radius: 2%;
            box-shadow: 0px 6px 12px #000;
        }

        tr{
            border-radius: 7%;
        }
        
        td{
            width: 60px;
            border-radius: 7%;
            font-family: Verdana, Geneva, Tahoma, sans-serif; 
            font-size: 20px;
            color: aliceblue;
            font-weight: bold;
        }
  
        input[type="button"]{ 
            height: 50px;
            background-color:rgb(23, 167, 23);
            color: white;
            font-weight: bold;
            font-size: 22px;
            width:100% 
        } 
         
        .title{ 
            margin-bottom: 10px;
            height: 70px; 
            text-align:center; 
            border-radius: 2%;
            background-color:rgb(23, 167, 23); 
            width: 210px; 
            color:white; 
        } 
         
        input[type="text"]{ 
            font-size: 22px;
            border-radius: 7%;
            background-color:white; 
            height: 50px;
            width:100% 
        }
        
        input[type="button"].ekor{
            background-color:rgb(218, 23, 23); 
        }
         
        input[type="button"].kode{
            background-color:rgb(243, 170, 13); 
        }
    </style> 
</head> 
<body bgcolor="grey"> 
  <table align="center"  border="5" width="330px"> 
        <tr>
            <td colspan="4" class="title">Ekorkode Kalkulator</td>
        </tr>
        <tr> 
            <td colspan="3"><input type="text" id="result"/></td> 
            <td><input class="ekor" type="button" value="C" onclick="clr()"/> </td> 
        </tr> 
        <tr> 
            <td><input type="button" value="1" onclick="dis('1')"/> </td> 
            <td><input type="button" value="2" onclick="dis('2')"/> </td> 
            <td><input type="button" value="3" onclick="dis('3')"/> </td>
            <td><input class="kode" type="button" value="+" onclick="dis('+')"/> </td> 
        </tr> 
        <tr> 
            <td><input type="button" value="4" onclick="dis('4')"/> </td> 
            <td><input type="button" value="5" onclick="dis('5')"/> </td> 
            <td><input type="button" value="6" onclick="dis('6')"/> </td> 
            <td><input class="kode" type="button" value="-" onclick="dis('-')"/> </td> 
        </tr> 
        <tr> 
            <td><input type="button" value="7" onclick="dis('7')"/> </td> 
            <td><input type="button" value="8" onclick="dis('8')"/> </td> 
            <td><input type="button" value="9" onclick="dis('9')"/> </td> 
            <td><input class="kode" type="button" value="/" onclick="dis('/')"/> </td>  
        </tr> 
        <tr> 
            <td><input type="button" value="." onclick="dis('.')"/> </td> 
            <td><input type="button" value="0" onclick="dis('0')"/> </td>
            <td><input class="ekor" type="button" value="=" onclick="solve()"/> </td> 
            <td><input class="kode" type="button" value="x" onclick="dis('*')"/> </td> 
         </tr> 
      </table> 
   </body> 
</html>