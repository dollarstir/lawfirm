<?php

class killsession
{
    public function logout($sessionvariable = '')
    {
        if ($sessionvariable == '') {
            session_start();
            session_destroy();
            $msg = 'success';
        } else {
            session_start();
            unset($_SESSION[$sessionvariable]);
            $msg = 'success';
        }

        return $msg;
    }

    public function addsession($sessionvariable, $value)
    {
        $_SESSION[$sessionvariable] = $value;
    }

    public function viewsession($sessionvariable)
    {

        return $_SESSION[$sessionvariable]
    }
}
