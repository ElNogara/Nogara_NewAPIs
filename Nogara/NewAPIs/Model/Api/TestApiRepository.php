<?php
/**
 * Copyright © Nogara. All rights reserved.
 */

namespace Nogara\NewAPIs\Model\Api;

use Nogara\NewAPIs\Api\TestApiRepositoryInterface;

class TestApiRepository implements TestApiRepositoryInterface
{
    /**
     * Função para testes de retorno da API, vai receber um id e somar com 1.
     * @param int $id
     * @return int
     */
    public function getValue(int $id) : int
    {
        $value = 1 + $id;

        return $value;
    }
}