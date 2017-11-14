<?php

namespace PHPModern\TesteDocument\Implementations;

require '../Interfaces/Documentable.php';

use PHPModern\TesteDocument\Interfaces\Documentable;

class HTMLDocument implements Documentable
{
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function getId()
    {
        return $this->url;
    }

    public function getContent()
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 3);

        $html = curl_exec($ch);

        curl_close();

        return $html;
    }
}