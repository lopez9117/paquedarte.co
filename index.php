 <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>Paquedarte.co by Ignisoft</title>
           

            <style>
                .contenedor{
                    width: 100%;
                    height: 100%;   
                    position: relative;

                }
                .capa-centro-formulario{
                    width:350px;
                    margin: 15% auto;
                    position: relative;



                }
                .capa-centro-img{
                    width: 180px;
                    margin: 0 auto;
                    position: relative;

                }
            </style>
        </head>
        <body>
<!--            <h1>Welcome to IIS 7.0</h1>-->
            <div class="contenedor">
                <!--- <div style="/*background-color: #000*/"class="row">

                   <div style=" margin-top: 15%;" class="offset4 span8">-->
                <div class="capa-centro-formulario">
                    <div class="capa-centro-img">
                        <image  src="images/Logo-Paquedarte-400x400.png" height="200px" width="200px"/>
                        
                    </div>

                    <div align = "center">
                    <form class="form-horizontal" method="post" action="login.php">

                        <div class="control-group">

                            <br>
                            <label class="control-label" for="user">Nombre de usuario</label>
                            <div class="controls">
                                <input type="email"  id="user" name="user"  placeholder="Email"  value="" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="contrasena">Contraseña</label>
                            <div class="controls">
                                <input type="password" id="contrasena" name="contrasena"placeholder="Contraseña" required>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">

                                <button type="submit" class="btn btn-primary" >Entrar</button>
                                <button class= "btn btn-primary"> invitado </button>
                            </div>  
                        </div>
                    </div>


                        <?php
                        @$error = $_GET["error"];
                        switch ($error) {
                            case 1://usuario no identificado
                                echo '<div class="alert alert-error span3 " > <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <p >No estas en la base de datos.</p>
                                <p>Si olvidaste la contraseña <a href="RestablecerContrasena.php"> Click aqui para restablecer contraseña</a><p></div>';
                                break;
                            case 2://sin base de datos, servidor caido etc
                                echo '<div class="alert alert-error alert alert-error span3"> 
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <p>Ha ocurrido un error inesperado, Nuestros Ing esta trabajando en esto, Te presentamos Disculpas. </p></div>';

                                break;
                            case 3://Duplicidad de Documentos
                                echo '<div class="alert alert-error alert alert-error span3"> 
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <p>Duplicidad de docuemnto detectada, vaya al adminitrador y notifique el problema. </p></div>';

                                break;
                              case 4://Duplicidad de Documentos
                                echo '<div class="alert alert-error alert alert-error span3">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <p>Usted se encuentra Desactivado en nuestra plataforma, Vaya donde el administrador. </p></div>';

                                break;
                        }
                        
                        



//                            echo '<div class="alert alert-error alert alert-error span3">
//                               <button type="button" class="close" data-dismiss="alert">&times;</button> 
//                               <p>El navegador por el cual entras no es el mas adecuado, por favor ingrese por el navegador Mozilla Firefox </p></div>';
                        ?>
                    </form>

                    <!--- </div>-->
                </div>
            </div>
           
        </body>
    </html>