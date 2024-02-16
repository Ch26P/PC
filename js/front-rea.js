(function ($) {
    $(document).ready(function () {
        $('.filtre').change(function (e) {

            $list = document.getElementById("list-rea").value;
            $elem_select = $("#img_computer_front").html();
console.log($list);
            // Empêcher l'envoi classique du formulaire
            e.preventDefault();

            // L'URL qui réceptionne les requêtes Ajax dans l'attribut "action" de <form>
            const ajaxurl = $(".filtre_rea").attr('action');

            // Les données de notre formulaire
            const data = {
                action: $(".filtre_rea").find('input[name=action]').val(),
                nonce: $(".filtre_rea").find('input[name=nonce]').val(),
                list: $list,
            }

            // Pour vérifier qu'on a bien récupéré les données
         //   console.log(ajaxurl);
         //   console.log(data);

            // Requête Ajax en Jquery

            $.ajax({
                url: ajaxurl,
                type: 'post',
                dataType: "html",
                data: data,

                success: function (response) {
                    let rf = JSON.parse(response);//recuper l objet json  
                    $("#img_computer_front").html(rf.data.html);// Remplacer le HTML

                },
            });
        });
    });

    $('#activ_rea').click(function (e) {
        /************************************************************** */

/*selectionner les éléments */
const filtre_rea = document.querySelector("#list-rea");
let light = document.querySelector(".shape");

if (filtre_rea.classList.contains("light_off")) {
    // Siteheader.classList.remove("full");
    filtre_rea.classList.remove("light_off");
    filtre_rea.classList.add("light_on");
   }
   else{
    filtre_rea.classList.add("light_off");//ajout d'une class
   }

if (light.classList.contains("light_on")) {
   // Siteheader.classList.remove("full");
light.classList.remove("light_on");
//light.classList.add("light_on");
  }
  else{
    light.classList.add("light_on");//ajout d'une class
  }


   /*     $format = document.getElementById("format").value;
        $categorie = document.getElementById("categorie").value;
        $order = document.getElementById("tri").value;
        $page_number = $page_number + 1;
        $elem_select = $("#bloc_photos_pag").html();
*/

    });


})(jQuery);
