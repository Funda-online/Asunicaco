<div class="container-fluid" style="width:100%; color:black">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Gestion Universités</h1>
    </div>

    <div class="card mb-4 bg-white">
        <div class="card">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Information de l'université</div>
            </div>
            <!--end::Header-->

            <!--begin::Form-->
            <form>
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom de l'université</label>
                        <input type="text" class="form-control" name="name" id="name" />
                    </div>

                    <div class="mb-3">
                        <label for="ville" class="form-label">Ville</label>
                        <input type="text" class="form-control" name="ville" id="ville" />
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Adresse</label>
                        <input type="text" class="form-control" name="address" id="address" />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" />
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input type="text" class="form-control" name="phone" id="phone" />
                    </div>

                    <div class="mb-3">
                        <label for="website" class="form-label">Site web</label>
                        <input type="text" class="form-control" name="website" id="website" />
                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label">Logo</label>
                        <input type="file" class="form-control" name="logo" id="logo" />
                    </div>

                    <div class="mb-3">
                        <label for="faculties" class="form-label">Facultés</label>
                        <textarea name="faculties" id="faculties" rows="6" class="form-control"></textarea>
                    </div>
                </div>
                <!--end::Body-->

                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn" style="background-color: #2952A1; color: white">Sauvegarder</button>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>
