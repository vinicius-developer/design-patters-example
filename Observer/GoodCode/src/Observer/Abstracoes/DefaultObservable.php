<?php

namespace Src\Observer\Abstracoes;

use Src\Comandos\GerarPedidos\GerarPedidosHandler;

abstract class DefaultObservable
{
    /**
     * @var DefaultObserver
     */
    protected $breadcrumb = [];

    public function addBread(DefaultObserver $observer)
    {
        $this->breadcrumb[] = $observer;
    }


    protected function callActions(GerarPedidosHandler $pedido)
    {
        foreach($this->breadcrumb as $bread) {
            $bread->acao($pedido);
        }
    }
}