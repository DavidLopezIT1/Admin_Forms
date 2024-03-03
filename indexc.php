
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stilef.css">
    <title>Form_one</title>
</head>
<body>
    <header>
        <h1>main fomr</h1>
    </header>

    <main>
        <form action="" method="post">
            <fieldset>
                <legend>Inscripcion a Tutoria</legend>

            <div>
                <label for="Nombre">Nombre</label>
                <input type="text" name="Nombre">
            </div>

            <div>
                <label for="Apellido">Apellido</label>
                <input type="text" name="Apellido">
            </div>

            <div>

                <label for="Empresa">Empresa</label>
                <input type="text" name="Empresa">
            </div>

            <div>
                <label for="Identificacion">Identificacion</label>
                <input type="number" name="Identificacion">
            </div>

            <div>
                <label for="correo">correo</label>
                <input type="email" name="Correo">
            </div>
             
            </fieldset>
                <div class="button_send"><input type="submit" name="enviar" value="Send" class="button_send2"></div>
        </form>       
            <div>
                        <?php
                    if(isset($_POST['enviar'])){

                        $nombre= isset($_POST['Nombre']) ? $_POST['Nombre'] : $nombre =""; 

                        $apellido= isset($_POST['Apellido']) ? $_POST['Apellido'] : $apellido =""; 

                        $empresa= isset($_POST['Empresa']) ? $_POST['Empresa'] : $empresa =""; 

                        $Identificacion= isset($_POST['Identificacion']) ? $_POST['Identificacion'] : $Identificacion =""; 

                        $correo= isset($_POST['Correo']) ? $_POST['Correo'] : $correo =""; 
                        //if(isset($_POST['Nombre'])) ? $_POST['Nombre'] : $nombre =""; 
                        
                       /* $apellido= $_POST['Apellido'];
                        $empresa= $_POST['Empresa'];
                        $Identificacion= $_POST['Identificacion'];
                        $correo= $_POST['Correo'];
                        */
                        if(!empty($nombre)){
                            
                            //$nombre = htmlspecialchars($nombre); 
                            filter_var($nombre , FILTER_SANITIZE_STRING);
                            //echo "Nombre se ha guardado con exito como -> " . "<strong>" . $nombre . "</strong>". "<br/>";
                        }else{
                            echo  "<script class='alerta'> alert('No ha diligenciado ningun Nombre, Verifique.')</script>";
                        }

                            if(!empty($apellido)){

                               // echo "Apellido se ha guardado con exito como -> " . "<strong>" .  $apellido . "</strong>". "<br/>";
                            }else{
                                echo "<script>alert('No ha diligenciado ningun Apellido, Verifique.')</script>";
                            }

                                if(!empty($empresa)){

                                  //  echo "Empresa se ha guardado con exito como -> " . "<strong>" .  $empresa . "</strong>". "<br/>";
                                }else{
                                    echo "<script>alert('No ha diligenciado ninguna Empresa, Verifique.')</script>";
                                }

                                    if(!empty($Identificacion)){

                                      //  echo "Identidicacion se ha guardado con exito como -> " . "<strong>" .  $Identificacion . "</strong>". "<br/>";
                                    }else{
                                        echo "<script>alert('No ha diligenciado ninguna Identidicacion, Verifique.')</script>";
                                    }

                                        if(!empty($correo)){

                                         //   echo "Correo se ha guardado con exito como -> " . "<strong>" .  $correo . "</strong>".  "<br/>";
                                        }else{
                                            echo "<script>alert('No ha diligenciado ningun Correo, Verifique.')</script>";
                                        }


                                    }
  
                                    if(empty($nombre) or empty($apellido) or empty($empresa) or empty($Identificacion) or empty($correo)){
                                        echo "No ha diligenciado los datos necesarios para culminar su registro, Verifique.";
                                    }else{
                                        echo "Nombre se ha guardado con exito como -> " . "<strong>" . $nombre . "</strong>" . "<br/>";
                                        echo "Apellido se ha guardado con exito como -> " . "<strong>" .  $apellido . "</strong>". "<br/>";
                                        echo "Empresa se ha guardado con exito como -> " . "<strong>" .  $empresa . "</strong>". "<br/>";
                                        echo "Identidicacion se ha guardado con exito como -> " . "<strong>" .  $Identificacion . "</strong>". "<br/>";
                                        echo "Correo se ha guardado con exito como -> " . "<strong>" .  $correo . "</strong>".  "<br/>";
                                    }
                                    
                                     //   else if($nombre)
                        ?>


            </div>

    </main>

    <footer>

    </footer>
</body>
</html>