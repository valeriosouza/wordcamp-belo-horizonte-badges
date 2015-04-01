<?php
/**
*
* fieldconfig for wordcamp-belohorizonte-badges/Configuration
*
* @package WordCamp_Belohorizonte_Badges
* @author Myles McNamara myles@smyl.es
* @license GPL-2.0+
* @link http://smyl.es
* @copyright 2015 Myles McNamara
*/


$group = array(
	'label' => __('Configuration','wordcamp-belohorizonte-badges'),
	'id' => '60981314',
	'master' => 'badge_type',
	'fields' => array(
		'badge_type'	=>	array(
			'label'		=> 	__('Badge Type','wordcamp-belohorizonte-badges'),
			'caption'	=>	__('Badge Type','wordcamp-belohorizonte-badges'),
			'type'		=>	'dropdown',
			'default'	=> 	'*attending||Im Attending,speaking||Im Speaking,sponsor||Im a Proud Sponsor,volunteer||Im a Volunteer',
		),
		'alignment'	=>	array(
			'label'		=> 	__('Alignment','wordcamp-belohorizonte-badges'),
			'caption'	=>	__('Alignment','wordcamp-belohorizonte-badges'),
			'type'		=>	'onoff',
			'default'	=> 	'*none||None,left||Left,center||Center,right||Right',
			'inline'	=> 	true,
		),
	),
	'styles'	=> array(
		'toggles.css',
	),
	'scripts'	=> array(
		'toggles.min.js',
	),
	'multiple'	=> false,
);

