<?php
    session_start();
    $idpro=$_REQUEST['idpro'];
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    $dsbl=loadall_binhluan($idpro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssadmin/style.css">
    <title>Document</title>
    <style>
        .binhluan table{
            width: 100%
        }
    </style>
</head>
<body>

<div class="row bm">
    <div class="boxtitle"></div>
        <div class="boxcontent2 menudoc col-lg-12">
        <table class="table table-bordered text-center">
            <?php
                           
                 foreach ($dsbl as $bl) {
                    extract($bl);
                    echo '<tr><td>'.$noidung.'</td>';
                    echo '<td>'.$ten.'</td>';      
                    echo '<td>'.$ngaybinhluan.'</td></tr>';
                
                }
                            
            ?>
                          
        </table>

    </div>
    <div class="boxfooter searbox">
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="idpro" value="<?=$idpro?>">
        <input class="" style="width:500px" type="text" name="noidung" id="">
        <input class="btn btn-primary " type="submit" name="guibl" id="" value="gui">
    </form>
    </div>
</div>
       <?php
       if(isset($_POST['guibl'])&&($_POST['guibl'])){
        $noidung=$_POST['noidung'];
        $idpro=$_POST['idpro'];
        $iduser=$_SESSION['user']['id'];
        $ngaybinhluan=date('h:i:s d/m/y');
        insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan);
        header("location: ".$_SERVER['HTTP_REFERER']);
       }
       
       ?>         

</body>
</html>