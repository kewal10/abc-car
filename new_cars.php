<?php

$title = "ABC-CAR | Used Car";

require_once  'config/db.php';
require_once 'partials/head.php';
require_once 'partials/nav.php';

require_once 'partials/footer.php';

?>

<div class="container">
    <div class="row">

        <?php

        $query = $connection->query("SELECT * FROM car WHERE CarType='NEW'");
        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
            ?>

            <div class="col-sm-12 col-md-3">
                <h4>Search cars</h4>
                <form autocomplete="off">
                    <div class="form-group">
                        <label for="car-search" class="sr-only">Enter Model, Make, Year</label>
                        <input type="text" class="form-control" id="car-search" placeholder="Enter Model, Make, Year">
                    </div>
                    <input type="text" class="form-control" id="make" placeholder="Example - Totota">
                    <select class="custom-select m-t-1" title="">
                        <option selected>Used or New</option>
                        <option value="1">New</option>
                        <option value="2">Used</option>
                        <option value="3">Both</option>
                    </select>
                </form>
            </div>



            <div class="col-sm-12 col-md-9" style="margin-bottom: 30px;">
                <h4>New cars</h4>


                <div class="panel panel-default">
                    <div class="panel-heading"><?php echo $row['carDetails'] ?> <span class="text-left">&nbsp; &nbsp; <?php echo $row['carPrice'] ?></span></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="<?php echo $row['carImage']?><?php echo $row['carImageName'] ?>" alt="car" class="img-responsive">
                            </div>
                            <div class="col-sm-6">
                                <h5 class="text-muted">ODOMETER: <br> <span class="text-muted"><?php echo $row['carOdometer'] ?></span></h5>
                                <h5 class="text-muted">TRANSMISSION: <br> <span class="text-muted"><?php echo $row['CarTransmssion'] ?></span></h5>
                                <p>
                                    <?php echo $row['carInfo'] ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="pull-right info-btn">
                        <a href="contact.php" class="btn btn-primary" role="button">Enquire</a>
                        <a href="#" class="btn btn-primary" role="button">View Car</a>
                    </div>

                    <div class="pull-left">
                        <h5 class="text-muted">LOCATION: <span class="text-muted"> <?php echo $row['carLocation'] ?> </span></h5>
                    </div>


                </div>



            </div>
            <?php
        }
        ?>
    </div>
</div>