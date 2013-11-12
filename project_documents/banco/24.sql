ALTER TABLE `sys_plan` ADD `video` INT( 1 ) NOT NULL AFTER `period` ,
ADD `destaque` INT( 1 ) NOT NULL AFTER `video` ,
ADD `newsletter` INT( 1 ) NOT NULL AFTER `destaque` ,
ADD `icone` VARCHAR( 250 ) NOT NULL AFTER `newsletter` ;