CREATE TABLE `entity` (
    `entity_id` int(10) unsigned auto_increment,
    `entity_type_id` int(10) unsigned not null,
    `type_id` int(10) unsigned not null,
    PRIMARY KEY (`entity_id`)
) CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
