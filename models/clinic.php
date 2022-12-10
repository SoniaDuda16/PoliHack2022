<?php 
function showClinic($title, $address, $phone, $person){ ?>
    <div class="card shadow mb-4">
        <div class="card-body p-5">
            <h4 class="mb-4"><?php echo $title; ?></h4>
            <ul class="list-unstyled list pl-5">
                <li class="mb-3 d-flex align-items-center"><i class="fa fa-map-marker mr-3 text-primary"></i> &nbsp; <?php echo $address; ?></li>
                <li class="mb-3 d-flex align-items-center"><i class="fa fa-phone-square mr-3 text-primary"></i> &nbsp; <?php echo $phone; ?></li>
                <li class="mb-3 d-flex align-items-center"><i class="fa fa-user mr-3 text-primary"></i> &nbsp; <?php echo $person; ?></li>
            </ul>
        </div>
    </div>

<?php } ?>