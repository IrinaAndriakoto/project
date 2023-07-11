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

<!-- <div class="chart">
    <canvas id="myChart"></canvas>
</div>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
      datasets: [{
        label: '# of Votes',
        data: [12, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script> -->
<script src="<?php echo base_url('assets/vendors/jquery/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.bundle.js'); ?>"></script>

    <!-- bootstrap affix -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>

    <!-- wow.js -->
    <script src="<?php echo base_url('assets/vendors/bootstrap/bootstrap.affix.js'); ?>"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
    <!-- FoodHut js -->
    <script src="<?php echo base_url('assets/js/foodhut.js'); ?>"></script>
