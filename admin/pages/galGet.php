<?php include_once "../db/gallery.php"?>
<div class = 'container'>
    <h3> Sukurti galeriją </h3>
    <form class='mainForm' action = '../db/gallery.php' method= 'post'>
        <label> Galerijos pavadinimas </label>
        <input type = 'text' name='galName'>
        <button class='adBtn' type='submit' name='creGal'>Sukurti</button>
    </form>
</div>
<?php if (count($galName) > 0): ?>
    <?php foreach ($galName as $gal): ?>

        <div class='post'>
            <h4><?php echo $gal[1] ?></h4>
            <form action='../db/gallery.php' method='POST'>
            <button class='delBtn' type='submit' name='delBtn' value='<?php echo $gal[0] ?>'>x</button>
            </form>
        </div>
    <?php endforeach;?>
<?php endif;?>

<div class= 'container'>
    <h3> Įkelti nuotrauką </h3>
    <form class= 'mainForm' action='../db/gallery.php' method='POST' enctype='multipart/form-data'>
    <label> Pasirinkite galeriją<lable>
    <select name='galId'>";
<?php foreach ($galName as $gal): ?>
        <option value='<?php echo $gal[0] ?>'><?php echo $gal[1] ?></option>";
<?php endforeach;?>

    </select>
    <label> Pavadinimas </label>
    <input type='text' name='picName'>
    <label> Aprašymas </label>
    <textarea name='picDes'> </textarea>
    <label> Nuotrauka </label>
    <input type='file' name='pic'>";
<?php if ($_GET['gal'] == 'ext') {
    echo "<h4>Netinkams nuotraukos formatas</h4>";
} else if ($_GET['gal'] == 'err') {
    echo "<h4>Klaida įkeliant nuotraiką</h4>";
}?>
    <button class='adBtn' type='submit' name='upPic'>Įkelti</button>
    </form>
</div>

<div class ='galleryBody'>
<?php foreach ($galName as $gal): ?>
    <h3 class = 'txtCen'><?php echo $gal[1] ?></h3>

    <?php foreach ($galPic as $pic): ?>
        <?php if ($gal[0] == $pic[1]): ?>
            <div class='post'>
                <div>
                    <img class ='photo' src = '../images/<?php echo $pic[2] ?>'>
                </div>
                <h4><?php echo $pic[3] ?></h4>
                <form action='../db/gallery.php' method='POST'>
                    <button class='delBtn' type='submit' name='delBtnPic' value='<? echo $pic[0] ?>'>x</button>
                </form>
            </div>
        <?php endif;?>
    <?php endforeach;?>
<?php endforeach?>

</div>
