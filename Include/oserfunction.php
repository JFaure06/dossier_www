<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 13/02/19
 * Time: 10:59
 */
function jdebug($var){
    highlight_string("<?php\n\$data =\n" . var_export($var, true) . ";\n?>");
}