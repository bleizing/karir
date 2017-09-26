<?php
/**
 * Created by PhpStorm.
 * User: Bleizing
 * Date: 9/25/2017
 * Time: 3:16 PM
 */

include('cekadmin.php');
include('header.php');
include('menu_admin.php');
include('get_article.php');
?>


    <div class="container">
        <h3>Ini Halaman Artikel</h3>
        <br>
        <form action="create_article.php" method="post">
            <label>Judul</label>
            <input type="text" name="judul" <?php if ($articleId != 0) echo "value='" . $judul . "'";  ?>>
            <br>
            <label>Isi</label>
            <input type="text" name="isi" <?php if ($articleId != 0) echo "value='" . $isi . "'";  ?>>
            <br>
            <button type="submit" name="submit"> <?php echo $articleId != 0 ? "Edit Artikel" : "Create Artikel"; ?></button>
            <?php
            if ($articleId != 0) {
                echo "<input type ='hidden' name='article_id' value='$articleId'>";
                echo "<button type='submit' name='delete'>Delete Artikel</button>";
            } else {
                echo "<input type ='hidden' name='article_id' value='0'>";
            }
            ?>
        </form>

        <?php if (isset($_SESSION['error'])) echo $_SESSION['error']; ?>

        <table border="1">
            <tr>
                <td>Judul</td>
                <td>Isi</td>
                <td>Pembuat</td>
            </tr>
            <?php
            foreach ($articles as $key => $value) {
                echo "<tr>";
                echo "<td><a href='article.php?action=edit&article_id=" . $value['article_id'] . "'>" . $value['article_judul'] . "</a></td>";
                echo "<td>" . $value['article_isi'] . "</td>";
                echo "<td>" . $value['user_username'] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>



<?php
include('footer.php');
?>