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
            <form id="uploadForm" action="<?= base_url('/saveUniversity') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Nom de l'université *</label>
                            <input type="text" class="form-control" name="name" id="name" required />
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="ville" class="form-label">Ville</label>
                            <input type="text" class="form-control" name="ville" id="ville" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="id_province" class="form-label">Province</label>
                            <select name="id_province" id="id_province" class="form-select form-control" required>
                                <option value="">-- Sélectionnez --</option>
                                <?php foreach ($provinces as $province): ?>
                                    <option value="<?= esc($province['id_province']) ?>">
                                        <?= esc($province['name']) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Adresse</label>
                            <input type="text" class="form-control" name="address" id="address" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" />
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="phone" class="form-label">Téléphone</label>
                            <input type="text" class="form-control" name="phone" id="phone" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="website" class="form-label">Site web</label>
                            <input type="url" class="form-control" name="website" id="website" />
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="logo" class="form-label">Logo</label>
                            <input type="file" class="form-control" name="logo" id="logo" accept="image/*" />
                        </div>

                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="images" class="form-label">Images de l'université</label>
                            <input type="file" class="form-control" name="images[]" id="images" multiple
                                accept="image/*" />
                            <small class="text-muted">Vous pouvez sélectionner plusieurs images</small>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Autres informations de l'université</label>
                        <textarea name="description" id="description" rows="4" class="form-control"></textarea>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <div id="error-message" style="color: red;"></div>
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