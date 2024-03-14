CREATE TABLE categories (
  category_id int NOT NULL AUTO_INCREMENT,
  parent_id int DEFAULT NULL,
  category_name varchar(255) NOT NULL,
  PRIMARY KEY (category id), 
  FOREIGN KEY (parent_id) REFERENCES categories (category_id) ON DELETE SET NULL ON UPDATE CASCADE
)

INSERT INTO categories (category_id, parent_id, category_name) VALUES
    (1, NULL, 'Thế giới'),
    (2, 1, 'Chính trị'),
    (3, 1, 'Xã hội'),	
    (4, 1, 'Giáo dục'),
    (5, NULL, 'Giải trí'),
    (6, 5, 'Điện ảnh'),
    (7, 5, 'Âm nhạc'),
    (8, NULL, 'Thể thao'),departmentsdepartmentsemployeesemployeesemployeesusersusersemployees
    (9, 8, 'Bóng đá'),
    (10, 8, 'Thể thao điện tử');

CREATE TABLE users (
  user_id int NOT NULL AUTO_INCREMENT,
  username varchar(50) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY (user_id),
  UNIQUE KEY username (username),
  UNIQUE KEY email (email)
)

INSERT INTO users (user_id, username, email, password) VALUES
    (1, 'HungNQ', 'hungnq@vidu.com', '$2y$10$O7KoQaLM8Rs3Emm3BCOUnOTk/ZSFT4/8cg.duxtHj.jh.co/iq8Oq'),
    (2, 'MaiLinh', 'mailinh@vidu.com', '$2y$10$O7KoQaLM8Rs3Emm3BCOUnOTk/ZSFT4/8cg.duxtHj.jh.co/iq8Oq'),
    (3, 'NamSon', 'namson@vidu.com', '$2y$10$O7KoQaLM8Rs3Emm3BCOUnOTk/ZSFT4/8cg.duxtHj.jh.co/iq8Oq'),
    (4, 'ThuyDuong', 'thuyduong@vidu.com', '$2y$10$O7KoQaLM8Rs3Emm3BCOUnOTk/ZSFT4/8cg.duxtHj.jh.co/iq8Oq'),
    (5, 'MinhAnh', 'minhanh@vidu.com', '($2y$10$O7KoQaLM8Rs3Emm3BCOUnOTk/ZSFT4/8cg.duxtHj.jh.co/iq8Oq');


CREATE TABLE news (
  news_id int NOT NULL AUTO_INCREMENT,
  title varchar(255) NOT NULL,
  content text NOT NULL,
  publish_date datetime NOT NULL,
  author_id int NOT NULL,
  feature_image_url varchar(255) DEFAULT NULL,
  PRIMARY KEY (news_id),
  KEY author_id (author_id),
 FOREIGN KEY (author_id) REFERENCES users (user_id)
)

INSERT INTO news (news_id, title, content, publish_date, author_id, feature_image_url) VALUES
    (1, 'Việt Nam đạt được thành tựu kinh tế ấn tượng', 'Nội dung bài viết về thành tựu kinh tế...', '2024-02-29 00:00:00', 1, 'https://picsum.photos/seed/picsum/200/300'),
    (2, 'Ứng dụng mới giúp cuộc sống dễ dàng hơn', 'Bài viết giới thiệu về ứng dụng tiện ích...', '2024-02-28 00:00:00', 2, 'https://picsum.photos/seed/picsum/200/300'),
    (3, 'Samsung ra mắt điện thoại Galaxy S25 mới', 'Tin tức ra mắt sản phẩm mới của Samsung...', '2024-02-27 00:00:00', 3, 'https://picsum.photos/seed/picsum/200/300'),
    (4, 'Giải pháp bảo vệ môi trường hiệu quả', 'Bài viết chia sẻ các giải pháp bảo vệ môi trường...', '2024-02-26 00:00:00', 4, 'https://picsum.photos/seed/picsum/200/300'),
    (5, 'Bí quyết sống khỏe mạnh mỗi ngày', 'Các mẹo giúp bạn duy trì sức khỏe tốt...', '2024-02-25 00:00:00', 5, 'https://picsum.photos/seed/picsum/200/300'),
    (6, 'Du lịch Đà Nẵng: Thành phố đáng đến', 'Kinh nghiệm du lịch, khám phá Đà Nẵng xinh đẹp...', '2024-02-24 00:00:00', 1, 'https://picsum.photos/seed/picsum/200/300'),
    (7, 'Công nghệ trí tuệ nhân tạo phát triển vượt bậc', 'Những ứng dụng thú vị của trí tuệ nhân tạo...', '2024-02-23 00:00:00', 2, 'https://picsum.photos/seed/picsum/200/300'),
    (8, 'Tuyệt chiêu nấu món phở bò thơm ngon', 'Hướng dẫn chi tiết cách nấu phở bò chuẩn vị Hà Nội...', '2024-02-22 00:00:00', 4, 'https://picsum.photos/seed/picsum/200/300'),
    (9, 'Các bộ phim điện ảnh Việt Nam hay nhất', 'Top 5 bộ phim điện ảnh Việt Nam đáng xem...', '2024-02-21 00:00:00', 3, 'https://picsum.photos/seed/picsum/200/300'),
    (10, 'Những địa điểm du lịch hấp dẫn tại châu Âu', 'Khám phá những địa danh nổi tiếng ở châu Âu...', '2024-02-20 00:00:00', 5, 'https://picsum.photos/seed/picsum/200/300');

CREATE TABLE news_categories (
  news_id int NOT NULL,
  category_id int NOT NULL,
  PRIMARY KEY (news_id,`category_id`),
  KEY category_id (category_id),
 FOREIGN KEY (news_id) REFERENCES news (news_id),
 FOREIGN KEY (category_id) REFERENCES categories (category_id)
)

INSERT INTO news_categories (news_id, category_id) VALUES
    (1, 1),
    (4, 1),
    (5, 3),
    (8, 3),
    (6, 5),
    (9, 5),
    (10, 5),
    (2, 6),
    (3, 6),
    (7, 6);
tlunewstlunewstlunewstlunewspatientspatientspatientsmvcpatientspatients