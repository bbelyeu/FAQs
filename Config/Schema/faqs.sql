create table faqs (
    id smallint unsigned not null auto_increment primary key,
    question varchar(255) not null,
    answer text not null,
    created datetime,
    modified datetime
) engine=innodb default charset=utf8;
