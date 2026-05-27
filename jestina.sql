create table jestina(
    id varchar(15) not null,
    pass varchar(15) not null,
    name varchar(15) not null,
    addr varchar(80) not null,
    hp varchar(20) not null,
    email varchar(50),
    primary key(id)
)engine=innoDB charset=utf8;