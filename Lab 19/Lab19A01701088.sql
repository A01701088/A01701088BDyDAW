
--La suma de las cantidades e importe total de todas las entregas realizadas durante el 97.

SET DATEFORMAT dmy

SELECT SUM(E.Cantidad), SUM(M.Costo)
FROM Entregan E, Materiales M
WHERE E.Clave = M.Clave AND E.Fecha BETWEEN '1-1-1997' AND '31-12-1997'

--Para cada proveedor, obtener la razón social del proveedor, número de entregas e importe total de las entregas realizadas.

SELECT P.RazonSocial, COUNT(E.RFC) as 'Entregas', SUM(Cantidad * Costo) as 'Importe'
FROM Proveedores P, Entregan E, Materiales M
WHERE P.RFC = E.RFC and M.Clave = E.Clave
GROUP BY P.RazonSocial

--Por cada material obtener la clave y descripción del material, la cantidad total entregada, la mínima cantidad entregada, la máxima cantidad entregada, el importe total de las entregas de aquellos materiales en los que la cantidad promedio entregada sea mayor a 400.

SELECT M.Clave, M.Descripcion, SUM(E.Cantidad) as 'Total Entregado', MIN(E.Cantidad) as 'Minimo Entregado', MAX(E.Cantidad) as 'Maximo Entregado', SUM(M.Costo * E.Cantidad) as 'Importe'  
FROM Materiales M, Entregan E
WHERE M.Clave = E.Clave
GROUP BY M.Clave, M.Descripcion
HAVING AVG(E.Cantidad) > 400

--Para cada proveedor, indicar su razón social y mostrar la cantidad promedio de cada material entregado, detallando la clave y descripción del material, excluyendo aquellos proveedores para los que la cantidad promedio sea menor a 500.

SELECT P.RazonSocial,  M.Clave, M.Descripcion, AVG(E.Cantidad) as 'Promedio' 
FROM Entregan E, Materiales M, Proveedores P
WHERE M.Clave = E.Clave AND E.RFC = P.RFC
GROUP BY P.RFC, P.RazonSocial, M.Clave, M.Descripcion
HAVING AVG(E.Cantidad) <= 500

--Mostrar en una solo consulta los mismos datos que en la consulta anterior pero para dos grupos de proveedores: aquellos para los que la cantidad promedio entregada es menor a 370 y aquellos para los que la cantidad promedio entregada sea mayor a 450.

SELECT M.Clave, M.Descripcion, P.RazonSocial, AVG(E.Cantidad) as 'Promedio'
FROM Proveedores P, Entregan E, Materiales M
WHERE M.Clave = E.Clave AND E.RFC = P.RFC
GROUP BY P.RFC, P.RazonSocial, M.Clave, M.Descripcion
HAVING AVG(E.Cantidad) <= 370 OR AVG(E.Cantidad) >= 450

--inserta cinco nuevos materiales.

INSERT INTO Materiales (Clave, Descripcion, Costo) VALUES (1440, 'Hojalata', 230)
INSERT INTO Materiales (Clave, Descripcion, Costo) VALUES (1450, 'Piedra', 15)
INSERT INTO Materiales (Clave, Descripcion, Costo) VALUES (1460, 'Plastico Blanco', 100)
INSERT INTO Materiales (Clave, Descripcion, Costo) VALUES (1470, 'Plastico Negro', 200)
INSERT INTO Materiales (Clave, Descripcion, Costo) VALUES (1480, 'Piel de Gallina', 12)

SELECT *
FROM Materiales
--Clave y descripción de los materiales que nunca han sido entregados.
 
SELECT M.Clave, M.Descripcion
FROM Materiales M
WHERE M.Clave NOT IN (SELECT E.Clave 
				      FROM Entregan E)

--Razón social de los proveedores que han realizado entregas tanto al proyecto 'Vamos México' como al proyecto 'Querétaro Limpio'.

SELECT P.RazonSocial
FROM Entregan E, Proyectos Pr,Proveedores P
WHERE E.RFC = P.RFC and E.Numero = Pr.Numero
AND E.Numero =  (SELECT Pr.Numero FROM Proyectos Pr WHERE Pr.Denominacion = 'Vamos Mexico')
GROUP BY P.RazonSocial

UNION

SELECT P.RazonSocial
FROM  Entregan E, Proyectos Pr,Proveedores P
WHERE E.RFC = P.RFC and E.Numero = Pr.Numero
AND E.Numero =  (SELECT Pr.Numero FROM Proyectos Pr WHERE Pr.Denominacion = 'Queretaro limpio')
GROUP BY P.RazonSocial

--Descripción de los materiales que nunca han sido entregados al proyecto 'CIT Yucatán'.

SELECT M.Descripcion
FROM Materiales M
WHERE M.Clave NOT IN (SELECT E.Clave
                      FROM Proyectos P, Entregan E
                      WHERE E .Numero  = P.Numero AND P.Denominacion = 'CIT Yucatan')

--Razón social y promedio de cantidad entregada de los proveedores cuyo promedio de cantidad entregada es mayor al promedio de la cantidad entregada por el proveedor con el RFC 'VAGO780901'.

SELECT P.RazonSocial, AVG(E.Cantidad) as 'Promedio'
FROM Proveedores P, Entregan E
WHERE P.RFC = E.RFC
GROUP BY P.RazonSocial, E.Cantidad
HAVING AVG(E.Cantidad) > (SELECT AVG(E.Cantidad)
                      FROM Entregan E 
                      WHERE E.RFC = 'VAGO780901')

--RFC, razón social de los proveedores que participaron en el proyecto 'Infonavit Durango' y cuyas cantidades totales entregadas en el 2000 fueron mayores a las cantidades totales entregadas en el 2001.


SELECT P.RFC, P.RazonSocial
FROM Proveedores P, Entregan E, Proyectos Pr
WHERE Pr.Denominacion = 'Infonavit Durango' AND(SELECT SUM(Cantidad)
                                                FROM Entregan E
	                                            WHERE Fecha BETWEEN '2000-01-01' AND '2000-12-31'
                                                ) > 
                                                (SELECT SUM(Cantidad)
	                                             FROM Entregan E
	                                             WHERE Fecha BETWEEN '2001-01-01' AND '2001-12-31')
GROUP BY P.RFC, P.RazonSocial


SELECT *
FROM Entregan