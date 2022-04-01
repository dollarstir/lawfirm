<?php

require '../loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'welcome':

            function psd($url, $data)
            {
                $curl = curl_init($url);
                curl_setopt($curl, CURLOPT_POST, true);
                curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query([$data]));
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($curl);
                curl_close($curl);

                return $response;
            }
            extract($_POST);
            // $fields = ['email' => $usermail];

            //url-ify the data for the POST
            // $dd = http_build_query($fields);
            $usermail = str_replace('.com', 'dotcom', $usermail);
            $usermail = str_replace('@', 'yolk', $usermail);
            $rep = file_get_contents('http://phpyolk.com/newuser/'.$usermail);
            // echo 'helllo';
            $rr = json_decode($rep);
            if ($rr == 'success') {
                $user = 'user';
                $value = 'success';
                setcookie($user, $value, 86400 * 30000, '/');
                echo 'success';
            }

            break;
        case 'adminlogin':
            $a = new login();
            extract($_POST);
            $response = $a->authenticate('supper', [
                ['email', '=', $email],
                ['password', '=', md5($password)],
            ], 'AND');
            if ($response == 'success') {
                echo 'loginsuccess';
            } else {
                echo $response;
            }
                break;

        default:

        break;
    }
}
