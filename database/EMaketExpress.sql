create database EMaketXpress;
use EmaketXpress;
insert into users (username, email, password, active, role, avatar) value
 ('Admin', 'huydq.22it@vku.udn.vn','$2a$12$QJwEgTfFsn86hK1bIC62U.xDh0BdRP1x/t.oVf8rvAWfyFSaiXJ7C', 1, 1,'https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-1/347220650_194442323507849_9136892268408847233_n.jpg?stp=dst-jpg_s320x320&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=7mYhHZtEso0AX-7pXRe&_nc_ht=scontent.fdad1-3.fna&oh=00_AfD5CbwiaxhXPurz10H3zVGkybIePjaOaTYTLPj-So2PhQ&oe=6544F236');
insert into users (username, email, password, active, role, avatar) value
 ('Admin', 'quanlv.22it@vku.udn.vn','$2a$12$3JBfWkSFc2GP04.tKNnCG.Q.m8cKI0/ke3cVDjGTzW8/cr4AdyPua', 1, 1,'https://scontent.fdad1-2.fna.fbcdn.net/v/t39.30808-6/306309861_793441178669656_7390791038038886716_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=5f2048&_nc_ohc=xIS8TaGzhGYAX_yrgvK&_nc_ht=scontent.fdad1-2.fna&oh=00_AfAducSNqrba1KMHxoShxbn-z46doaRW6gK6n2hcswk8dQ&oe=6545A072');

create table Categories(
CategoryID int auto_increment primary key,
Name nvarchar(150),
Description nvarchar(255),
ParentId int
);