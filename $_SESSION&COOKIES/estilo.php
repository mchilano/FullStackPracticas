<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <style media="screen">
     body {
       background: <?php echo isset($_POST["color"]) ? $_POST["color"] : "white"; ?>
     }
   </style>
   <title></title>
 </head>
 <body>

   <form class="" action="" method="post">
     <select class="" name="color">
       <option value="blue" <?php echo ($_POST["color"]) == "blue"? "selected" : "white"; ?>>Azul</option>
       <option value="yellow" <?php echo ($_POST["color"]) == "yellow"? "selected": "white"; ?>>Amarillo</option>
       <option value="red" <?php echo ($_POST["color"]) == "red"? "selected" : "white"; ?>>Rojo</option>
       <option value="green" <?php echo ($_POST["color"]) == "green"? "selected" : "white"; ?>>Verde</option>
       <option value="violet" <?php echo ($_POST["color"]) == "violet"? "selected" : "white"; ?>>Violeta</option>
     </select>
     <input type="submit" name="" value="guardar cambios">
   </form>
 </body>
</html>
