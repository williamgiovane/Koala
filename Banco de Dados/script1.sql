use koaladb;

INSERT INTO `koaladb`.`tipo_usuario` (`id_tipo_usuario`, `ds_tipo_usuario`) VALUES ('1', 'admin');
INSERT INTO `koaladb`.`tipo_usuario` (`id_tipo_usuario`, `ds_tipo_usuario`) VALUES ('2', 'empresario');
INSERT INTO `koaladb`.`tipo_usuario` (`id_tipo_usuario`, `ds_tipo_usuario`) VALUES ('3', 'usuario');

INSERT INTO `koaladb`.`usuario` (`id_usuario`, `nm_usuario`, `email`, `senha`, `celular`, `atualiza_celular`, `atualiza_email`, `TIPO_USUARIO_id_tipo_usuario`, `foto`) VALUES ('1', 'Amanda', 'amanda_dalfovo@hotmail.com', '596', '91706530', '1', '1', '1', ?);
INSERT INTO `koaladb`.`usuario` (`id_usuario`, `nm_usuario`, `email`, `senha`, `celular`, `atualiza_celular`, `atualiza_email`, `TIPO_USUARIO_id_tipo_usuario`, `foto`) VALUES ('2', 'Boeing', 'gabrielboeing04@gmail.com', '123', '885', '1', '0', '1', ?);
INSERT INTO `koaladb`.`usuario` (`id_usuario`, `nm_usuario`, `email`, `senha`, `celular`, `atualiza_celular`, `atualiza_email`, `TIPO_USUARIO_id_tipo_usuario`, `foto`) VALUES ('3', 'Will Gio', 'williamgiovane1@gmail.com', '159', '56', '0', '1', '1', ?);
INSERT INTO `koaladb`.`usuario` (`id_usuario`, `nm_usuario`, `email`, `senha`, `celular`, `atualiza_celular`, `atualiza_email`, `TIPO_USUARIO_id_tipo_usuario`, `foto`) VALUES ('4', 'Bia ', 'bianca', 'biasenai', '52', '0', '0', '1', ?);

UPDATE `koaladb`.`usuario` SET `celular`='97424074' WHERE `id_usuario`='3';
UPDATE `koaladb`.`usuario` SET `celular`='91287037' WHERE `id_usuario`='2';
UPDATE `koaladb`.`usuario` SET `celular`='123' WHERE `id_usuario`='4';

INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('1', 'Musical');
INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('2', 'Cultural');
INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('3', 'Tecnológico');
INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('4', 'Gastronômico');
INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('5', 'Festival');
INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('6', 'Esportivo');
INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('7', 'Palestra');
INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('8', 'WorkShop');
INSERT INTO `koaladb`.`tipo_evento` (`id_tipo_evento`, `ds_tipo_evento`) VALUES ('9', 'Comemorativo');

INSERT INTO `koaladb`.`evento` (`id_evento`, `ds_evento`, `dt_inicio`, `dt_fim`, `cep`, `ds_local_evento`, `horario_inicio`, `horario_fim`, `vl_entrada`, `vl_meia_entrada`, `site`, `about`, `foto`) VALUES ('1', 'OktoberFest', '2016-10-05', '2016-10-23', '89036200', 'Vila Germânica', '13:00', '05:00', '18', '9', 'http://www.oktoberfestblumenau.com.br/', 'Oktober é legal', ?);

INSERT INTO `koaladb`.`evento_has_tipo_evento` (`EVENTO_id_evento`, `TIPO_EVENTO_id_tipo_evento`) VALUES ('1', '2');
INSERT INTO `koaladb`.`evento_has_tipo_evento` (`EVENTO_id_evento`, `TIPO_EVENTO_id_tipo_evento`) VALUES ('1', '1');

INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('1', 'Pub');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('2', 'Bar');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('3', 'Cervejaria');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('4', 'Restaurante');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('5', 'Pizzaria');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('6', 'Lanchonete');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('7', 'Padaria');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('8', 'Cafeteria');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('9', 'Shopping');
INSERT INTO `koaladb`.`tipo_estabelecimento` (`id_tipo_estabelecimento`, `ds_tipo_estabelecimento`) VALUES ('10', 'Balada');

INSERT INTO `koaladb`.`tipo_entretenimento` (`id_tipo_entretenimento`, `ds_tipo_entretenimento`) VALUES ('1', 'Teatro');
INSERT INTO `koaladb`.`tipo_entretenimento` (`id_tipo_entretenimento`, `ds_tipo_entretenimento`) VALUES ('2', 'Aventura');
INSERT INTO `koaladb`.`tipo_entretenimento` (`id_tipo_entretenimento`, `ds_tipo_entretenimento`) VALUES ('3', 'Esporte');
INSERT INTO `koaladb`.`tipo_entretenimento` (`id_tipo_entretenimento`, `ds_tipo_entretenimento`) VALUES ('4', 'Natureza');
INSERT INTO `koaladb`.`tipo_entretenimento` (`id_tipo_entretenimento`, `ds_tipo_entretenimento`) VALUES ('5', 'Ponto Turístico');
INSERT INTO `koaladb`.`tipo_entretenimento` (`id_tipo_entretenimento`, `ds_tipo_entretenimento`) VALUES ('6', 'Parque');

INSERT INTO `koaladb`.`continente` (`id_continente`, `ds_continente`) VALUES ('1', 'América');
INSERT INTO `koaladb`.`continente` (`id_continente`, `ds_continente`) VALUES ('2', 'Europa');
INSERT INTO `koaladb`.`continente` (`id_continente`, `ds_continente`) VALUES ('3', 'África');
INSERT INTO `koaladb`.`continente` (`id_continente`, `ds_continente`) VALUES ('4', 'Ásia');
INSERT INTO `koaladb`.`continente` (`id_continente`, `ds_continente`) VALUES ('5', 'Oceania');
INSERT INTO `koaladb`.`continente` (`id_continente`, `ds_continente`) VALUES ('6', 'Antártida');

INSERT INTO `koaladb`.`moeda` (`id_moeda`, `ds_moeda`) VALUES ('1', 'Real');
INSERT INTO `koaladb`.`moeda` (`id_moeda`, `ds_moeda`) VALUES ('2', 'Dólar');
INSERT INTO `koaladb`.`moeda` (`id_moeda`, `ds_moeda`) VALUES ('3', 'Libra');
INSERT INTO `koaladb`.`moeda` (`id_moeda`, `ds_moeda`) VALUES ('4', 'Peso Mexicano');

INSERT INTO `koaladb`.`pais` (`id_pais`, `ds_pais`, `MOEDA_id_moeda`, `CONTINENTE_id_continente`, `capital`) VALUES ('1', 'Brasil', '1', '1', 'Brasília');
INSERT INTO `koaladb`.`pais` (`id_pais`, `ds_pais`, `MOEDA_id_moeda`, `CONTINENTE_id_continente`, `capital`) VALUES ('2', 'Estados Unidos', '2', '1', 'Washington');
INSERT INTO `koaladb`.`pais` (`id_pais`, `ds_pais`, `MOEDA_id_moeda`, `CONTINENTE_id_continente`, `capital`) VALUES ('3', 'México', '4', '1', 'Cidade do México');
INSERT INTO `koaladb`.`pais` (`id_pais`, `ds_pais`, `MOEDA_id_moeda`, `CONTINENTE_id_continente`, `capital`) VALUES ('4', 'Inglaterra', '3', '2', 'Londres');

INSERT INTO `koaladb`.`estado` (`id_estado`, `ds_estado`, `capital`, `PAIS_id_pais`) VALUES ('1', 'Santa Catarina', 'Florianópolis', '1');
INSERT INTO `koaladb`.`estado` (`id_estado`, `ds_estado`, `capital`, `PAIS_id_pais`) VALUES ('2', 'Paraná', 'Curitiba', '1');
INSERT INTO `koaladb`.`estado` (`id_estado`, `ds_estado`, `capital`, `PAIS_id_pais`) VALUES ('3', 'Rio Grande do Sul', 'Porto Alegre', '1');
INSERT INTO `koaladb`.`estado` (`id_estado`, `ds_estado`, `capital`, `PAIS_id_pais`) VALUES ('4', 'São Paulo', 'São Paulo', '1');
INSERT INTO `koaladb`.`estado` (`id_estado`, `ds_estado`, `capital`, `PAIS_id_pais`) VALUES ('5', 'Rio de Janeiro', 'Rio de Janeiro', '1');

INSERT INTO `koaladb`.`cidade` (`id_cidade`, `ds_cidade`, `ESTADO_id_estado`) VALUES ('1', 'Blumenau', '1');
INSERT INTO `koaladb`.`cidade` (`id_cidade`, `ds_cidade`, `ESTADO_id_estado`) VALUES ('2', 'Florianópolis', '1');
INSERT INTO `koaladb`.`cidade` (`id_cidade`, `ds_cidade`, `ESTADO_id_estado`) VALUES ('3', 'Curitiba', '2');
INSERT INTO `koaladb`.`cidade` (`id_cidade`, `ds_cidade`, `ESTADO_id_estado`) VALUES ('4', 'Gramado', '3');


--------------alterar para numeric (15,2)
INSERT INTO `koaladb`.`estabelecimento` (`id_estabelecimento`, `ds_estabelecimento`, `cep`, `about`, `telefone`, `email`, `classificacao`, `foto`, `CIDADE_id_cidade`) VALUES ('1', 'Polpetta', '89', 'Polpetta tem bolinhos deliciosos', '123', 'polpetta@gmail.com', '4.50', ?, '1');

UPDATE `koaladb`.`estabelecimento` SET `classificacao`='4.5' WHERE `id_estabelecimento`='1';
INSERT INTO `koaladb`.`estabelecimento` (`id_estabelecimento`, `ds_estabelecimento`, `cep`, `about`, `telefone`, `email`, `classificacao`, `foto`, `CIDADE_id_cidade`) VALUES ('2', 'Ahoy', '25', 'Ahoy tem músicas legais', '258', 'ahoy@gmail.com', '5', ?, '1');


INSERT INTO `koaladb`.`estabelecimento_has_tipo_estabelecimento` (`ESTABELECIMENTO_id_estabelecimento`, `TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`) VALUES ('1', '3');
INSERT INTO `koaladb`.`estabelecimento_has_tipo_estabelecimento` (`ESTABELECIMENTO_id_estabelecimento`, `TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`) VALUES ('1', '6');


INSERT INTO `koaladb`.`estabelecimento_has_tipo_estabelecimento` (`ESTABELECIMENTO_id_estabelecimento`, `TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`) VALUES ('2', '1');
INSERT INTO `koaladb`.`estabelecimento_has_tipo_estabelecimento` (`ESTABELECIMENTO_id_estabelecimento`, `TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`) VALUES ('3', '1');
INSERT INTO `koaladb`.`estabelecimento_has_tipo_estabelecimento` (`ESTABELECIMENTO_id_estabelecimento`, `TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`) VALUES ('3', '2');
INSERT INTO `koaladb`.`estabelecimento_has_tipo_estabelecimento` (`ESTABELECIMENTO_id_estabelecimento`, `TIPO_ESTABELECIMENTO_id_tipo_estabelecimento`) VALUES ('3', '4');





---------------------------------------CONSULTAS LEGAIS, FAÇAM-AS AO FINAL---------------------------------------------------------

SELECT 	a.ds_evento Evento, 
		b.ds_tipo_evento Tipo
FROM 	evento a, 
		tipo_evento b, 
        evento_has_tipo_evento c 
where 	a.id_evento = c.EVENTO_id_evento
and		b.id_tipo_evento = c.TIPO_EVENTO_id_tipo_evento;


-----------selecionar estabelecimentos cadastrados e seus tipo
SELECT 	a.ds_estabelecimento Estabelecimento, 
		b.ds_tipo_estabelecimento Tipo
FROM 	estabelecimento a, 
		tipo_estabelecimento b, 
        estabelecimento_has_tipo_estabelecimento c 
where 	a.id_estabelecimento = c.ESTABELECIMENTO_id_estabelecimento
and		b.id_tipo_estabelecimento = c.TIPO_ESTABELECIMENTO_id_tipo_estabelecimento
order by 1;


---------selecionar os pubs de blumenau

select distinct a.ds_estabelecimento
from 	estabelecimento a,
		tipo_estabelecimento b, 
        estabelecimento_has_tipo_estabelecimento c,
        cidade d
where 	a.id_estabelecimento = c.ESTABELECIMENTO_id_estabelecimento
and		b.id_tipo_estabelecimento = c.TIPO_ESTABELECIMENTO_id_tipo_estabelecimento
and		a.CIDADE_id_cidade = d.id_cidade
and		d.id_cidade = 1 (pq o ID de BNU é igual a 1)
order by 1;

