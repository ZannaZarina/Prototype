<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title text-center">Unconfirmed applications</h5>
        <ul>
            <?php foreach ($applications as $application): ?>
                <li>
                    <?php echo 'id: ' . $application['id'] ?> <br>
                    <?php echo 'email: ' . $application['email'] ?> <br>
                    <?php echo 'amount: ' . $application['amount'] ?> <br>
                    <?php echo 'partner: ' . $application['partner']; ?>

                    <form method="post" action="/deals/<?php echo $application['id'] ?>">
                        <button type="submit" class="btn btn-primary" name="offer">Send an offer</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="/"><p class="text-center">Go back</p></a>
    </div>
</div>


