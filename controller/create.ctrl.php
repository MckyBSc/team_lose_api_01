<?php
    if (isset($_POST['submit'])) {
        // Create a new cURL resource
        $url = 'http://lending-loan.com/trainee/create';

        $curl = curl_init();

        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $email = $_POST['email'];

        $data = array(
            'first_name' => $fname,
            'last_name' => $lname,
            'email' => $email
        );
            
        $fields_string = http_build_query($data);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, TRUE);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $fields_string);

        $data = curl_exec($curl);
            echo $data;
        curl_close($curl);
    }  
?>