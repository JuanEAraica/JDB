<h1 class="page-header">Trabajadores</h1>
<form action="?c=Trabajador" method="post">

        <div class="well well-sm text-right">
            
            <div  style=" float: left; width:300px;">
                <label style=" float: left; height: 60px; margin-top: 7px; margin-right: 7px">Buscar:</label>
                <input class="form-control" id="buscar" type="text"  placeholder="Escriba algo para buscar" style="width:230px;" />
            </div>
            
            <a class="btn btn-primary" href="?c=Trabajador&a=Registrar">Registrar</a>
            <input type="submit" value="Editar" name="a" class="btn btn-primary"/>
            <input type="submit" value="Eliminar" name="a" onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" class="btn btn-primary"/>
        </div>

        <table id="tabla" class="table table-striped">
            <thead>
                <tr>
                    <th style="width:70px;"></th>
                    <th style="width:230px;">Nombre</th>
                    <th style="width:310px;">Apellidos</th>
                    <th style="width:300px;">Correo</th>
                    <th style="width:120px;">Sexo</th>
                    <th style="width:120px;">Nacimiento</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($this->model->Listar() as $r): ?>
                <?php $valor = $r->id; ?>
                <tr>
                    <td><input type=radio name=id value=<?php echo $r->id; ?> ></td>
                    <td><?php echo $r->Nombre; ?></td>
                    <td><?php echo $r->Apellido; ?></td>
                    <td><?php echo $r->Correo; ?></td>
                    <td><?php echo $r->Sexo == 1 ? 'Hombre' : 'Mujer'; ?></td>
                    <td><?php echo $r->FechaNacimiento; ?></td>
                </tr>
            <?php endforeach; ?>
            <script src="assets/js/buscador.js"></script>
            </tbody>
        </table> 
    
</form>
