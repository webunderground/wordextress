CREATE TABLE `settings` (
  `id` int(11) NOT NULL auto_increment,
  `title` varchar(100) default NULL,
  `description` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
);
--
-- Volcar la base de datos para la tabla `tabla_demo`
--

INSERT INTO `settings` (`id`, `title`, `description`) VALUES
(1, 'wordextress', 'Para gente frenetica');