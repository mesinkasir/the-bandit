<div class="container">
<div class="row">
<div class="col-md-12 p-3 p-md-5 mt-5">
<?php Theme::plugins('pageBegin'); ?>
<?php if ($page->coverImage()): ?>
<img class="img-fluid rounded mt-3 mb-3" src="<?php echo $page->coverImage(); ?>"/>
<?php endif ?>
<div class="p-3">
<h1><strong><a class="text-dark p-1" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h1>
<?php if ($page->description()): ?>
<h2 class="lead"><?php echo $page->description(); ?></h2>
<?php endif ?>
<?php echo $page->content(); ?>
</div>
<?php Theme::plugins('pageEnd'); ?>
</div>
</div>
</div>
