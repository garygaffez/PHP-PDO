<h1 class="text-center mb-5">Clients de la base de données Colyseum dont le nom commence par "M"</h1>

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
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                        </tr>
                    </thead>
                    <tbody>                                           
                        <?php
                            foreach ($users as $user) {?>
                                <tr>                                                                     
                                    <td><?=$user->lastName;?></td>                                                                      
                                    <td><?=$user->firstName;?></td>               
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