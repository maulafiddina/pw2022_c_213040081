<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <tittle>Latihan 1.5</tittle>
</head>
<style>
    .warna-baris {
        background-color: silver;
    }
</style>
<body>

<!-- Opsi 1 -->
<table border="1" cellpadding="10" cellspacing="0">
    <?php
        for( $i = 1; $i <= 3; $i++) {
            echo "<tr>";
            for( $j = 1; $j <= 5; $j++) {
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";

        }
    ?>
</table>

<!-- opsi 2 -->
<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++) : ?>
        <?php if( $i % 2 == 1 ) : ?>
        <tr class="warna-baris">
        <?php else : ?>
            <tr>
        <?php endif ?>
            <?php for( $j = 1; $j <= 5; $j++) : ?>
                <td><?php echo "$i,$j"; ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>