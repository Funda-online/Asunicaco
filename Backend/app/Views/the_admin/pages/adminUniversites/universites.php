<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-flex align-items-center justify-content-between mb-4"> -->
    <!-- <h1 class="h3 mb-0 text-gray-800">Dashboard</h1> -->

    <div class="d-flex align-items-center justify-content-between mt-1 mb-4">
        <h1 class="h4 mb-0 text-gray-800">Gestion universités</h1>

        <div>
                <a href="<?= base_url('addUniversite') ?>" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i>Nouvelle université
            </a>
        </div>
    </div>
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

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
                            <?php
                            foreach ($universites as $item):
                                ?>
                                <tr>
                                    <td>
                                        <?= esc($item['name']) ?>
                                    </td>
                                    <td>
                                        <?= esc($item['province']) ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('updateUniversity/' . $item['id_university']) ?>"
                                            class="btn btn-sm btn-outline-primary">
                                            <i class="fas fa-edit me-1"></i>
                                        </a>

                                        <a href="<?= base_url('/deleteUniversity/' . $item['id_university']) ?>"
                                            class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Voulez-vous vraiment supprimer cette université ?')">
                                            <i class="fas fa-trash-alt me-1"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>