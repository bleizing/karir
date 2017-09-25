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
            <input type="text" name="judul">
            <br>
            <label>Isi</label>
            <input type="text" name="isi">
            <br>
            <button type="submit" name="submit">Create Article</button>
        </form>

        <table border="1">
            <tr>
                <td>Judul</td>
                <td>Isi</td>
                <td>Pembuat</td>
            </tr>
            <?php
            foreach ($datax as $key => $value) {
                echo "<tr>";
                echo "<td>" . $value['article_judul'] . "</td>";
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