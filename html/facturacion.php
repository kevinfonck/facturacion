<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturacion</title>
    <link rel="stylesheet" href="../css/bootstrap-4.6.2-dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h1>FACTURACION</h1>
            <div class = "form-row">
                <div class="form-group col-md-3">
                    <label for="">Cliente:</label>
                    <input type="text" name="codigoCliente" id="codigoCliente" class = "form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Nombre</label>
                    <input type="text" name="nombreCliente" id="nombreCliente" class = "form-control">
                </div>
            </div>
            <div class = "form-row">
                <div class="form-group col-md-3">
                    <label for="">Fecha</label>
                    <input type="text" name="fecha" id="fecha" class = "form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">SubTotal</label>
                    <input type="text" name="subTotal" id="subTotal" class = "form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Iva:</label>
                    <input type="text" name="iva" id="iva" class = "form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">total</label>
                    <input type="text" name="total" id="total" class = "form-control">
                </div>
            </div>
            <div class = "form-row">
                <div class="form-group col-md-2">
                    <label for="">IdProducto</label>
                    <input type="text" name="idProducto" id="idProducto" class="form-control">
                </div>
                <div class="form-group col-md-3">
                    <label for="">Descripcion Producto</label>
                    <input type="text" name="nombreProducto" id="nombreProducto" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">PVP</label>
                    <input type="text" name="pvp" id="pvp" class="form-control">
                </div>
                <div class="form-group col-md-2">
                    <label for="">Cant</label>
                    <input type="text" name="cant" id="cantidad" class="form-control">
                </div>
            </div>
            <table id="detalle" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Idproducto</th>
                        <th>Descripcion Producto</th>
                        <th>PVP</th>
                        <th>Cant.</th>
                        <th>Total</th>
                    </tr>
                </thead>
            </table>
        </form>
    </div>
</body>
</html>