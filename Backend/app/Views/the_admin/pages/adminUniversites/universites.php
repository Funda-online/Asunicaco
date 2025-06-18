<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-flex align-items-center justify-content-between mb-4"> -->
    <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->

    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Gestion universités</h1>

        <div>
            <a href="<?= base_url('addUniversite') ?>" class="btn btn-md text-white" style="background-color: #2952A1; font-size: 14px;">Nouvelle université</a>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-white">
            <h3 class="card-title h6 fw-bold" style="color: black;">Liste des universités</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
            <div class="container">
                <div class="table-responsive">
                    <table id="example" class="table table-striped" style="width:100%; color:black">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Province</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Université Maria Malkia (UMM)</td>
                                <td>Haut-Katanga</td>
                                <td>
                                    <button class="btn btn-sm text-white" style="background-color: #2952A1;">Éditer</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Université Don Bosco de Lubumbashi (UDBL)</td>
                                <td>Haut-Uélé</td>
                                <td>
                                    <button class="btn btn-sm text-white" style="background-color: #2952A1;">Éditer</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Institut Facultaire Théophile Reyn</td>
                                <td>Lualaba</td>
                                <td>
                                    <button class="btn btn-sm text-white" style="background-color: #2952A1;">Éditer</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Institut Supérieur Interdiocésain Monseigneur Mulolwa (ISIM)</td>
                                <td>Kasaï Central</td>
                                <td>
                                    <button class="btn btn-sm text-white" style="background-color: #2952A1;">Éditer</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Institut Supérieur des Arts et Métiers Marie Auxiliatrice (ISAMM)s</td>
                                <td>Kinshasa</td>
                                <td>
                                    <button class="btn btn-sm text-white" style="background-color: #2952A1;">Éditer</button>
                                </td>
                            </tr>
                            <!-- Continue avec les autres provinces si nécessaire -->
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>