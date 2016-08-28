<title>Conference</title>
<br>
<div class="row">
	<div class="col s12 m10 l8 offset-m1 offset-l2">
		<ul class="tabs">
			<?php foreach($pages as $page){ ?>
			<li class="tab col"><a href="#page<?php echo $page['page_id']; ?>"><?php echo $page['title']; ?></a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<?php foreach($pages as $page){ ?>
	<div class="col s12 m10 l8 offset-m1 offset-l2" id="page<?php echo $page['page_id']; ?>">
		<div class="row">
			<div class="col s12 m12 l12">
				<p><?php echo $page['description'];?></p>
			</div>
		</div>
		<!--div class="row">
			<div class="col s2 m2 l2">
				<?php foreach($page['contents'] as $content){ ?>
				<div class="row yellow">
					<div class="col s12 m12 l12">
						<a onclick="change(<?php echo $content['content']; ?>)"><?php echo $content['title']; ?></a>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</d
</div>
<script type="text/javascript">

	function change(pageID, contentID)
	{
		for()
	}
</script-->
		<div class="row">
			<div class="col ss2 m2 l2">
		</div>