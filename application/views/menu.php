
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url().'style1.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'vendor/css/w3.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'w3.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'vendor/fontawesome-free/css/all.min.css'?>">
    <link href="<?php echo base_url().'assets/bootstrap/bootstrap.min.css'?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url().'assets/w3.css'?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url().'assets/w3-colors-metro.css'?>" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url().'vendor/css/print.min.css'?>" rel="stylesheet" type="text/css"/>
    <script src="<?php echo base_url().'assets/style/ajax/jquery/jquery.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/bootstrap/bootstrap.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets/style/sweetalert.min.js'?>" type="text/javascript"></script>
    <link rel="icon" type="image/png" sizes="50x50" href="<?php echo base_url().'img/vente1.png'?>">
    <title>Vente livre</title>
</head>
<body>
    <style>
        .form-group i{
            position: absolute;
            right: 8px;

        }
    </style>
    <input type="checkbox" id="check">
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="right_area">
            
            <a href="#" class="l_btn" id="l_btn"><span class="fas fa-power-off"></span></a>
        </div>
    </header>
    <div class="sid">
        <div class="left_area">
            <h3><img src="<?php echo base_url().'img/vente.png'?>" alt=""> Vente <span>Livres</span></h3>
        </div><br>
        <center>
            <img src="<?php echo base_url().'img/1.png'?>" class="profile_image" alt="">
            <h4>by Eric Artidam</h4>
        </center>
    </div>
    <div class="sidebar">
   
        <a href="<?php echo base_url().'index.php/menuController'?>" class="active"><i><img src="<?php echo base_url().'img/acc.png'?>" alt=""></i><span> Acceuil</span></a>
        <a href="<?php echo base_url().'index.php/clientController'?>"><i><img src="<?php echo base_url().'img/cli.png'?>" alt=""></i><span> Clients</span></a>
        <a href="<?php echo base_url().'index.php/produitController'?>"><i><img src="<?php echo base_url().'img/produit.png'?>" alt=""></i><span> Produits</span></a>
        <a href="<?php echo base_url().'index.php/commandeController'?>"><i><img src="<?php echo base_url().'img/com.png'?>" alt=""></i><span> Commandes</span></a>
        <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/achat.png'?>" alt=""></i><span> Liste des commandes</span></a>
         <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/fac.png'?>" alt=""></i><span> Achats</span></a>
        <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/facture.png'?>" alt=""></i><span> Facture</span></a>
         <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/ch.png'?>" alt=""></i><span> Graphe</span></a>
    </div> 
    <div class="content">
       <br><br><br><br>
       <h1 style="color: #1DC4E7; padding-top: 380px; margin-left: 460px; font-size: 60px;">GESTION VENTE DES LIVRES</h1>
        <h1 style="color: #fff; margin-left: 620px; font-size: 30px;">Cher Client, Faite votre choix!!!!</h1><br>
        </div> 
 <script> 
     $(document).ready(function(){
    function f(){
               var d=new Date();
                $("#date").val(d.toDateString());
            }
            f();
        });
             </script> 
</body>
</html>