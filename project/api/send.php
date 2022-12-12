<?php 

    if ($_POST) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];

        if (empty($first_name) || empty($last_name) || empty($email)) {
            $error = 'Lo sentimos, ha ocurrido un error, por favor verifique la información e inténtelo de nuevo.';
            
            $data = [
                'errorName' => empty($first_name) ? true : false,
                'errorLastName' => empty($last_name) ? true : false,
                'errorEmail' => empty($email) ? true : false,
                'errorMessage' => $error,
                'status' => 500
            ];

            echo json_encode($data);
            exit;
        }

        $body = 'Hi, my name is ' . $first_name . ' ' . $last_name . ' and I seek for more information, please send me back this ASP, thank you very much';

        $data = [
            'first_name' => $first_name,
            'last_name' => $last_name,
            'email' => $email,
            'body' => $body,
            'status' => 200
        ];

        echo json_encode($data); 
        exit;
    }




