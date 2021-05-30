<?php

require_once( "params.php" );

if( !empty( $_POST ) ) {
    $post = $_POST;

    $url = $_SERVER['HTTP_HOST'];
    $user = ( !empty( $post['hash'] ) ) ? $post['hash'] : null;
    $type = ( !empty( $post['type'] ) ) ? $post['type'] : null;
    $button = ( !empty( $post['button'] ) ) ? $post['button'] : null;
    $details = ( !empty( $post['details'] ) ) ? $post['details'] : null;

    $data = [
        'url'     => $url,
        'user'    => $user,
        'type'    => $type,
        'button'  => $button,
        'details' => $details
    ];

    $data = base64_encode( json_encode( $data ) );

    $from = sprintf( "%s/cross/result-new?result=%s", $params['panelUrl'], $data );
    $content = file_get_contents( $from );

    var_dump( $content );
}