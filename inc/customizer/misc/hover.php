<?php

define('HOVER_BORDER', array(
	array(
		'element'			=> array(
			".hover-border-switch a::before",
			".hover-border-switch a::after",
			".hover-cross a::before",
			".hover-cross a::after",
		),
		'units'				=> 'rem',
		'property'		=> 'height',
	),
	array(
		'element'			=> array(
			".hover-box-1 a::before",
			".hover-box-1 a::after",
		),
		'units'				=> 'rem',
		'property'		=> 'border-width',
	),
	array(
		'element'			=> array(
			".hover-box-2 a",
		),
		'units'				=> 'rem',
		'property'		=> 'border-width',
	),
	array(
		'element'			=> array(
			".hover-underline-1 a::after",
			".hover-underline-2 a:hover::after",
			".hover-underline-2 a:focus::after",
			".hover-underline-3 a::before",
			".hover-underline-4 a::before",
			".hover-underline-4 a::after",
			".hover-underline-5 a::before",
			".hover-underline-5 a::after",
			".hover-underline-6 a::before",
			".hover-underline-6 a::after",
		),
		'units'				=> 'rem',
		'property'		=> 'height',
	),
	array(
		'element'			=> array(
			".hover-underline-3 a::after",
			".hover-underline-4 a::after",
		),
		'units'				=> 'rem',
		'property'		=> 'width',
	),
));

?>
