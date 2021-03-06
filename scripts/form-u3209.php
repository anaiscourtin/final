<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.0.0.379
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Envoi de Formulaire contact',
	'heading' => 'Envoi du nouveau formulaire',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Coché',
		'checkbox_unchecked' => 'Non coché',
		'submitted_from' => 'Formulaire envoyé depuis le site web :%s',
		'submitted_by' => 'Adresse IP du visiteur :%s',
		'too_many_submissions' => 'Trop d\'envois effectués récemment à partir de cette adresse IP',
		'failed_to_send_email' => 'Echec de l\'envoi du courrier électronique',
		'invalid_reCAPTCHA_private_key' => 'Clé privée reCAPTCHA non valide',
		'invalid_reCAPTCHA2_private_key' => 'Clé privée reCAPTCHA 2.0 non valide.',
		'invalid_reCAPTCHA2_server_response' => 'Réponse du serveur à l\'outil reCAPTCHA 2.0 non valide.',
		'invalid_field_type' => 'Type de champ inconnu « %s »',
		'invalid_form_config' => 'Le champ « %s » a une configuration non valide.',
		'unknown_method' => 'Méthode de requête inconnue du serveur'
	),
	'email' => array(
		'from' => 'lebig@bordeaux-metropole.fr',
		'to' => 'lebig@bordeaux-metropole.fr'
	),
	'fields' => array(
		'custom_U3217' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'nom',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « nom » est obligatoire.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'adresse électronique',
			'required' => true,
			'errors' => array(
				'required' => 'Le champ « adresse électronique » est obligatoire.',
				'format' => 'Le champ « adresse électronique » contient une adresse électronique non valide.'
			)
		),
		'custom_U3211' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'message',
			'required' => false,
			'errors' => array(
			)
		)
	)
);

process_form($form);
?>
