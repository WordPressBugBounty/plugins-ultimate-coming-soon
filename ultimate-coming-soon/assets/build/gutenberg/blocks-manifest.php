<?php
// This file is generated. Do not modify it manually.
return array(
	'countdown' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'ultimate-coming-soon/countdown',
		'version' => '1.0.0',
		'title' => 'Countdown',
		'textdomain' => '',
		'editorScript' => 'file:./index.js',
		'editorStyle' => '',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./front.js',
		'keywords' => array(
			
		),
		'attributes' => array(
			'days_label' => array(
				'type' => 'string',
				'default' => 'Days'
			),
			'hours_label' => array(
				'type' => 'string',
				'default' => 'Hours'
			),
			'minutes_label' => array(
				'type' => 'string',
				'default' => 'Minutes'
			),
			'seconds_label' => array(
				'type' => 'string',
				'default' => 'Seconds'
			),
			'date' => array(
				'type' => 'string',
				'default' => ''
			),
			'time' => array(
				'type' => 'string',
				'default' => ''
			),
			'show_after_finish_message' => array(
				'type' => 'boolean',
				'default' => false
			)
		),
		'supports' => array(
			'html' => false
		)
	),
	'newslatter' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'ultimate-coming-soon/newsletter',
		'version' => '1.0.0',
		'title' => 'Newsletter',
		'textdomain' => '',
		'editorScript' => 'file:./index.js',
		'editorStyle' => '',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./front.js',
		'keywords' => array(
			
		),
		'attributes' => array(
			'placeholder' => array(
				'type' => 'string',
				'default' => 'Your email:'
			),
			'textarea_placeholder' => array(
				'type' => 'string',
				'default' => 'message...'
			),
			'name_placeholder' => array(
				'type' => 'string',
				'default' => 'name'
			),
			'phone_placeholder' => array(
				'type' => 'string',
				'default' => 'phone'
			),
			'button_label' => array(
				'type' => 'string',
				'default' => 'Subscribe'
			),
			'block_id' => array(
				'type' => 'string',
				'default' => ''
			),
			'grid_column' => array(
				'type' => 'string',
				'default' => '1fr'
			),
			'grid_gap' => array(
				'type' => 'string',
				'default' => '10px'
			),
			'tablet_grid_column' => array(
				'type' => 'string',
				'default' => ''
			),
			'tablet_grid_gap' => array(
				'type' => 'string',
				'default' => ''
			),
			'mobile_grid_column' => array(
				'type' => 'string',
				'default' => ''
			),
			'mobile_grid_gap' => array(
				'type' => 'string',
				'default' => ''
			),
			'grid_align_items' => array(
				'type' => 'string',
				'default' => ''
			),
			'grid_place_items' => array(
				'type' => 'string',
				'default' => ''
			),
			'grid_place_content' => array(
				'type' => 'string',
				'default' => ''
			),
			'tablet_grid_align_items' => array(
				'type' => 'string',
				'default' => ''
			),
			'tablet_grid_place_items' => array(
				'type' => 'string',
				'default' => ''
			),
			'tablet_grid_place_content' => array(
				'type' => 'string',
				'default' => ''
			),
			'mobile_grid_align_items' => array(
				'type' => 'string',
				'default' => ''
			),
			'mobile_grid_place_items' => array(
				'type' => 'string',
				'default' => ''
			),
			'mobile_grid_place_content' => array(
				'type' => 'string',
				'default' => ''
			),
			'show_after_email_send_message' => array(
				'type' => 'boolean',
				'default' => false
			),
			'enable_message_field' => array(
				'type' => 'boolean',
				'default' => true
			),
			'enable_name_field' => array(
				'type' => 'boolean',
				'default' => true
			),
			'enable_phone_field' => array(
				'type' => 'boolean',
				'default' => true
			),
			'buttonStyles' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#ffffff',
					'background' => '#007cba',
					'hoverBackground' => '#005a87',
					'hoverColor' => '#ffffff',
					'typography' => array(
						'fontSize' => '14px',
						'fontWeight' => '600'
					)
				)
			),
			'buttonBorder' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000000',
					'style' => 'solid',
					'width' => '1px',
					'radius' => '4px'
				)
			),
			'buttonPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '10px',
					'bottom' => '10px',
					'left' => '10px'
				)
			),
			'buttonMargin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '0px',
					'left' => '0px'
				)
			),
			'buttonWidth' => array(
				'type' => 'string',
				'default' => 'max-content'
			),
			'buttonRadius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '4px',
					'right' => '4px',
					'bottom' => '4px',
					'left' => '4px'
				)
			),
			'inputStyles' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000',
					'background' => '#fff',
					'width' => '',
					'height' => '24px',
					'typography' => array(
						'fontSize' => '14px',
						'fontWeight' => '400'
					)
				)
			),
			'inputBorder' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000000',
					'style' => 'solid',
					'width' => '1px',
					'radius' => '4px'
				)
			),
			'inputPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '10px',
					'bottom' => '10px',
					'left' => '10px'
				)
			),
			'inputMargin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '0px',
					'left' => '0px'
				)
			),
			'inputRadius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '4px',
					'right' => '4px',
					'bottom' => '4px',
					'left' => '4px'
				)
			),
			'textareaStyles' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000',
					'background' => '#fff',
					'width' => '',
					'height' => '100px',
					'typography' => array(
						'fontSize' => '14px',
						'fontWeight' => '400'
					)
				)
			),
			'textareaBorder' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000000',
					'style' => 'solid',
					'width' => '1px',
					'radius' => '4px'
				)
			),
			'textareaPadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '10px',
					'bottom' => '10px',
					'left' => '10px'
				)
			),
			'textareaMargin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '0px',
					'left' => '0px'
				)
			),
			'textareaRadius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '4px',
					'right' => '4px',
					'bottom' => '4px',
					'left' => '4px'
				)
			),
			'nameStyles' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000',
					'background' => '#fff',
					'width' => '',
					'height' => '24px',
					'typography' => array(
						'fontSize' => '14px',
						'fontWeight' => '400'
					)
				)
			),
			'nameBorder' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000000',
					'style' => 'solid',
					'width' => '1px',
					'radius' => '4px'
				)
			),
			'namePadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '10px',
					'bottom' => '10px',
					'left' => '10px'
				)
			),
			'nameMargin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '0px',
					'left' => '0px'
				)
			),
			'nameRadius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '4px',
					'right' => '4px',
					'bottom' => '4px',
					'left' => '4px'
				)
			),
			'phoneStyles' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000',
					'background' => '#fff',
					'width' => '',
					'height' => '24px',
					'typography' => array(
						'fontSize' => '14px',
						'fontWeight' => '400'
					)
				)
			),
			'phoneBorder' => array(
				'type' => 'object',
				'default' => array(
					'color' => '#000000',
					'style' => 'solid',
					'width' => '1px',
					'radius' => '4px'
				)
			),
			'phonePadding' => array(
				'type' => 'object',
				'default' => array(
					'top' => '10px',
					'right' => '10px',
					'bottom' => '10px',
					'left' => '10px'
				)
			),
			'phoneMargin' => array(
				'type' => 'object',
				'default' => array(
					'top' => '0px',
					'right' => '0px',
					'bottom' => '0px',
					'left' => '0px'
				)
			),
			'phoneRadius' => array(
				'type' => 'object',
				'default' => array(
					'top' => '4px',
					'right' => '4px',
					'bottom' => '4px',
					'left' => '4px'
				)
			),
			'input_tablet_width' => array(
				'type' => 'string',
				'default' => ''
			),
			'input_tablet_height' => array(
				'type' => 'string',
				'default' => ''
			),
			'input_mobile_width' => array(
				'type' => 'string',
				'default' => ''
			),
			'input_mobile_height' => array(
				'type' => 'string',
				'default' => ''
			),
			'textarea_tablet_width' => array(
				'type' => 'string',
				'default' => ''
			),
			'textarea_tablet_height' => array(
				'type' => 'string',
				'default' => ''
			),
			'textarea_mobile_width' => array(
				'type' => 'string',
				'default' => ''
			),
			'textarea_mobile_height' => array(
				'type' => 'string',
				'default' => ''
			),
			'name_tablet_width' => array(
				'type' => 'string',
				'default' => ''
			),
			'name_tablet_height' => array(
				'type' => 'string',
				'default' => ''
			),
			'name_mobile_width' => array(
				'type' => 'string',
				'default' => ''
			),
			'name_mobile_height' => array(
				'type' => 'string',
				'default' => ''
			),
			'phone_tablet_width' => array(
				'type' => 'string',
				'default' => ''
			),
			'phone_tablet_height' => array(
				'type' => 'string',
				'default' => ''
			),
			'phone_mobile_width' => array(
				'type' => 'string',
				'default' => ''
			),
			'phone_mobile_height' => array(
				'type' => 'string',
				'default' => ''
			),
			'input_order' => array(
				'type' => 'array',
				'default' => array(
					'email',
					'message',
					'name',
					'phone',
					'button'
				),
				'items' => array(
					'type' => 'string'
				)
			),
			'email_required' => array(
				'type' => 'boolean',
				'default' => true
			),
			'email_notice' => array(
				'type' => 'string',
				'default' => 'Email address required — please enter yours.'
			),
			'name_required' => array(
				'type' => 'boolean',
				'default' => false
			),
			'name_notice' => array(
				'type' => 'string',
				'default' => 'Name is required — please enter yours.'
			),
			'phone_required' => array(
				'type' => 'boolean',
				'default' => false
			),
			'phone_notice' => array(
				'type' => 'string',
				'default' => 'Phone number is required — please enter yours.'
			),
			'message_required' => array(
				'type' => 'boolean',
				'default' => false
			),
			'message_notice' => array(
				'type' => 'string',
				'default' => 'Message is required — please enter yours.'
			)
		),
		'supports' => array(
			'html' => false
		)
	),
	'single_counter' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 3,
		'name' => 'ultimate-coming-soon/single-counter',
		'version' => '1.0.0',
		'title' => 'Single Counter',
		'textdomain' => '',
		'editorScript' => 'file:./index.js',
		'editorStyle' => '',
		'style' => 'file:./style-index.css',
		'viewScript' => 'file:./font.js',
		'keywords' => array(
			
		),
		'attributes' => array(
			'date' => array(
				'type' => 'string',
				'default' => ''
			),
			'time' => array(
				'type' => 'string',
				'default' => ''
			),
			'format' => array(
				'type' => 'string',
				'default' => 'seconds'
			)
		),
		'supports' => array(
			'html' => false
		)
	)
);
