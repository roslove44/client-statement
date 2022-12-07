<?php
$page_title = "TABLEAU DE BORD";
require_once('./includes/header.php');
?>
<div class="container-fluid py-4">

  <div class="row justify-content-around">
    <div class="col-lg-9 mt-4">
      <div class="card h-100 mb-4">
        <div class="card-header pb-0 px-3">
          <div class="row">
            <div class="col-md-6">
              <h6 class="mb-0">Les Règlements</h6>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center">
              <i class="far fa-calendar-alt me-2"></i>
              <small>Exercice 2022-2023</small>
            </div>
          </div>
        </div>
        <div class="card-body pt-4 p-3">
          <h6 class="text-uppercase text-body text-xs font-weight-bolder my-3">Yesterday</h6>
          <ul class="list-group">
            <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
              <div class="d-flex align-items-center">
                <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-3 btn-sm d-flex align-items-center justify-content-center"><i class="fas fa-arrow-up"></i></button>
                <div class="d-flex flex-column">
                  <h6 class="mb-1 text-dark text-sm">Chèque n°400 ECOBANK VICO</h6>
                  <span class="text-xs">Date : 26 March 2020, at 13:45 PM</span>
                  <strong style="text-decoration: underline;">Répartition</strong>
                  <div class="text-xs m-0 p-0">
                    <span>Facture EM12005424 : 10 000 FCFA</span>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center text-success text-gradient text-sm font-weight-bold">
                + $ 750
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <?php
  require_once('./includes/footer.php');
  ?>