

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formpublication</title>
    <!-- Font Icon -->
    

    <!-- Main css -->
  
</head>
<body>
<div class="container text-center">
     <div class="row align-items-start">  
        <div class="col">
          <form method="POST" id="formular">
            <textarea class="form-control" id="exampleFormControlTextarea1" name="text" rows="3" placeholder="Commentaire..." style="width:600px;margin-left: 250px;">
            </textarea>
            <input type="hidden" name="id" value="<?php echo $_SESSION['id_user'] ?>">
            <input type="hidden" name="publication_id" value="<?php echo $_GET['id']?>">
            <button type="submit" name="submit" onclick="location.reload()" class="btn btn-primary" style="border-radius:90px; margin-left: 750px; margin-top: -6%;"><img src="images/c185d77163c157008199e78f78cca13e-removebg-preview.png" width="50" height="50"></button>
            <br><br>
            <div id="msg"></div>
          </form>             
     </div>
     <div class="contents" data-product-id="cout"><?php echo $_GET['id'];?></div>
   </div>
   </div>
   <script type="text/javascript" defer> 

$(document).ready(function(){
    $("#formular").submit(function(e) {
        e.preventDefault()

        $.ajax({
            url:'comment.php',
            data: $(this).serialize(),
            method:'POST',
            success: function(resp){
                $('#msg').html(resp);
                recupere(); // appel de la fonction recupere() après avoir soumis le formulaire de commentaire
            }
        });
    });

    function recupere(){
        // event.preventDefault()
        var id = $('div[data-product-id="cout"]').text();
        $.ajax({
            url:'load.php',
            type:'POST',
            data: {id: id}, // Inclure l'identifiant dans la requête AJAX
            success:function(donne){
                $('.contents').html(donne);
            }
        })
    }
    recupere(); // appel initial de la fonction recupere()
});

</script> 
</body>
</html>