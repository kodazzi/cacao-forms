<?php namespace Kodazzi\CacaoForms\Form;

Class InterfaceForm implements \ArrayAccess
{
	protected $widgets = array();
	protected $name_form = null;
	protected $is_valid = true;
	protected $is_multipart = false;

	public function __construct()
	{
        $this->config();
	}

	public function offsetSet( $offset, $widget )
	{
		$this->setWidget( $offset, $widget );
	}

	public function offsetExists( $offset )
	{
		return isset( $this->widgets[$offset] );
	}

	public function offsetUnset( $offset )
	{
		unset( $this->widgets[$offset] );
	}

	public function offsetGet( $offset )
	{
		return isset( $this->widgets[$offset]) ? $this->widgets[$offset] : null;
	}

	public function unsetField( $name )
	{
		unset( $this->widgets[$name] );
	}

	/********************************************************************/

	public function setWidget( $name, Field $widget )
	{
        $this->widgets[ $name ] = $widget;

		return $widget;
	}

	/**
	 * @return Field
	 */
	public function getWidget($name)
	{
		return $this->offsetGet($name);
	}

	/**
	 * @return Field
	 */
	public function getWidgets()
	{
		return $this->widgets;
	}

	/************************************************************************/

	public function isMultipart()
	{
		return ($this->is_multipart) ? true : false;
	}
}