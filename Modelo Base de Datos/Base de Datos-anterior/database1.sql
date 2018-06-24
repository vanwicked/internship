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
		cod_pasantia int
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
		cod_mod_carrera int
		);

/*fin de tutor*/

	create table administrativo(
		id_administrativo int primary key AUTO_INCREMENT,
		tipo_cargo varchar (50),
		id_tutor int
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
		id_estudiante int 
		);

	/*enlace del adminstrativo*/
	create table documentos(
		cod_documentos int,
		fecha_entrega int ,
		hora time,
		descripcion varchar (50),
		id_administrativo int,
		primary key (cod_documentos)
		);
	create table tipo_documentos(
		cod_tip_documento int,
		descripcion varchar (50),
		cod_documentos int,
		primary key (cod_tip_documento)
		);
	create table formato_ficha_evaluacion(
		cod_form int ,
		nota_fin int,
		detalles varchar(50),
		cod_documentos int,
		primary key (cod_form)
		);
	create table evaluacion_docente(
		cod_eva_doc int,
		nota int ,
		carrera varchar (50),
		detalles varchar(50),
		cod_form int ,
		primary key (cod_eva_doc)
		);
	create table evaluacion_supervisor(
		cod_eva_sup int,
		nota int,
		cod_form int,
		primary key (cod_eva_sup)
		);