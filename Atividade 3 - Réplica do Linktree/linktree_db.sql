CREATE DATABASE linktree_db;
USE linktree_db;


CREATE TABLE links_principais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    label VARCHAR(50) NOT NULL,
    url VARCHAR(255) NOT NULL
);


CREATE TABLE redes_sociais (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    url VARCHAR(255) NOT NULL,
    img VARCHAR(100) NOT NULL
);

INSERT INTO links_principais (label, url) VALUES
('Instagram', 'https://www.instagram.com/victorsantossilva2006/'),
('YouTube', 'https://www.youtube.com/@megav6142'),
('GitHub', 'https://github.com/victorsifba-glitch'),
('Contato', 'https://web.whatsapp.com');

INSERT INTO redes_sociais (nome, url, img) VALUES
('TikTok', 'https://www.tiktok.com', 'tiktok.png'),
('X', 'https://x.com', 'x.webp'),
('Facebook', 'https://www.facebook.com', 'facebook.webp'),
('Bluesky', 'https://bsky.app', 'bluesky.png');