
CREATE TABLE `soups` (
   `id` int(11) unsigned not null auto_increment,
   `title` varchar(255),
   `ingredients` varchar(255),
   `email` varchar(255),
   `created_at` timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=5;

INSERT INTO `soups` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES ('1', 'Pumpkin Soup', 'Pumpkins, Grace Cock Soup mix, Yams, Dumplings, Breadfruit', 'mediainformationofficer@gmail.com', '2021-09-15 15:48:16');
INSERT INTO `soups` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES ('2', 'Peas Soup', 'Brown Stewed Peas, Chicken', 'mediainformationofficer@gmail.com', '2021-09-16 12:49:30');
INSERT INTO `soups` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES ('3', 'Ginger Soup', 'Ginger, Peas, Turkey Neck', 'mediainformationofficer@gmail.com', '2021-09-16 12:50:37');
INSERT INTO `soups` (`id`, `title`, `ingredients`, `email`, `created_at`) VALUES ('4', 'Chicken Soup', 'Chicken, Peas', 'mediainformationofficer@gmail.com', '2021-09-16 12:59:33');