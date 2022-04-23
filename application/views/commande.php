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
<style>

    .avatar-upload{
        position: relative;
        max-width: 205px;
        margin: auto;
       
    }
    .avatar-edit{
        position: absolute;
        right: 1;
        left: 150px;
        z-index: 1;
        top: 10px;
      
    }
    form{
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    .inp{
        display: none;
        
    }
    .lab{
        display: inline-block;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        margin-top: 502px;
        padding-left: 100px;
        border-radius: 100%;
        background: #ebb837;
        border: 3px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all .2s ease-in-out;
    }
    .lab:hover{
        background: #00000082;
        border-color: #d5d5d6;
    }
    .lab:after{
        content: "\f040";
        font-family: 'fontAwesome';
        color: #efeeee;
        position: absolute;
        top: 7px;
        right: 175;
        font-size: 25px;
        text-align: center;
        margin: auto;
    }
    .avatar-preview{
        width: 192px;
        height: 192px;
        position: relative;
        margin-left: 100px;
        border-radius: 100%;

       
    }

    
</style>
<body>
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
    <a href="<?php echo base_url().'index.php/menuController'?>"><i><img src="<?php echo base_url().'img/acc.png'?>" alt=""></i><span> Acceuil</span></a>
    <a href="<?php echo base_url().'index.php/clientController'?>"  ><i><img src="<?php echo base_url().'img/cli.png'?>" alt=""></i><span> Clients</span></a>
        <a href="<?php echo base_url().'index.php/produitController'?>" ><i><img src="<?php echo base_url().'img/produit.png'?>" alt=""></i><span> Produits</span></a>
        <a href="<?php echo base_url().'index.php/commandeController'?>" class="active"><i><img src="<?php echo base_url().'img/com.png'?>" alt=""></i><span> Commandes</span></a>
        <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/achat.png'?>" alt=""></i><span> Liste des commandes</span></a>
         <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/fac.png'?>" alt=""></i><span> Achats</span></a>
        <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/facture.png'?>" alt=""></i><span> Facture</span></a>
         <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/ch.png'?>" alt=""></i><span> Graphe</span></a>
    </div> 
    <div class="content">
        <br><br><br>
        <input type="text" id="heure" name="heure" style="color: #fff; background: #232B37; font-size: 20px; margin-left: 20px" hidden>
        <input type="text" id="id" name="id" style="color: #fff; background: #232B37; font-size: 20px; margin-left: 20px" hidden>
        <input type="text" id="date" name="date" style="color: #fff; background: #232B37; font-size: 20px; margin-left: 20px" hidden><br>
        <h1 class="h3 mb-2 text-gray-800" style="margin-left: 20px; color: #fff;">Information sur la Commande</h1><br><br><br>
        <div class="w3-container" >
            <div class="row">
                <div class="col-sm-3">
                    
               <div class="col">
        
            
            <div class="form-group">
                <label for="client" class="w3-card  col-sm-12 form-group animated bounce"  style="text-align:center; background: #232B37;color: #fff"><h2>CIN CLIENT</h2></label><br>
               <div class="form-group">
                   <input name="client" id="client" class="form-control input-lg" style="color: black;background: #fff" placeholder="Entrez votre CIN">
                   <input type="hidden" name="nom" id="nom" class="form-control input-lg" style="color: black;background: #fff">
                   <input type="hidden" name="etat" id="etat" class="form-control input-lg" value="non validé" style="color: black;background: #fff">
                  
            </div> </div><br>
            <div class="form-group" hidden>
                <label for="nomCli" class="w3-card   col-sm-12 form-group animated bounce " style="text-align:center; background: #232B37;color: #fff"><h2>NOM CLIENT</h2></label><br>
                <div>
                    <select name="nomCli" id="nomCli" class="form-control input-lg" style="color: #fff;background: transparent" readonly>
                
                </select>
                </div></div><br>
                <div class="form-group" hidden>
                <label for="prenomCli" class="w3-card   col-sm-12 form-group animated bounce " style="text-align:center; background: #232B37;color: #fff"><h2>PRENOM CLIENT</h2></label><br>
                <div>
                <select name="prenomCli" id="prenomCli" class="form-control input-lg" style="color: #fff;background: transparent" readonly>
                
                </select>
                </div>
            </div>
            </div>
            <div class="col-sm-4"></div><br> 
         </div>
           
            <div class="col-sm-9 client w3-animate-opacity" >
            <div class=" w3-card" style="text-align:center;background: #232B37;">
                <h2 style="color: #fff;"><img src="<?php echo base_url().'img/list_prod.png'?>" alt=""> LISTE DES PRODUITS</h2>
                </div><br> <div class="form-group">
                    <label for="reche" style="color: #fff;">Tapez quelque chose :</label>
                    <input type="text" style="color: #fff; background: transparent;" class="form-control input-lg" name="recher" id="recher" placeholder="recherche....">
                </div><br>
                <table class="table table-striped w3-table" id="tbInscri" style="text-align:center;background: #232B37;">
                        <thead style="color: #fff;">
                            <tr>
                                <th>Id</th>
                                
                                <th>Code produit</th>
                                <th>Nom produit</th>
                                <th>Prix unitaire</th>
                                <th>Stock</th>
                                <th>Action</th>							
                            </tr>
                        </thead>
                        <tfoot style="color: #fff;">
                            <tr>
                                <th>Id</th>
                               
                                <th>Code produit</th>
                                <th>Nom produit</th>
                                <th>Prix unitaire</th>
                                <th>Stock</th>
                                <th>Action</th>						
                            </tr>
                        </tfoot>
                        <tbody id="tbody" style="color: black">
        
                        </tbody>
                    </table>
            </div><br><br>
        </div>
            </div>
            
            <script src="<?php echo base_url().'assets/style/ajax/jquery/jquery.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/style/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/style/bootstrap/dataTable/js/jquery.dataTables.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/style/bootstrap/dataTable/js/dataTables.bootstrap.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/js/jquery.inputmask.js'?>"></script>
<script src="<?php echo base_url().'assets/js/printThis.js'?>" type="text/javascript"></script>
<script>
$(document).ready(function(){
function showAllProduit(){
      
      $.ajax({
          url: '<?php echo base_url()."index.php/produitController/showAllData" ?>',
          async: false,
          dataType: "json",
          success: function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                    html +='<tr>'+
                    '<td>'+data[i].id+'</td>'+
                    '<td>'+data[i].code+'</td>'+
                    '<td>'+data[i].nom+'</td>'+
                    '<td>'+data[i].prix+'</td>'+
                    '<td>'+data[i].stock+'</td>'+
                    '<td>'+ 
                        "<button id='btnCom' class=' btn btn-sm btn-info'  data='"+data[i].id+"' data-code='"+data[i].code+"'  data-nom='"+data[i].nom+"'  data-prix='"+data[i].prix+"'  data-stock='"+data[i].stock+"'><img src='<?php echo base_url()."img/comm.png"?>' alt=''></button>" +
                        '</button>&nbsp;&nbsp;&nbsp;&nbsp;' +
                        
                      '</td>'+
                    '</tr>';

             }
             $('#tbody').html(html);
          },
          error: function(e){
              alert(e);
          }
      });

  } 
  showAllProduit();  
  
  $(document).on("click", "#btnCom", function(){
            var id=$("#id").val("data");
            var datesave=$("#date").val();
            var heuresave=$("#heure").val();
           
            var code=$(this).attr("data-code");
            var nomprod=$(this).attr("data-nom");
            var prix1=$(this).attr("data-prix");
            var stock = $(this).attr("data-stock");
            var cin = $("#client").val();
            var prenom = $("#prenomCli").val();
            var nom = $("#nomCli").val();
            var nom1 = $("#nom").val();
            var etat = $("#etat").val();
            var notif = "";
            notif = "Veuillez remplir votre CIN"
            var notif1 = "";
            notif1 = "Vous n'êtes pas sur la liste des clients"
            
            if(cin==""){
                swal("Erreur", notif, "warning");
            }
            
            else{
                swal("Entrer le nombre des livres= "+nomprod+" que vous voulez acheter:", {
              content: "input", 
              name: "tot",
                          buttons: true,
			  dangerMode: false,
                          
			})			
			.then((tot) => {
				if(tot==null){
					swal(`Action annuler`)	
				}
				if(tot===""||tot==null||tot=="0"||tot<0){
					swal(`Action annuler`)
				}else{
					var achat = tot;
					var rest = stock - achat
					if(rest<0){
						swal(`Stock insuffisant`)
					}else{
						
						var total=tot*prix1;
                        $.ajax({
							type : "POST",
							url : '<?php echo base_url()."index.php/produitController/UpdateStock" ?>',
							data : data,
							success : function(response) {
                                                            swal(`Reste du stock: ${rest}`,`Net à Payer: ${total}`);
                                                         
                                                            listerProd();
							},
							complete : function(){
								
							},
							error : function(response) {
                                swal("Erreur", notif, "error");
                                
                                                                
							}
						});                
						
						
						
						
					}
				    
					
				}
				
			});


            }
            
            
        });
                  
 
});
</script>
<script>
    $(document).ready(function(){
    $('#table').dataTable({
        "language":{"url":"style/bootstrap/dataTable/dataTables.french.lang"}
    });
    })
</script> 
<script> 
     $(document).ready(function(){
    function f(){
               var d=new Date();
                $("#date").val(d.toDateString());
            }
            f();
        });
             </script> 
      <script> 
     $(document).ready(function(){
    function t(){
               setTimeout("t(),1000");
                var d=new Date();
                var h=d.getHours();
                var m=d.getMinutes();
                var s=d.getSeconds();
                if(h<10)h="0"+h;
                 if(m<10)m="0"+m;
                  if(s<10)s="0"+s;
                document.getElementById("heure").value=h+":"+m+":"+s;
               
               
            }
            t();
        });
             </script> 
<script>
            $(document).ready(function(){
                $("#recher").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                $("#tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                 });
            });
        });
        </script>
   <script>
        $('#print').click(function(){
           $('#tbInscri').printThis({
        debug: false,               // show the iframe for debugging
        importCSS: true,            // import parent page css
        importStyle: true,         // import style tags
        printContainer: true,       // print outer container/$.selector
        loadCSS: "C:\wamp64\www\vente_livre/w3.css",                // path to additional css file - use an array [] for multiple
        pageTitle: "Liste des Produits",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "<h1 style='text-align: center; color: #232B37'>Liste des Produits</h1>" ,               // prefix to html
        footer: null,               // postfix to html
        base: false,                // preserve the BASE tag or accept a string for the URL
        formValues: true,           // preserve input/form values
        canvas: false,              // copy canvas content
        doctypeString: '<!DOCTYPE html>', // enter a different doctype for older markup
        removeScripts: false,       // remove script tags from print content
        copyTagClasses: false,      // copy classes from the html & body tag
        beforePrintEvent: null,     // callback function for printEvent in iframe
        beforePrint: null,          // function called before iframe is filled
        afterPrint: null            // function called before iframe is removed 
           });
        });
      
      </script>     
</body>
</html>