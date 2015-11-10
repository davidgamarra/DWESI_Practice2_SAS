<?php
require "./classes/AutoLoad.php";
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>DWESI Practica 2</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="mystyle.css" media="screen" />
    </head>
    <body>
    	<?php if(!Request::get("correct") == 0){ ?>
		<h class="green"><?php echo Request::get("correct") ?> archivos subidos correctamente</h>
		<?php } if(!Request::get("failed") == 0){ ?>
		<h class="red"><?php echo Request::get("failed") ?> archivos no se han podido subir</h>
   		<?php } ?>
   		<div class="container">
   			<?php
				$dir = scandir("../../radiografia/");
				for($i = 0; $i<count($dir); $i++){
					$nssimg = explode("_", $dir[$i])[0];
					if(Request::get("nss") === $nssimg || Request::get("nss") === explode(".", $dir[$i])[0]){
						echo "<a href='readfile.php?file=$dir[$i]'><img src='readfile.php?file=$dir[$i]'/></a>";
					}
				}
			?>
   		</div>
    </body>
</html>