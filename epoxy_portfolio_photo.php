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
 <?php
 $project_name[21]="華固建設";
 $project_name[13]="室內設計";
 $project_name[16]="橋鴻家具";
 $project_name[20]="雙溪高中";
 $project_name[18]="南港世界貿易";
 $project_name[19]="新北市消防局";
 $project_name[15]="淡水區果菜市場";
 $project_name[2]="蒂芬尼";
 $project_name[8]="家樂福-重北店";
 $project_name[6]="家樂福-斗六店";
 $project_name[5]="家樂福 斗六店 外牆防水";
 $project_name[3]="內湖名人賞";
 $project_name[12]="Epoxy-戀戀大直";
 $project_name[4]="巴黎smart";
 $project_name[10]="隔熱工程-鐵皮屋";

 $project_desc[21]="Epoxy,耐磨地坪";
 $project_desc[13]="Epoxy,耐磨地坪";
 $project_desc[16]="Epoxy耐重壓地坪";
 $project_desc[20]="EPOXY停車場耐磨地坪,環氧樹脂";
 $project_desc[18]="Epoxy耐磨地坪.環氧樹脂";
 $project_desc[19]="Epoxy耐磨地坪，EPOXY停車場地坪";
 $project_desc[15]="Epoxy";
 $project_desc[2]="Epoxy,耐磨地坪,停車場劃線";
 $project_desc[8]="Epoxy,耐磨地坪,停車場劃線,屋頂防水,隔熱工";
 $project_desc[6]="Epoxy,耐磨地坪,停車場劃線,屋頂防水,隔熱工程";
 $project_desc[5]="外牆防水施工.防水工程";
 $project_desc[3]="Epoxy,停車場耐磨地坪";
 $project_desc[12]="Epoxy,戀戀大直,停車場.耐磨地坪";
 $project_desc[4]="Epoxy,停車場.耐磨地坪";
 $project_desc[10]="隔熱工程.防水工程";

 ?>
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