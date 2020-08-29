-- 新增
INSERT INTO `address_book` 
(`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) 
-- 值務必用單引號
-- primary key：NULL，會自動邊流水號
VALUES (NULL, '李小明', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()); 

-- 新增
-- 用逗號隔開每筆資料
INSERT INTO `address_book` 
(`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES 
(NULL, '李小明3', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明4', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明5', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明6', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明7', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明8', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明9', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明10', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明11', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW()),
(NULL, '李小明12', 'ming@test.com', '0900000000', '2020-08-04', '台北市', NOW())

-- 修改
UPDATE `address_book` SET `email` = 'ming@test1.com' WHERE `address_book`.`sid` = 3
-- `address_book`.可省略
-- 沒有下WHERE的話，所有東西都會改