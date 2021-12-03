<?php
    
    $data = array(
    "application_name" => "Application1",
    );

    $apiurl     = 'http://lending-loan.com/trainee/get-user?id='.$_GET['id'];
    $data_array = json_encode( $data );
    $curl       = curl_init();
    curl_setopt( $curl, CURLOPT_URL, $apiurl );
    curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt( $curl, CURLOPT_POSTFIELDS, $data_array );
    curl_setopt( $curl, CURLOPT_HTTPHEADER, array( 'Content-Type: application/json' ) );
    $result = curl_exec( $curl );
    
    $result = json_decode($result, true );
    
    curl_close( $curl );

    
    echo $result['id'] . "<br>" .
    $result['first_name']. "<br>" .
    $result['last_name']. "<br>" .
    $result['email'];
?>