<h1 class="text-center mb-5">Types de spectacle de la base de données Colyseum</h1>

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
                        <th scope="col">ID</th>
                        <th scope="col">type</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($showtypes as $showtype) {?>
                                <tr>
                                    <td><?=$showtype->id;?></td>
                                    <td><?=$showtype->type;?></td>
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


    