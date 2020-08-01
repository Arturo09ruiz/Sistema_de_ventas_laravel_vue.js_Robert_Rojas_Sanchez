DELIMITER //
CREATE TRIGGER tr_updStockVentaAnular AFTER UPDATE ON ventas FOR EACH ROW
BEGIN
	UPDATE articulos a
	JOIN detalle_ventas dv
	ON dv.idarticulo = a.id
	AND dv.idventa = new.id
	SET a.stock = a.stock + dv.cantidad;
END;
//
DELIMITER ;