DROP DATABASE IF EXISTS fluxo_caixa;
CREATE DATABASE fluxo_caixa;
USE fluxo_caixa;

CREATE table fluxo_caixa
(
	id int not null auto_increment,
    data DATE NOT NULL,
    tipo VARCHAR(10) NOT NULL,
    valor DECIMAL (10, 2) NOT NULL,
    historico VARCHAR(150) NOT NULL,
    cheque VARCHAR(3) NOT NULL,
    PRIMARY KEY (id)
    );
    