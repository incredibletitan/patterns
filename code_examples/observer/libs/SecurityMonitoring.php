<?php

namespace libs;

/**
 * Class SecurityMonitoring
 *
 * @author Yuriy Stos
 */
class SecurityMonitoring extends LoginMonitoring
{
    public function doUpdate(Login $login)
    {
        if (($status = $login->getStatus()) && $status[0] === Login::LOGIN_WRONG_PASS) {
            echo "User {$status[1]} entered wrong password. IP : {$status[2]}" . "<br/>";
        }
    }
}