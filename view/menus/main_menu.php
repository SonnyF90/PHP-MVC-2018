<ul>
    <?php foreach ($datas as $menu ) { ?>
    <li><a href="<?php echo $menu['url']; ?>"><?php echo $menu['title'];?></a></li>
    <?php } ?>
</ul>

