<?php include_once "../db/contact.php"?>
<div class = 'container'>
    <h3>Kontaktai</h3>

<?php foreach ($contacts as $con): ?>

    <?php if ($con[1] == 'number'): ?>
        <div class='post'>
            <h4><?php echo $con[2] ?></h4>
            <form action='../db/contact.php' method='POST'>
            <button class='delBtn' type='submit' name='delBtn' value='<?php echo $con[0] ?>'>x</button>
            </form>
        </div>
    <?php endif;?>
<?php endforeach;?>
    <form class='mainForm' action='../db/contact.php' method='POST'>
        <label> Telefono numeris </label>
        <input type='text' name='telNr'>
        <button class='adBtn' type='submit' name='subNr'> Įkelti</button>
    </form>


<?php foreach ($contacts as $con): ?>

    <?php if ($con[1] == 'email'): ?>
        <div class='post'>
            <h4><?php echo $con[2] ?></h4>
            <form action='../db/contact.php' method='POST'>
            <button class='delBtn' type='submit' name='delBtn' value='<?php echo $con[0] ?>'>x</button>
            </form>
        </div>
    <?php endif;?>
<?php endforeach;?>
    <form class='mainForm' action='../db/contact.php' method='POST'>
        <label> Elektroninis paštas </label>
        <input type='text' name='email'>
        <button class='adBtn' type='submit' name='subEmail'> Įkelti</button>
    </form>

<?php foreach ($contacts as $con): ?>
    <?php if ($con[1] == 'fb'): ?>
        <div class='post'>
            <h4><?php echo $con[2] ?></h4>
            <form action='../db/contact.php' method='POST'>
            <button class='delBtn' type='submit' name='delBtn' value='<?php echo $con[0] ?>'>x</button>
            </form>
        </div>
    <?php endif;?>
<?php endforeach;?>
    <form class='mainForm' action='../db/contact.php' method='POST'>
        <label> Facebook </label>
        <input type='text' name='fb'>
        <button class='adBtn' type='submit' name='subFb'> Įkelti</button>
    </form>

</div>
