<?php
$alert = false;
$operator = "";
    if(isset($_POST['kirim'])){
        if(!empty($_POST['angka1']) && !empty($_POST['angka2'])) {
            $alert = false;  
            
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            if($angka1 == $angka2){
                $operator = " sama dengan";
                $text = $angka1 . " sama dengan ".$angka2;
            }elseif ($angka1 > $angka2){
                $operator = "lebih dari ";
                $text = $angka1 . " lebih besar dari ".$angka2;  
            }else {
                $operator = " kurang dari ";
                $text = $angka1 . " lebih kecil dari".$angka2;
            
            }
        }else{
            $alert = true; 
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perbandingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');

        body{
            background: #94B49F;
            font-family: 'Poppins', sans-serif;
        }
        .container{
            min-height: 100vh;
            
        }
        i{
            text-align:center;
            font-size:30px;
            
            
        }
        h3{
            text-align:center;
            font-size:30px;
        }
        .card{
            background: #FCF8E8;
        }
        p{
            text-align:center;
            font-weight: bold;
        }
        i.fa-exclamation-triangle{
            font-size: 25px;
            margin-right: 9px;
        }


    </style>
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center">
        <form method="post" action=""><div class="card p-5">
            <?php

            if($alert == true){
            ?>
            <div class="alert d-flex alert-danger " role="alert">
                <i class="fas  fa-exclamation-triangle" ></i>
                
                Input form tidak boleh kosong
            </div>
            
            <?php
            }
            elseif($operator == "" || $operator == "sama dengan "){  
            ?>
            <i class="fa fa-equals" ></i>
           
            <?php
            }elseif($operator == "" || $operator > "lebih besar dari"){
            ?>
            <i class="fas fa-chevron-right"></i>

            
            
            <?php
            }else{
            ?> 

            <i class="fas fa-chevron-left"></i>
            <?php
            }
            ?>
        
            
            <?php
            if ($operator == "") {
                echo "<h3>Perbandingan</h3>";
            } else{
                echo "<h3>" . $text ."</h3>";
            }
            ?>
            

            <p>Cek perbandingan angka</p>
        <div class="row mb-4">
            <div class="col">
                <input type="number" class="form-control" placeholder="Angka pertama" aria-label="angka1" name="angka1">
            </div>
            <div class="col">
                <input type="number" class="form-control" placeholder="Angka kedua" aria-label="angka2"name="angka2">
            </div>
            </div>
            <button type="submit" class="btn btn-success mt-2" name="kirim">Submit</button>
            
    </form>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>