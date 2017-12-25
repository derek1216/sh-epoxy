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
        .hide-bullets {
            list-style:none;
            margin-left: -40px;
            margin-top:20px;
        }

        .thumbnail {
            padding: 0;
        }

        .carousel-inner>.item>img, .carousel-inner>.item>a>img {
            width: 100%;
        }
        #slider-thumbs {
            height: 565px;
            overflow-y: scroll;
            white-space: nowrap;
        }
        .thumbnail > img, .thumbnail a > img {
            max-height: 100px;
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

<div class="container">
<h1 class="my-4 text-lg-left" style="margin-bottom: 40px;"><span class="title">Epoxy施工實績照 - <?php echo $_GET['name'];?></span></h1>   
<div id="main_area" style="margin-bottom:150px;">
    <!-- Slider -->
    <div class="row">
        <div class="col-sm-3" id="slider-thumbs">
            <!-- Bottom switcher of slider -->
            <ul class="hide-bullets">

            <?php require_once('filescan.php') ?>
            <?php
            $folder_id = $_GET['project'];
            //Scan a single directory for all files, no sub-directories
            $folder = 'upload/product/'.$folder_id;
            $files = scanDir::scan($folder, "jpg");
            $file_count = sizeof($files);
            foreach ($files as $key => $value) {
                echo '<li class="col-sm-12">';
                echo '<a class="thumbnail" id="carousel-selector-'.$key.'">';
                echo '<img alt="Epoxy - '. $_GET['name'].'" src="'.$value.'">';
                echo '</a>';
                echo '</li>';
            }
            ?>

            </ul>
           
        </div>
        <div class="col-sm-9">
            <div class="col-xs-12" id="slider">
                <!-- Top part of the slider -->
                <div class="row">
                    <div class="col-sm-12" id="carousel-bounding-box">
                        <div class="carousel slide" id="myCarousel">
                            <!-- Carousel items -->
                            <div class="carousel-inner">

                            <?php
                                $folder = 'upload/product/'.$folder_id;
                                $files = scanDir::scan($folder, "jpg");
                                foreach ($files as $key => $value) {
                                    if($key==0){
                                        $active="active";
                                    }else{
                                        $active="";
                                    }
                                    echo '<div class="item '.$active.'" data-slide-number="'.$key.'">';
                                    echo '<img src="'.$value.'">';
                                    echo '</div>';
                                }
                            ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div style="text-align: right;margin-top: 20px;"><a style="background:#5de749;display: inline-block;" href="epoxy_portfolio_photo.php" class="learn_more2">回上頁</a></div>
            </div>
        </div>
        <!--/Slider-->
    </div>

</div>
</div>

<script>
    jQuery(document).ready(function($) {

        var filecount=<?php echo $file_count;?>;
        if(filecount<6){
            $("#slider-thumbs").css("overflow-y","hidden");
        }
 
        $('#myCarousel').carousel({
                interval: 5000
        });
 
        //Handles the carousel thumbnails
        $('[id^=carousel-selector-]').click(function () {
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});
</script>

  <?php require_once('footer.php')?>

</body>

</html>