
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
    .form{
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
        margin-left: 210px;
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
        <a href="<?php echo base_url().'index.php/produitController'?>" class="active"><i><img src="<?php echo base_url().'img/produit.png'?>" alt=""></i><span> Produits</span></a>
        <a href="<?php echo base_url().'index.php/commandeController'?>"><i><img src="<?php echo base_url().'img/com.png'?>" alt=""></i><span> Commandes</span></a>
        <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/achat.png'?>" alt=""></i><span> Liste des commandes</span></a>
         <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/fac.png'?>" alt=""></i><span> Achats</span></a>
        <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/facture.png'?>" alt=""></i><span> Facture</span></a>
         <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/ch.png'?>" alt=""></i><span> Graphe</span></a>
    </div> 
    <div class="content">
        <br><br><br><br>
        <h1 class="h3 mb-2 text-gray-800" style="margin-left: 20px; color: #fff;">Information sur les Produits</h1><br>
        <div class="w3-container" >
            <button onclick="document.getElementById('id01').style.display='block'" id="btnAjout" style="background: #232B37; color: #ccc; font-size: 20px; margin-left: 20px;" class="w3-btn"><img src="<?php echo base_url().'img/prod.png'?>" alt=""></button>
            <button id="print" style="background: #232B37; color: #ccc; font-size: 20px; margin-left: 20px;" class="w3-btn"><img src="<?php echo base_url().'img/print.png'?>" alt=""></button>
            <div class="row">
                <div class="col-sm-3"></div><br> 
             </div>
           
            <div class="col-sm-12 client w3-animate-opacity" >
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
                        <tbody id="tbody" style="color: black; background:#232B37">
        
                        </tbody>
                    </table>
            </div><br><br>
        </div>
            </div>
            <div id="id01" class="w3-modal" >
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background: #232B37;">
              
                  <div class="w3-center"><br>
                    <span onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger w3-xlarge w3-display-topright" title="Close Modal">X</span>
                    <img src="<?php echo base_url().'img/pro.png'?>" alt="Avatar" style="width:20%" >
                  </div>
            
                  <?php echo form_open (base_url().'index.php/produitController/addProduit'); ?>
                    <div class="w3-section">
                     <div class="avatar-preview" id="avatar-preview">
                        <div class="form" id="imagePreview" style="background-image:url('<?php echo base_url()."img/erreur.png"?>');">
                        </div>
                    </div><br>
                    <div class="form-group">
                        <input type="file"  id="imageUpload" name="imageUpload">
                       
                    </div>
                      <div class="form-group">
                            <label for="code" style="color: #fff;">Code </label>
                            <input type="text" id="code" name="code" placeholder="Entrez code produit" class="form-control">
                             <input type="hidden" id="id" name="id" placeholder="Entrez code produit" class="form-control">
                             <input type="hidden" id="total" name="total" AutoCalc="{stock} + {stockprod}" class="form-control">
                             
                      </div>
                      <div class="form-group">
                        <label for="nom" style="color: #fff;">Nom </label>
                        <input type="text" id="nom" name="nom" placeholder="Entrez nom produit" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label for="prix" style="color: #fff;">Prix unitaire (Ariary) </label>
                        <input type="number" id="prix" name="prix" placeholder="Entrez prix produit en Ariary" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="stock" style="color: #fff;">Stock </label>
                        <input type="number" id="stock" name="stock" placeholder="Entrez adresse client" class="form-control">
                      </div>
                      <br>
                      <input type="hidden" name="verifAction" id="verifAction">
                      <button class="btn btn-info btn-block" id="btnSave"><img src="<?php echo base_url().'img/ajout_prod.png'?>"> Ajouter</button><br>
                      <button type="Reset" class="btn btn-danger btn-block" id="btnAnnuler"><img src="<?php echo base_url().'img/cancel_prod.png'?>"> Annuler</button>
                    </div>
                    <?php echo form_close(); ?>
            
                  <div class="w3-container w3-border-top w3-padding-8 " style="background: #232B37;">
                    <span class="w3-right w3-padding w3-hide-small" style="color: #ccc;">Formulaire <a onclick="document.getElementById('id01').style.display='none'">Produit</a></span>
                    </div>
                         <div class="form-group" hidden>
                        <label>Nom</label>
                        <select name="nomprod" id="nomprod" class="form-control">
       
                        </select>  
                    </div>
                         <div class="form-group" hidden>
                        <label >Stock</label>
                        <select name="stockprod" id="stockprod" class="form-control">
       
                        </select>  
                    </div>
                     <div class="form-group" hidden>
                        <label >Id</label>
                        <select name="idprod" id="idprod" class="form-control">
       
                        </select>  
                    </div>
                  </div>
            
                </div>
              </div>
            </div>
            <div id="id02" class="w3-modal" >
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background: #232B37;">
              
                  <div class="w3-center"><br>
                    <span onclick="document.getElementById('id02').style.display='none'" class="btn btn-danger w3-xlarge w3-display-topright" title="Close Modal">X</span>
                    <img src="<?php echo base_url().'img/edit_book.png'?>" alt="Avatar" style="width:20%" >
                  </div>
            
                  <?php echo form_open (base_url().'index.php/produitController/UpdateProduit'); ?>
                    <div class="w3-section">
                      <div class="form-group">
                            <label for="code" style="color: #fff;">Code </label>
                            <input type="text" id="code1" name="code1" placeholder="Entrez code produit" class="form-control" readonly>
                             <input type="hidden" id="id1" name="id1" placeholder="Entrez code produit" class="form-control">
                             <input type="hidden" id="date" name="date" placeholder="Entrez date" class="form-control" onload="f()">
                      </div>
                      <div class="form-group">
                        <label for="nom" style="color: #fff;">Nom </label>
                        <input type="text" id="nom1" name="nom1" placeholder="Entrez nom produit" class="form-control" readonly>
                      </div>
                      <div class="form-group">
                        <label for="prix" style="color: #fff;">Prix unitaire (Ariary) </label>
                        <input type="text" id="prix1" name="prix1" placeholder="Entrez prix produit en Ariary" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="stock" style="color: #fff;">Stock </label>
                        <input type="text" id="stock1" name="stock1" placeholder="Entrez adresse client" class="form-control">
                        
                      </div>
                      <br>
                      <input type="hidden" name="verifAction" id="verifAction">
                      <button class="btn btn-info btn-block" id="btnSave1"><img src="<?php echo base_url().'img/save.png'?>"> Enregistrer</button><br>
                      <button type="Reset" class="btn btn-danger btn-block" id="btnAnnuler1"><img src="<?php echo base_url().'img/cancel_prod.png'?>"> Annuler</button>
                    </div>
                    <?php echo form_close(); ?>
            
                  <div class="w3-container w3-border-top w3-padding-8 " style="background: #232B37;">
                    <span class="w3-right w3-padding w3-hide-small" style="color: #ccc;">Formulaire <a onclick="document.getElementById('id02').style.display='none'">Produit</a></span>
                  </div>
            
                </div>
              </div>
            </div>
            <script src="<?php echo base_url().'assets/style/ajax/jquery/jquery.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/style/bootstrap/js/bootstrap.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/style/bootstrap/dataTable/js/jquery.dataTables.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/style/bootstrap/dataTable/js/dataTables.bootstrap.min.js'?>" type="text/javascript"></script>
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
                        "<button id='edit' onclick="+"document.getElementById('id02').style.display='block'"+" class=' btn btn-sm btn-info'  data='"+data[i].id+"'><img src='<?php echo base_url()."img/edit.png"?>' alt=''></button>" +
                        '</button>&nbsp;&nbsp;&nbsp;&nbsp;' +
                        "<button  class='btn btn-sm btn-danger' id='delete'  data='"+data[i].id+"'><img src='<?php echo base_url()."img/delete.png"?>' alt=''></button>"+
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

  $(document).on("click","#btnSave", function(e){
         var url = $('#maForm').attr('action');
                    var data = $('#maForm').serialize();
                    var nom = $("#nom").val();
    var code = $("#code").val();
    var stock = $("#stock").val();
		var prix = $("#prix").val();
                    var notif = "";
      notif =nom+" "+" est enregistré avec succès";
      var notif2 = "";
        notif2 = nom+" "+" est déjà enregistré, verifier la liste"
                 
            var notif3 = "";
        notif3 = "Veuillez remplir le(s) champ(s) vide(s)"
      if(nom == ""){
            swal("Erreur", notif3, "warning");
        }else if(code==""){
            swal("Erreur", notif3, "warning");
        }else if(nom==""){
            swal("Erreur", notif3, "warning");
        }else if(prix==""){
            swal("Erreur", notif3, "warning");
        }
        else if(stock==""){
            swal("Erreur", notif3, "warning");
        }
        
        else{
          $.ajax({
                      type: "ajax",
                      method: "post",
                      url: url,
                      data: data,
                      dataType: "json",
                      async: false,
                      success: function (response) {
                        if(response.success){
                          swal("Successful", notif, "success");
                       
                          showAllProduit();

                         
                        }else{
                          alert('Error!');
                        }
                      },
                      error: function(){
                        swal("Successful", notif, "success");     
                          }
                    });
            
        }	
                   
                  });


  $(document).on("click", "#edit",
                    function(){
                    var id = $(this).attr('data');
                    $.ajax({
                      type: "ajax",
                      method: "post",
                      url: '<?php echo base_url()."index.php/produitController/ProduitEdit" ?>',
                      async: false,
                      data: {id:id},
                      dataType: "json",
                      success: function(data){
                        $('input[name=id1]').val(data.id); 
                             $('input[name=code1]').val(data.code);
                             $('input[name=nom1]').val(data.nom);
                             $('input[name=prix1]').val(data.prix);
                             $('input[name=stock1]').val(data.stock);
                             
                            
                       },
                       error: function(){
                              alert('Edit server error !');
                          },
                    });
                  }); 

                  $('#btnSave1').on('click',function(){   
              var url = $('#monForm').attr('action');
              var data = $('#monForm').serialize();
              var id = $("#id1").val();
              var notif = "";
            notif ="id= "+id+" est modifié avec succès";
            var notif1 = "";
			notif1 ="La modification ne peut pas se réaliser";
                    $.ajax({
                      type: "ajax",
                      method: "post",
                      url: url,
                      data: data,
                      dataType: "json",
                      async: false,
                      success: function (response) {
                        if(response.success){
                          swal("Successful", notif, "success");
                       
                          showAllProduit();


                          }else{
                          alert('Error!');
                                    }
                      },
                      error: function(){
                        swal("Successful", notif, "success");
                          }
                    });
                  });

                  $(document).on("click", "#delete",
                    function(){
                    var id = $(this).attr('data');
                    var notif="";
                    notif ="id= "+id+" est supprimé avec succès";
                    var notif1 = "";
      notif1 ="La suppression ne peut pas se réaliser";
      swal({
			  title: "Etes-vous sur?",
			  text: "de vouloir supprimer cet produit,l'action est ireversible!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
          $.ajax({
                      type: "ajax",
                      method: "post",
                      url: '<?php echo base_url()."index.php/produitController/delete" ?>',
                      async: false,
                      data: {id: id},  
                      success: function(){
                        swal("Successful", notif, "success");
                        showAllProduit();
                       },
                       error: function(){
                        swal("Erreur", notif1, "error");
                        showAllProduit();
                          },
                    });
			  }
			  });
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
                $("#recher").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                $("#tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                 });
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

       <script type="text/javascript">
        $("#imageUpload").change(function (){
            var fileSize = this.files[0];
            var sizeInMb = fileSize.size;
            var sizeLimit = 2*1024*1024;
    
            var sizemb = sizeInMb/1024/1024;
            var sizekb = sizeInMb/1024;
    
            var ifsize = 1024*1024*1;
            var fsizenb = sizemb.toString().split(".")[0];
            var fsizekb = sizemb.toFixed(3);
    
            if(sizeInMb < sizeLimit){
    
                if (sizeInMb > ifsize) {
                    $("#penback").css("background", "#489248");
                    $("#avatar-preview").css("box-shadow", "0px 0px 5px rgb(72, 146, 72)");     
                }
                else{
                    $("#penback").css("background", "#459248");
                    $("#avatar-preview").css("box-shadow","0px 0px 0px 5px rgb(72, 146, 72)");
                }
            }
            else{
               
                $("#penback").css("background", "#c54646");
                $("#avatar-preview").css("box-shadow","0px 0px 0px 5px rgba(192, 70, 70)");
            }
        });
        </script>
        <script type="text/javascript">
        function readURL(input){
            if(input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $("#imagePreview").css("background-image", "url("+e.target.result+")");
                    $("#imagePreview").hide();
                    $("#imagePreview").fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function(){
            readURL(this);
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