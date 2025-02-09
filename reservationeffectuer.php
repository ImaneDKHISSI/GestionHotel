<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
  <!--link M- --X-->
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css'>
  <!---->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> 
  <title>Formulaire d'identification du client</title>
  
    <!--------Css  popup-->
<style> 

.page-wrapper {
  width: 100%;
  height: 100%;
  background: url(https://goo.gl/OeVhun) center no-repeat;
  background-size: cover;
}

.blur-it {
  filter: blur(4px);
}


.modal-wrapper {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0; 
  left: 0;
  background: rgb(128 77 44 / 41%);
  visibility: hidden;
  opacity: 0;
  transition: all 0.25s ease-in-out;
}

.modal-wrapper.open {
  opacity: 1;
  visibility: visible;
}


.modal {
  width: 750px;
  height: 500px;
  display: block;
  margin: 50% 0 0 -300px;
  position: relative;
  top: 50%; 
  left: 50%;
  background: #fff;
  opacity: 0;
  transition: all 0.5s ease-in-out;
}

.modal-wrapper.open .modal {
  margin-top: -200px;
  opacity: 1;
}

.head { 
  width: 100%;
  height: 40px;
  padding: 12px 30px;
  overflow: hidden;
  background: #9c7d43;
}

.btn-close {
  font-size: 25px;
  display: block;
  float: right;
  color: white;
  margin-top: -10px;
}

.content {
  padding: 10%;
}

.good-job {
  text-align: center;
  
  
}
.good-job .fa-thumbs-o-up {
  font-size: 60px;
}
.good-job h2 {
  font-size: 45px;
  font-family: Playfair Display;
  color: black;
  margin-top: 50px;
}



</style>
</head>
<body>
    <!----changit just nom d class li f button -->
    <button type="submit" class="btn trigger">Enregistrer</button>
    </form>
 






<!-- Modal ----------->
<div class="modal-wrapper">
<div class="modal">
<div class="head">
<a class="btn-close trigger" href="#">
  <i class="fa fa-times" aria-hidden="true"></i>
</a>
</div>
<div class="content">
  <div class="good-job">
   
   <img src="images/rr.png" width="190px" >
   
    <h2 >Réservation effectuer </h2>

  </div>
</div>
</div>
</div>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script type="text/javascript">

$( document ).ready(function() {
$('.trigger').on('click', function() {
$('.modal-wrapper').toggleClass('open');
$('.page-wrapper').toggleClass('blur-it');
return false;
});
});
</script>
<!------------------------->



  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>