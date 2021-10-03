<?= $this->extend('admin/_commom/main') ?>

<?= $this->section('content') ?>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Painel de Enquetes</h1>
</div>


<h4>Minhas Enquetes</h4>


<?php echo anchor('enquete/create/', '<i class="fa fa-plus"></i> NOVA ENQUETE', ['class' => 'btn btn-primary btn-sm my-2']) ?>

<div class="table-responsive mt-3">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col" style="width: 10%;">#</th>
        <th scope="col" style="width: 55%;">Titulo Enquete</th>
        <th scope="col" style="width: 20%;">Link</th>
        <th scope="col" style="width: 15%; vertical-align: middle; text-align: center">Ação</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach ($enquetes as $enquete) : ?>
        <tr>

          <td class="align-middle"><?php echo $enquete['idEnquete']; ?></td>
          <td class="align-middle"><?php echo $enquete['tituloEnquete']; ?></td>
          <td class="align-middle"> <?php echo anchor('votacao/enquete/' .  $enquete['idEnquete']) ?></td>

          <td style="vertical-align: middle; text-align: center">
            <?php echo anchor('enquete/edit/' .  $enquete['idEnquete'], '<i class="fa fa-pencil"></i>', ['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?php echo anchor('enquete/visualizar/' .  $enquete['idEnquete'], '<i class="fa fa-eye"></i>', ['class' => 'btn btn-outline-info btn-sm']) ?>
            <?php echo anchor('enquete/delete/' . $enquete['idEnquete'], '<i class="fa fa-trash"></i>', ['onclick' => "return confirm('Deseja realmente excluir este registro?')", 'class' => 'btn btn-outline-danger btn-sm']) ?>
          </td>

        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<?= $this->endSection() ?>