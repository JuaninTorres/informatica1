<div class="page-header">
    <h1>Contacto</h1>
</div>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <form method="post">
            <div class="form-group ">
                <label for="name" class="control-label">Nombre:</label>
                <input class="form-control" name="name" type="text" id="name">
            </div>
            <div class="form-group ">
                <label for="email" class="control-label">Email:</label>
                <input class="form-control" name="email" type="email" id="email">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="6" placeholder="Mensaje"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-block btn-primary" type="submit" value="Enviar">
            </div>
        </form>
    </div>
</div>
<script>
    $( document ).ready(function() {
      $( "form" ).submit(function( event ) {
          alert( "Este formulario aún no esta operativo" );
          event.preventDefault();
        });
    });
</script>