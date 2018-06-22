#管理员表
create table `work_admin`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`username` varchar(20) not null default  '' COMMENT '姓名',
`realname` varchar(20) not null default  '' COMMENT '真实姓名',
`logo` varchar(100) not null default '',
`password` varchar(32) not null default '' COMMENT '密码',
`code` varchar(10) not null default ''  COMMENT '密码加密码',
`status` tinyint(1)  not null default 1  COMMENT '状态 1正常 0删除 2禁用 ',
`create_time` int(11)  unsigned not null default 0  COMMENT '创建时间',
`update_time` int(11)  unsigned not null default 0  COMMENT '更新时间',
primary key(`id`),
unique key username(`username`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;
INSERT INTO `work_admin`(username,realname,password,code,status,create_time,update_time) 
VALUES ( 'taopapa', '陈锦涛', 'dd98c5bee8c22aadf8d73ddf3dd7e320', '3643', '1', '1521725536', '1521951698');


#用户表
create table `work_author`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`username` varchar(20) not null default  '' COMMENT '姓名',
`realname` varchar(20) not null default  '' COMMENT '真实姓名',
`logo` varchar(100) not null default '',
`password` varchar(32) not null default '' COMMENT '密码',
`code` varchar(10) not null default ''  COMMENT '密码加密码',
`tel` varchar(20) not null default '' COMMENT '电话',
`email` varchar(20) not null default '' COMMENT '邮箱',
`note` text  null  COMMENT '备注',
`birthday` DATE DEFAULT null,
`sex` tinyint(1)  not null default 2  COMMENT '性别 1女 0男 2未知 ',
`status` tinyint(1)  not null default 1  COMMENT '状态 1正常 0删除 2私有 3禁用 ',
`create_time` int(11)  unsigned not null default 0  COMMENT '创建时间',
`update_time` int(11)  unsigned not null default 0  COMMENT '更新时间',
`delete_time` int(11) UNSIGNED DEFAULT NULL,
primary key(`id`),
unique key username(`username`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;

#类别表
create table `work_category`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`categoryname` varchar(30) not null default  '' COMMENT '类别名',
`status` tinyint(1)  not null default 1  COMMENT '状态 1正常 0删除 2禁用 ',
`create_time` int(11)  unsigned not null default 0  COMMENT '创建时间',
`update_time` int(11)  unsigned not null default 0  COMMENT '更新时间',
`delete_time` int(11) UNSIGNED DEFAULT NULL,
primary key(`id`),
unique key categoryname(`categoryname`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;
INSERT INTO `work_category`(categoryname,status,create_time,update_time) 
VALUES ( '互联网', '1', '1521725536', '1521951698'),( 'IT业界', '1', '1521725511', '1521951611'),( '软件开发', '1', '1521725522', '1521951622'),( '开源', '1', '1521725533', '1521951633'),( '电脑硬件', '1', '1521725544', '1521951644'),( '游戏', '1', '1521725555', '1521951655'),( '创业', '1', '1521725566', '1521951666'),( '手机相关', '1', '1521725577', '1521951677'),( '科学', '1', '1521725588', '1521951688'),( '其他', '1', '1521725599', '1521951699');
#文章表
create table `work_article`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`title` varchar(100) not null default '',
`logo` varchar(100) not null default '',
`author_id` int(11) not null default 0,
`category_id` int(11) not null default 0,
`description` varchar(250) not null default '',
`content` text  null ,
`comment_num` int(11) not null default 0,
`up` int(11) not null default 0,
`status` tinyint(1)  not null default 1,
`create_time` int(11)  unsigned not null default 0,
`update_time` int(11)  unsigned not null default 0,
`delete_time` int(11) UNSIGNED DEFAULT NULL,
primary key(`id`),
key author_id(`author_id`),
key category_id(`category_id`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;


#评论表
create table `work_comment`(
`id` int(11) unsigned not null AUTO_INCREMENT,
`nickname` varchar(60) not null default '',
`content` text  null,
`contact` varchar(50) null,
`article_id` int(11) unsigned not null,
`author_id` int(11) unsigned not null,
`admin_id` int(11) unsigned not null default 0,
`create_time` int(11) unsigned not null default 0,
`update_time` int(11) unsigned not null default 0,
primary key(`id`)
)engine=innodb AUTO_INCREMENT=1 default charset=utf8;
