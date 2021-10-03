<?php $this->extend('_commomSite/main') ?>

<?php $this->section('content') ?>


<div class="card-body">
  <h4 class="text-center">Resultado da Enquete</h4>



  <hr style="border-color: blue; border-width: 2px;">


  <div class="row my-2">
    <div class="col-sm-12">
      <div class="form-group box" id="box">

        <div class="card ">
          <h5 class="card-header text-center"><strong><?php echo $enquete['tituloEnquete'] ?></strong></h5>
          <div class="card-body">
            <h5 class="card-title text-center"><strong> <?php echo ($enquete['perguntaEnquete']) ?> </strong></h5>
          </div>

          <?php foreach ($respostas as $resposta) : ?>

            <div class="card-footer text-muted">
              <?php echo $resposta['resposta'] ?>
              <div class="progress col-sm-12">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $qtdVotos != 0 ? (($resposta['qtdVotos'] / $qtdVotos) * 100) . '%' : '0 VOTOS' ?>" aria-valuemin="0" aria-valuemax="100"><?php echo $qtdVotos != 0 ? (($resposta['qtdVotos'] / $qtdVotos) * 100) . '%' : '0 VOTOS' ?></div>
              </div>
              <div class="progress col-sm-1">
                <div><strong> <?php echo ($resposta['qtdVotos']) . ' VOTOS' ?> </strong></div>
              </div>
            </div>

          <?php endforeach; ?>

          <div class="card-footer text-muted text-center">
            <strong>TOTAL DE VOTOS: <?php echo ($qtdVotos) . ' VOTOS' ?></strong>

          </div>

        </div>

      </div>

    </div>

  </div>

  <a href="/votacao/enquete/<?php echo $enquete['idEnquete'] ?>" class="btn btn-primary" type="submit">VOTAR NOVAMENTE</a>


  </form>

</div>




<?php $this->endSection() ?>