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
                        <th>Mensaje</th>
                        <th>Correo electronico</th>
                        <th>Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($sugerer as $value): ?>
                        <tr>
                            <th><?php echo $value['IdSugerencia']; ?></th>
                            <td><?php echo $value['yourname']; ?></td>
                            <td><?php echo $value['email']; ?></td>
                            <td><?php echo $value['message']; ?></td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>