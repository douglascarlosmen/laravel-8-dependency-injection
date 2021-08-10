<?php

namespace App\Contracts;

interface ExternalApiDataInterface
{
    /**
     * Busca os dados na Api Externa
     */
    public function getData(string $endpoint);
}
