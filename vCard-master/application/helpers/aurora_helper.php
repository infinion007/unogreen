<?php

if ( ! function_exists('bt_edit'))
{
	function bt_edit($uri){
		return anchor($uri, '<i class="fa fa-edit fa-2x"></i>');
	}
}


if ( ! function_exists('bt_delete'))
{
	function bt_delete($uri){
		return anchor( $uri, '<i class="fa fa-trash-o fa-2x"></i>', array('onclick' => "return confirm('You are about to delete a record. This cannot be undone. Are you sure?');"
			));
	}
}


if ( ! function_exists('bt_print'))
{
	function bt_print($uri){
		return anchor( $uri, '<i class="fa fa-print fa-2x"></i>', array('onclick' => "return confirm('You are about print barcode of this product. Are you sure?');"
			));
	}
}


// echo 'aurora helper loded';


if (!function_exists('dump')) {
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        var_dump($var);
        $output = ob_get_clean();

        // Add formatting
        $output = preg_replace("/\]\=\>\n(\s+)/m", "] => ", $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}


if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}
