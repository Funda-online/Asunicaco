<style>
    .text-truncate {
        max-width: 100%;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
</style>
<div class="container-fluid">
    <div class="d-flex align-items-center justify-content-between mb-4 row">
        <h1 class="h4 mb-0 text-gray-800 col-md-6">Gestion actualités
            <div class="row mb-3 align-items-center">
                <div class="col-md-6">
                    <input type="text" id="searchInput" class="form-control" placeholder="Appliquer un Filtre">
                </div>
            </div>
        </h1>

        <div>
            <div class="btn-
             col-md-6" role="group">
                <button id="btnCard" class="btn btn-outline-primary btn-sm active" title="Vue carte">
                    <i class="fas fa-th-large"></i> <!-- Icône grille -->
                </button>
                <button id="btnList" class="btn btn-outline-secondary btn-sm" title="Vue liste">
                    <i class="fas fa-list"></i> <!-- Icône liste -->
                </button>

                <a href="<?= base_url('addActualite') ?>" class="btn btn-md text-white"
                    style="background-color: #2952A1; font-size: 14px;">Nouvelle actualité</a>
            </div>
        </div>
    </div>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    <?php endif; ?>
    <!-- actus -->
    <div class="card-body p-0">
        <div>
            <div class="row">
                <!-- Start col -->
                <div class="col-md-12">
                    <!--begin::Row-->
                    <div id="cardView" class="row g-4 mb-4">
                        <div class="row g-4 mb-4">
                            <?php foreach (array_reverse($allNews) as $actu): ?>
                                <div class="col-12 col-sm-6 col-md-4 news-item"
                                    data-search="<?= strtolower($actu['title'] . ' ' . $actu['summary'] . ' ' . ($actu['university_name'] ?? '') . ' ' . date('d M Y', strtotime($actu['date_updated']))) ?>">

                                    <!-- USERS LIST -->
                                    <div class="card bg-white" style="color: black;">
                                        <div class="card-header bg-white">
                                            <h3 class="card-title h5 card-title mb-1 text-truncate">
                                                <?= esc($actu['title']) ?>
                                            </h3>
                                            <!-- <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                            <i data-lte-icon="expand" class="fas fa-plus-lg"></i>
                                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                                            <i class="fas fa-x-lg"></i>
                                        </button>
                                    </div> -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body pt-1">
                                            <div class="row m-1">
                                                <img src="<?= base_url('assets/img/actualites/' . esc($actu['image'])) ?>"
                                                    alt="<?= esc($actu['title']) ?>" class=""
                                                    style="height: 250px; width: 350px; object-fit: cover">
                                            </div>

                                            <p class="text-muted mb-2 small">
                                                <i class="fas fa-university me-1"></i>
                                                <?= esc($actu['university'] ?? 'Université inconnue') ?>
                                            </p>

                                            <p class="text-muted mt-auto mb-0 small">
                                                Dernière modification :
                                                <?= date('d/m/Y', strtotime($actu['date_updated'])) ?>
                                            </p>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer text-center">
                                            <a href="<?= base_url('updateActualite/' . $actu['id_news']) ?>"
                                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Editer</a>
                                        </div>
                                        <!-- /.card-footer -->
                                    </div>
                                    <!-- /.card -->
                                </div>
                                <!-- /.col -->
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div id="listView" style="display: none;">
                        <div class="table-responsive">
                            <table class="table align-middle table-hover table-bordered rounded shadow-sm bg-white">
                                <thead class="table-light">
                                    <tr class="text-center">
                                        <th style="width: 40%;">Titre</th>
                                        <th style="width: 15%;">Université</th>
                                        <th style="width: 10%;">Image</th>
                                        <th style="width: 10%;">Modifiée le</th>
                                        <th style="width: 10%;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (array_reverse($allNews) as $actu): ?>
                                        <tr class="news-item"
                                            data-search="<?= strtolower($actu['title'] . ' ' . $actu['summary'] . ' ' . ($actu['university_name'] ?? '')) ?>">
                                            <!-- contenu de la ligne -->
                                            <td><strong><?= esc($actu['title']) ?></strong></td>
                                            <td> <?= esc($actu['university'] ?? '-') ?></td>
                                            <td class="text-center">
                                                <img src="<?= base_url('assets/img/actualites/' . esc($actu['image'])) ?>"
                                                    class="rounded shadow-sm"
                                                    style="height: 60px; width: 100px; object-fit: cover;">
                                            </td>
                                            <td class="text-muted text-center">
                                                 <?= date('d/m/Y', strtotime($actu['date_updated'])) ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="<?= base_url('updateActualite/' . $actu['id_news']) ?>"
                                                    class="btn btn-sm btn-outline-primary">
                                                    <i class="fas fa-edit me-1"></i>
                                                </a>

                                                 <a href="<?= base_url('deleteNews/' . $actu['id_news']) ?>"
                                                    class="btn btn-sm btn-outline-danger"
                                                    onclick="return confirm('Voulez-vous vraiment supprimer cette actualité ?')">
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
    </div>
</div>


<script>
    document.getElementById('btnCard').addEventListener('click', function () {
        document.getElementById('cardView').style.display = 'block';
        document.getElementById('listView').style.display = 'none';
        this.classList.add('active');
        document.getElementById('btnList').classList.remove('active');
    });

    document.getElementById('btnList').addEventListener('click', function () {
        document.getElementById('cardView').style.display = 'none';
        document.getElementById('listView').style.display = 'block';
        this.classList.add('active');
        document.getElementById('btnCard').classList.remove('active');
    });
</script>

<script>
    document.getElementById('searchInput').addEventListener('input', function () {
        const filter = this.value.toLowerCase();
        const items = document.querySelectorAll('.news-item');

        items.forEach(item => {
            const text = item.getAttribute('data-search');
            const isMatch = text.includes(filter);

            if (item.tagName.toLowerCase() === 'tr') {
                // pour la vue tableau
                item.style.display = isMatch ? '' : 'none';
            } else {
                // pour la vue carte
                item.classList.toggle('d-none', !isMatch);
            }
        });
    });
</script>