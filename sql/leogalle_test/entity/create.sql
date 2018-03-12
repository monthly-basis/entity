CREATE TABLE `entity` (
    `entity_id` int(10) unsigned auto_increment,
    `entity_type_id` int(10) unsigned not null,
    `type_id` int(10) unsigned not null,
    `name` varchar(255) not null,
    PRIMARY KEY (`entity_id`)
) charset=utf8;
