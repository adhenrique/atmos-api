<?php

if (! function_exists('sendTo')) {
    function sendTo($email)
    {
        if (env('APP_ENV') === 'dev') {
            return env('MAIL_FROM_ADDRESS');
        }
        return $email;
    }
}
