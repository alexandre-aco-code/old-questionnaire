<?php 

class Renderer {

    public static function show(string $template, array $tplVars = []) {

        ob_start();

        require("libraries/views/templates/$template.phtml");
        $pageContent = ob_get_clean();

        require('libraries/views/layout.phtml')


    }






    







}