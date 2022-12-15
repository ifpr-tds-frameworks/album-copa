CREATE TABLE `tb_recados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `texto` text,
  `data` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) DEFAULT 'waiting',
  PRIMARY KEY (`id`)
);

INSERT INTO `tb_recados` VALUES 

(1,'\"Computadores são inúteis, eles apenas dão respostas.\" -- Picasso','2022-09-15 14:32:58','aproved'),
(2,'\"Péssima ideia a de que não se pode mudar.\" -- Montaigne','2022-09-15 14:45:30','aproved'),
(3,'\"Uma discussão prolongada significa que ambas as partes estão erradas.\" -- Voltaire','2022-09-15 14:45:40','aproved'),
(4,'\"O homem absurdo é aquele que nunca muda.\" -- Georges Clemenceau','2022-09-21 22:34:44','aproved'),
(5,'Qual o recado você deixa para o futuro?','2022-09-22 00:24:57','aproved');
