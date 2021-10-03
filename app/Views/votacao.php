<?php $this->extend('_commomSite/main') ?>

<?php $this->section('content') ?>


<div class="card-body">
    <h4>ENQUETE</h4>

    <form action="/votacao/save" method="post">
        <?= csrf_field() ?>

        <hr style="border-color: blue; border-width: 2px;">


        <div class="row my-2">
            <div class="col-sm-12">
                <div class="form-group box" id="box">

                    <div class="card ">
                        <h5 class="card-header text-center"><strong><?php echo $enquete['perguntaEnquete'] ?></strong></h5>
                        <div class="card-body">
                            <?php foreach ($respostas as $resposta) : ?>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="idResposta" value="<?php echo $resposta['idResposta'] ?>">
                                    <label class="form-check-label" for="<?php echo $resposta['idResposta'] ?>">
                                        <?php echo $resposta['resposta'] ?>
                                    </label>
                                </div>

                            <?php endforeach; ?>
                        </div>

                    </div>

                </div>

            </div>

        </div>


        <button id="btnSalvar" class="btn btn-primary" type="submit">VOTAR NA ENQUETE</button>


    </form>

</div>




<?php $this->endSection() ?>