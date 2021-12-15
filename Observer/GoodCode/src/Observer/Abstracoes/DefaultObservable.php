<?php

namespace Src\Observer\Abstracoes;

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


    protected function callActions()
    {
        foreach($this->breadcrumb as $bread) {
            $bread->acao();
        }
    }
}