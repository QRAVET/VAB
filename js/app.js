// document.getElementById("registerShow").addEventListener("click", function webbAppRegister(){
//     var switch_register = document.getElementById("register");
//     var switch_connexion = document.getElementById("connexion"); 
//     // if (switch_register.style.display === "block") {
//     //   switch_register.style.display = "none";
//     //   switch_connexion.style.display = "block";
//     // } else {
//     //   switch_register.style.display = "block";
//     //   switch_connexion.style.display = "none";
//     // }
//     // console.log(switch_register.style.display);
//     // console.log(switch_connexion.style.display);
//   });
console.log ("ready")


$("#formLogin").on("submit", function(e){
    e.preventDefault();
    
    var formSerialize = $(this).serialize();

    $.ajax({
        type: "post",
        url: "functions/getUser.php",
        data: formSerialize,
        success: function(response){
            userJSON = JSON.parse(response);
            if(userJSON.id){
                window.location.href="map"
            }else{
                $("#msg").html("Erreur de connexion");
                $("input[type=password]").val("");
            }
        }

    });
});

$('#formSignin').submit (function(e){
    e.preventDefault();
    
    var formSerialize = $(this).serialize();
    console.log ("léotbo")
    $.ajax({
        type: "post",
        url: "functions/setUser.php",
        data: formSerialize,
    
        success: function(response){
            let retour = JSON.parse(response);
            if(retour.success === true){
                window.location.href="login"
            }
        }

    })
});


function decrement(id){

    let nbrPlace = $('#stationNbrPlace-' + id)[0];
   
    let resultat = nbrPlace.textContent - 1;
   
    if(resultat <= 0){
        nbrPlace.textContent = 0;
    }else{
        nbrPlace.textContent = resultat;
    }
   
};
