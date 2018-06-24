drop database internship;
create database internship;
	use internship;
		create table carreras (
		cod_carreras int primary key,
		descripcion varchar (50)
		);
	create table requisitos (
		cod_requisitos int primary key,
		tipo_requisitos varchar (50)
		);
	create table pasantia(
		cod_pasantia int primary key,
		inicio_pasantia varchar (50),
		nro_pasantia int 
		);

/*para el estudiante*/
	create table estudiante(
		id_estudiante int primary key AUTO_INCREMENT,
		celular int ,
		carrera varchar(50),
		cod_carreras int ,
		cod_requisitos int ,
		cod_pasantia int ,
		foreign key (cod_carreras) references carreras (cod_carreras),
		foreign key (cod_requisitos) references requisitos (cod_requisitos),
		foreign key (cod_pasantia) references pasantia ( cod_pasantia)
		);
/*fin de estudiante*/
/*inicio de tutor*/
	create table control (
		cod_control int,
		fecha_control date,
		hora time,
		descripcion varchar(50),
		primary key (cod_control)
		);
	create table tipo_control(
		cod_tip_control int,
		detalles varchar(50),
		primary key (cod_tip_control)
		);
	create table modalidad_carrera(
		cod_mod_carrera int,
		turno varchar (50),
		primary key (cod_mod_carrera)
		);
	create table tutor(
		id_tutor int primary key AUTO_INCREMENT,
		cargo varchar (50),
		cod_pasantia int ,
		cod_control int,
		cod_tip_control int,
		cod_mod_carrera int,
		foreign key (cod_pasantia) references pasantia (cod_pasantia),
		foreign key (cod_control) references control (cod_control),
		foreign key (cod_tip_control)references tipo_control(cod_tip_control),
		foreign key (cod_mod_carrera)references modalidad_carrera(cod_mod_carrera)
		);

/*fin de tutor*/

	create table administrativo(
		id_administrativo int primary key AUTO_INCREMENT,
		tipo_cargo varchar (50),
		id_tutor int,
		foreign key (id_tutor)references tutor (id_tutor)
		);
	create table persona(
	 	cod_persona int primary key,
		ci int,
		nombre varchar (50),
		apellido_pat varchar (50),
		apellido_mat varchar (50),
		direccion varchar (50),
		id_administrativo int,
		id_tutor int,
		id_estudiante int ,
		foreign key (id_estudiante) references estudiante( id_estudiante),
		foreign key (id_tutor) references tutor (id_tutor),
		foreign key (id_administrativo) references administrativo (id_administrativo)
		);

	/*enlace del adminstrativo*/
	create table documentos(
		cod_documentos int,
		fecha_entrega int ,
		hora time,
		descripcion varchar (50),
		id_administrativo int,
		primary key (cod_documentos),
		foreign key (id_administrativo) references administrativo (id_administrativo)
		);
	create table tipo_documentos(
		cod_tip_documento int,
		descripcion varchar (50),
		cod_documentos int,
		primary key (cod_tip_documento),
		foreign key (cod_documentos)references documentos(cod_documentos)
		);
	create table formato_ficha_evaluacion(
		cod_form int ,
		nota_fin int,
		detalles varchar(50),
		cod_documentos int,
		primary key (cod_form),
		foreign key (cod_documentos)references documentos(cod_documentos)

		);
	create table evaluacion_docente(
		cod_eva_doc int,
		nota int ,
		carrera varchar (50),
		detalles varchar(50),
		cod_form int ,
		primary key (cod_eva_doc),
		foreign key (cod_form)references formato_ficha_evaluacion (cod_form)
		);
	create table evaluacion_supervisor(
		cod_eva_sup int,
		nota int,
		cod_form int,
		primary key (cod_eva_sup),
		foreign key (cod_form)references formato_ficha_evaluacion (cod_form)
		);