<?php
$page_title = "TABLEAU DE BORD";
require_once('./includes/header.php');
?>


<div class="container-fluid py-4">
  <div class="row">
    <!-- Ajouter une facture  -->
    <div class="col-12 col-xl-12">
      <div class="card h-100">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-md-8 d-flex align-items-center">
              <h6 class="mb-0">Ajouter un Règlement Client</h6>
            </div>
          </div>
        </div>
        <div class="card-body p-3">
          <form action="" method="post">
            <div class="form-group">
              <label for="client">Client</label>
              <select class="form-select" aria-label="" required name="client">
                <option value="">Sélectionner le Client</option>
                <option value="VICO">VICO</option>
                <option value="RDS">RDS</option>
              </select>
            </div>
            <div class="form-group col-lg-12">
              <label for="date_ref">Date de Règlement </label>
              <input type="date" name="date_ref" id="date_ref" class="form-control" required>
            </div>

            <div class="form-group">
              <label for="payment_method">Moyen de Paiement</label>
              <select class="form-select" aria-label="" required name="payment-method">
                <option value="">Sélectionner Moyen de Paiement</option>
                <option value="Chèque">Chèque</option>
                <option value="Espèce">Espèce</option>
                <option value="Virement Bancaire">Virement Bancaire</option>
                <option value="Mobile Money">MTN Momo or MOOV Money</option>
              </select>
            </div>

            <div class="row">
              <div class="form-group col-lg-6">
                <label for="ref">Ref Pièce de paiement </label>
                <input type="text" name="ref" id="ref" class="form-control" required>
              </div>
              <div class="form-group col-6">
                <label for="total_amount">Montant Total</label>
                <input type="number" name="total_amount" id="total_amount" class="form-control" required>
              </div>
            </div>

            <button type="submit" class="w-100 btn bg-gradient-info">Soumettre</button>
          </form>

        </div>
      </div>
    </div>

    <div class="col-12 my-3">
      <div class="card h-100">
        <div class="card-header pb-0 p-3">
          <div class="row">
            <div class="col-md-6">
              <h6 class="mb-0">Règlement VICO</h6>
              <li>Mode de Paiement : 450000 FCFA</li>
              <li>Référence Pièce de Paiement</li>
              <li>Date : XX/YY/2023</li>
            </div>

            <div class="col-md-6">
              <h6 class="mb-0">Répartition des Paiements</h6>
              <li>F131VICO031122 : 450000 FCFA</li>
            </div>
          </div>
        </div>
        <div class="card-body p-3">
          <form action="" method="post">

            <div class="row">
              <div class="form-group col-5">
                <label for="ref_pay">Référence Facture</label>
                <select class="form-select" aria-label="" required name="ref_pay">
                  <option value="">Sélectionner la Facture</option>
                  <option value="F130078512">F130078512</option>
                </select>
              </div>
              <div class="form-group col-4">
                <label for="total_amount">Montant Payé</label>
                <input type="number" name="total_amount" id="total_amount" class="form-control" required>
              </div>
              <div class="form-group col-3 d-flex align-items-end mb-0">
                <button type="submit" class="btn bg-gradient-info w-100">AJOUTER</button>
              </div>
            </div>
          </form>
        </div>

        <div class="card-footer">
          <form action="" method="post">
            <input type="checkbox" name="done" id="done" checked class="d-none">
            <button type="submit" class="btn bg-gradient-success w-100" disabled>Valider La Transaction</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <?php
  require_once('./includes/footer.php');
  ?>