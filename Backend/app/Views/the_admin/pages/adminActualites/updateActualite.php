<div class="container-fluid" style="width:100%; color:black">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Gestion Actualités</h1>
    </div>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
        </div>
    <?php endif; ?>

    <?php if (!empty($news)): ?>
        <div class="card mb-4 p-4 bg-white shadow rounded">
            <form method="post" enctype="multipart/form-data" action="<?= site_url('/updateNews') ?>">
                <!-- Champ caché pour l'ID de l'article -->
                <input type="hidden" name="id" value="<?= esc($news['id_news']) ?>">

                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" value="<?= esc($news['title']) ?>" class="form-control" name="title" id="title" required />
                </div>

                <div class="mb-3">
                    <label for="university" class="form-label">Université </label>
                    <select name="university" id="university" class="form-control" required>
                        <?php foreach ($allUniversity as $univ): ?>
                            <option value="<?= esc($univ['id_university']) ?>" <?= $univ['name'] == $news['university'] ? 'selected' : '' ?>>
                                <?= esc($univ['name']) ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Image d'illustration</label>
                    <div id="drop-zone" class="border border-2 border-primary p-4 text-center" style="cursor: pointer;">
                        <p id="drop-text">Glissez l'image ici ou cliquez pour choisir un fichier</p>
                        <input type="file" name="image" id="image" accept="image/*" hidden>
                    </div>
                    <div id="previewImage" class="mt-3">
                        <?php if (!empty($news['image'])): ?>
                            <div class="text-center">
                                <img src="<?= base_url('assets/img/actualites/' . esc($news['image'])) ?>" class="img-fluid rounded mb-2" style="max-height: 200px;">
                                <br>
                                <button type="button" class="btn btn-sm btn-danger mt-1" onclick="removeFile()">Supprimer l'image</button>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenu de l'article</label>
                    <textarea name="content" id="content" rows="10" class="form-control" required><?= esc($news['content']) ?></textarea>
                </div>

                <div class="card-footer px-0">
                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                    <!-- <button type="button" class="btn btn-secondary" onclick="showPreview()">Prévisualiser</button> -->
                </div>
            </form>
<!-- 
            <div id="preview-container" class="mt-4">
                <h5 class="mb-2">Aperçu du contenu</h5>
                <div id="preview" class="border p-3 rounded bg-light"></div>
            </div> -->
        </div>
    <?php endif; ?>
</div>
<script src="https://cdn.tiny.cloud/1/n4czdrn2msccuqoqsd4fjf2v2j0c3uwp8mhq2va5v77b87vs/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>
<script>
    const dropZone = document.getElementById('drop-zone');
    const input = document.getElementById('image');
    const preview = document.getElementById('previewImage');
    const dropText = document.getElementById('drop-text');

    // Ouvre le sélecteur de fichier
    dropZone.addEventListener('click', () => input.click());

    input.addEventListener('change', () => {
        handleFiles(input.files);
    });

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('bg-light');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('bg-light');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('bg-light');
        const files = e.dataTransfer.files;
        input.files = files;
        handleFiles(files);
    });

    function handleFiles(files) {
        if (files.length > 0 && files[0].type.startsWith('image/')) {
            const reader = new FileReader();
            reader.onload = (e) => {
                preview.innerHTML = `
                    <div class="text-center">
                        <img src="${e.target.result}" class="img-fluid rounded mb-2" style="max-height: 200px;">
                        <br>
                        <button type="button" class="btn btn-sm btn-danger" onclick="removeFile()">Supprimer</button>
                    </div>
                `;
            };
            reader.readAsDataURL(files[0]);
        } else {
            preview.innerHTML = '<p class="text-danger">Le fichier n\'est pas une image valide.</p>';
        }
    }

    function removeFile() {
        // Réinitialise le champ input
        input.value = '';
        preview.innerHTML = '';
    }
</script>

<script>
    $(document).ready(function () {
        $('#university').select2({
            placeholder: "Choisir une université",
            allowClear: true
        });
    });
</script>

<script>
    tinymce.init({
        selector: 'textarea#content',
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