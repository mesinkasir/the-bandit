<div class="container">
<div class="row">

<div class="col-md-12 p-3 p-md-5">
		<h1 class="mt-5"><strong><a class="text-dark" href="<?php echo Theme::siteUrl(); ?>"><?php echo $site->slogan(); ?></a></strong></h1>
		<?php if ($site->description()): ?>
		<h2 class="lead"><?php echo $site->description(); ?></h2>
		<?php endif ?>
		<?php if (pluginActivated('pluginSearch')): ?>
		<div class="form-inline d-block">
			<input id="search-input" class="form-control mr-sm-2" type="search" placeholder="<?php $language->p('Search') ?>" aria-label="Search">
			<button class="btn btn-outline-primary my-2 my-sm-0" type="button" onClick="searchNow()"><?php $language->p('Search') ?></button>
			<script>
				function searchNow() {
					var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
					window.open(searchURL + document.getElementById("search-input").value, "_self");
				}
				document.getElementById("search-input").onkeypress = function(e) {
					if (!e) e = window.event;
					var keyCode = e.keyCode || e.which;
					if (keyCode == '13') {
						searchNow();
						return false;
					}
				}
			</script>
		</div>
		<?php endif ?>
</div>

		

<?php if (empty($content)): ?>
	<div class="text-center p-4">
	<?php $language->p('No pages found') ?>
	</div>
<?php endif ?>


<div class="col-md-12 p-3 p-md-5">
<div class="row">
<?php foreach ($content as $page): ?>
<div class="col-md-6 p-3">
<?php Theme::plugins('pageBegin'); ?>
<?php if ($page->coverImage()): ?>
<a title="<?php echo $page->title(); ?>" href="<?php echo $page->permalink(); ?>">
<img class="img-fluid rounded" src="<?php echo $page->coverImage(); ?>"/>
</a>
<?php endif ?>
<div class="p-3">
<h3><strong>
<a class="text-dark" href="<?php echo $page->permalink(); ?>"><?php echo $page->title(); ?></a></strong></h2>
<?php if ($page->description()): ?>
<p><?php echo $page->description(); ?></p>
<?php endif ?>
<!-- <?php echo $page->contentBreak(); ?> 
<?php if ($page->readMore()): ?><a class="btn btn-dark" href="<?php echo $page->permalink(); ?>"><?php echo $L->get('Read more'); ?></a><?php endif ?>
-->
</div>
<div>
</div>
<?php Theme::plugins('pageEnd'); ?>
</div>
<?php endforeach ?>
</div>
</div>


<?php if (Paginator::numberOfPages()>1): ?>
<nav class="paginator">
	<ul class="pagination flex-wrap justify-content-center">
		<?php if (Paginator::showPrev()): ?>
		<li class="page-item mr-2">
			<a class="page-link text-dark" href="<?php echo Paginator::previousPageUrl() ?>" tabindex="-1">&#9664; <!--<?php echo $L->get('Previous'); ?>--></a>
		</li>
		<?php endif; ?>
		<li class="page-item <?php if (Paginator::currentPage()==1) echo 'disabled' ?>">
			<a class="page-link text-dark" href="<?php echo Theme::siteUrl() ?>"><?php echo $L->get('Home'); ?></a>
		</li>
		<?php if (Paginator::showNext()): ?>
		<li class="page-item ml-2">
			<a class="page-link text-dark" href="<?php echo Paginator::nextPageUrl() ?>"><!--<?php echo $L->get('Next'); ?>--> &#9658;</a>
		</li>
		<?php endif; ?>
	</ul>
</nav>
<?php endif ?>




</div>
</div>