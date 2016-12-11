<?php namespace Kodazzi\CacaoForms\Form\Fields;

use Kodazzi\CacaoForms\Form\Field;
use Form;

Class FieldString extends Field
{
	protected $min_length = 1;

	/* 
	 * Solo permite cadenas con letras, numeros y espacios
	 * Util para validar nombres, segundo nombre, apellidos de personas 
	 */
	public function valid()
	{
		return true;
	}

	public function renderField()
	{
		if(!$this->is_display)
			return '';

        return Form::text('title', null, ['class' => 'form-control']);
	}
}