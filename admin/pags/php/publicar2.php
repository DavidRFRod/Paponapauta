<div class="panel-content">
  <h4 class="titulo2">PUBLICAR</h4>
  
  <form method="POST" enctype="multipart/form-data">
    <p><label for="titulo2">Titulo</label>
      <input type="text" class="form-control" id="titulo2" name="titulo2"  required>
    </p>

    <p>
      <label for="titulo2">Video</label>
      <input type="file" class="form-control" id="titulo2" name="userfile" >
    </p>

    <p>
     <textarea class="form-control" id="post" name="post" rows="5" required></textarea>
    </p>

    <p><label>Categoria</label>
        <?php get_categorias();?>
    </p>

    <p><input type="submit" value="Publicar" class="btn btn-primary btn-lg btn-block">
      <input type="hidden" name="env" value="post"></p>
  </form>
 
</div>