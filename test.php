<?php 

$contacts = ["Pepe", "Antonio", "Jose"];

foreach($contacts as $contact){ ?>
  <?php if ($contact != "Pepe") { ?>
    <div><?= $contact ?></div>
  <?php } ?>
<?php } ?>


