<h1>reclamation</h1>
<?php 
		/**
		* CODE PRINCIPAL appelé par reclamation.html
		** @author	XX    @date	02/2023
		*/
			$Civilite = $_POST['civilite'];
			$Nom = $_POST['nom'];
			$Prenom = $_POST['pre'];
			$Adresse = $_POST['add'];
			$Telephone = $_POST['telephone'];
			$Mail=$_POST['mail'];
			$Action = $_POST['action'];
			$ville = $_POST['ville'];
			$codeP =$_POST['cp'];
			$radio = $_POST['radio'];
			$autre = $_POST['autre'];
			
			echo "$Civilite $Prenom $Nom , merci de nous avoir contacté. <br/> <br/>" ;
			echo " Vos coordonnées sont les suivantes : <br/><br/> ";
			echo " $Adresse <br/><br/> ";
			echo " $codeP $ville <br/><br/> "	;					
			echo "Vous nous indiquez être insatisfait du (ou des) produits suivant : ";

			foreach ($_POST['pdt'] as $key=>$valeur)
			{
				echo $valeur ." " ;
				if($valeur == "autre"){
					echo "$autre";
				};
				};
											
			echo "<br/><br/>  Pour les motifs suivants :";	
				
			foreach ($_POST['motif'] as $key=>$valeur)			{
				echo $valeur ." " ;
				};
					

				
			echo "<br/><br/> Vous nous demandez un $radio .<br/>";
			echo "Le service client vous tiendra informé de la suite de votre demande par mail à l'adresse suivante : <br/><br/>";
			echo "$Mail <br/>";
			echo "Bien cordialement.";		
		
