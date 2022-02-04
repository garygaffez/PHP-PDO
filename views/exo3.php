<h1 class="text-center mb-5">20 premiers clients de la base de données Colyseum</h1>

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
                foreach ($clients as $client) {?>
                    <tr>
                        <td><?=$client->id;?></td>
                        <td><?=$client->lastName;?></td>
                        <td><?=$client->firstName;?></td>
                        <td><?=$client->birthDate;?></td>
                        <td><?=$client->card;?></td>
                        <td><?=$client->cardNumber;?></td>
                    </tr>
                <?php
                }
            }
            ?>
        </tbody>
    </table>
</div>