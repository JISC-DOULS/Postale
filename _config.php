<?php

$dir = basename(rtrim(dirname(__FILE__),'/'));
// Check directory
if($dir != "buddy_message") {
	user_error(sprintf(
		_t('Messages.WRONGDIRECTORY','The Buddy Message module must be in a directory named "buddy_message" (currently "%s")'),
		$dir
	), E_USER_ERROR);
}


// Check dependencies
if(!class_exists("DataObjectManager")) {
	user_error(_t('Messages.DATAOBJECTMANAGER','The Buddy Message module requires DataObjectManager'),E_USER_ERROR);
}

DataObject::add_extension('Member','MessagesMember');

MessagesPage::set_url('messages');
