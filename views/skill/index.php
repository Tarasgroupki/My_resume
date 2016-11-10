<?$this->title = 'Головна';?>
<div class="main"> 

<div class="image">
 <div class="img"><img class="slide_show" src="../web/images/html.jpg" name="slide_show"></div>
 <div class="bg-image"></div>
 <?for($i = 0;$i<count($skills);$i++):?>
 <?if($i % 2 == 0){?>
<div class="left">
<div class="img_news">
<img src="<?=$skills[$i]['icon']?>">
</div>
 <div class="title_news">
 <a href="/view/<?=$skills[$i]['id'];?>"><?=$skills[$i]['title'];?></a>
 </div> 
 <div class="desc_news">
 <?=$skills[$i]['short_description'];?>
 </div>
</div>
 <?}?>
 <?if($i % 2 != 0){?>
<div class="right">
<div class="img_news">
<img class="icon" src="<?=$skills[$i]['icon']?>">
</div>
 <div class="title_news">
 <a href="/view/<?=$skills[$i]['id'];?>"><?=$skills[$i]['title'];?></a>
 </div>
 <div class="desc_news">
 <?=$skills[$i]['short_description'];?>
 </div>
</div>
 <?}?>
<?endfor;?>
</div>
<div class="mobile_things">
<?foreach($skills as $skill):?>
<div class="img_news">
<img class="icon" src="<?=$skill['icon']?>">
</div>
 <div class="title_news">
 <a href="/view/<?=$skill['id'];?>"><?=$skill['title'];?></a>
 </div>
 <div class="desc_news">
 <?=$skill['short_description'];?>
 </div>
<?endforeach;?>
</div>
</div>