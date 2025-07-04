<div class="container-fluid" style="width:100%; color:black">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Gestion Universités</h1>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    <?php endif; ?>

    <div class="card mb-4 bg-white">
        <div class="card">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Information de l'université</div>
            </div>
            <!--end::Header-->

            <!--begin::Form-->
            <form id="uploadForm" action="<?= base_url('/saveUpdateUniversity') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <input type="hidden" name="id_university" value="<?= esc($university['id_university']) ?>">

                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Nom de l'université *</label>
                            <input type="text" name="name" class="form-control" required
                                value="<?= esc($university['name']) ?>">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Ville</label>
                            <input type="text" name="ville" class="form-control"
                                value="<?= esc($university['ville']) ?>">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Province</label>
                            <select name="id_province" class="form-control" required>
                                <?php foreach ($provinces as $province): ?>
                                    <option value="<?= esc($province['id_province']) ?>"
                                        <?= $province['id_province'] == $university['id_province'] ? 'selected' : '' ?>>
                                        <?= esc($province['name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Adresse</label>
                            <input type="text" name="address" class="form-control"
                                value="<?= esc($university['address']) ?>">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control"
                                value="<?= esc($university['email']) ?>">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Téléphone</label>
                            <input type="text" name="phone" class="form-control"
                                value="<?= esc($university['phone']) ?>">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Site web</label>
                            <input type="url" name="website" class="form-control"
                                value="<?= esc($university['website']) ?>">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-control" accept="image/*">
                            <?php if (!empty($university['logo'])): ?>
                                <div class="mt-2">
                                    <img src="<?= base_url('assets/img/logo-universite/' . $university['logo']) ?>"
                                        alt="Logo" height="60">
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label">Images de l'université</label>
                            <input type="file" name="images[]" class="form-control" accept="image/*" multiple>

                            <?php
                            $images = json_decode($university['images'] ?? '', true);
                            if (!empty($images)):
                                ?>
                                <div class="mt-3 row">
                                    <?php foreach ($images as $index => $img): ?>
                                        <div class="col-md-3 mb-3 text-center">
                                            <img src="<?= base_url('assets/img/universites/' . $img) ?>"
                                                class="img-fluid rounded" style="max-height: 120px;">
                                            <div class="form-check mt-1">
                                                <input class="form-check-input" type="checkbox" name="delete_images[]"
                                                    value="<?= esc($img) ?>" id="delete_<?= $index ?>">
                                                <label class="form-check-label small"
                                                    for="delete_<?= $index ?>">Supprimer</label>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="description" rows="4"
                                class="form-control"><?= esc($university['description']) ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </div>
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/n4czdrn2msccuqoqsd4fjf2v2j0c3uwp8mhq2va5v77b87vs/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#description',
        height: 500,
        plugins: [
            'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
            'anchor', 'searchreplace', 'visualblocks', 'code', 'fullscreen',
            'insertdatetime', 'media', 'table', 'help', 'wordcount'
        ],
        toolbar: 'undo redo | blocks | ' +
            'bold italic backcolor | alignleft aligncenter ' +
            'alignright alignjustify | bullist numlist outdent indent | ' +
            'removeformat | help',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
    });


    function showPreview() {
        const content = tinymce.get('content').getContent();
        document.getElementById('preview').innerHTML = content;
        document.getElementById('preview-container').style.display = 'block';
    }    
</script>

<script>
    document.getElementById('uploadForm').addEventListener('submit', function (e) {
        const files = document.getElementById('images').files;
        const maxFileSize = 5 * 1024 * 1024; // 5 Mo
        const maxTotalSize = 40 * 1024 * 1024; // 40 Mo
        const maxFiles = 20;

        let totalSize = 0;
        let error = '';

        if (files.length > maxFiles) {
            error = `Vous pouvez uploader au maximum ${maxFiles} fichiers.`;
        } else {
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                totalSize += file.size;

                if (!file.type.startsWith('image/')) {
                    error = 'Seules les images sont autorisées.';
                    break;
                }

                if (file.size > maxFileSize) {
                    error = `Le fichier "${file.name}" dépasse la taille maximale de 5 Mo.`;
                    break;
                }
            }

            if (totalSize > maxTotalSize) {
                error = 'La taille totale des fichiers dépasse 40 Mo.';
            }
        }

        if (error !== '') {
            e.preventDefault();
            document.getElementById('error-message').textContent = error;
        }
    });
</script>