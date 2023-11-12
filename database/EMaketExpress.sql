create database EMaketXpress;
use EmaketXpress;

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

CREATE TABLE Categories(
CategoryID int auto_increment primary key,
Name nvarchar(150),
Description nvarchar(255),
ParentId int,
Active int,
Image text
);

CREATE TABLE Product(
  ProductID INT AUTO_INCREMENT PRIMARY KEY,
  Name NVARCHAR(40),
  Price  double,
  Price_sale  double,
  CategoryID INT,
  FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID) ON UPDATE CASCADE ON DELETE CASCADE
  );
CREATE TABLE Promotions (
  PromotionID INT AUTO_INCREMENT PRIMARY KEY,
  PromotionCode VARCHAR(20),
  DiscountAmount DOUBLE,
  StartDate DATE,
  EndDate DATE,
  CategoryID INT,
FOREIGN KEY (CategoryID) REFERENCES Categories(CategoryID) ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE Product_details (
  Product_detailsID INT AUTO_INCREMENT PRIMARY KEY,
  Quantity_sold  INT,
  Available_quantity tinyint,
  Description  VARCHAR(255),
  Color VARCHAR(255),
  Size VARCHAR(255),
  ProductID INT,
  FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON UPDATE CASCADE ON DELETE CASCADE
);
CREATE TABLE Product_img (
  Product_imgID INT AUTO_INCREMENT PRIMARY KEY,
  Img VARCHAR(255),
  ProductID INT,
  FOREIGN KEY (ProductID) REFERENCES Product(ProductID) ON UPDATE CASCADE ON DELETE CASCADE
);
 
CREATE TABLE Shopping_cart (
  Shopping_cartID INT AUTO_INCREMENT PRIMARY KEY,
  ID_account BIGINT,
  FOREIGN KEY (ID_account) REFERENCES users(id) ON UPDATE CASCADE ON DELETE CASCADE
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
