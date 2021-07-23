<h2>Rendus précédents :</h2>
<ul>

<?php   $past_renders = glob("./data/past/*.zip"); ?>

<?php   if (count($past_renders) < 1) : ?>
    <li>Pas d'anciens rendus</li>
<?php   endif; ?>

<?php   foreach ($past_renders as $file_path) :
            $start = strrpos($file_path, "/") + 1;
            $file_name = substr($file_path, $start);
?>
    <li>
        <a href="<?php echo $file_path; ?>" target="_blank">
            <?php echo $file_name; ?>
        </a>
    </li>
<?php   endforeach ; ?>

</ul>