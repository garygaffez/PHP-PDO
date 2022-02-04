<h1 class="text-center mb-5">Liste des spectacles de la base de données Colyseum</h1>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="table-responsive">
                <table class="table text-center border border-dark">
                     
                    <?php
                        if (!empty ($errorMessage)) {?>
                            <p class="text-center text-danger fs-3"><?=$errorMessage;?></p>
                        <?php                
                        }else { ?> 
                        <thead>
                        <tr>
                            <th scope="col">lastName</th>
                            <th scope="col">firstName</th>
                            <th scope="col">birthDate</th>
                            <th scope="col">card</th>
                            <th scope="col">cardNumber</th>
                        </tr>
                    </thead>
                    <tbody>                   
                        <?php
                            foreach ($users as $user) {?>
                                <tr>
                                    <td><?=$user->lastName;?></td>
                                    <td><?=$user->firstName;?></td>
                                    <td><?=$user->birthDate;?></td>
                                    <td><?=$user->fidelity;?></td>
                                    <td><?=$user->cardFidelity;?></td>
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