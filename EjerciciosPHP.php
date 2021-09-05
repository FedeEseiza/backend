<?php 
	// Ejercicio 1
	echo "Hola Mundo!!!";
?>

<?php 
	// Ejercicio 2
	$num = 1;
	$num2 = 2; 
	$result = $num + $num2;
	echo "El resultado de $num + $num2 es: $result";
?>

<?php 
	// Ejercicio 3
	for ($i=0; $i <= 10; $i++) { 
		echo "$i ";
	}
?>

<?php //Ejercicio 4 ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
	<body>
		<h1><?php echo "Hola mundo !!!"?></h1>
	</body>
</html> 

<?php //Ejercicio 5 ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
	<body>
		<img src="<?php echo "example/example.png"; ?>">
	</body>
</html> 

<?php //Ejercicio 6 ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
	<body>
		<select>
			<?php 
			for ($i=0; $i < 10; $i++) { 
				echo '<option value="'.$i.'">'.$i.'</option>'
			} ?>
		</select>
	</body>
</html> 

<?php //Ejercicio 7 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table border ="1">
        <tr>
        <td>X</td>
        <?php
        for ($i=1; $i <= 10; $i++) { ?> 
            <td>
            <?php echo $i; ?>
            </td>
        <?php } ?>
        </tr>;
        <?php
        for ($i=1; $i <= 10; $i++) { ?> 
            <tr>
            <td>
            <?php echo $i; ?>
            </td>
            <?php for ($j=1; $j <= 10; $j++) { ?>
                <td>
                <?php echo $i * $j; ?>
                </td>
            <?php } ?>
        </tr>
        <?php } ?>
</table>
</body>
</html>



