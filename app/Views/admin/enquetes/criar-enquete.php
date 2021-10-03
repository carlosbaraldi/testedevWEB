<?php $this->extend('admin/_commom/main') ?>

<?php $this->section('content') ?>


<div class="card-body">
  <h4>Nova Enquete</h4>

  <form action="/enquete/save" method="post">
    <?= csrf_field() ?>

   
    <hr style="border-color: blue; border-width: 2px;">



    <div class="row my-2">
      <div class="col-sm-12">
        <div class="form-group box" id="box">

          <div class="col-sm-12 my-3 alert alert-primary" role="alert">
            <div class="form-group">
              <label for="tituloEnquete" class="form-label">Titulo Enquete</label>
              <input type="text" class="form-control" id="tituloEnquete" name="tituloEnquete" value="<?= set_value('tituloEnquete') ?>" autocomplete="off" required>
            </div>
          </div>

          <div class="col-sm-12 my-3 alert alert-primary" role="alert">
            <div class="form-group">
              <label for="perguntaEnquete" class="form-label">Pergunta para Enquete</label>
              <input type="text" class="form-control" id="perguntaEnquete" name="perguntaEnquete" value="<?= set_value('perguntaEnquete') ?>" autocomplete="off" required>
            </div>
          </div>

          <hr>

          <a id="add" class="btn btn-primary btn-sm add"> Adicionar Resposta</a>
          <p>OBS: Iclua no minimo 2 e no maximo 10 respostas</p>

          <div class="alert alert-primary" role="alert">
            <label for="resposta" class="form-label">Resposta: </label>
            <input class="col-sm-11" type="text" name="resposta[]" id="resposta1" autocomplete="off" required />
          </div>

          <div class="alert alert-primary" role="alert">
            <label for="resposta2" class="form-label">Resposta: </label>
            <input class="col-sm-11" type="text" name="resposta[]" id="resposta2" autocomplete="off" required />
          </div>

        </div>

      </div>

    </div>


    <button id="btnSalvar" class="btn btn-primary" type="submit">SALVAR ENQUETE</button>
    <a href="/home/index" class="btn btn-danger" type="submit">VOLTAR</a>

  </form>

</div>




<?php $this->endSection() ?>