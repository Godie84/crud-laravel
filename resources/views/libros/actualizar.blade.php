<!-- Modal -->
<div class="modal fade" id="modal{{$libro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Actualizar libros</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulario de actualización -->
                <form method="POST" action="{{ route('libros.update', $libro) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" value="{{ $libro->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción</label>
                        <input id="descripcion" class="form-control" type="text" name="descripcion" value="{{ $libro->descripcion }}" required>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor</label>
                        <input id="autor" class="form-control" type="text" name="autor" value="{{ $libro->autor }}" required>
                    </div>
                    <!-- Botón de submit dentro del formulario -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
