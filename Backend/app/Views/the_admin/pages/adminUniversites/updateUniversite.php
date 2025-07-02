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
            <form action="<?= base_url('/saveUpdateUniversity') ?>" method="post" enctype="multipart/form-data">
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
                                    <img src="<?= base_url('assets/img/logo-universite/' . $university['logo']) ?>" alt="Logo"
                                        height="60">
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