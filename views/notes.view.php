<?php require("partials/headers.php")?> 
  <?php require("partials/nav.php")?>
  <?php require("partials/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

   <?php foreach ($notes as $note) : ?>

    <li><a href="note/?id=<?=$note['id']?>"><?= $note['bodynote'] ?></a></li>

    

    <?php endforeach; ?>
    </div>

    <div>
    <li><a href="/note/create">Create Employee</a></li>
    </div>
  </main>
  <?php require("partials/footers.php")?>