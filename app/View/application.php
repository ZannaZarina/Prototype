<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<div class="card text-center" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title text-center">Application</h5>
        <form method="post" action="/">

            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="amount">Amount: </label>
                <input type="text" id="amount" name="amount">
            </div>

            <button type="submit" class="btn btn-primary" name="add"> Add</button>

        </form>

        <a href="/deals"> <p class="text-center">Unconfirmed applications</p></a>
    </div>
</div>