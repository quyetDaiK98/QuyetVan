create database test_app;
create table user(
id int(11) not null auto_increment primary key,
user_name varchar(100),
pass_word varchar(256)
);
create table dificult_level(
id int(11) not null auto_increment primary key,
name varchar(100),
decription varchar(256)
);
create table subject(
id int(11) not null auto_increment primary key,
name varchar(100),
mass int
);
create table theme(
id int(11) not null auto_increment primary key,
subject_id int(11),
name varchar(100),
description varchar(256),
foreign key subject_if references subject(id)
);
create table question(
id int(11) not null auto_increment primary key,
content varchar(4000),
correct_answer int,
subject_id int(11),
theme_id int(11),
foreign key subject_id references subject(id),
foreign key theme_id references theme(id)
);
create table exam(
id int(11) not null auto_increment primary key,
subject_id int(11),
code varchar(11),
foreign key subject_id references subject(id)
);
create table question_of_exam(
id int(11) not null auto_increment primary key,
questin_id int(11),
exam_id int(11),
foreign key question_id references question(id),
foreign key exam_id references exam(id),
primary key (question_id,exam_id)
)
