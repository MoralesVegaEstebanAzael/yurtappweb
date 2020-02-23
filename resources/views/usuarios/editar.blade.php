{{--            CUADRO DE DIALOGO PARA ACTUALIZAR REGISTRO--}}
<div id="formModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close btn btn-danger btn-circle" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add New Record</h4>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sample_form" class="form-horizontal">
                    @csrf
                    <label>Nombre</label>
                    <div class="input-group input-group">
                        <span class="input-group-addon"><i class="material-icons">person</i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" required>
                        </div>
                    </div>
                    <label>Correo</label>
                    <div class="input-group input-group">
                        <span class="input-group-addon"><i class="material-icons">email</i></span>
                        <div class="form-line">
                            <input type="email" class="form-control" placeholder="Correo" id="email" name="email" required>
                        </div>
                    </div>

                    <label>Teléfono</label>
                    <div class="input-group input-group">
                        <span class="input-group-addon"><i class="material-icons">phone</i></span>
                        <div class="form-line">
                            <input type="tel" class="form-control" placeholder="Teléfono" id="telefono" name="telefono" required>
                        </div>
                    </div>

                    <label>Puesto</label>
                    <div class="input-group input-group">
                        <span class="input-group-addon"><i class="material-icons">accessibility</i></span>
                        <div class="form-line">
                            <input type="text" class="form-control" placeholder="Puesto" id="puesto" name="puesto" required>
                        </div>
                    </div>


                    <br />
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="Add" />
                        <input type="hidden" name="hidden_id" id="hidden_id" />
                        <input type="submit" name="action_button" id="action_button" class="btn btn-warning" value="Editar" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{--            CUADRO DE DIALOGO PARA CONFIRMAR ELIMINACION DEL REGISTRO--}}
<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmación</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">¿Estas seguro de eliminar este registro?</h4>
            </div>
            <div class="modal-footer">

                <button type="button" name="ok_button" id="ok_button"  data-token="{{ csrf_token() }}" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>