---管理员表格
create table adminUser
(
   id                   bigint not null auto_increment,
   realName             varchar(500),
   loginName            varchar(500),
   password             varchar(500),
   primary key (id)
);
----qq号码表格
create table QInfo
(
   id                   bigint not null auto_increment,
   qq1             varchar(500),
   qq2            varchar(500)
   primary key (id)
);
----新闻表
create table QNews
(
   id         bigint not null auto_increment,
   title      varchar(500),
   sendUser   varchar(500),
   content    longtext,
   createTime DATETIME,
   primary key (id)
);
----联系人表
create table QLinkMan
(
   id         bigint not null auto_increment,
   name      varchar(500),
   mobile   varchar(500),
   address   varchar(500),
   fax   varchar(500),
   telNum   varchar(500),
   postCode   varchar(500),
   primary key (id)
);