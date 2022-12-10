<?php
function showProgramareUser($i, $clinic, $adresa, $phone, $date, $time, $specializare){ ?>

    <h4 class="mb-4">Programare nr <?php echo $i; ?></h4>
    <ul class="list-unstyled list pl-5">
        <li class="mb-3 d-flex align-items-center"><i class="fa fa-search mr-3 text-primary"></i> &nbsp; <?php echo $clinic.", ".$adresa; ?></li>
        <li class="mb-3 d-flex align-items-center"><i class="fa fa-phone-square mr-3 text-primary"></i> &nbsp; <?php echo $phone; ?></li>
        <li class="mb-3 d-flex align-items-center"><i class="far fa-calendar mr-3 text-primary"></i> &nbsp; <?php echo $date; ?></li>
        <li class="mb-3 d-flex align-items-center"><i class="far fa-clock mr-3 text-primary"></i> &nbsp; <?php echo $time; ?></li>
        <li class="mb-3 d-flex align-items-center">&nbsp; <?php echo $specializare; ?></li>
    </ul>

<?php }?>