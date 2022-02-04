<h1 class="text-center mb-5">Liste des spectacles de la base de données Colyseum</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-6">
            <div class="table-responsive">
                <table class="table text-center border border-dark">
                     
                    <?php
                        if (!empty ($errorMessage)) {?>
                            <p class="text-center text-danger fs-3"><?=$errorMessage;?></p>
                        <?php                
                        }else { ?>
                        <thead>
                        <tr>
                            <th scope="col">Titre</th>
                            <th scope="col">Artiste</th>
                            <th scope="col">Date</th>
                            <th scope="col">Heure</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($shows as $show) {?>
                                <tr>
                                    <td><?=$show->title;?></td>
                                    <td><?=$show->performer;?></td>
                                    <td><?=$show->date;?></td>
                                    <td><?=$show->startTime;?></td>

                                </tr>
                            <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>