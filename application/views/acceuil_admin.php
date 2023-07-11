
<!-- header -->
<header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">TABLEAU DE BORD</h1>
        </div>
</header>
<?php if (isset($regimes) && !empty($regimes)): ?>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($regimes as $regime): ?>
        <tr>
            <td><?= $regime->nom ?></td>
            <td><?= $regime->description ?></td>
            <td>
                <a href="<?= site_url('regimes/edit/'.$regime->id) ?>">Modifier</a>
                <a href="<?= site_url('regimes/delete/'.$regime->id) ?>">Supprimer</a>
            </td>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun régime trouvé.</p>
        <?php endif; ?>
        <tr>
            <td>
                <input type="text" name="nom" placeholder="Nom du régime">
            </td>
            <td>
                <input type="text" name="description" placeholder="Description du régime">
            </td>
            <td>
                <a href="<?= site_url('regimes/create') ?>">Ajouter</a>
            </td>
        </tr>
    </tbody>
</table>

<!-- SPORTS -->
<?php if (isset($activites) && !empty($activite)): ?>

<table>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
    <tbody>
      <?php foreach ($activites as $activite): ?>
        <tr>
                <td><?= $activite->nom ?></td>
                <td><?= $activite->description ?></td>
                <td>
                    <a href="<?= site_url('acceuil_admin/edit_activite/'.$activite->id) ?>">Modifier</a>
                    <a href="<?= site_url('acceuil_admin/delete_activite/'.$activite->id) ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
            <p>Aucune activité trouvée.</p>
        <?php endif; ?>
<!-- Créer l'élément canvas pour le diagramme -->
<canvas id="myChart"></canvas>

<script>
$(document).ready(function() {
  // Récupérer les données nécessaires depuis votre contrôleur ou modèle
  var sessionData = [10, 15, 8, 12, 20]; // Exemple de données pour les séances d'entraînement
  var regimeData = [5, 12, 6, 10, 15]; // Exemple de données pour les régimes

  // Créer un contexte de canevas et instancier le diagramme
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai'], // Exemple de libellés pour les mois
      datasets: [{
        label: 'Séances d\'entraînement enregistrées',
        data: sessionData,
        backgroundColor: 'rgba(75, 192, 192, 0.5)', // Couleur de remplissage des barres
        borderColor: 'rgba(75, 192, 192, 1)', // Couleur de bordure des barres
        borderWidth: 1
      }, {
        label: 'Régimes suivis',
        data: regimeData,
        backgroundColor: 'rgba(255, 99, 132, 0.5)',
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true,
          precision: 0 // Précision de l'axe Y (entiers seulement)
        }
      }
    }
  });
});
</script>
  
</script>
<script src="<?php echo  base_url('assets/js/chart.js') ?>"></script>
<script src="<?php echo base_url('assets/vendors/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>

    <!-- bootstrap affix -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>

    <!-- wow.js -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- FoodHut js -->
    <script src="<?php echo base_url('assets/js/foodhut.js'); ?>"></script>
