  
  --Crear Material 
  
  IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'creaMaterial' AND type = 'P')
                DROP PROCEDURE creaMaterial
            GO

            CREATE PROCEDURE creaMaterial
                @uclave NUMERIC(5,0),
                @udescripcion VARCHAR(50),
                @ucosto NUMERIC(8,2)
            AS
                INSERT INTO Materiales VALUES(@uclave, @udescripcion, @ucosto)
            GO


EXECUTE creaMaterial 5000,'Martillos Acme',250

--Modificar Material

 IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'modificaMaterial' AND type = 'P')
                DROP PROCEDURE modificaMaterial
            GO

            CREATE PROCEDURE modificaMaterial
                @uclave NUMERIC(5,0),
                @udescripcion VARCHAR(50),
                @ucosto NUMERIC(8,2)
            AS
               UPDATE Materiales 
			   SET Descripcion=@udescripcion, Costo=@ucosto
			   WHERE Clave = @uclave
            GO

EXECUTE modificaMaterial 5000,'Clavos Acme',333

--Eliminar Material

 IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'eliminaMaterial' AND type = 'P')
                DROP PROCEDURE eliminaMaterial
            GO

            CREATE PROCEDURE eliminaMaterial
                @uclave NUMERIC(5,0)
            AS
               DELETE FROM Materiales WHERE Clave = @uclave
            GO

EXECUTE eliminaMaterial 5000

--Query Material

 IF EXISTS (SELECT name FROM sysobjects
                                       WHERE name = 'queryMaterial' AND type = 'P')
                                DROP PROCEDURE queryMaterial
                            GO

                            CREATE PROCEDURE queryMaterial
                                @udescripcion VARCHAR(50),
                                @ucosto NUMERIC(8,2)

                            AS
                                SELECT * FROM Materiales WHERE descripcion
                                LIKE '%'+@udescripcion+'%' AND costo > @ucosto
                            GO

EXECUTE queryMaterial 'Lad',20

--Crear Proyecto

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'creaProyecto' AND type = 'P')
                DROP PROCEDURE creaProyecto
            GO

            CREATE PROCEDURE creaProyecto
                @unumero NUMERIC(5,0),
                @udenominacion VARCHAR(50)
            AS
                INSERT INTO Proyectos VALUES(@unumero, @udenominacion)
            GO

EXECUTE creaProyecto 5023,'Hola como estas inc'

Select *
From Proyectos

--Modificar Proyecto

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'modificaproyecto' AND type = 'P')
                DROP PROCEDURE modificaproyecto
            GO

            CREATE PROCEDURE modificaproyecto
                @unumero NUMERIC(5,0),
                @udenominacion VARCHAR(50)
            AS
				UPDATE Proyectos 
				SET Denominacion=@udenominacion 
				WHERE Numero=@unumero
            GO

EXECUTE modificaproyecto 5023,'Reportes lalo'

--Eliminar Proyecto

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'eliminaproyecto' AND type = 'P')
                DROP PROCEDURE eliminaproyecto
            GO

            CREATE PROCEDURE eliminaproyecto
                @unumero NUMERIC(5,0)
            AS
				DELETE FROM Proyectos WHERE Numero=@unumero
            GO

EXECUTE eliminaproyecto 5023


--Crear Proveedor

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'creaProveedor' AND type = 'P')
                DROP PROCEDURE creaProveedor
            GO

            CREATE PROCEDURE creaProveedor
                @urfc char(13),
                @urazonsocial VARCHAR(50)
            AS
                INSERT INTO Proveedores VALUES(@urfc, @urazonsocial)
            GO

EXECUTE creaProveedor 'IIII800101','Los capitanes'

Select *
From Proveedores

--Modificar Proveedor

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'modificaproveedor' AND type = 'P')
                DROP PROCEDURE modificaproveedor
            GO

            CREATE PROCEDURE modificaproveedor
                @urfc char(13),
                @urazonsocial VARCHAR(50)
            AS
				UPDATE Proveedores
				SET RazonSocial=@urazonsocial
				WHERE RFC=@urfc
            GO

EXECUTE modificaproveedor 'IIII800101','Los capitanes 2'

--Eliminar Proveedor

IF EXISTS (SELECT name FROM sysobjects
                       WHERE name = 'eliminaproveedor' AND type = 'P')
                DROP PROCEDURE eliminaproveedor
            GO

            CREATE PROCEDURE eliminaproveedor
                @urfc char(13)
            AS
				DELETE FROM Proveedores WHERE RFC=@urfc
            GO

EXECUTE eliminaproveedor 'IIII800101'



SELECT *
FROM Proveedores











 