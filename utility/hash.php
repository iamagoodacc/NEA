<?php
class Hash
{
    public static function sha256($message)
    {
        $hash = hash('sha256', $message);
        return $hash;
    }
}
