<h1 class="text-center mb-5">Clients de la base de données Colyseum</h1>

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
                        <td><?=$user->id;?></td>
                        <td><?=$user->lastName;?></td>
                        <td><?=$user->firstName;?></td>
                        <td><?=$user->birthDate;?></td>
                        <td><?=$user->card;?></td>
                        <td><?=$user->cardNumber;?></td>
                    </tr>
                <?php
                }
            }                
            ?>
        </tbody>
    </table>
</div>

    