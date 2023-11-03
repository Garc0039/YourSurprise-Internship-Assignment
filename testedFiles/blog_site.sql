--
-- File generated with SQLiteStudio v3.4.4 on Mi Nov 1 16:34:17 2023
--
-- Text encoding used: UTF-8
--
PRAGMA foreign_keys = off;
BEGIN TRANSACTION;

-- Table: blog_posts
CREATE TABLE IF NOT EXISTS blog_posts (
    blog_id INTEGER PRIMARY KEY,
    user_id INTEGER,
    post TEXT NOT NULL
 );
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (1, 3, 'quia et suscipit
suscipit recusandae consequuntur expedita et cum
reprehenderit molestiae ut ut quas totam
nostrum rerum est autem sunt rem eveniet architecto');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (2, 1, 'est rerum tempore vitae
sequi sint nihil reprehenderit dolor beatae ea dolores neque
fugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis
qui aperiam non debitis possimus qui neque nisi nulla');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (3, 8, 'et iusto sed quo iure
voluptatem occaecati omnis eligendi aut ad
voluptatem doloribus vel accusantium quis pariatur
molestiae porro eius odio et labore et velit aut');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (4, 5, 'repudiandae veniam quaerat sunt sed
alias aut fugiat sit autem sed est
voluptatem omnis possimus esse voluptatibus quis
est aut tenetur dolor neque');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (5, 8, 'consectetur animi nesciunt iure dolore
enim quia ad
veniam autem ut quam aut nobis
et est aut quod aut provident voluptas autem voluptas');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (6, 10, 'itaque id aut magnam
praesentium quia et ea odit et ea voluptas et
sapiente quia nihil amet occaecati quia id voluptatem
incidunt ea est distinctio odio');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (7, 8, 'fuga et accusamus dolorum perferendis illo voluptas
non doloremque neque facere
ad qui dolorum molestiae beatae
sed aut voluptas totam sit illum');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (8, 9, 'qui consequuntur ducimus possimus quisquam amet similique
suscipit porro ipsam amet
eos veritatis officiis exercitationem vel fugit aut necessitatibus totam
omnis rerum consequatur expedita quidem cumque explicabo');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (9, 10, '');
INSERT INTO blog_posts (blog_id, user_id, post) VALUES (10, 12, 'non et quaerat ex quae ad maiores
maiores recusandae totam aut blanditiis mollitia quas illo
ut voluptatibus voluptatem
similique nostrum eum');

-- Table: likes
CREATE TABLE IF NOT EXISTS likes (
    id INTEGER PRIMARY KEY,
    user_id INTEGER NOT NULL,
    blog_id INTEGER  NOT NULL,
    like INTEGER NOT NULL
 );
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (1, 1, 4, 1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (2, 7, 4, 1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (3, 8, 6, -1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (4, 8, 7, 1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (5, 23, 1, 1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (6, 3, 37, 1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (7, 5, 1, 1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (8, 6, 1, -1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (9, 8, 5, 1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (10, 4, 2, 1);
INSERT INTO likes (id, user_id, blog_id, "like") VALUES (11, 8, 10, 1);

-- Table: user
CREATE TABLE IF NOT EXISTS user (
  user_id INTEGER PRIMARY KEY,
  name TEXT NOT NULL
);
INSERT INTO user (user_id, name) VALUES (1, 'Karel');
INSERT INTO user (user_id, name) VALUES (3, 'Fred');
INSERT INTO user (user_id, name) VALUES (4, 'Bonnie');
INSERT INTO user (user_id, name) VALUES (5, 'Claudia');
INSERT INTO user (user_id, name) VALUES (7, 'Barend');
INSERT INTO user (user_id, name) VALUES (8, 'Henk');
INSERT INTO user (user_id, name) VALUES (9, 'Harry');
INSERT INTO user (user_id, name) VALUES (10, 'Jantje');

COMMIT TRANSACTION;
PRAGMA foreign_keys = on;
