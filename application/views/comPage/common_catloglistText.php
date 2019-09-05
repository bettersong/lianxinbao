<ul class="catloglistText">
  <?php foreach($catlogListArr as $index => $value){?>
  <li>
    <div class="pushtime"><?=$value['pushtime']?></div>
    <img src="/public/images/book.png" style="width:20px;height:22px;vertical-align:bottom;"  />
    <a href="detailText&type1=<?=$_GET['type1']?>&type2=<?=$_GET['type2']?>&id=<?=$value['id']?>" target="_blank"><?=$value['title']?></a> 
  </li>
   <?php }?> 
</ul>