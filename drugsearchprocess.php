<!DOCTYPE html>
<?php include('search.php') ?>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body style="background:url('images/rak.jpg'); background-size:cover; opacity: 2;">
    <div class="container" style="width: 550px; margin-top:200px" ;>
        <div class="card">
            <!<img src="images/admin.jpeg" class="card-img-top" width="50px" height="150px">
                <div class="card-body" style="background-color: #3498DB ; color: white; border-color: #06F2F8;">
                    <div class="row">
                        <div class="col-md-2">
                            <a href="doctorpanel.php" class="btn btn-light">Back</a>
                        </div>
                        <div class="col-md-6">
                            <center><img src="images/drug.jpg " height="50px"></center>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Drug Name</th>
                                <th scope="col">Barcode</th>
                                <th scope="col">Insured</th>
                                <th scope="col">Status</th>
                                <th scope="col">Unit Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            drug_search();
                            ?>
                        </tbody>
                    </table>

                </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>