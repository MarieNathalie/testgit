$(document).ready(function(){

    function reinitialiserForm(){
		$("#nom").val("");
		$("#prenom").val("");
		$("#email").val("");
		$("#password").val("");
		$("#pss").val("");
		$("#mail").val("");
                $("#pswd").val("");
	}
	function enregistrer() {
		var nom = $("#nom").val();
		var prenom = $("#prenom").val();
		var email = $("#email").val();
		var password = $("#password").val();
		var notif = "";
			notif =nom+" "+prenom+ " est enregistré avec succès";
		$.ajax({
			type : "POST",
			url : "saveUser.action",
			data : "nom=" + nom + "&prenom=" + prenom + "&email=" + email+ "&password=" + password,
			success : function(data) {
				swal("Successful", notif, "success");
			},
			complete : function(){
				reinitialiserForm();
			},
			error : function(data) {
				var notif = data.msg;
				swal("Erreur", notif, "error");
			}
		});
	}
        function aff(){
            var nomKey=$("#email").val();
            $.ajax({
			type: "GET",
			url: "email.action",
			data:"nomKey="+nomKey,
			success: function(result){
				var tbData="";
				$.each(result.useList, function(){
					tbData += "<option value="+this.email+">"+this.email+"" +
							"</option>"
				});
                                
				$("#emailuse").html(tbData);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
        function aff1(){
            var nomKey=$("#email").val();
            $.ajax({
			type: "GET",
			url: "email.action",
			data:"nomKey="+nomKey,
			success: function(result){
				var tbData="";
				$.each(result.useList, function(){
					tbData += "<option value="+this.password+">"+this.password+"" +
							"</option>"
				});
                                
				$("#useid").html(tbData);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
        function aff2(){
            var nomKey=$("#mail").val();
            $.ajax({
			type: "GET",
			url: "email.action",
			data:"nomKey="+nomKey,
			success: function(result){
				var tbData="";
				$.each(result.useList, function(){
					tbData += "<option value="+this.email+">"+this.email+"" +
							"</option>"
				});
                                
				$("#emailuse").html(tbData);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
        function aff3(){
            var nomKey=$("#mail").val();
            $.ajax({
			type: "GET",
			url: "email.action",
			data:"nomKey="+nomKey,
			success: function(result){
				var tbData="";
				$.each(result.useList, function(){
					tbData += "<option value="+this.password+">"+this.password+"" +
							"</option>"
				});
                                
				$("#useid").html(tbData);
                                
			},
			error: function(result){
				alert("Erreur!");
			}
		});
        }
        $(document).on("keyup", "#email", function(){
         aff();
         aff1();
         });
          $(document).on("click", "#email", function(){
         aff();
         aff1();
         });
         $(document).on("keyup", "#mail", function(){
         aff2();
         aff3();
         });
        $(document).on("click", "#btnSave", function(){
            $("#verifAction").val("")
            var nom = $("#nom").val();
            var prenom = $("#prenom").val();
            var email = $("#email").val();
             var emailuse = $("#emailuse").val();
            var password = $("#password").val();
            var pss = $("#pss").val();
            var notif = "";
            var notif1 = "";
            var notif2 = "";
            var notif3 = "";
            notif = "Veuillez remplir le(s) champ(s) vide(s)"  
            notif1 = "Verifier votre mot de passe"
            notif2= "Votre mot de passe est simple, veuillez saisir au moins 8 caractères"
            notif3= email+ " existe déjà"
            if(nom == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(prenom == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(email == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(password == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(pss == ""){
                 swal("Erreur", notif, "warning");
            }
             else if(password != pss){
                 swal("Erreur", notif1, "warning");
            }
            else if(email = emailuse){
                 swal("Erreur", notif3, "warning");
            }
            else{
            enregistrer(); 
            
            }
            
        });
        $(document).on("click", "#btnLog", function(){
           var mail = $("#mail").val();
           var pswd = $("#pswd").val();
           var email = $("#emailuse").val();
           var pss = $("#useid").val();
            var notif = "";
            var notif1 = "";
            var notif2 = "";
            var notif3 = "";
            notif = "Veuillez remplir le(s) champ(s) vide(s)"  
            notif1 = "Votre mot de passe est incorrecte"
            notif2= "Vous ne pouvez pas y acceder, verifier votre email"
            notif3= "Bienvenue "+mail
            
            if(mail == ""){
                 swal("Erreur", notif, "warning");
            }
            else if(pswd == ""){
                 swal("Erreur", notif, "warning");
            }
             else if(mail != email){
                 swal("Erreur", notif2, "warning");
            }
            else if(pswd != pss){
                 swal("Erreur", notif1, "warning");
            }
            else{  
             
            
             window.location.assign("menu.jsp");
              swal("" ,notif3, "success");
            
            }
        });
});


