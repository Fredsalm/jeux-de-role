<?php
include 'header.php';
?>
<section class="section-3">
    <audio src="../song/battle1.wav" autoplay></audio>
    <table class="echo-fight">
        <tr>

            <th>Héros</th>
            <th>Vie</th>
            <th>Monstres</th>
            <th>Vie</th>

        </tr>
        <tr>

            <td> <?php echo $name; ?></td>
            <td> <?php echo $lifepoint; ?></td>

        </tr>
        <tr>
            <td> <?php echo $name; ?></td>
            <td> <?php echo $lifepoint; ?></td>

        </tr>
    </table>
</section>
<?php
include 'footer.php';
?>