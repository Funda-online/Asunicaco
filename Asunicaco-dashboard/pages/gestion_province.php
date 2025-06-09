<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tableau avec DataTables</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- DataTables CSS avec Bootstrap 5 -->
  <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">Exemple de Tableau avec Recherche & Pagination</h2>
  
  <div class="table-responsive">
    <table id="example" class="table table-striped" style="width:100%">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Âge</th>
          <th>Ville</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>Jean Dupont</td><td>35</td><td>Paris</td></tr>
        <tr><td>Marie Curie</td><td>45</td><td>Lyon</td></tr>
        <tr><td>Albert Camus</td><td>30</td><td>Marseille</td></tr>
        <tr><td>Louise Michel</td><td>40</td><td>Toulouse</td></tr>
        <tr><td>Victor Hugo</td><td>60</td><td>Bordeaux</td></tr>
        <tr><td>Emma Bovary</td><td>28</td><td>Rouen</td></tr>
        <tr><td>Georges Sand</td><td>55</td><td>Nantes</td></tr>
        <tr><td>Paul Verlaine</td><td>39</td><td>Nice</td></tr>
        <tr><td>Arthur Rimbaud</td><td>29</td><td>Metz</td></tr>
        <tr><td>Émile Zola</td><td>50</td><td>Lille</td></tr>
        <!-- Ajoute autant de lignes que nécessaire pour tester la pagination -->
      </tbody>
    </table>
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
  $(document).ready(function () {
    $('#example').DataTable({
      language: {
        url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/fr-FR.json"
      }
    });
  });
</script>

</body>
</html>
