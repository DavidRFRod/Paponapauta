<div class="panel-content">
  <h4 class="titulo2">PUBLICAR</h4>
  
  <form method="POST" enctype="multipart/form-data">
    <p><label for="titulo2">Titulo</label>
      <input type="text" class="form-control" id="titulo" name="titulo"  required>
    </p>

    <p>
      <label for="titulo2">Video</label>
      <input type="file" class="form-control" id="titulo" name="userfile2" >
    </p>

    <p>
     <textarea class="form-control" id="post2" name="post" rows="5" required></textarea>
    </p>

    <p><label>Categoria</label>
        <?php get_categorias();?>
    </p>

    <p><input type="submit" value="Publicar" class="btn btn-primary btn-lg btn-block">
      <input type="hidden" name="env" value="postvideo"></p>
  </form>
  <?php enviarPostVideo();?>
</div>