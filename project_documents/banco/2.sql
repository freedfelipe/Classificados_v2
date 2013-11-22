ALTER TABLE `sys_user` ADD `fb_id` INT( 50 ) NOT NULL AFTER `is_admin` ,
ADD `fb_access_token` INT( 250 ) NOT NULL AFTER `fb_id` ;