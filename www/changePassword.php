<?php

$config = SimpleSAML_Configuration::getInstance();
$uregconf = SimpleSAML_Configuration::getConfig('module_userregistration.php');
$formFields = $uregconf->getArray('formFields');
$store = sspmod_userregistration_Storage_UserCatalogue::instantiateStorage();
$customNavigation = $uregconf->getBoolean('custom.navigation', TRUE);

/* Get a reference to our authentication source. */
$asId = $uregconf->getString('auth');
$as = new SimpleSAML_Auth_Simple($asId);
$as->requireAuth();
$attributes = $as->getAttributes();

$formGen = new sspmod_userregistration_XHTML_Form($formFields, 'changePassword.php');
$fields = array('pw1', 'pw2');
$formGen->fieldsToShow($fields);

$html = new SimpleSAML_XHTML_Template(
	$config,
	'userregistration:change_pw.tpl.php',
	'userregistration:userregistration');

if(array_key_exists('sender', $_REQUEST)) {
	// Stage 2: Form submitted
	try{
		$validator = new sspmod_userregistration_Registration_Validation(
			$formFields,
			$fields );
		$validValues = $validator->validateInput();
		$newPw = sspmod_userregistration_Util::validatePassword($validValues);
		if(!empty($store->passwordPolicy)) {
			$validator->validatePolicyPassword($store->passwordPolicy, $attributes, $newPw);
		}
		$store->changeUserPassword($attributes[$store->userIdAttr][0], $newPw);
		$html->data['userMessage'] = 'message_chpw';

	} catch(sspmod_userregistration_Error_UserException $e) {
		$error = $html->t(
			$e->getMesgId(),
			$e->getTrVars()
			);
		$html->data['error'] = htmlspecialchars($error);
	}
} elseif(array_key_exists('logout', $_GET)) {
	$as->logout(SimpleSAML_Module::getModuleURL('userregistration/index.php'));
}

if(!empty($store->passwordPolicy)) {
	$html->data['passwordPolicy'] = $store->passwordPolicy;
	$html->data['passwordPolicytpl'] = SimpleSAML_Module::getModuleDir('userregistration').'/templates/password_policy_tpl.php';
	$html->data['passwordField'] = $fields[0];
	if(array_key_exists('no.contains', $store->passwordPolicy)) {
		$html->data['forbiddenValues'] = array();
		$keys = '';
		foreach($store->passwordPolicy['no.contains'] as $key) {
			if(array_key_exists($key, $attributes) && !empty($attributes[$key])) {
				$value = $attributes[$key];
				if(is_array($value)) {
					$value = $value[0];
				}
				$html->data['forbiddenValues'][] = $value;
				$keys[] = $key;
			}
		}
		$html->data['forbiddenValuesFieldnames'] = implode(", ", $keys);
		$html->data['passwordPolicytpl'] = SimpleSAML_Module::getModuleDir('userregistration').'/templates/password_policy_tpl.php';
	}
}


$formGen->setSubmitter('submit_change');
$html->data['formHtml'] = $formGen->genFormHtml();
$html->data['uid'] = $attributes[$store->userIdAttr][0];
$html->data['customNavigation'] = $customNavigation;
$html->show();

?>
