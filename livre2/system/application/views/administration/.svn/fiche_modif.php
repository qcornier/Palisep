
<?php if($table=='details'){

	if($update=="") //On affiche le formulaire tant qu'il n'y a pas de traitement en cours
	{
		//On encode les index du tableau "donnees" en utf8 a cause des accents qu'ils contiennent
	
?>
		<center><img width="100px" src="<?php echo PALISEP ; ?>ressources/images/<?php echo $donnees['libelle_image']; ?>.jpg"/></center>
		<center><?php echo $donnees['libelle_image']; ?></center><br /><br />

		<form method="post" action="<?php echo base_url() ?>fiche_modif/index/<?php echo $donnees['id']; ?>/details">
		<div style="float:left;margin-left:50px;">	
			<label style="float:left;width:190px;" for="vedette_chandon">Vedette chandon :</label><input type="text" name="vedette_chandon" id="vedette_chandon" value="<?php echo htmlentities(utf8_decode($donnees['vedette_chandon'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="pays">Pays :</label><input type="text" name="pays" id="pays" value="<?php echo htmlentities(utf8_decode($donnees['pays'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="region">Région :</label><input type="text" name="region" id="region" value="<?php echo htmlentities(utf8_decode($donnees['region'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="departement">Département :</label><input type="text" name="departement" id="departement" value="<?php echo htmlentities(utf8_decode($donnees['departement'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="commune">Commune :</label><input type="text" name="commune" id="commune" value="<?php echo htmlentities(utf8_decode($donnees['commune'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="edifice_conservation">Edifice de conservation :</label><input type="text" name="edifice_conservation" id="edifice_conservation" value="<?php echo htmlentities(utf8_decode($donnees['edifice_conservation'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="denomination">Dénomination :</label><input type="text" name="denomination" id="denomination" value="<?php echo htmlentities(utf8_decode($donnees['denomination'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="categorie">Catégorie :</label><input type="text" name="categorie" id="categorie" value="<?php echo htmlentities(utf8_decode($donnees['categorie'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="materiau">Matériau :</label><input type="text" name="materiau" id="materiau" value="<?php echo htmlentities(utf8_decode($donnees['materiau'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="ref_reproduction">Référence de la reproduction :</label><input type="text" name="ref_reproduction" id="ref_reproduction" value="<?php echo htmlentities(utf8_decode($donnees['ref_reproduction'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="auteur_cliche">Auteur du cliché :</label><input type="text" name="auteur_cliche" id="auteur_cliche" value="<?php echo htmlentities(utf8_decode($donnees['auteur_cliche'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="type_cliche">Type du cliché :</label><input type="text" name="type_cliche" id="type_cliche" value="<?php echo htmlentities(utf8_decode($donnees['type_cliche'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="annee_cliche">Année du cliché :</label><input type="text" name="annee_cliche" id="annee_cliche" value="<?php echo htmlentities(utf8_decode($donnees['annee_cliche'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="type_de_photo">Type de photo :</label><input type="text" name="type_de_photo" id="type_de_photo" value="<?php echo htmlentities(utf8_decode($donnees['type_de_photo'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="ref_im">Référence IM :</label><input type="text" name="ref_im" id="ref_im" value="<?php echo htmlentities(utf8_decode($donnees['ref_im'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="ref_pa">Référence PA :</label><input type="text" name="ref_pa" id="ref_pa" value="<?php echo htmlentities(utf8_decode($donnees['ref_pa'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="ref_ia">Référence IA :</label><input type="text" name="ref_ia" id="ref_ia" value="<?php echo htmlentities(utf8_decode($donnees['ref_ia'])); ?>"/><br /><br />
                        <label style="float:left;width:190px;" for="famille">Famille / Institution :</label><input type="text" name="famille" id="famille" value="<?php echo htmlentities(utf8_decode($donnees['famille'])); ?>"/><br /><br />
                </div>
		<div style="float:right;margin-right:50px;">	
			<label style="float:left;width:190px;" for="individu">Individu :</label><input type="text" name="individu" id="individu" value="<?php echo htmlentities(utf8_decode($donnees['individu'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="biographie">Biographie :</label><input type="text" name="biographie" id="biographie" value="<?php echo htmlentities(utf8_decode($donnees['biographie'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="date">Date :</label><input type="text" name="date" id="date" value="<?php echo htmlentities(utf8_decode($donnees['date'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="armes">Armes :</label><input type="text" name="armes" id="armes" value="<?php echo htmlentities(utf8_decode($donnees['armes'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="cimiers">Ornements extérieurs :</label><input type="text" name="cimiers" id="cimiers" value="<?php echo htmlentities(utf8_decode($donnees['cimiers'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="devise">Devise/Légende :</label><input type="text" name="devise" id="devise" value="<?php echo htmlentities(utf8_decode($donnees['devise'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="bibliographie">Bibliographie :</label><input type="text" name="bibliographie" id="bibliographie" value="<?php echo htmlentities(utf8_decode($donnees['bibliographie'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="auteurs">Auteur(s) :</label><input type="text" name="auteurs" id="auteurs" value="<?php echo htmlentities(utf8_decode($donnees['auteurs'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="titre">Titre :</label><input type="text" name="titre" id="titre" value="<?php echo htmlentities(utf8_decode($donnees['titre'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="lieu_edition">Lieu d'édition :</label><input type="text" name="lieu_edition" id="lieu_edition" value="<?php echo htmlentities(utf8_decode($donnees['lieu_edition'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="editeur">Editeur :</label><input type="text" name="editeur" id="editeur" value="<?php echo htmlentities(utf8_decode($donnees['editeur'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="annee_edition">Année d'édition :</label><input type="text" name="annee_edition" id="annee_edition" value="<?php echo htmlentities(utf8_decode($donnees['annee_edition'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="reliure">Reliure :</label><input type="text" name="reliure" id="reliure" value="<?php echo htmlentities(utf8_decode($donnees['reliure'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="provenance">Provenance :</label><input type="text" name="provenance" id="provenance" value="<?php echo htmlentities(utf8_decode($donnees['provenance'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="site">Site :</label><input type="text" name="site" id="site" value="<?php echo htmlentities(utf8_decode($donnees['site'])); ?>"/><br /><br />
			<label style="float:left;width:190px;" for="section">Section :</label><input type="text" name="section" id="section" value="<?php echo htmlentities(utf8_decode($donnees['section'])); ?>"/><br /><br />
                        <label style="float:left;width:190px;" for="cote">Cote :</label><input type="text" name="cote" id="cote" value="<?php echo htmlentities(utf8_decode($donnees['cote'])); ?>"/><br /><br />
                        <label style="float:left;width:190px;" for="folio_emplacement">Folio ou emplacement :</label><input type="text" name="folio_emplacement" id="folio_emplacement" value="<?php echo htmlentities(utf8_decode($donnees['folio_emplacement'])); ?>"/><br /><br />
			<input type="submit" name="submit" value="Modifier" />
		</div>
		</form>
	
	<?php 
	}
	else //On affiche le r�sultat de la mise � jour
	{
		echo $update;
	}
}
?>