<?php

/* *
 * Remote check file existence
 *
 * Checking the file remotely without downloading it,
 * the HEAD request is faster in this case.
 *
 * @param string $remote_file_path remote file address, an valid URL
 * @return bool true means the file has been found
 */
function wpr_remote_check_file( $remote_file_path ) {
	if ( ! filter_var( $remote_file_path, FILTER_VALIDATE_URL ) === false ) {
		stream_context_set_default(
			array(
				'http' => array(
					'method' => 'HEAD'
				)
			)
		);
		$headers    = get_headers( $remote_file_path, 1 );
		$file_found = stristr( $headers[0], '200' ); // Returns all of haystack starting from and including the first occurrence of needle to the end. In our case "200 OK" If everything is ok.
		if ( $file_found ) {
			return true;
		}

		return false;
	} else {
		return false;
	}
}

// Example of use
$remote_image =  wpr_remote_check_file( 'http://www.wpriders.com/wp-content/uploads/2015/11/wpriders-logo@2x.png' );
var_dump($remote_image);



/*
This snippet is part of the article published here:
http://www.wpriders.com/snippets/php-remote-file-existence/
In case you want to work with us, please post your task here:
www.wpriders.com/hire-us-ref
*/
