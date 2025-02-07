create database crud_music;
use crud_music;
 
create table musica(
	id int not null auto_increment,
    nome varchar(150) not null,
    descricao varchar(150),
    autor varchar(150) not null,
	plays int not null,
    duracao time not null,
    primary key (id)
);
 
create table cantor(
	id int not null auto_increment,
	nome varchar(150) not null, 
    genero varchar(100) not null,
    top_ouvida int not null,
    primary key(id)
);
 
create table podcast(
	id int not null auto_increment,
    nome varchar(150) not null,
    descricao varchar(150),
    dono varchar(150) not null,
    duracao time not null,
    primary key (id)
);
 
	INSERT INTO musica (nome, descricao, autor, plays, duracao) VALUES
	('Bohemian Rhapsody', 'Clássico do Queen', 'Queen', 895, '00:05:55'),
	('Smells Like Teen Spirit', 'Hino do grunge', 'Nirvana', 977, '00:04:38'),
	('Hotel California', 'Hit dos Eagles', 'Eagles', 801, '00:06:30'),
	('Billie Jean', 'Sucesso de Michael Jackson', 'Michael Jackson', 690, '00:04:54'),
	('Shape of You', 'Hit de Ed Sheeran', 'Ed Sheeran', 764, '00:03:53'),
	('Wonderwall', 'Clássico do Oasis', 'Oasis', 589, '00:04:18'),
	('Hey Jude', 'Música dos Beatles', 'The Beatles', 782, '00:07:10'),
	('Rolling in the Deep', 'Grande sucesso de Adele', 'Adele', 439, '00:03:49'),
	('Stairway to Heaven', 'Obra-prima do Led Zeppelin', 'Led Zeppelin', 849, '00:08:02'),
	('Blinding Lights', 'Hit do The Weeknd', 'The Weeknd', 499, '00:03:22'),
	('Sweet Child O Mine', 'Clássico do Guns N Roses', 'Guns N Roses', 502, '00:05:56'),
	('Lose Yourself', 'Sucesso do Eminem', 'Eminem', 467, '00:05:20'),
	('Thinking Out Loud', 'Romântica de Ed Sheeran', 'Ed Sheeran', 846, '00:04:41'),
	('Uptown Funk', 'Hit de Bruno Mars', 'Bruno Mars', 535, '00:04:30'),
	('Shallow', 'Trilha sonora de Nasce Uma Estrela', 'Lady Gaga & Bradley Cooper', 873, '00:03:35'),
	('Someone Like You', 'Balada de Adele', 'Adele', 806, '00:04:45'),
	('Let It Be', 'Hino dos Beatles', 'The Beatles', 866, '00:04:03'),
	('Back in Black', 'Rock clássico do AC/DC', 'AC/DC', 544, '00:04:15'),
	('Livin On A Prayer', 'Hit do Bon Jovi', 'Bon Jovi', 103, '00:04:09'),
	('Take On Me', 'Sucesso do a-ha', 'a-ha', 447, '00:03:45'),
	('Radioactive', 'Hit do Imagine Dragons', 'Imagine Dragons', 53, '00:03:06'),
	('Toxic', 'Clássico da Britney Spears', 'Britney Spears', 852, '00:03:18'),
	('Seven Nation Army', 'Hino do White Stripes', 'The White Stripes', 415, '00:03:52'),
	('Hallelujah', 'Versão de Jeff Buckley', 'Jeff Buckley', 85, '00:06:53'),
	('Bad Guy', 'Hit da Billie Eilish', 'Billie Eilish', 285, '00:03:14');
 
-- //////////////////////////////////////////////////////////////////////////////////////// -- 
INSERT INTO cantor (nome, genero, top_ouvida) VALUES
('Queen', 'Rock', 1),
('Nirvana', 'Grunge', 2),
('Eagles', 'Rock', 3),
('Michael Jackson', 'Pop', 4),
('Ed Sheeran', 'Pop', 5),
('Oasis', 'Rock', 6),
('The Beatles', 'Rock', 7),
('Adele', 'Pop', 8),
('Led Zeppelin', 'Rock', 9),
('The Weeknd', 'R&B', 10),
('Guns N Roses', 'Rock', 11),
('Eminem', 'Rap', 12),
('Bruno Mars', 'Pop', 14),
('Lady Gaga & Bradley Cooper', 'Pop', 15),
('AC/DC', 'Rock', 18),
('Bon Jovi', 'Rock', 19),
('a-ha', 'Pop', 20),
('Imagine Dragons', 'Alternative Rock', 21),
('Britney Spears', 'Pop', 22),
('The White Stripes', 'Alternative Rock', 23),
('Jeff Buckley', 'Folk Rock', 24),
('Billie Eilish', 'Alternative Pop', 25);
-- //////////////////////////////////////////////////////////////////////////////////////// -- 
INSERT INTO podcast (nome, descricao, dono, duracao) VALUES
('Flow Podcast', 'Entrevistas e bate-papos descontraídos', 'Igor 3K', '02:30:00'),
('PodPah', 'Conversa com convidados de diversas áreas', 'Igão & Mítico', '02:15:00'),
('Mano a Mano', 'Entrevistas com personalidades brasileiras', 'Mano Brown', '01:50:00'),
('Inteligência Ltda', 'Podcast sobre curiosidades e cultura', 'Rogério Vilela', '02:10:00'),
('Café da Manhã', 'Resumo das principais notícias do dia', 'Folha de S.Paulo', '00:25:00'),
('NerdCast', 'Podcast sobre cultura nerd e geek', 'Jovem Nerd', '01:40:00'),
('Mamilos', 'Debates sobre temas polêmicos e sociais', 'Ju Wallauer & Cris Bartis', '01:30:00'),
('O Assunto', 'Análises das notícias mais importantes', 'Natuza Nery', '00:30:00'),
('PrimoCast', 'Podcast sobre finanças e investimentos', 'Thiago Nigro', '01:20:00'),
('Braincast', 'Inovação, criatividade e cultura digital', 'B9', '01:10:00'),
('99Vidas', 'Nostalgia e games clássicos', 'Jurandir Filho & Equipe', '01:35:00'),
('Autoconsciente', 'Reflexões sobre bem-estar e autoconhecimento', 'Regina Gianetti', '00:50:00'),
('História FM', 'Podcast sobre história com abordagem acadêmica', 'Icles Rodrigues', '01:45:00'),
('Escriba Café', 'Histórias narradas com riqueza de detalhes', 'Christian Gurtner', '01:05:00'),
('SciCast', 'Ciência de forma acessível e divertida', 'Equipe SciCast', '01:25:00');

show tables;
select * from musica;
select * from cantor;
select * from podcast;