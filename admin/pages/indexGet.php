<div class='container'>
    <h3> Pradinio puslapio tekstas </h3>
    <form class='mainForm' action='../db/start.php' method='POST'>
        <label> antraštė </label>
        <textarea name='header'></textarea>
        <label> tekstas </label>
        <textarea name='body'></textarea>
<?php if ($_GET['index'] == 'suc'): ?>
    <h4>sėkmingai redaguota </h4>
<?php endif;?>
        <button class='adBtn' type='submit' name='submit'>redaguoti</button>
    </form>
</div>
<br>
