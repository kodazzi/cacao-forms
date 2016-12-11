<?php namespace Kodazzi\CacaoForms\Form;

class FormBuilder extends InterfaceForm
{
    public function render()
    {
        $string_fields = '';
        $string_fields_hidden = '';

        $widgets = $this->widgets;

        foreach ($widgets as $field => $widget)
        {
            $string_fields .= $this->renderRow($widget);
        }

        return $string_fields . $string_fields_hidden;
    }

    public function renderRow(Field $widget)
    {
        if($widget->isDisplay())
        {
            return view('cacao::forms.row', compact('widget'))->render();
        }

        return '';
    }
}