<?php



//echo 1;
//include_once "./dir/test1.php";


function myScan ($dir) {

	$list = scandir($dir);
if(!$list) {
	return false;
}

unset($list[0], $list[1]);
	

		//include $dir.DIRECTORY_SEPARATOR.$file;
	
       
        foreach ($list as $file) {
            echo'<a href="public_html/imgbig/'. $file. 'class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"><img class="img" src= public_html/img/'. $file.'></a>';
        }

}



//echo mime_content_type('./config/Const.php').PHP_EOL;
//include  IMG_ROOT.'iso-republic-woman-looks-out-train-window-450x300.jpg';
 
$a=date('Y год');

$navig= [
'minu'=>'<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>',
'<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"></a>',
'<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>',
'<a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>'];
?>
<!doctype html>
<html>
<head>
<title> <?=$title //вывел на страницу зоголовок?> </title>
<meta charset = "UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link rel="stylesheet" type="text/css"href="public_html/css/css.css">

</head>
<body>

<header><br><h1>PhP_one___///</h1><br><br></header>
<new  class="n">
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
   <? foreach($navig as $Keycity1=>$c):?>
       <?echo $c;?>
    </div>
  </div>
 
    <?php endforeach;?>
  </div>
</div>
</new>
<content>
<figure class="FloatFigure">
<?myScan("public_html/img");?>
</figure>
</content>

<footer class="footer">
<div class="dateTxt"><?=$a?></div>
</footer>



<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Img</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?myScan("public_html/imgbig");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>   



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body></html>