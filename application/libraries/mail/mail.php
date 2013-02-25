<?php

/*

$this->load->library('mail');

$this->mail->setFrom('Дима', 'd.bourim@gmail.com');
$this->mail->setSubject('Новое письмо от меня же!');
$this->mail->setText('Тестовое письмо!' . time());
$this->mail->setHTML('Тестовое письмо! <b>HTML работает</b>' . time());

$result = $this->mail->send('ozx@yandex.ru');

*/

require_once dirname(__FILE__) . '/Rmail' . EXT;

class Mail extends Rmail
{
	//--------------------------------------------------------------------------
	
	public function __construct()
	{
		parent::__construct();
		
		$this->setTextCharset(sys::$config->mail->charset);
		$this->setHTMLCharset(sys::$config->mail->charset);
		$this->setHeadCharset(sys::$config->mail->charset);
	}
	
	//--------------------------------------------------------------------------
	
	public function setSubject($subject)
	{
	    parent::setSubject(str_replace(' ', '_', $subject));
	}
	
	//--------------------------------------------------------------------------
	
	public function setFrom($from, $email = NULL)
	{
		if ($email) $from = "$from <$email>";
		
	    parent::setFrom($from);
	}
	
	//--------------------------------------------------------------------------
	
	public function send($recipients, $type = 'mail')
	{
		if ( ! is_array($recipients)) $recipients = array($recipients);
		
		return parent::send($recipients, $type);
	}
	
	//--------------------------------------------------------------------------
	
	public function mail_to_user($uid, $template, $data = array())
	{
		sys::$lib->db->where('users.id=?', $uid);
		$data['user'] = sys::$ext->user->model->get_row();
		
		$message = sys::$lib->load->template("mail/$template", $data);
		$email   = $data['user']->email;
		
//		$this->mail->setText(strip_tags($message));
		$this->setHTML($message);

		return $this->send(FF_DEVMODE ? sys::$config->mail->debug_email : $email);
	}
	
	//--------------------------------------------------------------------------
}