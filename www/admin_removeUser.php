<?php

$config = SimpleSAML_Configuration::getInstance();
$uregconf = SimpleSAML_Configuration::getConfig('module_userregistration.php');
$viewAttr = $uregconf->getArray('attributes');
$formFields = $uregconf->getArray('formFields');
$eppnRealm = $uregconf->getString('user.realm');
$customNavigation = $uregconf->getBoolean('custom.navigation', TRUE);

/* Get a reference to our authentication source. */
$asId = $uregconf->getString('admin.auth');
$as = new SimpleSAML_Auth_Simple($asId);
$as->requireAuth();

$systemName = array('%SNAME%' => $uregconf->getString('system.name') );
$store = sspmod_userregistration_Storage_UserCatalogue::instantiateStorage();

$user = isset($_GET['user']) ? $_GET['user'] : '';
$attr = isset($_GET['attr']) ? $_GET['attr'] : '';
$pattern = isset($_GET['pattern']) ? $_GET['pattern'] : '';

if (empty($user)) {
    throw new sspmod_userregistration_Error_UserException(
        'void_value',
        'user',
        '',
        'Missing parameter user'
    );
} elseif (!$store->isRegistered($store->userIdAttr, $user)) {
    throw new sspmod_userregistration_Error_UserException(
        'email_not_found',
        $user,
        '',
        'User ' . $user . ' is not registered!'
    );
} else {
    $confirm = isset($_GET['confirm']);
    if ($confirm === false) {
        $html = new SimpleSAML_XHTML_Template(
            $config,
            'userregistration:confirm_remove.tpl.php',
            'userregistration:userregistration');
    } else {
        $store->delUser($user);
        $html = new SimpleSAML_XHTML_Template(
            $config,
            'userregistration:user_removed.tpl.php',
            'userregistration:userregistration');
    }

    $html->data['return_url'] = SimpleSAML_Utilities::addURLparameter(
        SimpleSAML_Module::getModuleURL('userregistration/admin_manageUsers.php'),
        array(
            'search' => '',
            'attr' => $attr,
            'pattern' => $pattern,
        )
    );

    $html->data['user'] = $user;
    $html->data['attr'] = $attr;
    $html->data['pattern'] = $pattern;
    $html->data['customNavigation'] = $customNavigation;

    $html->show();
}

