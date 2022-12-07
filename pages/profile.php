<?php
$page_title = "AJOUTER CLIENT / FACTURE";
require_once('./includes/header.php');
require('../src/model/client.php');
?>


<div class="container-fluid py-4">
    <div class="row">
        <!-- Ajouter une facture  -->
        <div class="col-12 col-xl-8">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                            <h6 class="mb-0">Ajouter une Facture</h6>
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="client">Client</label>
                            <select class="form-select" aria-label="" required>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="ref">Ref Facture </label>
                            <input type="text" name="ref" id="ref" class="form-control" required>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="amountHT">Montant HT</label>
                                <input type="number" name="amountHT" id="amountHT" class="form-control" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="TVA">Montant TVA</label>
                                <input type="number" name="tva" id="TVA" class="form-control" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <label for="aib_f">AIB facturé </label>
                                <input type="number" name="aib_f" id="aib_f" class="form-control" value="0" required>
                            </div>
                            <div class="form-group col-6">
                                <label for="aib_r">AIB retenu par le client</label>
                                <input type="number" name="aib_r" id="aib_r" class="form-control" value="0" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="other_fee">Autre Taxe</label>
                            <input type="number" name="other_fee" id="other_fee" class="form-control" value="0" required>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Joindre la Facture</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <button type="submit" class="w-100 btn btn-secondary">Soumettre</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- Supprimer une facture -->
        <div class="col-12 col-xl-4">
            <div class="card h-auto">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Supprimer une Facture</h6>
                </div>
                <div class="card-body p-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="d_invoice">Réf</label>
                            <input type="text" class="form-control" id="d_invoices" required name="d_invoice">
                        </div>

                        <button type="submit" class="btn btn-danger w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 col-xl-6">
            <div class="card h-auto">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Ajouter un client</h6>
                </div>
                <div class="card-body p-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="sigle">Client Sigle:</label>
                            <input type="text" class="form-control" id="sigle" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-6">
            <div class="card h-auto mt-2">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Supprimer un client</h6>
                </div>
                <div class="card-body p-3">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="sigle">Client Sigle:</label>
                            <input type="text" class="form-control" id="sigle" required>
                        </div>

                        <button type="submit" class="btn btn-danger w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <?php
    require_once('./includes/footer.php');
    ?>