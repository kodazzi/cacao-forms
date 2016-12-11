<?php namespace Kodazzi\CacaoForms\Form;

abstract Class Field
{
    protected $is_display = true;

    abstract public function valid();

    abstract public function renderField();

    public function isDisplay()
    {
        return $this->is_display;
    }
}