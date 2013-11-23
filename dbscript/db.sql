
drop table if exists adminUser;

/*==============================================================*/
/* Table: adminUser                                             */
/*==============================================================*/
create table adminUser
(
   id                   bigint not null auto_increment,
   realName             varchar(500),
   loginName            varchar(500),
   password             varchar(500),
   primary key (id)
);