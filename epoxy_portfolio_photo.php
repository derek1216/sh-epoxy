<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <title>Epoxy環氧樹脂專業施工 - 尚輝樹脂</title>
  <?php require_once('meta_where.php')?>
  <?php require_once('include.php')?>
  <?php require_once('gacode.php')?>
  <style>
      img.img-fluid{
          width:100%;
          height:200px;
      }
      .brandname{
        font-weight: bold;
        padding-top: 10px;
      }
      .title {
        border-bottom: 2px solid #dedede;
        padding-bottom: 2px;
      }
  </style>
</head>

<body>
<?php require_once('header.php') ?>
<?php require_once('carousel.php') ?>
<?php require_once('filescan.php') ?>
<?php require_once('casestudy_name.php') ?>
<div class="container">

      <h1 class="my-4 text-center text-lg-left" style="margin-bottom: 40px;margin-top: 70px;"><span class="title">Epoxy施工實績照</span></h1>

      <div class="row text-center text-lg-left">

      <?php
        function get_firstPhoto($folder_id){
            $folder = 'upload/product/'.$folder_id;
            $files = scanDir::scan($folder, "jpg");
            if(sizeof($files)>0){
                return $files[0];
            }else{
                return "no";
            } 
        }

        foreach ($project_name as $key => $value) {
            $img  = get_firstPhoto($key);
            if($img!="no"){
                $url = "epoxy_portfolio_detail.php?project=$key&name=$value";
                echo '<div style="margin-bottom:50px;" class="col-lg-3 col-md-4 col-xs-6">';
                echo '<a href="'. $url.'" class="d-block mb-4 h-100">';
                echo '<img class="img-fluid img-thumbnail" src="'.$img.'" alt="'.$project_desc[$key].'">';
                echo '</a><div class="brandname">'.$value.'</div>';
                echo '</div>';
            }
        }
      ?>

       
    </div>
    <!-- /.container -->


  <!--new_portfolio-->
    </div>


  
  <?php require_once('footer.php')?>
</body>

</html>