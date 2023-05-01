<div class="modal" tabindex="-1" id="modalCreateLibros">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Insertar Libro</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="./resources/bd/createLibro.php" method="POST" class="d-flex flex-column col-8"
                    id="form-Libro" name="Registro-Libro">
                    <div class="mb-4 ">
                        <label for="nombre" class="form-label ">Nombre</label>
                        <div>
                            <input type="text" class="form-control " name="Nombre" id="nombre"
                                placeholder="Ingrese el nombre del libro" />
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="editorial" class="form-label">Edad</label>
                        <div>
                            <input type="text" class="form-control" name="Edad"
                                placeholder="Ingrese editorial del libro" id="password" />
                        </div>
                    </div>
                    <div class="mb-4 ">
                        <label for="autor" class="form-label ">Peso</label>
                        <div>
                            <input type="autor" class="form-control " name="Peso" id="autor"
                                placeholder="Ingrese autor del libro" />
                        </div>
                    </div>



                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button submit" class="btn btn-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>