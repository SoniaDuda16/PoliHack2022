<link href="public/css/account.css" rel="stylesheet">
<div class="all">
    <div class="buletin">
        <table>
            <tr>
                <th> 
                    <div class="poza">
                        <img src="public/img/icon.png" width="150" height="150">
                    </div>
                </th>
                <th>
                    <div class="info">
                        <h3> Detaliile contului:</h3>
                        <br>
                        <h5> <b>Username:</b> <?php echo $_SESSION['user'];?></h5>
                        <h5> <b>Nume:</b> <?php echo $_SESSION['fullname'];?></h5>
                        <h5> <b>Email:</b> <?php echo $_SESSION['email'];?> </h5>
                    </div>
                </th>
            </tr>
        </table>
    </div>
</div>