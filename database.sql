create database msgdb;

use msgdb;


CREATE TABLE `TMessage` (
  `id` int(11) NOT NULL auto_increment,
  `sender` varchar(40) NOT NULL,
  `msg` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
);


select * from `TMessage`