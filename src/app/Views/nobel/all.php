<?php require_once VIEWS_PATH."layouts/header.php"; ?>

<?php require_once VIEWS_PATH."layouts/navbar.php"; ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h1 class="text-center"><?= $title_page ?></h1>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Année</th>
                            <th>Catégorie</th>
                            <th>Nom</th>
                            <th>Motivation</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($nobels as $n): ?>
                        <tr>
                            <td><?= $n->id ?></td>
                            <td><?= $n->year ?></td>
                            <td><?= $n->category ?></td>
                            <td><?= $n->name ?></td>
                            <td><?= $n->motivation ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require_once VIEWS_PATH."layouts/footer.php"; ?>
