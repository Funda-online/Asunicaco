<style>
    :root {
        --primary-color: #2952A1;
        --primary-light: #4a74d4;
        --secondary-color: #f8f9fa;
        --text-dark: #212529;
        --text-gray: #6c757d;
        --border-radius: 0.2rem;
    }
    
    .news-card {
        transition: all 0.3s ease;
        border: none;
        border-radius: var(--border-radius);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .news-card:hover {
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
    
    .news-card .card-img-top {
        height: 200px;
        object-fit: cover;
        width: 100%;
    }
    
    .news-card .card-body {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    
    .news-card .card-title {
        font-weight: 600;
        color: var(--text-dark);
        margin-bottom: 0.75rem;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .news-card .card-text {
        color: var(--text-gray);
        font-size: 0.875rem;
        flex-grow: 1;
    }
    
    .news-card .card-footer {
        background: white;
        border-top: none;
        padding: 1rem;
    }
    
    .action-buttons .btn {
        padding: 0.375rem 0.75rem;
        border-radius: 0.25rem;
    }
    
    .view-toggle .btn {
        width: 40px;
        height: 40px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 15%;
    }
    
    .search-box {
        position: relative;
    }
    
    .search-box .form-control {
        padding-left: 2.5rem;
    }
    
    .search-box i {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-gray);
    }
    
    .badge-university {
        background-color: rgba(41, 82, 161, 0.1);
        color: var(--primary-color);
        font-weight: 500;
    }
    
    .empty-state {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 3rem;
        text-align: center;
    }
    
    .empty-state i {
        font-size: 3rem;
        color: var(--text-gray);
        margin-bottom: 1rem;
    }
    
    @media (max-width: 768px) {
        .news-card .card-img-top {
            height: 150px;
        }
    }
</style>

<div class="container-fluid pt-2 pb-4">
    <!-- Header Section -->
    <h1 class="h4 mb-2 fw-bold text-gray-800 mb-3 text-center text-md-start d-md-none">Gestion des Actualités</h1>
    <h1 class="h4 mb-2 fw-bold text-gray-800 mb-3 text-md-start d-none d-md-block">Gestion des Actualités</h1>

    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4">
        <div class="mb-3 mb-md-0">
            <div class="search-box">
                <i class="fas fa-search"></i>
                <input type="text" id="searchInput" class="form-control" placeholder="Rechercher une actualité...">
            </div>
        </div>
        
        <div class="d-flex align-items-center">
            <div class="view-toggle btn-group mr-3" role="group">
                <button id="btnCard" class="btn btn-outline-primary active" title="Vue carte">
                    <i class="fas fa-th-large"></i>
                </button>
                <button id="btnList" class="btn btn-outline-primary" title="Vue liste">
                    <i class="fas fa-list"></i>
                </button>
            </div>
            <a href="<?= base_url('addActualite') ?>" class="btn btn-primary">
                <i class="fas fa-plus mr-2"></i>Nouvelle actualité
            </a>
        </div>
    </div>

    <!-- Alert Message -->
    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success alert-dismissible fade show shadow-sm" role="alert">
            <i class="fas fa-check-circle me-2"></i>
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    <?php endif; ?>

    <!-- News Content -->
    <div class="card border-0 shadow-sm">
        <!-- Card View -->
        <div id="cardView" class="card-body p-4">
            <?php if (empty($allNews)): ?>
                <div class="empty-state">
                    <i class="fas fa-newspaper"></i>
                    <h5 class="mb-2">Aucune actualité disponible</h5>
                    <p class="text-muted">Commencez par créer une nouvelle actualité</p>
                    <a href="<?= base_url('addActualite') ?>" class="btn btn-primary mt-2">
                        <i class="fas fa-plus me-2"></i>Créer une actualité
                    </a>
                </div>
            <?php else: ?>
                <div class="row g-4">
                    <?php foreach (array_reverse($allNews) as $actu): ?>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3 news-item"
                            data-search="<?= strtolower($actu['title'] . ' ' . $actu['summary'] . ' ' . ($actu['university'] ?? '') . ' ' . date('d M Y', strtotime($actu['date_updated']))) ?>">
                            <div class="news-card card h-100 shadow-sm">
                                <img src="<?= base_url('assets/img/actualites/' . esc($actu['image'])) ?>"
                                    class="card-img-top"
                                    alt="<?= esc($actu['title']) ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?= esc($actu['title']) ?></h5>
                                    <div class="d-flex align-items-center mb-2">
                                        <span class="badge badge-university me-2">
                                            <i class="fas fa-university me-1"></i>
                                            <?= esc($actu['university'] ?? 'Université inconnue') ?>
                                        </span>
                                    </div>
                                    <p class="card-text text-muted small">
                                        <i class="far fa-clock me-1"></i>
                                        Modifiée le <?= date('d/m/Y', strtotime($actu['date_updated'])) ?>
                                    </p>
                                </div>
                                <div class="card-footer d-flex justify-content-between align-items-center">
                                    <a href="<?= base_url('updateActualite/' . $actu['id_news']) ?>"
                                        class="btn btn-sm btn-outline-primary">
                                        <i class="fas fa-edit me-1"></i>Éditer
                                    </a>
                                    <a href="<?= base_url('deleteNews/' . $actu['id_news']) ?>"
                                        class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Voulez-vous vraiment supprimer cette actualité ?')">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <!-- List View -->
        <div id="listView" class="card-body p-0" style="display: none;">
            <?php if (empty($allNews)): ?>
                <div class="empty-state">
                    <i class="fas fa-newspaper"></i>
                    <h5 class="mb-2">Aucune actualité disponible</h5>
                    <p class="text-muted">Commencez par créer une nouvelle actualité</p>
                    <a href="<?= base_url('addActualite') ?>" class="btn btn-primary mt-2">
                        <i class="fas fa-plus me-2"></i>Créer une actualité
                    </a>
                </div>
            <?php else: ?>
                <div class="table-responsive">
                    <table class="table table-hover table-news mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 30%;">Titre</th>
                                <th style="width: 20%;">Université</th>
                                <th style="width: 15%;">Image</th>
                                <th style="width: 15%;">Date</th>
                                <th style="width: 20%;" class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach (array_reverse($allNews) as $actu): ?>
                                <tr class="news-item"
                                    data-search="<?= strtolower($actu['title'] . ' ' . $actu['summary'] . ' ' . ($actu['university_name'] ?? '')) ?>">
                                    <td>
                                        <strong><?= esc($actu['title']) ?></strong>
                                    </td>
                                    <td>
                                        <span class="badge badge-university">
                                            <?= esc($actu['university'] ?? '-') ?>
                                        </span>
                                    </td>
                                    <td>
                                        <img src="<?= base_url('assets/img/actualites/' . esc($actu['image'])) ?>"
                                            class="rounded shadow-sm img-thumbnail"
                                            style="height: 60px; width: 100px; object-fit: cover;">
                                    </td>
                                    <td class="text-muted">
                                        <?= date('d/m/Y', strtotime($actu['date_updated'])) ?>
                                    </td>
                                    <td class="text-end action-buttons">
                                        <div class="d-flex justify-content-end">
                                            <a href="<?= base_url('updateActualite/' . $actu['id_news']) ?>"
                                                class="btn btn-sm btn-outline-primary mr-1">
                                                <i class="fas fa-edit me-1"></i>Éditer
                                            </a>
                                            <a href="<?= base_url('deleteNews/' . $actu['id_news']) ?>"
                                                class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Voulez-vous vraiment supprimer cette actualité ?')">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>
    // View Toggle
    document.getElementById('btnCard').addEventListener('click', function() {
        document.getElementById('cardView').style.display = 'block';
        document.getElementById('listView').style.display = 'none';
        this.classList.add('active');
        document.getElementById('btnList').classList.remove('active');
        localStorage.setItem('newsViewMode', 'card');
    });

    document.getElementById('btnList').addEventListener('click', function() {
        document.getElementById('cardView').style.display = 'none';
        document.getElementById('listView').style.display = 'block';
        this.classList.add('active');
        document.getElementById('btnCard').classList.remove('active');
        localStorage.setItem('newsViewMode', 'list');
    });

    // Restore view mode from localStorage
    document.addEventListener('DOMContentLoaded', function() {
        const savedViewMode = localStorage.getItem('newsViewMode') || 'card';
        if (savedViewMode === 'list') {
            document.getElementById('btnList').click();
        }
    });

    // Search Functionality
    document.getElementById('searchInput').addEventListener('input', function() {
        const filter = this.value.toLowerCase();
        const items = document.querySelectorAll('.news-item');

        items.forEach(item => {
            const text = item.getAttribute('data-search');
            const isMatch = text.includes(filter);

            if (item.tagName.toLowerCase() === 'tr') {
                item.style.display = isMatch ? '' : 'none';
            } else {
                item.style.display = isMatch ? 'block' : 'none';
            }
        });
    });
</script>