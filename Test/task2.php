<?php
// Оптимизация запроса за счет сокращения подзапросов и использования имен столбцов
$sql = "
    SELECT name,desc,date,value FROM data,link,info WHERE (link.info_id,link.data_id) = (info.id,data.id)
";
// Оптимизация таблиц посредсвом добавления внешнего ключа
$table1 = "
CREATE TABLE `info` (
    `id` int(11) NOT NULL auto_increment,
    `name` varchar(255) default NULL,
    `desc` text default NULL,
    `data_id` int(11) NOT NULL,
    FOREIGN KEY (data_id) REFERENCES data(id), // внешний ключ
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;
";
$table2 = "
CREATE TABLE `data` (
    `id` int(11) NOT NULL auto_increment,
    `date` date default NULL,
    `value` INT(11) default NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;
";