<?php $this->extend('admin/_commom/main') ?>

<?php $this->section('content') ?>


<div class="card-body">
  <h4>Editar Enquete</h4>

  <form action="/enquete/update" method="post">
    <?= csrf_field() ?>


    <hr style="border-color: blue; border-width: 2px;">


    <div class="row my-2">
      <div class="col-sm-12">
        <div class="form-group box" id="box">

          <div class="col-sm-12 my-3 alert alert-primary" role="alert">
            <div class="form-group">
              <label for="tituloEnquete" class="form-label">Titulo Enquete</label>
              <input type="text" class="form-control" id="tituloEnquete" name="tituloEnquete" value="<?php echo isset($enquete['tituloEnquete']) ? $enquete['tituloEnquete'] : '' ?>" autocomplete="off" required>
            </div>
          </div>

          <div class="col-sm-12 my-3 alert alert-primary" role="alert">
            <div class="form-group">
              <label for="perguntaEnquete" class="form-label">Pergunta para Enquete</label>
              <input type="text" class="form-control" id="perguntaEnquete" name="perguntaEnquete" value="<?php echo isset($enquete['perguntaEnquete']) ? $enquete['perguntaEnquete'] : '' ?>" autocomplete="off" required>
            </div>
          </div>

          <hr>

          <a id="add" class="btn btn-primary btn-sm add"> Adicionar Resposta</a>
          <p>OBS: Iclua no minimo 2 e no maximo 12 respostas</p>


          <?php foreach ($respostas as $resposta) : ?>

            <div class="alert alert-primary" role="alert">
              <label for="" class="form-label">Resposta: </label>
              <input class="col-sm-11" type="text" name="resposta[]" id="resposta1" autocomplete="off" value="<?php echo isset($resposta['resposta']) ? $resposta['resposta'] : '' ?>" required />

              <?php echo anchor('enquete/deleteResposta/' . $resposta['idResposta'] . '/' . $enquete['idEnquete'], '<i class="fa fa-trash"></i>', ['onclick' => "return confirm('Deseja realmente excluir este registro?')", 'class' => 'btn btn-outline-danger btn-sm']) ?>
            </div>

          <?php endforeach; ?>

          <div class="d-none">
            <input type="text" class="form-control" name="idEnquete" value="<?php echo isset($enquete['idEnquete']) ? $enquete['idEnquete'] : '' ?>" readonly>
          </div>


        </div>

      </div>

    </div>


    <button id="btnSalvar" class="btn btn-primary" type="submit">SALVAR ENQUETE</button>
    <a href="/home/index" class="btn btn-danger" type="submit">VOLTAR</a>


  </form>

</div>


<?php $this->endSection() ?>