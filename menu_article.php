<?php
/**
 * Created by PhpStorm.
 * User: Bleizing
 * Date: 9/26/2017
 * Time: 11:22 AM
 */
include('header.php');
include('menu_index.php');
include('get_article.php');
?>


<div class="container">
    <h3>Ini Halaman Artikel</h3>
    <br>

    <table border="1">
        <tr>
            <td>Judul</td>
            <td>Isi</td>
        </tr>
        <?php
        foreach ($articles as $key => $value) {
            echo "<tr>";
            echo "<td>" . $value['article_judul'] . "</td>";
            echo "<td>" . $value['article_isi'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>


<?php
include('footer.php');
?>