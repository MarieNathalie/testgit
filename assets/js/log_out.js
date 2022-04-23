$(document).ready(function(){
$(document).on("click", "#l_btn", function(){
                var notif="";
                notif="Action reussi"
		swal({
			  title: "Etes-vous sur?",
			  text: "de vouloir déconnecter cette session???",
			  icon: "warning",
			  buttons: true,
			  dangerMode: true,
			})
			.then((willDelete) => {
			  if (willDelete) {
                             swal("Successful", notif, "success");
			     window.location.assign("login.jsp");
			  }
			  });
	});

});

