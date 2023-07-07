<?php
include('connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css2/styless.css">
    <link rel="stylesheet" href="css1/style2.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1,maximum-scale=1"/>
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <style type="text/css">
div.gallery {
  border: 1px solid rgb(39, 150, 39);
  padding: 25px 10px 10px 40px;
  width: 310px;
  height: 245px;
  border-radius: 40px;
  margin-left: 300px;

}


div.gallery img {
  width: 298px;
  height: 250px;  
}

.overlay {
  
  margin-left: 10px;
  opacity: 0;
  transition: .5s ease;
  color: white;
  vertical-align: text-bottom;
  font-size: 11px;
  float: left;
  text-align: left;
  margin-top: 150px;

}

/* la petite image sur l'image */
.img_plus {
  
  opacity: 0;
  transition: .5s ease;  
  text-align: right;
  height:40px;
  width:40px;
 
}
        /*caroussel*/
.swiper {
  width: 100%;
  height:  20%;
}

  .swiper-slide {   
    font-size: 18px;
    background: #fff;
    border-radius: 50px;   
    border: 0.5px solid #008518;, 

     width: 100px;
    height: 50px;
    margin-left: 10px;      
  }

/*fin caroussel*/

.div_text_scroll {
			font-size: 12px;
			width: 150px;
			margin-left: 40px;
      margin-top: -25px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
		}
		.img_scroll {
			width: 30px;
			height: 35px;
			border-radius: 50%;
      padding-top: 10px;
      margin-left: 5px;
		}
.para2{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
}
.tir{
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
}
.para3{
  color: #008518;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
}
.met1{
    width: 700px;
    height: 80px;
    border-radius: 10px;
    border-color: #008518;
    font-weight: 700;
    font-style: bold;
    padding-left: 15px;
}
.bloc2{
    width: 60px;
    height: 60px;
    padding-right: 65px;
    padding-bottom: 35px;
    background-color: #008518;
    border-radius: 50%;
    border: none;
    margin-top: -100px;
    margin-left: 10px;
}
.ro1{
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border-color: rgb(40, 87, 168);
    background-color: rgb(16, 121, 241);
    color: white;
    color: rgb(17, 136, 157);

}
.ro2{
    width: 45px;
    height: 45px;
    border-radius: 50%;
    color: white;
    border: none;
    background-color: rgb(229, 33, 33);
}
.navi ul li{
  padding-top: 30px;
}
.trt2{
	width: 100%;
	border-bottom: 1px solid #9fd1a8;
	margin-top: 102px;
}
	</style>
</head>
<body>
<header>
    <div style="display: flex;align-items: center;">
    <img width="110" height="110" src="images/img.jpeg">
       <input id="re" class="re1" type="text" name="rech">
       <img style="position: absolute; margin-left:680px; margin-top: 75px" src="images/b4f9ef87c592af0145044285cdc1f706-removebg-preview.png" width="25" height="20" >
    </div>
  
    <!--div de la 2eme ligne-->
   <div style="display: flex;align-items: center;">
 <!-- <nav>
  <a id="tout" href="#">TOUT</a>
  <a id="actu" href="#">ACTUALITES</a>
  <a id="imag" href="#">IMAGES</a>
  <a id="videos" href="#">VIDEOS</a>
  <div class="trait"></div>
  </nav>-->
 
  <nav class="navi">
    <ul>
      <li><a href="index.php">TOUT</a></li>
      <li><a href="#">ACTUALITES</a></li>
      <li><a href="#"><B>IMAGES</B></a></li>
      <p class="trt"></p>
      <li><a href="#">VIDEOS</a></li>
    </ul>
  </nav>
  </div> 
  <form method="POST" action="">
    <div class="file" style="display: flex;align-items: center; margin-right: 900px">
      Type de Publication:	 
      <select name="fonction" style="border-style: none;font-weight: bold;">
        <option selected value="">Choisir</option>
        <option value="Restaurant">Restaurant</option>
        <option value="Recette">Recette</option>
        <option value="Experience" >Retourd'Experience</option>
        <option value="Conseil">Conseil</option>
      </select>
      <button type="submit" class="bt11">Filtre <img  class="imj9" src="images/filtre.png"></button>
  
    </div>

  </form>
    <!--fin div de la 2eme ligne-->
  
    <!--trait de separation-->
     
     <div class="trt2"></div>
  </header>

  <section id="premier" style="position: relative; margin-top: 50px">


    <div class="swiper mySwiper">
      <div class="swiper-wrapper">

      <?php
    $req ="SELECT*FROM publication ORDER BY id DESC";
    $result = mysqli_query($conn, $req);
    
    if(mysqli_num_rows($result) > 0){
     while($hari = mysqli_fetch_assoc($result)){
    ?>
    <div class="swiper-slide">
      <img class="img_scroll" src="<?=$hari['imagepub']?>" alt="image">
      <div class="div_text_scroll"><?=$hari['titre']?><br>  <b><?=$hari['fonction']?></b></div>
      
    </div>

    <?php
      }

      }
      

      ?>
        
      </div>
      </div>
      
    

      <!-- les fleches -->
      <div class="swiper-button-next" style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -40px;margin-right:0;"></div>
      <div class="swiper-button-prev" style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -40px;"></div>
      
 
	  </section>

      <section id="deuxieme" style="width: 100%; padding-top: 20px;">
      
   <?php
    if(isset($_GET["id"])){
        $id= $_GET["id"];
    }
    
    $req ="SELECT * FROM `publication` WHERE id = $id";
    $result = mysqli_query($conn, $req);
    $har = mysqli_fetch_assoc($result);

    
    ?>

    <h2 style="margin-left: 500px;color: #008518"><?=$har['fonction']?></h2>
    
      <div>
      
      <div class="gallery">
        <a  href="#">
        <img style="width: 230px;height: 190px;position:relative;" src="<?=$har['imagepub']?>" alt="">
          <div class="contenant">
          </div>
        </a>
      </div>

      </div>
 </div>
   </section>

   <?php
        
        if(isset($_GET["id"])){
         
  
          $id= $_GET["id"];
            
          $sql = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '1'";
  
          $result = mysqli_query($conn, $sql);
          $count1 = mysqli_num_rows($result);

          $sql2 = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '0'";
  
          $result1 = mysqli_query($conn, $sql2);
          $count2 = mysqli_num_rows($result1);
          
        }
          ?>

  
  
<div style="margin-left: 380px;margin-top: -20px;position: absolute;width: 170px;height:40px;background-color: white;padding-left: 30px;display:flex">
   
   <form method="POST">
       <input  type="number" name="avis"  value="1" class="ron1" hidden>
       <input  type="number" name="id"  value="<?php echo $_GET["id"]; ?>" hidden>
       <input type="submit" name="count1"  value="<?php echo $count1 ?>" class="ron1" style="color:white;" disabled>
       <button type="submit" name="submit" style="background-color: white;border: none;">
       <i class="fa fa-thumbs-up like-btn" class="fa fa-thumbs-o-up like-btn" class="imj1" style="color: blue;"></i>
       </button>
    </form> 
       
    <form class="pouss" method="POST">
      <button style="background-color: white;border: none;">
      <i class="fa fa-thumbs-down dislike-btn" 
        class="fa fa-thumbs-o-down dislike-btn" style="color: red;" data-id=""></i>

      </button>
      <input  type="number" name="avis"  value="0" class="ron1" hidden>
      <input  type="number" name="id"  value="<?php echo $_GET["id"]; ?>" hidden>
      <input type="submit" name="count2" value="<?php echo $count2 ?>" class="ron2" disabled>

    </form>
    
</div>


   <div class="bloc1">

   <?php
    $id= $_GET["id"];
    $req ="SELECT*FROM `publication` WHERE id = '$id'";
    $comment = mysqli_query($conn, $req);
    
    if(mysqli_num_rows($comment) > 0){
     while($hari = mysqli_fetch_assoc($comment)){
    ?>
    <h2 class="tir" ><?=$har['titre']?></h2>
    <p class="para2" ><?=$hari['texte']?></p>
    <p class="para3">publié le <?=$hari['datepub']?></p>
    
    <?php
      }
      }
      // else{
      //   echo "0 results";
      //  }
       
    
      ?>
   </div>
   <?php
   
   include('form.php');

   ?>
   
   <!-- <form method="POST" id="signup-form" class="signup-form">
                <h2 class="form-title">JE PUBLIE</h2>

                <div class="form-group">
                    <label for="texte">Message</label>
                    <textarea name="mess" id="" cols="58" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Envoyer"/>
                </div>
            </form> -->

<!--  
   <form action="comment.php" id="signForm" method="POST" class="for1">
    <input type="text" placeholder="Commentaire....." name="mess" id="com" class="met1">

    <button name="submit" id="inscris" class="bloc2">
    <img src="images/c185d77163c157008199e78f78cca13e-removebg-preview.png" class="imj3">
    </button>
   </form>  -->

 <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
 </script>
      <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 10,
        spaceBetween: 2,
        slidesPerGroup: 10,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });


      function ldike(id) {
        var count=jQuery('#like'+id).html();
        count++;
        jQuery('#like'+id).html(count);
      }

      $(document).ready(function() {
        $('form').submit(function(e) {
          e.preventDefault();
          const avis = $(this).find('input[name=avis]').val();
          const id = $(this).find('input[name=id]').val();
          const _this = this
          $.post("likeDislike.php", { id, avis }, function(res){
            const result = JSON.parse(res)
            if(result) {
              $(_this).find('input[name=count1]').val(result.like)
              $(_this).find('input[name=count2]').val(result.dislike)
            }
          });
        });
      });

      
</script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

    <script>
//   $(document).ready(function () {
// 	$('#inscris').click(function (e) {
// 		e.preventDefault();
// 		let emptyInputCount = 0;

//     $("#signForm input").each(function(){
//                 var input = $(this);
//                 if(input.val() == ''){
//                     $('#res').html("Veuillez remplir correctement les champs !");  
//                     emptyInputCount = 1;
//                 }
//                 else{
//                     input.css('border-color','#ced4da');
//                 }
//             });
            


//             if(emptyInputCount == 0){
//                 let getCom = $("#com").val();
            
              
//                 postObj = {
//                     mess: getCom,
//                 }



// 				$.ajax({
// 					url: 'comment.php',
// 					type: 'POST',
// 					dataType: 'script',
// 					cache: false,
// 					contentType: false,
// 					processData: false,
// 					data: form_data,
//           success: function (data) {
//             parseJson = JSON.parse(data);
// 						if (parseJson.success_msg) {
//               alerte("cool");
// 						} 
//           }
// 				});
// 		}
// 	});
// });
    </script>
</body>
</html>