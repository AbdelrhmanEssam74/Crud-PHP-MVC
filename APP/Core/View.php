<?php

class View
{
    /**
     * @param $view_name
     * @param array $view_data
     * @return void
     */
    public static function load($view_name, array $view_data = []): void
    {
        $file = VIEWS . $view_name . ".php";
        if (file_exists($file)):
            extract($view_data);
            ob_start();
            require($file);
            ob_end_flush();
            else:
            echo "Error: file not found";
        endif;

    }
}