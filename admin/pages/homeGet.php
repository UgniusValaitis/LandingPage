<?php include_once "../db/titulinis.php";?>
<div class='container'>
            <h3> Titulinio puslapio straipsniai </h3>
            <form class='mainForm' action='../db/titulinis.php' method='POST'>
            <label> antraštė</label>
            <textarea name='header'></textarea>
            <label> tekstas </label>
            <textarea name='body'></textarea>
<?php if ($_GET['home'] == 'suc'): ?>
    <h4> sėkmingai įkelta </h4>
<?php endif;?>
            <button class='adBtn' type='submit' name='submit'> įkelti </button>
    </form>
</div>

<div class= 'container'>
<?php if (count($homePosts) > 0): ?>
    <?php foreach ($homePosts as $post): ?>
	<div class='post'>
	    <h3><?php echo $post[1] ?></h3>
	    <form action='../db/titulinis.php' method='POST'>
	        <button class='delBtn' type='submit' name='delBtn' value='<?php echo $post[0] ?>'>x</button>
	    </form>
	</div>
	<?php endforeach;?>
<?php endif;?>
</div>
