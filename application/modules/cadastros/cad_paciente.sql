
CREATE TABLE IF NOT EXISTS `cad_paciente` (


`codCad` INT( 8 ) NOT NULL AUTO_INCREMENT,  
`dtEnter` INT( 8 ) TIMESTAMP ,
`dtNasc` INT( 8 ) NOT NULL ,
`nomePaciente` varchar(80) NOT NULL,
`endereco` VARCHAR( 90 ) NOT NULL ,
`num` INT( 8 ) NOT NULL ,
`rg` INT( 8 ) NOT NULL ,
`cpf` INT( 11 ) NOT NULL ,
`fone` INT( 8 ) NOT NULL ,
`estCivil` VARCHAR( 10 ) NOT NULL ,
`cidade` VARCHAR( 20 ) NOT NULL ,
`estado` VARCHAR( 20 ) NOT NULL ,
`planSaude` VARCHAR( 20 ) NOT NULL ,
`sexo` VARCHAR( 9 ) NOT NULL ,
`tpSang` VARCHAR( 20 ) NOT NULL ,
`religiao` VARCHAR( 30 ) NOT NULL ,
`nomeAcomp` VARCHAR( 75 ) NOT NULL ,
`parentesco` VARCHAR( 20 ) NOT NULL ,
`rgAcomp` INT( 8 ) NOT NULL ,
`dadosGerais` VARCHAR( 255 ) NOT NULL ,

PRIMARY KEY ( `codCad` )

) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;