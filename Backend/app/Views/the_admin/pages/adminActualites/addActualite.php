<div class="container-fluid" style="width:100%; color:black">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Gestion Actualités</h1>
    </div>

    <div class="card mb-4 p-4 bg-white">
        <form method="post" enctype="multipart/form-data">
            <!--begin::Body-->

            <div class="mb-3">
                <label for="" class="form-label">Titre</label>
                <input
                    type="text"
                    class="form-control"
                    name="titre" />
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Contenu de l'article</label>
                <textarea
                    name="committe"
                    id="content"
                    rows="10"
                    class="form-control"></textarea>
            </div>

            <div class="card-footer px-0">
                <button type="submit" class="btn" style="background-color: #2952A1; color: white">Sauvergarder</button>
                <button type="button" class="btn" style="background-color: #2952A1; color: white" onclick="showPreview()">Prévisualiser</button>
            </div>
            <!--end::Footer-->
        </form>

        <div id="preview-container">
            <h5>Aperçu du contenu</h5>
            <div id="preview"></div>
        </div>
    </div>
</div>

<script>
  tinymce.init({
    selector: 'textarea',
    language: 'fr_FR', // ← Changer la langue ici
    language_url: 'https://cdn.tiny.cloud/1/no-api-key/tinymce/6/langs/fr_FR.js',
    plugins: [
      // Core editing features
      'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount',
      // Your account includes a free trial of TinyMCE premium features
      // Try the most popular premium features until Jun 12, 2025:
      'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
    ],
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
  });

  
      function showPreview() {
        const content = tinymce.get('content').getContent();
        document.getElementById('preview').innerHTML = content;
        document.getElementById('preview-container').style.display = 'block';
      }

      
    
</script>