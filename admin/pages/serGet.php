<?php include "../db/service.php"?>
<div class='container'>
        <h3> Teikiamų paslaugų sąrašas </h3>
        <form class='mainForm' action='../db/service.php' method='POST'>
        <select name='type'>
            <option value='paruošimas'>paruošimas</option>
            <option value='dekoras'>dekoras</option>
            <option value='kitos paslaugos'>kitos paslaugos</option>
        </select>
        <label>Paslaugos pavadinimas</label>
        <textarea name='service'></textarea>
        <label>Paslaugos aprašymas (pasaugos)</label>
        <textarea name='des'></textarea>
        <label>Trumpas paslaugos aprašymas (kainos)</label>
        <textarea name='shortdes'></textarea>
        <label> Kaina </label>
        <input type='number' name='price'>";
<?php if ($_GET['ser'] == 'suc'): ?>
    <h4>Sėkmingai sukurta</h4>
<?php endif;?>
        <button class='adBtn' type='submit' name='serSub'> Sukurti paslaugą</button>
    </form>
</div>

<div class='container'>
<?php if (count($servPrep) > 0): ?>
    <h3 class='mainForm'> Paruošimas </h3>
    <?php foreach ($servPrep as $prep): ?>
        <div class='post'>
            <div>
                <h4><?php echo $prep[2] ?></h4>
                <p><?php echo $prep[4] ?></p>
            </div>
            <div>
                <h3><?php echo $prep[5] ?> &euro;</h3>
                <form action='../db/service.php' method='POST'>
                <button class='delBtn' type='submit' name='delBtn' value='<?php echo $prep[0] ?>'>x</button>
                </form>
            </div>
        </div>
    <?php endforeach;?>
<?php endif;?>
<?php if (count($servDec) > 0): ?>
    <h3 class='mainForm'> Dekoras </h3>
    <?php foreach ($servDec as $dec): ?>
        <div class='post'>
            <div>
                <h4><?php echo $dec[2] ?></h4>
                <p><?php echo $dec[4] ?></p>
            </div>
            <div>
                <h3><?php echo $dec[5] ?> &euro;</h3>
                <form action='../db/service.php' method='POST'>
                <button class='delBtn' type='submit' name='delBtn' value='<?php echo $dec[0] ?>'>x</button>
                </form>
            </div>
        </div>
    <?php endforeach;?>
<?php endif;?>
<?php if (count($servO) > 0): ?>
    <h3 class='mainForm'> Kitos Paslaugos </h3>
    <?php foreach ($servO as $o): ?>

        <div class='post'>
            <div>
                <h4><?php echo $o[2] ?></h4>
                <p><?php echo $o[4] ?></p>
            </div>
            <div>
                <h3><?php echo $o[5] ?> &euro;</h3>
                <form action='../db/service.php' method='POST'>
                <button class='delBtn' type='submit' name='delBtn' value='<?php echo $o[0] ?>'>x</button>
                </form>
            </div>
        </div>
    <?php endforeach;?>
<?php endif;?>
</div>
