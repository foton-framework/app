<?php defined('EXT') OR die('No direct script access allowed');


//--------------------------------------------------------------------------
//   System settings
//--------------------------------------------------------------------------

$config->sys->base_url   = '/';
$config->sys->mail_url   = 'http://foton.local';
$config->sys->cache_dir  = ROOT_PATH . 'temp/cache/';
$config->sys->logs_dir   = ROOT_PATH . 'temp/logs/';

$config->sys->load_ext_config = FALSE;


//--------------------------------------------------------------------------
//   Router settings
//--------------------------------------------------------------------------

$config->router->rules = array();
$config->router->default_component = 'home';


//--------------------------------------------------------------------------
//   Uri settings
//--------------------------------------------------------------------------

$config->uri->permitted_chars = 'a-z 0-9~%.:_-';
$config->uri->source          = 'PATH_INFO';



//--------------------------------------------------------------------------
//   Loader settings
//--------------------------------------------------------------------------

$config->load->autoload_enable = TRUE;

$config->load->autoload = array(
	'config'    => array('template'),
	'library'   => array('database', 'template'),
	'model'     => array(),
	'extension' => array('User', 'Admin'),
	'component' => array(),
);



//--------------------------------------------------------------------------
//   Template settings
//--------------------------------------------------------------------------

$config->template->enable           = TRUE;
$config->template->template_folder  = 'default';
$config->template->template_default = 'index';
$config->template->template_404     = 'page_404';



//--------------------------------------------------------------------------
//   Database settings
//--------------------------------------------------------------------------

$config->db = array();
$config->db['active_class'] = 'Database_Active';
$config->db['result_class'] = 'Database_Result';
$config->db['driver']       = 'mysql';
$config->db['active_group'] = FF_DEVMODE ? 'develop' : 'production';

// default group
$config->db['group']['production']['hostname'] = 'localhost';
$config->db['group']['production']['username'] = '';
$config->db['group']['production']['password'] = '';
$config->db['group']['production']['database'] = '';
$config->db['group']['production']['charset']  = 'utf8';

// dev_mode group
$config->db['group']['develop']['hostname'] = '127.0.0.1';
$config->db['group']['develop']['username'] = 'root';
$config->db['group']['develop']['password'] = '123098';
$config->db['group']['develop']['database'] = 'foton_v1';
$config->db['group']['develop']['charset']  = 'utf8';



//--------------------------------------------------------------------------
//   Mail pref
//--------------------------------------------------------------------------
$config->mail->charset     = 'utf-8';
$config->mail->debug_email = 'your_email@foton.local';
//--------------------------------------------------------------------------


//--------------------------------------------------------------------------
//   Pagination
//--------------------------------------------------------------------------
$config->pagination->template = array(
	'prefix'        => '<div class="pagination"><ul>',
	'suffix'        => '</ul></div>',
	'next_link'     => '<li><a href="%s">Next</a></li>',
	'next_link_off' => '<li class="disabled"><a href="%s">Next</a></li>',
	'back_link'     => '<li><a href="%s">Prev</a></li>',
	'back_link_off' => '<li class="disabled"><a href="%s">Prev</a></li>',
	'page_link'     => '<li><a href="%s">%d</a></li>',
	'current_page'  => '<li class="active"><a href="#">%d</a></li>',
	'space_divider' => '<li class="disabled"><a href="#">...</a></li>'
);