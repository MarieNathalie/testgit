
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
            <a href="<?php echo base_url().''?>" class="l_btn" id="l_btn"><span class="fas fa-power-off"></span></a>
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
        <a href="<?php echo base_url().'index.php/clientController'?>"  class="active"><i><img src="<?php echo base_url().'img/cli.png'?>" alt=""></i><span> Clients</span></a>
        <a href="<?php echo base_url().'index.php/produitController'?>"><i><img src="<?php echo base_url().'img/produit.png'?>" alt=""></i><span> Produits</span></a>
        <a href="<?php echo base_url().'index.php/commandeController'?>"><i><img src="<?php echo base_url().'img/com.png'?>" alt=""></i><span> Commandes</span></a>
        <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/achat.png'?>" alt=""></i><span> Liste des commandes</span></a>
         <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/fac.png'?>" alt=""></i><span> Achats</span></a>
        <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/facture.png'?>" alt=""></i><span> Facture</span></a>
         <a href="<?php echo base_url().''?>"><i><img src="<?php echo base_url().'img/ch.png'?>" alt=""></i><span> Graphe</span></a>
    </div> 
    <div class="content">
        <br><br><br><br>
        <h1 class="h3 mb-2 text-gray-800" style="margin-left: 20px; color: #fff;">Information sur les Clients</h1><br>
        <div class="w3-container" >
            <button onclick="document.getElementById('id01').style.display='block'" id="btnAjout" style="background: #232B37; color: #ccc; font-size: 20px; margin-left: 20px;" class="w3-btn"><img src="<?php echo base_url().'img/ajout.png'?>" alt=""></button>
            <button id="print" style="background: #232B37; color: #ccc; font-size: 20px; margin-left: 20px;" class="w3-btn"><img src="<?php echo base_url().'img/print.png'?>" alt=""></button>
            <div class="row">
           
                <div class="col-sm-3"></div><br> 
             </div>
           
            <div class="col-sm-12 client w3-animate-opacity" >
            <div class=" w3-card" style="text-align:center;background: #232B37;">
                <h2 style="color: #fff;"><img src="<?php echo base_url().'img/tab.png'?>" alt=""> LISTE DES CLIENTS</h2>
                </div><br> <div class="form-group">
                    <label for="reche" style="color: #fff;">Tapez quelque chose :</label>
                    <input style="background: transparent; color: #fff;" type="text" class="form-control input-lg" name="recher" id="recher" placeholder="recherche....">
                </div><br>
                <table class="table table-striped w3-table" id="tbInscri" style="text-align:center; background:#232B37">
                        <thead>
                            <tr style="color: #fff;">
                                <th>Id</th>
                                <th>CIN</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Adresse</th>
                                <th>Action</th>							
                            </tr>
                        </thead>
                        <tfoot style="color: #fff;">
                            <tr >
                                <th>Id</th>
                                <th>CIN</th>
                                <th>Nom</th>
                                <th>Prénom(s)</th>
                                <th>Sexe</th>
                                <th>Téléphone</th>
                                <th>Adresse</th>
                                <th>Action</th>							
                            </tr>
                        </tfoot>
                        <tbody id="tbody" style="color: black; background:#232B37 ">
        
                        </tbody>
                    </table>
            </div><br><br>
        </div>
            </div>
            <div id="id01" class="w3-modal" >
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px;background: #232B37;">
              
                  <div class="w3-center"><br>
                    <span onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger w3-xlarge w3-display-topright" title="Close Modal">X</span>
                    <img src="<?php echo base_url().'img/aj.png'?>" alt="Avatar" style="width:20%" >
                  </div>
            
                  <?php echo form_open (base_url().'index.php/clientController/addClient'); ?>
                    <div class="w3-section">
                      <div class="form-group">
                          <input type="hidden" id="id" name="id" placeholder="Entrez cin client" class="form-control">
                            <label for="cin" style="color: #fff;">CIN </label>
                            <input type="number" id="cin" name="cin" placeholder="Entrez cin client" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="nom" style="color: #fff;">Nom </label>
                        <input type="text" id="nom" name="nom" placeholder="Entrez nom client" class="form-control" onchange="this.value=this.value.toUpperCase();">
                      </div>
                      <div class="form-group">
                        <label for="prenom" style="color: #fff;">Prenom </label>
                        <input type="text" id="prenom" name="prenom" placeholder="Entrez prenom client" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="sexe">Sexe:</label>
                        <select name="sexe" id="sexe" class="form-control">
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Féminin</option>
                        </select>  
                    </div>
                        
                      <div class="form-group">
                        <label for="tel" style="color: #fff;">Tel </label>
                        <input type="text" id="tel" name="tel" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Entrez tel client" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="adresse" style="color: #fff;">Adresse </label>
                        <input type="text" id="adresse" name="adresse" placeholder="Entrez adresse client" class="form-control">
                      </div>
                      <br>
                      <input type="hidden" name="verifAction" id="verifAction">
                      <button type="submit" class="btn btn-info btn-block" id="btnSave"><img src="<?php echo base_url().'img/add_cli.png'?>"> Ajouter</button><br>
                      <button type="Reset" class="btn btn-danger btn-block" id="btnAnnuler"><img src="<?php echo base_url().'img/cancel.png'?>"> Annuler</button>
                    </div>
                    <?php echo form_close(); ?>
                
                  <div class="w3-container w3-border-top w3-padding-8 " style="background: #232B37;">
                    <span class="w3-right w3-padding w3-hide-small" style="color: #ccc;">Formulaire <a onclick="document.getElementById('id01').style.display='none'">client</a></span>
                    <div class="form-group" hidden>
                        <label for="sexe">CIN</label>
                        <select name="cinCli" id="cinCli" class="form-control">
       
                        </select>  
                    </div>
                         <div class="form-group" hidden>
                        <label for="sexe">Nom</label>
                        <select name="nomcli" id="nomcli" class="form-control">
       
                        </select>  
                    </div>
                        </div>
                         <div class="form-group" hidden>
                        <label for="sexe">Prenom</label>
                        <select name="prenomcli" id="prenomcli" class="form-control">
       
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
                    <img src="<?php echo base_url().'img/edit_cli.png'?>" alt="Avatar" style="width:20%" >
                  </div>
            
                  <?php echo form_open (base_url().'index.php/clientController/UpdateClient'); ?>
                    <div class="w3-section">
                      <div class="form-group">
                          <input type="hidden" id="id1" name="id1" placeholder="Entrez cin client" class="form-control">
                            <label for="cin" style="color: #fff;">CIN </label>
                            <input type="number" id="cin1" name="cin1" placeholder="Entrez cin client" class="form-control" readonly>
                      </div>
                      <div class="form-group">
                        <label for="nom" style="color: #fff;">Nom </label>
                        <input type="text" id="nom1" name="nom1" placeholder="Entrez nom client" class="form-control" onchange="this.value=this.value.toUpperCase();" readonly>
                      </div>
                      <div class="form-group">
                        <label for="prenom" style="color: #fff;">Prenom </label>
                        <input type="text" id="prenom1" name="prenom1" placeholder="Entrez prenom client" class="form-control" readonly>
                      </div>
                      <div class="form-group" readonly>
                        <label for="sexe">Sexe:</label>
                         <input type="text" id="sexe1" name="sexe1" placeholder="Entrez prenom client" class="form-control" readonly>
                    </div>
                      <div class="form-group">
                        <label for="tel" style="color: #fff;">Tel </label>
                        <input type="text" id="tel1" name="tel1" data-inputmask='"mask": "(999) 999-9999"' data-mask placeholder="Entrez tel client" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="adresse" style="color: #fff;">Adresse </label>
                        <input type="text" id="adresse1" name="adresse1" placeholder="Entrez adresse client" class="form-control">
                      </div>
                      <br>
                      <input type="hidden" name="verifAction" id="verifAction">
                      <button type="submit" class="btn btn-info btn-block" id="btnSave1"><img src="<?php echo base_url().'img/save.png'?>"> Enregistrer</button><br>
                      <button type="Reset" class="btn btn-danger btn-block" id="btnAnnuler1"><img src="<?php echo base_url().'img/cancel.png'?>"> Annuler</button>
                    </div>
                    <?php echo form_close(); ?>
                  
                  
            
                  <div class="w3-container w3-border-top w3-padding-8 " style="background: #232B37;">
                    <span class="w3-right w3-padding w3-hide-small" style="color: #ccc;">Formulaire <a onclick="document.getElementById('id02').style.display='none'">client</a></span>
                  </div>
            
                </div>
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
function showAllClient(){
      
      $.ajax({
          url: '<?php echo base_url()."index.php/clientController/showAllData" ?>',
          async: false,
          dataType: "json",
          success: function(data){
              var html = '';
              var i;
              for(i=0; i<data.length; i++){
                    html +='<tr>'+
                    '<td>'+data[i].id+'</td>'+
                    '<td>'+data[i].nom+'</td>'+
                    '<td>'+data[i].prenom+'</td>'+
                    '<td>'+data[i].cin+'</td>'+
                    '<td>'+data[i].sexe+'</td>'+
                    '<td>'+data[i].adresse+'</td>'+
                    '<td>'+data[i].tel+'</td>'+
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
  showAllClient();

  $(document).on("click","#btnSave", function(e){
         var url = $('#maForm').attr('action');
                    var data = $('#maForm').serialize();
                    var nom = $("#nom").val();
    var prenom = $("#prenom").val();
    var sexe = $("#sexe").val();
		var adresse = $("#adresse").val();
		var tel = $("#tel").val();
                    var notif = "";
      notif =nom+" "+prenom+ " est enregistré avec succès";
      var notif2 = "";
        notif2 = nom+" "+prenom+" est déjà enregistré, verifier la liste"
                 var notif1 = "";
        notif1 = "CIN= "+cin+" est déjà enregistré, verifier la liste"
            var notif3 = "";
        notif3 = "Veuillez remplir le(s) champ(s) vide(s)"
      if(nom == ""){
            swal("Erreur", notif3, "warning");
        }else if(cin==""){
            swal("Erreur", notif3, "warning");
        }else if(prenom==""){
            swal("Erreur", notif3, "warning");
        }else if(cin==""){
            swal("Erreur", notif3, "warning");
        }
        else if(sexe==""){
            swal("Erreur", notif3, "warning");
        }else if(adresse==""){
            swal("Erreur", notif3, "warning");
        }
        else if(tel==""){
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
                       
                         showAllClient();

                         
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
                      url: '<?php echo base_url()."index.php/clientController/ClientEdit" ?>',
                      async: false,
                      data: {id:id},
                      dataType: "json",
                      success: function(data){
                        $('input[name=id1]').val(data.id); 
                             $('input[name=cin1]').val(data.cin);
                             $('input[name=nom1]').val(data.nom);
                             $('input[name=prenom1]').val(data.prenom);
                             $('input[name=sexe1]').val(data.sexe);
                             $('input[name=tel1]').val(data.tel);
                             $('input[name=adresse1]').val(data.adresse);
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
                       
                        showAllClient();


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
			  text: "de vouloir supprimer cet client,l'action est ireversible!",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
          $.ajax({
                      type: "ajax",
                      method: "post",
                      url: '<?php echo base_url()."index.php/clientController/delete" ?>',
                      async: false,
                      data: {id: id},  
                      success: function(){
                        swal("Successful", notif, "success");
                          showAllClient();
                       },
                       error: function(){
                        swal("Erreur", notif1, "error");
                          showAllClient(); 
                          },
                    });
			  }
			  });
      });         
                  
 
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
    $(document).ready(function(){
    $('#table').dataTable({
        "language":{"url":"style/bootstrap/dataTable/dataTables.french.lang"}
    });
    })
</script> 
    <script>
        $(function () {

          $('[data-mask]').inputmask()
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
        pageTitle: "Liste des Clients",              // add title to print page
        removeInline: false,        // remove inline styles from print elements
        removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
        printDelay: 333,            // variable print delay
        header: "<h1 style='text-align: center; color: #232B37'>Liste des Clients</h1>" ,               // prefix to html
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