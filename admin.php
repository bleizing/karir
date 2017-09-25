<?php
include('cekadmin.php');
include('header.php');
include('menu_admin.php');
?>

  
<div class="container">
    <h3>Dibuatkan CRUD diTiap Menu</h3>
    <?php if (isset($_SESSION['error'])) echo $_SESSION['error']; ?>
</div>



<?php
include('footer.php');
?>