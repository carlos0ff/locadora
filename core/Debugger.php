<?php
namespace core;

class Debugger {

    public static function dump($variable) {
        echo self::getCss(); 
        echo '<pre class="xdebug-var-dump">' . self::formatOutput($variable) . '</pre>';
    }

    private static function formatOutput($variable) {
        ob_start();
        var_dump($variable);

        return ob_get_clean();
    }

    private static function getCss() {
        return '
        <style>
            @import url("https://fonts.googleapis.com/css?family=Open+sans|Source+CodePro");
    
            :root {
                --fsphp: #1F2026;
                --fsline: #475163;
                --green: #35ba9b;
                --blue: #3aadd9;
                --yellow: #f5b945;
                --red: #d94452;
            }
    
            body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f0f2f5;
                font-family: "Source Code Pro", serif;
                color: #333333;
            }
    
            .xdebug-var-dump {
                width: 80%;
                max-width: 800px;
                overflow: auto;
                background: rgba(0, 0, 0, 0.05);
                margin: 20px;
                padding: 20px;
                border-radius: 4px;
                font-family: "Source Code Pro", serif;
                font-size: 0.9em;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                color: #333;
                border-left: 5px solid var(--red);
            }
    
            .xdebug-var-dump * {
                font-size: 0.9em;
                margin: 0;
            }
        </style>
        ';
    }
    
    
}
