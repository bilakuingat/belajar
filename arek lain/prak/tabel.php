<!DOCTYPE html>
<html>
<body>

<?php
$cars = array( 
        "car1" => array (   
            "brand" => 'BMW',
            "license" => '30-KL-PO',    
            "price" => 10000
            ),

        "car2" => array (
           "brand" => 'Mercedes',
           "license" => '51-ZD-ZD',
           "price" => 20000
        ),

        "car3" => array (
           "brand" => 'Maserati',
           "license" => 'JB-47-02',
           "price" => 30000
        )
     );
     ?>
<table class='tabel' border="3" width = '60%'>
<thead>
<tr>
    <td align=center> Nama Mobil </td> 
    <td align=center> Plat Nomor </td>
    <td align=center> Harga </td>
</tr>
</thead>
<tbody>
<?php
    foreach($cars as $car)  
    {  
    ?>
<tr>
    <td align=center> <?php echo $car['brand'] ?> </td>
    <td align=center> <?php echo $car['license']?> </td>
    <td align=center> <?php echo $car['price'] ?> </td>
    
</tr><?php } ?>



</body>
</html>
