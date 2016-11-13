<?php foreach ($news as $news_item): ?>        
    <a href="<?php echo site_url('news/'.$news_item['news_id']); ?>">
    	<h3><?php echo $news_item['title']; ?></h3>
    </a>
<?php endforeach; ?>