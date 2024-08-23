<?php
include 'inc/config.php';

// Pagination settings
$limit = isset($_GET['limit']) ? intval($_GET['limit']) : 25;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $limit;

// Count total records
$total_result = mysqli_query($conn, "SELECT COUNT(*) AS total FROM utilisateur");
$total_row = mysqli_fetch_assoc($total_result);
$total_records = $total_row['total'];

// Fetch records with limit and offset
$sql = "SELECT utilisateur_id, utilisateur_nom, utilisateur_prenom, utilisateur_email, groupe_id, utilisateur_encopie, utilisateur_actif 
        FROM utilisateur LIMIT $limit OFFSET $offset";
$result = mysqli_query($conn, $sql);
?>

<div class="col-12 col-xl-12 col-xxl-12 d-flex">
    <div class="card radius-10 w-100">
        <div class="card-body">
            <div class="row g-3 align-items-center">
                <div class="col-9">
                    <h5 class="mb-0"><i class="bi bi-people-fill"></i> Liste des Utilisateurs</h5>
                </div>
            </div>

            <div class="table-responsive mt-4">
                <table class="table align-middle mb-0 table-hover table-striped">
                <thead class="table-light">
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Groupe</th>
                        <th>En copie du programme</th>
                        <th>Actif</th>
                        <th>Actions</th> <!-- New Actions Column -->
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <td><?php echo $row['utilisateur_nom']; ?></td>
                        <td><?php echo $row['utilisateur_prenom']; ?></td>
                        <td><?php echo $row['utilisateur_email']; ?></td>
                        <td><?php echo getGroupeName($row['groupe_id']); ?></td>
                        <td><?php echo $row['utilisateur_encopie'] ? '✔' : ''; ?></td>
                        <td><?php echo $row['utilisateur_actif'] ? '✔' : ''; ?></td>
                        <<td>
                            <!-- Icons with labels for actions -->
                            <a href="voir.php?id=<?php echo $row['utilisateur_id']; ?>" title="Voir" style="margin-right: 10px;">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="modifier.php?id=<?php echo $row['utilisateur_id']; ?>" title="Modifier" style="margin-right: 10px;">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <a href="supprimer.php?id=<?php echo $row['utilisateur_id']; ?>" title="Supprimer" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>

                </table>
            </div>

            <div class="d-flex justify-content-center mt-4">
                <form method="GET" action="" class="me-3">
                    <label for="limit">Nombre par page:</label>
                    <select name="limit" id="limit" onchange="this.form.submit()">
                        <option value="10" <?php if ($limit == 10) echo 'selected'; ?>>10</option>
                        <option value="25" <?php if ($limit == 25) echo 'selected'; ?>>25</option>
                        <option value="50" <?php if ($limit == 50) echo 'selected'; ?>>50</option>
                        <option value="100" <?php if ($limit == 100) echo 'selected'; ?>>100</option>
                    </select>
                </form>

                <nav>
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= ceil($total_records / $limit); $i++) : ?>
                            <li class="page-item <?php if ($page == $i) echo 'active'; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>&limit=<?php echo $limit; ?>">
                                    <?php echo $i; ?>
                                </a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php
mysqli_close($conn);

function getGroupeName($groupe_id) {
    switch ($groupe_id) {
        case 1:
            return 'Administrateur';
        case 2:
            return 'Agent';
        case 3:
            return 'Opérateur N2';
        default:
            return 'Consultation';
    }
}
?>
