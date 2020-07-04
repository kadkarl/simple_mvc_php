<?php require_once VIEWS_PATH."layouts/header.php"; ?>

<?php require_once VIEWS_PATH."layouts/navbar.php"; ?>

    <div class="container">
        <div class="row my-5">
            <div class="col-12">
                <h4 class="text-center my-5"><?= $title_page ?></h4>
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
                        <tr>
                            <td><?= $nobel->id ?></td>
                            <td><?= $nobel->year ?></td>
                            <td><?= $nobel->category ?></td>
                            <td><?= $nobel->name ?></td>
                            <td><?= $nobel->motivation ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php require_once VIEWS_PATH."layouts/footer.php"; ?>
