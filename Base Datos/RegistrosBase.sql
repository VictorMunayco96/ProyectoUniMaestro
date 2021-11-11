use mydb;

insert into persona (codigo, dni, nombre, apellidoPa, apellidoMa, telefono, correo, sexo, direccion) values ('P00001', '12345678', 'Administrador', 'Administrador' ,'Administrador', '123456','admin@gmail.com','Masculidno','Chincha');

Insert into empleado (cargo, idPersona) values ('Administrador', 1);

insert into usuario (nombre, clave, idEmpleado) values('admin','admin',1);


insert into unidadMedida(nombre) values('UND');  

insert into familia(nombre, descripcion) values ('Pinturas','Pinturas para casa');

insert into producto(idProducto, nombre, marca, precio, stock, ubicacion, codigoBarra, idUnidadMedida, idFamilia) values (2970856, 'DIXON PLFN 3 LUCES', 'DIXON', 50, 500,'I-33-5', '2000002970859', 1 ,1 );
insert into producto(idProducto, nombre, marca, precio, stock, ubicacion, codigoBarra, idUnidadMedida, idFamilia) values (7777777, 'ESCOBA 3 LUCES', 'DIXON', 50, 500,'I-44-5', '2000002965879', 1 ,1 );

select * from quiebre;

SELECT p.nombre, p.marca, p.precio, p.stock, p.ubicacion,um.nombre as unidadMedida, f.nombre as familiaNombre from producto p 
		inner join unidadMedida um on um.idUnidadMedida=p.idUnidadMedida
		inner join familia f on f.idFamilia= p.idFamilia

	
		where p.stock>0