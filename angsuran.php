<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Simulai Kredit</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <style>

        .zebra-table{

    box-shadow: 0 2px 3px 1px #ddd;

    overflow:hidden;

    border:10px solid #fff;

    border-collapse: collapse;

}



.zebra-table th,.zebra-table td{

    vertical-align: top;

    padding: 8px 5px;

    text-align: left;

    margin: 0;

}

.zebra-table tbody th{

    background: #34495E;

    color: #fff;



}

.zebra-table tbody tr:nth-child(odd){

    background:#DADFE1;

}

    </style>

</head>

<body>

    <?php

function buatrp($angka){

        $jadi ="Rp. " .number_format($angka,2,',','.');

        return $jadi;

    }

?>



<div class="container">

<h2 class="section-title"><span>Simulasi Kredit</span></h2>

<form action="" method="POST">

    <b>Pilih rumah : </b>

    <select name="jumlah" id="" class="form-control" required>

        <option value="">-Pilih-</option>

        <option value="120000000"><?php echo buatrp(120000000);?></option>

        <option value="300000000"><?php echo buatrp(300000000);?></option>

        <option value="360000000"><?php echo buatrp(360000000);?></option>

       
    </select>

    <br>

    <b>Lama Peminjaman : </b>

    <select name="lama" id="myPinjam" onchange="myFunction()" class="form-control" required>

        <option value="">-Pilih-</option>

        <option value="12">12 Bulan</option>

        <option value="18">18 Bulan</option>

        <option value="24">24 Bulan</option>

       

    </select><br>

    <input type="submit" name="btn-kalkulasi" class="btn btn-ku" value="Kalkulasi">



</form>

<hr>

<?php

    if (isset($_POST['btn-kalkulasi'])) {

        $jumlah_pinjaman = $_POST['jumlah'];

        $lama_pinjaman = $_POST['lama'];



        if($lama_pinjaman==12){

            $bunga_pertahun=10.56;

        }elseif ($lama_pinjaman==18) {

            $bunga_pertahun=12;

        }elseif ($lama_pinjaman==24) {

            $bunga_pertahun=14.40;

        }elseif ($lama_pinjaman==48) {

            $bunga_pertahun=14.40;

        }elseif ($lama_pinjaman==60) {

            $bunga_pertahun=15.36;

        }elseif ($lama_pinjaman==72) {

            $bunga_thn=15.36;

        }elseif ($lama_pinjaman==84) {

            $bunga_pertahun=15.36;

        }


        $angsuran_pokok = $jumlah_pinjaman/$lama_pinjaman;

        $uang_muka= $jumlah_pinjaman*0.2;



        echo "<pre>";

        echo "Jumlah Pinjaman          = "."<b>".buatrp($jumlah_pinjaman)."</b>"."<br>";

        echo "Lama Pinjaman            = "."<b>".$lama_pinjaman." Bulan"."</b>"."<br>";

        echo "uang_muka                = "."<b>".$uang_muka."</b>"."<br>";              ;

        echo "<br>";

      

        echo "</pre>";



        $row=$jumlah_pinjaman;

        $no=1;

?>

    <table class="table zebra-table">

        <tr>

            <th>Angsuran ke -</th>

            <th>Angsuran Pokok</th>

            

            <th>Sisa</th>

        </tr>

        <tr>

            <td>0</td>

            <td>0</td>

            <td>0</td>

            <td><b><?php echo buatrp($jumlah_pinjaman);?></b></td>

        </tr>

    

<?php while ( $row > 1) { $row=$row-$angsuran_pokok; ?>



        <tr>

            <td><?php echo $no++;?></td>

            <td><?php echo buatrp($angsuran_pokok);?></td>


            

            <td><?php echo buatrp($row);?></td>

        </tr>

        

    <?php }

        $tot_ang_pokok=$angsuran_pokok*$lama_pinjaman;

    

        

    ?>



        <tr>

            <td></td>

            <td><b><?php echo buatrp($tot_ang_pokok);?></b></td>

        

            <td><b><?php echo buatrp($tot_jumlah);?></b></td>

            <td></td>

        </tr>

    </table>

</div>

<div class="container"><br></div>

<?php } ?>



</body>

</html>