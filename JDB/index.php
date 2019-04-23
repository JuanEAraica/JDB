        <?php
        // put your code here
            require_once 'model/database.php';

            $controller = 'trabajador';

            // Todo esta lógica hara el papel de un FrontController
            if(!isset($_REQUEST['c']))//si existe variable c que es el controllador4
                //sino esta establecida la varible c
            {
                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;
                $controller->Index();    
            }
            else
            {
                // Obtenemos el controlador que queremos cargar
                $controller = strtolower($_REQUEST['c']);
                $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

                // Instanciamos el controlador
                require_once "controller/$controller.controller.php";
                $controller = ucwords($controller) . 'Controller';
                $controller = new $controller;

                // Llama la accion
                call_user_func( array( $controller, $accion ) );
            }
        ?>

