<?php

class Application {

    public static function process() {

        $controllerName = "Home";
        $task = "index";

        if (!empty($_GET["controller"])) {

            $controllerName = htmlspecialchars(ucfirst($_GET["controller"]));

        }

        if (!empty($_GET["task"])) {

            $task = htmlspecialchars($_GET["task"]);

        }

        // construction du nom du controller

        $controllerName = "\Controllers\\".$controllerName;

        $controller = new $controllerName();

        $controller->$task();





    }
}