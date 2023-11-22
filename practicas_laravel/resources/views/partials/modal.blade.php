
<!-- Modal -->
<div class="modal fade" id="editar{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar recuerdo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
      <form method = "POST" action="/recuerdo/{{ $item->id }}/confirm">
  @csrf <!--   GENERADOR DE TOKEN //Con esta línea generamos un token oculto para que el middleware no bloqué la petición por POST -->
  
  <div class="mb-3">
    <label class="form-label">Título: </label>
    <input type="text" name ="txtTitulo" class="form-control" value="{{ $item->titulo }}" >
    <p class="text-danger fst-italic">{{$errors->first('txtTitulo')}}      </p>
  </div>

  <div class="mb-3">
    <label class="form-label">Recuerdo: </label>
    <input type="text" name= "txtRecuerdo" class="form-control" value="{{$item->recuerdo}}">
    <p class="text-danger fst-italic">{{$errors->first('txtRecuerdo')}}      </p> 
  </div>
  

  

      </div> <!-- CIERRA BODY -->
      
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
      </div>
    </div>
  </div>
</div>