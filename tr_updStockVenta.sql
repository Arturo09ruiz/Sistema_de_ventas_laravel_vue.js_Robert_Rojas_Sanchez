DELIMITER //
CREATE TRIGGER tr_updStockVenta AFTER INSERT ON detalle_ventass FOR EACH ROW 
BEGIN
	UPDATE articulos SET stock = stock - NEW.cantidad
	WHERE articulos.id = NEW.idarticulo;
END
//
DELIMITER ;