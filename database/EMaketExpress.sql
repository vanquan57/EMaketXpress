create database EMaketXpress;
use EmaketXpress;

INSERT INTO `users` VALUES (1,'Admin','huydq.22it@vku.udn.vn','$2a$12$QJwEgTfFsn86hK1bIC62U.xDh0BdRP1x/t.oVf8rvAWfyFSaiXJ7C',1,1,NULL,NULL,NULL,NULL,NULL,'https://scontent.fdad1-3.fna.fbcdn.net/v/t39.30808-1/347220650_194442323507849_9136892268408847233_n.jpg?stp=dst-jpg_s320x320&_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_ohc=7mYhHZtEso0AX-7pXRe&_nc_ht=scontent.fdad1-3.fna&oh=00_AfD5CbwiaxhXPurz10H3zVGkybIePjaOaTYTLPj-So2PhQ&oe=6544F236',NULL,NULL,NULL);
INSERT INTO `users` VALUES (2,'Admin','adminquan@gmail.com','$2y$10$C3oU0V1TzJiBCT207ggUm.JofFOuyQOWCW97vve0ZILO7rHWi8i7m',1,1,NULL,NULL,NULL,NULL,NULL,'/storage/uploads/Hình nền.jpg',NULL,NULL,'2023-10-31 03:16:03');
CREATE TABLE users (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    email VARCHAR(255) NULL,
    password VARCHAR(255) NULL,
    active INT NULL,
    role INT NOT NULL,
    provider VARCHAR(255) NULL,
    provider_id VARCHAR(255) NULL,
    access_token TEXT NULL,
    refresh_token TEXT NULL,
    access_token_expires_at TIMESTAMP NULL,
    avatar TEXT NULL,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
CREATE TABLE sliders (
  id bigint unsigned NOT NULL AUTO_INCREMENT,
  name varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  url varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  thumb varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  sort_by int NOT NULL,
  active int NOT NULL,
  created_at timestamp NULL DEFAULT NULL,
  updated_at timestamp NULL DEFAULT NULL,
  PRIMARY KEY (id)
);
INSERT INTO sliders VALUES (19,'Black friday','http://127.0.0.1:8000/','slider_1.webp',1,1,NULL,NULL),(20,'Nhà giáo Việt Nam','http://127.0.0.1:8000/','slider_2.webp',2,1,NULL,NULL),(21,'Deal Độc Quyền','http://127.0.0.1:8000/','slider_3.webp',3,1,NULL,NULL),(22,'Nhà Giáo Việt Nam','http://127.0.0.1:8000/emaketxpress-yeu','specialtyevent_1.webp',1,1,NULL,NULL),(23,'Áo Polo','http://127.0.0.1:8000/emaketxpress-yeu','specialtyevent_2.webp',2,1,NULL,NULL),(24,'Áo Sơ Mi','http://127.0.0.1:8000/emaketxpress-yeu','specialtyevent_3.webp',3,1,NULL,NULL),(25,'Váy Đầm Thanh Lịch','http://127.0.0.1:8000/emaketxpress-yeu','specialtyevent_4.webp',4,1,NULL,NULL),(26,'Sale','http://127.0.0.1:8000/coupon-xin','black_friday_1.webp',1,1,NULL,NULL),(27,'Sale1','http://127.0.0.1:8000/coupon-xin','black_friday_1_1.webp',2,1,NULL,NULL),(28,'Sự kiện Polo','http://127.0.0.1:8000/coupon-xin','black_friday_2.webp',3,1,NULL,NULL),(29,'Đón Gió Đông','http://127.0.0.1:8000/coupon-xin','black_friday_3.webp',4,1,NULL,NULL),(30,'Hàng Mới Về','http://127.0.0.1:8000/coupon-xin','black_friday_4.webp',5,1,NULL,NULL),(31,'Đồng phục','http://127.0.0.1:8000/dong-phuc','banner_dp.webp',1,1,NULL,NULL);
CREATE TABLE Categories(
CategoryID int auto_increment primary key,
Name nvarchar(150),
Description nvarchar(255),
ParentId int,
Active int,
Image text,
Slug varchar(255),
CategoryProductAvatar text
);


CREATE TABLE product (
  ProductID int NOT NULL AUTO_INCREMENT,
  Name varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  Price double DEFAULT NULL,
  Sale int DEFAULT NULL,
  Price_sale double DEFAULT NULL,
  Delete_product int DEFAULT NULL,
  Slug varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  CategoryID int DEFAULT NULL,
  PRIMARY KEY (ProductID),
  KEY CategoryID (CategoryID),
  CONSTRAINT product_ibfk_1 FOREIGN KEY (CategoryID) REFERENCES categories (CategoryID) ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO Product VALUES (1,'Áo Polo Thể Thao Nam Airy Cool Basic',349000,1,314100,1,'ao-polo-the-thao-nam-airy-cool-basic',4),(2,'Áo Thun Thể Thao Nam Training',299000,1,149500,1,'ao-thun-the-thao-nam-training',4),(3,'Áo Sơ Mi Nữ Dài Tay Cơ Bản Nano',499000,1,249500,1,'ao-so-mi-nu-dai-tay-co-ban-nano',3),(4,'Áo Polo Nữ Sorona Thêu Hình Gấu Trúc',349000,1,244300,1,'ao-polo-nu-sorona-theu-hinh-gau-truc',3),(5,'Áo Polo Trẻ Em Cafe Tổ Ong Basic',199000,1,179100,1,'ao-polo-tre-em-cafe-to-ong-basic',5),(6,'Quần Jeans Nữ Dáng Suông Túi Vuông',539000,1,485100,1,'quan-jeans-nu-dang-suong-tui-vuong',5),(7,'Quần Jeans Nữ Ống Đứng Coolmax Co Giãn 4 Chiều',499000,1,449100,1,'quan-jeans-nu-ong-dung-coolmax-co-gian-4-chieu',3),(8,'Áo Phao Nữ 3S Siêu Nhẹ Tay Raglan',599000,1,499000,1,'ao-phao-nu-3s-sieu-nhe-tay-raglan',3),(9,'Áo Phao Nam 3S Siêu Nhẹ Tay Raglan',599000,1,499000,1,'ao-phao-nam-3s-sieu-nhe-tay-raglan',4),(10,'Áo Khoác Gió Nữ 3C Plus Năng Động',429000,1,429000,1,'ao-khoac-gio-nu-3c-plus-nang-dong',3),(11,'Áo Khoác Gió Thông Minh Nam Trượt Nước',599000,1,529000,1,'ao-khoac-gio-thong-minh-nam-truot-nuoc',4),(12,'Áo Khoác Phao Nữ Siêu Nhẹ Siêu Ấm',599000,1,499000,1,'ao-khoac-phao-nu-sieu-nhe-sieu-am',3),(13,'Áo Phao Nam Có Mũ Siêu Nhẹ Siêu Ấm',599000,1,499000,1,'ao-phao-nam-co-mu-sieu-nhe-sieu-am',4),(14,'Áo Phao Trẻ Em 3S Siêu Nhẹ Tay Raglan',469000,1,369000,1,'ao-phao-tre-em-3s-sieu-nhe-tay-raglan',5),(15,'Áo Polo Nam Airycool Thoáng Mát Phối Bo',299000,1,209300,1,'ao-polo-nam-airycool-thoang-mat-phoi-bo',4),(16,'Áo Polo Nam Airycool Thoáng Mát Phối Bo',299000,NULL,NULL,0,'ao-polo-nam-airycool-thoang-mat-phoi-bo',4),(17,'Áo Polo Nam Airycool Phối Cổ Thoáng Mát',329000,1,296100,1,'ao-polo-nam-airycool-phoi-co-thoang-mat',4),(18,'Áo Polo Nam Vải Cafe Dệt Tổ Ong Thêu Hình Gấu',349000,1,314100,1,'ao-polo-nam-vai-cafe-det-to-ong-theu-hinh-gau',4),(19,'Áo Polo Nam Mắt Chim Phối Vai Hoạ Tiết Monogram',369000,1,258300,1,'ao-polo-nam-mat-chim-phoi-vai-hoa-tiet-monogram',4),(20,'Polo Nam Bạc Hà Pha Đường Kẻ',369000,1,258300,1,'polo-nam-bac-ha-pha-duong-ke',4),(21,'Áo Polo Thể Thao Nữ Airycool In Họa Tiết Thân Trước',349000,1,244300,1,'ao-polo-the-thao-nu-airycool-in-hoa-tiet-than-truoc',3),(22,'Áo Polo Thể Thao Nữ Phối Màu',349000,1,174000,1,'ao-polo-the-thao-nu-phoi-mau',3),(23,'Áo Polo Nữ Cafe Phối Tay Trẻ Trung',329000,1,230300,1,'ao-polo-nu-cafe-phoi-tay-tre-trung',3),(24,'Áo Polo Nữ Cafe Bo Kẻ Kháng Khuẩn Khử Mùi',329000,1,269100,1,'ao-polo-nu-cafe-bo-ke-khang-khuan-khu-mui',3),(25,'Áo Sơ Mi Nam Trắng Dài Tay Nano Kháng Khuẩn Chống Nhăn',499000,1,449000,1,'ao-so-mi-nam-trang-dai-tay-nano-khang-khuan-chong-nhan',4),(26,'Áo Sơ Mi Nam Tay Ngắn Nano Chống Nhăn Khử Mùi',459000,1,413100,1,'ao-so-mi-nam-tay-ngan-nano-chong-nhan-khu-mui',4),(27,'Áo Sơ Mi Nam Dài Tay Vải Cafe',499000,1,449100,1,'ao-so-mi-nam-dai-tay-vai-cafe',4),(28,'Áo Sơ Mi Nam Sợi Tre Cộc Tay Quốc Dân',359000,1,310300,1,'ao-so-mi-nam-soi-tre-coc-tay-quoc-dan',4),(29,'Áo Sơ Mi Nữ Tay Ngắn Nano Giữ Form Ít Nhăn',459000,1,413100,1,'ao-so-mi-nu-tay-ngan-nano-giu-form-it-nhan',3),(30,'Áo Sơ Mi Nữ Cổ Đức Nano Kháng Khuẩn Khử Mùi',499000,1,449100,1,'ao-so-mi-nu-co-duc-nano-khang-khuan-khu-mui',3),(31,'Áo Sơ Mi Nữ Tay Ngắn Nano Dáng Suông',399000,1,359100,1,'ao-so-mi-nu-tay-ngan-nano-dang-suong',3),(32,'Áo Sơ Mi Cộc Tay Nữ Vai Chờm Cổ Đức',399000,1,359100,1,'ao-so-mi-coc-tay-nu-vai-chom-co-duc',3),(33,'Váy Nữ Tay Dài Phối Kẻ',699000,1,602000,1,'vay-nu-tay-dai-phoi-ke',3),(34,'Váy Chữ A Phối Nơ Ngực Thanh Lịch',599000,1,299000,1,'vay-chu-a-phoi-no-nguc-thanh-lich',3),(35,'Váy Polo Nữ Sorona Pique Thêu Chữ Life',399000,1,359000,1,'vay-polo-nu-sorona-pique-theu-chu-life',3),(36,'Set Váy 2 Dây Mix Áo Cardigan',699000,1,334500,1,'set-vay-2-day-mix-ao-cardigan',3),(37,'Quần Âu Nam Slim Nano Thêu Yody',559000,1,503100,1,'quan-au-nam-slim-nano-theu-yody',4),(38,'Quần Âu Nam Nano Melange Slim Fit',599000,1,539100,1,'quan-au-nam-nano-melange-slim-fit',4),(39,'Quần Âu Nam Slim Lé Sườn',549000,1,494100,1,'quan-au-nam-slim-le-suon',4),(40,'Quần Jean Nam Cafe Thân Thiện Với Môi Trường 539100',599000,NULL,NULL,1,'quan-jean-nam-cafe-than-thien-voi-moi-truong-539100',4),(41,'Quần Jeans Nam Lycra Co Giãn Siêu Tốt 468300',669000,NULL,NULL,1,'quan-jeans-nam-lycra-co-gian-sieu-tot-468300',4),(42,'Quần Jeans Nam Ống Suông Lưng Thun 349300',49900,NULL,NULL,1,'quan-jeans-nam-ong-suong-lung-thun-349300',4),(43,'Quần Jeans Nữ Skinny Coolmax Tôn Dáng 377300',5399000,NULL,NULL,1,'quan-jeans-nu-skinny-coolmax-ton-dang-377300',3),(44,'Quần Jeans Nữ Dáng Suông Túi Vuông 485100',539000,NULL,NULL,1,'quan-jeans-nu-dang-suong-tui-vuong-485100',3),(45,'Quần Jeans Nữ Ống Đứng Coolmax Co Giãn 4 Chiều 449100',539000,NULL,NULL,1,'quan-jeans-nu-ong-dung-coolmax-co-gian-4-chieu-449100',3);
CREATE TABLE Promotions (
  PromotionID INT AUTO_INCREMENT PRIMARY KEY,
  PromotionName NVARCHAR(255),
  PromotionCode NVARCHAR(20),
  DiscountAmount DOUBLE,
  DiscountType INT,
  StartDate DATE,
  EndDate DATE,
  Active INT,
  CategoryID INT,
FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Product_details (
  Product_detailsID INT AUTO_INCREMENT PRIMARY KEY,
  Quantity_sold  INT,
  Available_quantity tinyint,
  Description  TEXT,
  Color VARCHAR(255),
  Size VARCHAR(255),
  ProductID INT,
  FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON UPDATE CASCADE ON DELETE CASCADE
);
alter table Product_details modify Description text;
CREATE TABLE Product_img (
  Product_imgID INT AUTO_INCREMENT PRIMARY KEY,
  Img VARCHAR(255),
  ParentId int,
  ProductID INT,
  FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON UPDATE CASCADE ON DELETE CASCADE
);
 INSERT INTO product_img VALUES (1,'sam5007-nav-6.webp',0,1),(2,'sam5007-ghi-4.webp',0,1),(3,'sam5007-trt-5.webp',0,1),(4,'stm6073-xdu-3.webp',0,2),(5,'stm6073-xng-3.webp',0,2),(6,'stm6073-gre-1.webp',0,2),(7,'smn6016-kla-ao-so-mi-nu-3.webp',0,3),(8,'smn6016-kca-ao-so-mi-nu-2.webp',0,3),(9,'smn6016-kdm-ao-so-mi-nu-3.webp',0,3),(10,'ao-polo-nu-apn6152-tra-4.webp',0,4),(11,'ao-polo-nu-apn6152-bee-3.webp',0,4),(12,'ao-polo-nu-apn6152-tim-4.webp',0,4),(13,'apk6128-vag-qsk6013-reu-18.webp',0,5),(14,'apk6128-xla-10.webp',0,5),(15,'apk6128-ddo-10.webp',0,5),(16,'qjk5008-xah-11.webp',0,6),(17,'qjn6034-xnh-6.webp',0,6),(18,'qjn6034-xdm-5.webp',0,6),(19,'qjn5078-xdm-2.webp',0,7),(20,'quan-jeans-nu-qjn5078-xat-9-yodyvn.webp',0,7),(21,'quan-jeans-nu-qjn5078-xas-7-yodyvn.webp',0,7),(22,'ao-khoac-nu-phn6014-xbi-6.webp',0,8),(23,'ao-khoac-nu-phn6014-hdd-7.webp',0,8),(24,'ao-khoac-nu-phn6014-dod-2.webp',0,8),(25,'ao-phao-nam-3s-yody-phm6005-tit-20.webp',0,9),(26,'ao-phao-nam-3s-yody-phm6005-den-5.webp',0,9),(27,'ao-phao-nam-yody-phm6005-xbi-qkm6005-bee-1-3.webp',0,9),(28,'akn5040-xat-5-b38dc45c-8578-4373-9b65-8a4778adccb2.webp',0,10),(29,'akn5040-hog-atn5100-tra-4.webp',0,10),(30,'akn5040-cam-4-1c797839-d544-45ec-9c47-d5bcfd0bfa70.webp',0,10),(31,'akm5041-nav-7.webp',0,11),(32,'akm5041-den-5.webp',0,11),(33,'akm5041-ghs-5.webp',0,11),(34,'phn5000-den-5.webp',0,12),(35,'phn5000-tit-6-e6ad4b46-9fc9-4b1c-96cb-e4eb7a48c5a1.webp',0,12),(36,'phn5000-hod-3.webp',0,12),(37,'phm5001-xtn-6.webp',0,13),(38,'phm5001-tit-3.webp',0,13),(39,'phm5001-den-4.webp',0,13),(40,'phk6002-cdt-4.webp',0,14),(41,'phk6002-xbi-29.webp',0,14),(42,'phk6002-den-6.webp',0,14),(43,'ao-polo-nam-apm5351-vag-5-yodyvn.webp',0,15),(44,'ao-polo-nam-apm5351-ddo-5-yodyvn.webp',0,15),(45,'ao-polo-nam-apm5351-tr1-20230516-002-yody.webp',0,15),(46,'ao-polo-nam-apm5351-vag-5-yodyvn.webp',0,16),(47,'ao-polo-nam-apm5351-ddo-5-yodyvn.webp',0,16),(48,'ao-polo-nam-apm5351-tr1-20230516-002-yody.webp',0,16),(49,'ao-polo-apm6235-den-9-yodyvn.webp',0,17),(50,'ao-polo-apm6235-tra-7-yodyvn.webp',0,17),(51,'ao-polo-apm6235-xbi-5-yodyvn.webp',0,17),(52,'ao-polo-nam-apm6167-vag-11.webp',0,18),(53,'ao-polo-nam-apm6167-xlo-2-ea98a652-7843-4bb7-88ed-cb97cb087e4e.webp',0,18),(54,'ao-polo-nam-apm6167-bee-3.webp',0,18),(55,'apm6037-tra-5.webp',0,19),(56,'apm6037-nav-9.webp',0,19),(57,'apm6037-xl1-7.webp',0,19),(58,'ao-polo-nam-bac-ha-apm6295-tra-04-yody.webp',0,20),(59,'apm6295-xlo-ao-polo-nam-yody.webp',0,20),(60,'ao-polo-nam-bac-ha-apm6295-xre-03-yody.webp',0,20),(61,'ao-polo-nu-the-thao-san6030-tra-4-yody.webp',0,21),(62,'ao-polo-nu-the-thao-san6030-xlu-7-yody.webp',0,21),(63,'ao-polo-nu-the-thao-san6030-cba-sjn4004-xnh-4-yody.webp',0,21),(64,'polo-the-thao-nu-phoi-mau-san6046-tim-4.webp',0,22),(65,'polo-the-thao-nu-phoi-mau-san6046-hog-2.webp',0,22),(66,'polo-the-thao-nu-phoi-mau-san6046-nav-6.webp',0,22),(67,'ao-polo-nu-apn6044-xpt-3-yodyvn.webp',0,23),(68,'ao-polo-nu-apn6044-tbl-cjn3030-dba-12-yodyvn.webp',0,23),(69,'ao-polo-nu-apn6044-npt-cvn5148-tra-10-yodyvn.webp',0,23),(70,'apn3890-gre-4.webp',0,24),(71,'apn3890-nav-sjn4002-xnh-4.webp',0,24),(72,'ao-polo-nuapn3890-den-1-yody-vn.webp',0,24),(73,'smm4073-tit-5-71cfb015-53a4-4258-92ca-bc2e2be1bf5e.webp',0,25),(74,'smm4073-xnh-4-5f31f3af-196e-474f-80eb-ce0b4617d518.webp',0,25),(75,'smm4073-tra-5.webp',0,25),(76,'scm4033-xdm-5.webp',0,26),(77,'scm4033-tit-3.webp',0,26),(78,'scm4033-tra-qam4009-den-4.webp',0,26),(79,'smm6017-tra-22-ao-so-mi-nam-yodyvn-4.webp',0,27),(80,'ao-so-mi-nam-smm6017-ghi-8-yody.webp',0,27),(81,'ao-so-mi-nam-smm6017-tit-8-yody.webp',0,27),(82,'ao-so-mi-nam-coc-tay-scm6071-den-qam6049-ghi-2-of-12-yody.webp',0,28),(83,'scm6071-tra-6-ao-so-mi-nam-yody.webp',0,28),(84,'ao-so-mi-nam-coc-tay-scm6071-tit-qam6049-den-13-yody.webp',0,28),(85,'scn3000-tit.webp',0,29),(86,'scn3000-tra-1-59ee6dee-872a-4f52-bf81-43fbd4893836.webp',0,29),(87,'scn3000-xnh-4.webp',0,29),(88,'smn3007-tra-5.webp',0,30),(89,'smn3007-xan-qjn3072-tra-13-ao-so-mi-nu-yody.webp',0,30),(90,'smn3007-xah-ao-so-mi-nu-yody-2-7307e529-0b4c-4b3b-a8f9-d1306b835d2a.webp',0,30),(91,'scn5164-tra4.webp',0,31),(92,'scn5164-bee6.webp',0,31),(93,'scn5164-reu5.webp',0,31),(94,'scn6008-xla-2.webp',0,32),(95,'scn6008-hog-3.webp',0,32),(96,'scn6008-tra-2.webp',0,32),(97,'vdn5002-kdt-6.webp',0,33),(98,'vdn5002-kna-6.webp',0,33),(99,'vdn5002-kbe-7.webp',0,33),(100,'vay-dam-nu-van6150-tra-4-yody-vn.webp',0,34),(101,'van5134-den-5.webp',0,34),(102,'van5134-hog-5.webp',0,34),(103,'vpn5004-ddo-6-27a427e7-c295-4de2-977a-37549114b0b8.webp',0,35),(104,'vpn5004-nav-1-80c258bb-c5d4-4d8a-a847-2f45e722a4d6.webp',0,35),(105,'vpn5004-xlo-5-e018eda9-5099-45e4-8ce9-c29bcf501391.webp',0,35),(106,'aet-do-thoi-trang-vay-hoa-ao-cardigan-set6016-hdn-13-yody.webp',0,36),(107,'aet-do-thoi-trang-vay-hoa-ao-cardigan-set6016-hnx-13-yody.webp',0,36),(108,'set6016-hnh-8-set-nu-dam-2-day-mix-cardigan-yody.webp',0,36),(109,'qam6029-gsa-11.webp',0,37),(110,'qam6029-tit-6.webp',0,37),(111,'qam6029-den-3.webp',0,37),(112,'qam6053-ghi-2.webp',0,38),(113,'qam6053-den-5.webp',0,38),(114,'qam6053-bee-24.webp',0,38),(115,'qam5023-xad-quan-au-nam-yody-2.webp',0,39),(116,'qam5023-den-3.webp',0,39),(117,'qam5023-tit-3.webp',0,39),(118,'qjm6033-xah-quan-jean-nam-yodyvn-2.webp',0,40),(119,'qjm6033-xdm-22-quan-jean-nam-yodyvn-1.webp',0,40),(120,'qjm5091-xdm-1.webp',0,41),(121,'qjm5091-xah-5.webp',0,41),(122,'qjm5001-xdm1-yody-vn.webp',0,42),(123,'qjm5005-xdm-15.webp',0,42),(124,'qjn5082-xat-5.webp',0,43),(125,'qjn5082-xdm-3.webp',0,43),(126,'qjn5082-xas-4.webp',0,43),(127,'qjn6034-xdm-5.webp',0,44),(128,'qjn6034-xnh-6.webp',0,44),(129,'qjn5078-xdm-2.webp',0,45),(130,'quan-jeans-nu-qjn5078-xat-9-yodyvn.webp',0,45),(131,'quan-jeans-nu-qjn5078-xas-7-yodyvn.webp',0,45);
CREATE TABLE Shopping_cart (
  Shopping_cartID INT AUTO_INCREMENT PRIMARY KEY,
  IdUser BIGINT,
  FOREIGN KEY (IdUser) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE
);



-- nhiều nhiều tạo ra 1 cái mới
CREATE TABLE Product_and_cart (
  Product_cartID INT AUTO_INCREMENT PRIMARY KEY,
  Shopping_cartID INT,
  ProductID INT ,
  FOREIGN KEY (Shopping_cartID) REFERENCES Shopping_cart(Shopping_cartID) ON UPDATE CASCADE,
  FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Purchase_order(
  Purchase_order_ID INT AUTO_INCREMENT PRIMARY KEY,
  Name VARCHAR(255),
  Address VARCHAR(255),
  Time DATETIME,
  Phone_number VARCHAR(10),
  DeliveryMethod INT,
  ID_account BIGINT,
  FOREIGN KEY (ID_account) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Payments (
  PaymentID INT AUTO_INCREMENT PRIMARY KEY,
  PaymentDate DATETIME,
  PaymentMethod INT,
  Status INT,
  CardNumber VARCHAR(16), -- Số thẻ tín dụng
  Purchase_order_ID INT,
  FOREIGN KEY (Purchase_order_ID) REFERENCES Purchase_order(Purchase_order_ID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Order_details (
  Order_detailsID INT AUTO_INCREMENT PRIMARY KEY,
  Quantity  tinyint,
  Price  double,
  Purchase_order_ID INT,
  ProductID INT,
  FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON UPDATE CASCADE,
  FOREIGN KEY (Purchase_order_ID) REFERENCES Purchase_order(Purchase_order_ID) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Comments (
  ID_bl INT AUTO_INCREMENT PRIMARY KEY,
  Content TEXT,
  Star TINYINT,
  Time DATETIME,
  ProductID INT,
  ID_account BIGINT,
  FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON UPDATE CASCADE ON DELETE CASCADE,
  FOREIGN KEY (ID_account) REFERENCES Users(id) ON UPDATE CASCADE ON DELETE CASCADE
);
