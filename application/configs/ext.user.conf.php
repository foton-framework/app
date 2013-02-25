<?php

// Guests
$config->ext_user_permission->rules['group'][0]['allow'] = array('login');
$config->ext_user_permission->rules['group'][0]['deny']  = '*';
$config->ext_user_permission->rules['group'][0]['on_deny'] = '/login/';

// Users
$config->ext_user_permission->rules['group'][2]['deny']  = 'admin';
$config->ext_user_permission->rules['group'][2]['allow'] = '*';

// Admins
$config->ext_user_permission->rules['group'][1]['deny']  = FALSE;
$config->ext_user_permission->rules['group'][1]['allow'] = '*';