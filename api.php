<?php

session_start();

require_once( "params.php" );

function API( $settings = [], $debug = false ) {
    // Пробуем загрузить данные из сессии
    $data = tryToLoadFromSession();

    // Проверяем правильность данных от владельца лендинга
    if( !checkIncomingData( $settings ) )
        return setError( $debug ? '1' : $debug );

    // Если нету данных из сессии, загружаем их с сервера
    if( !$data )
        $data = tryToLoadFromServer( $settings );

    // Если по прежнему нету данных, выдаём 500 ошибку
    if( !$data )
        return setError( $debug ? '2' : $debug );

    // Если данные с сервера неправильные, выдаём 500 ошибку
    if( !checkServerData( $data ) )
        return setError( $debug ? '3' : $debug );

    // Сохраняем в сессию
    saveToSession( $data );

    return prepareData( $data, $settings );
}

/**
 * @param string $data
 * @param string[] $settings
 * @return string[]
 */
function prepareData( $data, $settings = [] ) {
    $data = json_decode( $data, true );

    $button_texts = [
        "Хочешь узнать как зарабатывать, жми отправить",
        "Желаешь ознакомится с условиями работы, жми отправить",
        "Желаете начать зарабатывать, жми отправить",
        "Нужны подробности о работе, жми отправить",
        "Узнать детали заработка, жми отправить",
        "Начни зарабатывать прямо сейчас, жми отправить"
    ];

    shuffle( $button_texts );

    // $data['phoneLink'] = "https://wa.me/{$data['phone']}?text={$settings['WhatsAppText']}";
    $data['phoneLink'] = "https://wa.me/{$data['phone']}?text={$button_texts[0]}";
    return $data;
}

/**
 * @param string[] $settings
 * @return null|string
 */
function tryToLoadFromServer( $settings = [] ) {
    $from = sprintf( "%s/cross/data?url=%s", $settings['panelUrl'], $_SERVER['HTTP_HOST'] );

    try {
        $content = file_get_contents( $from );
    } catch ( Exception $e ) {
        return null;
    }

    return $content;
}

/**
 * @param string $data
 */
function saveToSession( $data ) {
    $_SESSION['data'] = $data;
}

/**
 * @return null|string
 */
function tryToLoadFromSession() {
    if( !empty( $_SESSION['data'] ) )
        return $_SESSION['data'];

    return null;
}

/**
 * @param string $data
 * @return bool
 */
function checkServerData( $data ) {
    if( !strlen( $data ) )
        return false;

    try {
        $data = json_decode( $data );
    } catch ( Exception $e ) {
        return false;
    }

    if( empty( $data ) )
        return false;

    if( empty( $data->hash ) )
        return false;

    if( empty( $data->phone ) )
        return false;

    return true;
}

/**
 * @param string[] $settings
 * @return bool
 */
function checkIncomingData( $settings = [] ) {
    $requiredAttributes = [ 'panelUrl', 'WhatsAppText' ];

    foreach ( $requiredAttributes as $attribute )
        if( !isset( $settings[$attribute] ) )
            return false;

    return true;
}

/**
 * @param bool $debug
 * @return string[]
 */
function setError( $debug = false ) {
    if( !$debug )
        header( "HTTP/1.1 500 Internal Server Error" );

    if( $debug )
        var_dump( "Error - {$debug}" );

    return [];
}