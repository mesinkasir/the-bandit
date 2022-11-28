<div class="container">
<div class="row bg-light p-3 mt-5 rounded">
<?php Theme::plugins('siteSidebar') ?>
<nav class="navbar p-3">
<?php foreach (Theme::socialNetworks() as $key=>$label): ?>
<a class="text-dark nav-link" href="<?php echo $site->{$key}(); ?>" target="_blank"><?php echo $label; ?></a><?php endforeach; ?>
	<?php if (Theme::rssUrl()): ?>
					<a class="text-dark nav-link" href="<?php echo Theme::rssUrl() ?>" target="_blank">
					RSS
					</a>
				</li>
				<?php endif; ?>
</nav>
</div>
</div>
<footer class="footer mt-5">
	<div class="container-fluid">
		<p class="m-0 text-center p-1">
		<?php echo $site->footer(); ?><br/><small>The BANDIT (<b>B</b>y <a class="text-secondary" href="https://axcora.com"><b>A</b>xcora</a> a<b>ND</b> blud<b>IT</b>)<br/><a target="_blank" class="text-dark" href="https://www.bludit.com">Bludit</a><img class="mini-logo" src="<?php echo DOMAIN_THEME_IMG.'favicon.png'; ?>"/><a target="_blank" class="text-dark" href="https://www.fiverr.com/creativitas/design-your-website-with-phyton-django">Creativitas</a>
		</small></p>
	</div>
</footer>
