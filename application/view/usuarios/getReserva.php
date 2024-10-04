<?php 
?>

<div class="col-md-24 col-sm-24  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Stripped table <small>Stripped table subtitle</small></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">

                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Usuario</th>
                        <th>Correo electronico</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Cantidad de personas</th>
                        <th>Sede</th>
                        <th>Cantidad de mesas</th>
                        <th>Status</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reservas as $value) : ?>
                        <tr>
                            <td><?php echo $value['idUsuario']; ?></td>
                            <td><?php echo $value['nomCompleto']; ?></td>
                            <td><?php echo $value['Email']; ?></td>
                            <td><?php echo $value['fecha']; ?></td>
                            <td><?php echo $value['hora']; ?></td>
                            <td><?php echo $value['cantidad']; ?></td>
                            <td><?php echo $value['sede']; ?></td>
                            <td><?php echo $value['Mesa']; ?></td>
                            <td>
                            <?php if($value['EstadoR'] == 1):?>
                                <label class="badge badge-pill badge-success">Reserved</label>
                            <?php else: ?>
                                <label class="badge badge-pill badge-danger">unreserved</label> 
                            <?php endif;?>      
                          </td>
                            <td>
                            <button type="button" class="btn btn-warning btn-xs" onclick="changeStatusR('<?php echo $value['idUsuario'];?>')"><i class="fa fa-refresh"></i></button>
                            </td>
                           
                        </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>

        </div>
    </div>
</div>
