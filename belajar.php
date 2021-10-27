<?php
    $nomor = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $barang = ['Bayam', 'Jagung', 'Kangkung', 'Paprika', 'Kentang', 'Wortel','Sawi',
               'Bawang merah', 'Bawang putih', ' Bawang bombay'];
    $berat = [8, 13.5, 6, 4, 18, 7, 4.8, 8.4, 9, 11.4];
?>

<!DOCTYPE html>
<html lang="en">
<head> TOKO SAYUR PAK JOY</head>
<body>
    <table  border= '10px' style="border-radius:10px;">
        <tr>
            <td bgcolor='#EE6868'> <?php echo "No";?> </td>
            <td bgcolor='#EE6868'> <?php echo "Sayur";?> </td>
            <td bgcolor='#EE6868'> <?php echo "Berat (Kg)"?> </td>
            <td bgcolor='#EE6868'> <?php echo "Berat (G)"?> </td>
            <td bgcolor='#EE6868'> <?php echo "Berat (Mg)"?> </td>
            <td bgcolor='#EE6868'> <?php echo "Berat (Liter)"?> </td>
        </tr>
    <?php for ($i=0; $i<10; $i++) {?>
        <tr>
            <td> <?php echo $nomor[$i];?> </td>
            <td> <?php echo $barang[$i];?> </td>
            <td bgcolor=#F0F8FF> <?php echo $berat[$i]; //dalam KG ?> </td>
            <td bgcolor=#FAEBD7> <?php echo $berat[$i]*1000; //dalam G ?> </td>
            <td bgcolor=#F0FFFF> <?php echo $berat[$i]*1000000; //dalam Mg ?> </td>
            <td bgcolor=#FFF8DC> <?php echo "Tidak dijual literan "; //dalam Liter ?> </td>
        </tr>
        <?php } ?>
    </table>
</body>

</html>