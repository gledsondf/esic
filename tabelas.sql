CREATE TABLE solicitacaotabela (
 	usuario_id int(5) NOT NULL ,
    protocolo int(10) NOT NULL auto_increment,
    ano_protocolo date NOT NULL default '0000',
    tipo_solicitacao varchar(100) NOT NULL default 'Solicitação de Informação',
    data_solicitacao datetime NOT NULL default '0000-00-00 00:00:00',
    previsao_resposta date NOT NULL,
    prorrogado enum('0','1') NOT NULL default '0',
    situacao enum('0','1','2','3') NOT NULL default '0',
    data_resposta datetime NOT NULL default '0000-00-00 00:00:00',
    solicitacao text NOT NULL,
    formaretorno enum('0','1','2') NOT NULL default '0',
    PRIMARY KEY (protocolo),
);