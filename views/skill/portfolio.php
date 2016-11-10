<?$this->title = 'Портфоліо';?>
<div class="frilancer">Мої роботи:</div>
<div class="my_sites">
<?foreach($sites as $site):?>
<?=$site['id'];?>.<a target="blank" rel="nofollow noopener" href="http://<?=$site['link'];?>"><?=$site['name'];?></a>
<br />
<img src="<?=$site['image'];?>" />
<br />
<?endforeach;?>
</div>