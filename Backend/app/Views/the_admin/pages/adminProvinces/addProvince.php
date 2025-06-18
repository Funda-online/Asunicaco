<div class="container-fluid" style="width:100%; color:black">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="h4 mb-0 text-gray-800">Gestion Provinces</h1>

        <!-- <div>
            <button class="btn btn-md text-white" style="background-color: #2952A1; font-size: 14px;">Nouvelle province</button>
        </div> -->
    </div>

    <div class="card mb-4 bg-white">
        <div class="card">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title">Information de la nouvelle province</div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->
            <form>
                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Intitulé</label>
                        <input
                            type="text"
                            class="form-control"
                            name="name" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Numéro de téléphone</label>
                        <input
                            type="text"
                            class="form-control"
                            name="phone" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Adresse</label>
                        <input
                            type="text"
                            class="form-control"
                            name="adress" />
                    </div>

                    <div class="mb-3">
                        <label for="" class="form-label">Comité</label>
                        <textarea
                            name="committe"
                            id="committe"
                            rows="10"
                            class="form-control"></textarea>
                    </div>
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer">
                    <button type="submit" class="btn" style="background-color: #2952A1; color: white">Sauvergarder</button>
                </div>
                <!--end::Footer-->
            </form>
            <!--end::Form-->
        </div>
    </div>
</div>