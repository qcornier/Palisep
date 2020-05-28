
<!-- Si l'administrateur est connecté -->
<?php if ($connecte == true){ ?>

<div class="corps">

<!-- AFFICHAGE RESULTAT-->
<!-- RESULTATS PATRONYME -->
<?php 
if(isset($_GET['rechercher_photo'])){ ?>
        
	<h4><a href="javascript:history.back()"><<< Retour sur le formulaire </a></h4>
	<h4 style="margin-left:70%">Nombre de Résultats : <?php echo count($donnees); ?></h4>
<table border="1" bordercolor="#C9C9C9" frame="hsides" rules="rows" width="100%">
	<?php foreach($donnees as $data) { ?>
		<tr>
		<!-- patronyme--><td width="40%"><li><strong><?php echo anchor('legende_photos/photos/'.$data->id, $data->famille);?></strong>, <em><?php if (!empty($data->commune)){ echo $data->commune; }?></em>, <em><?php if (!empty($data->village)){ echo $data->village; }?></em></li>
		<!-- infos photos--><strong>Détails : </strong><?php if (!empty($data->dénomination)){ echo $data->dénomination; }?>, <?php if (!empty($data->date)){ echo $data->date; }?></td>
		<!-- photos-->
		<td align="right" >
				<a href="<?php echo PALISEP ; ?>resources/images/<?php echo $data->libellé_image; ?>.jpg" rel="lightbox[roadtrip]">
					<img height="100px" src="<?php echo PALISEP ; ?>resources/images/<?php echo $data->libellé_image; ?>.jpg"/>
				</a>
		</td>
		</tr>			 		 		 		 		 		 		 		 		 		 		 		 		 		
	<?php 
	}	?>
	</table>
<?php 
} 
?>

<!-- FORMULAIRE DE RECHERCHE-->
<!-- sinon affichage du formulaire -->
<?php if(!isset($_GET['rechercher_photo'])){ ?>

<h3 class="title"><center>Recherche d'Iconographies</center></h3>
<br/>
<!--<fieldset>
		<legend><strong> Recherche par Pays</strong></legend><br />
                <form action="recherche_photo" method="post">
                <label style="float:left;width:175px;"><strong>Mots clés du Pays</strong></label>
		<input type="text" name="Pays" size="30" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> /><br/>
		<input type="submit" name="rechercher_Pays" value="Rechercher les familles dans ce Pays" />
	</form>
	<br />
</fieldset><br />
<fieldset>
		<legend><strong> Recherche par région</strong></legend><br />
                <form action="recherche_photo" method="post">
                <label style="float:left;width:175px;"><strong>Mots clés de la région </strong></label>
		<input type="text" name="Region" size="30" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<input type="submit" name="rechercher_Region" value="Rechercher les familles de la Region" />
	</form>
	<br />
</fieldset><br />

<fieldset>
		<legend><strong> Recherche par département</strong></legend><br />
                <form action="recherche_photo" method="post">
                <label style="float:left;width:175px;"><strong>Mots clés du département</strong></label>
		<input type="text" name="Departement" size="30" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<input type="submit" name="rechercher_Departement" value="Rechercher les familles du département" />
	</form>
	<br />
</fieldset><br />-->
<!-- COMMUNE-->
<fieldset >
		<legend><strong>Recherche d'Iconographies</strong></legend><br />
	<form action="recherche_photo" method="get">
	
	<!-- COLONNE GAUCHE -->
	<div id="gauche_photos">

<!-- PAYS-->
		<label class="label1"><strong>Pays</strong></label>
		<select name="pays">
                        <option value=""> </option>
                        <?php
                        foreach($pays as $pay){ ?>
			<option value="<?php echo $pay->pays ; ?>"><?php echo $pay->pays ; ?></option>
                        <?php } ?>
                    </select> <br /><br />
<!-- REGION-->
		<label class="label1"><strong>Région</strong></label>
		<input type="text" name="region" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br /> 			
<!-- COMMUNE-->
		<label class="label1"><strong>Commune</strong></label>
		<!--<input type="text" name="Date"  <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />-->
		<select name="Commune">
				<option value=""> </option>
		<?php foreach($communes as $commune){ ?>
				<option value="<?php echo $commune->commune ; ?>"><?php echo $commune->commune ; ?></option>
		<?php } ?>
		</select>
		<br /><br />
<!-- VILLAGE-->
		<!--<label class="label1"><strong>Village</strong></label>
		<input type="text" name="Village" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br /> -->

<!-- CONSERVATION-->
		<label class="label1"><strong>Edifice de Conservation</strong></label>
		<input type="text" name="Conservation"  <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br/>

<!-- DENOMINATION-->
		<label class="label1"><strong>Dénomination</strong></label>
		<!--<input type="text" name="Denomination"  <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> /> -->
		<select name="Denomination">
				<option value=""> </option>
				<option value="bréviaire du diocèse de Troyes">Bréviaire du diocèse de Troyes</option>
				<option value="cachet">Cachet</option>
				<option value="contre-sceau">Contre-sceau</option>
				<option value="dessin à la plume">Dessin à la plume</option>
				<option value="dessin sur estampe">Dessin sur estampe</option>
				<option value="dessin">Dessin</option>
				<option value="empreinte de sceau">Empreinte de sceau</option>
				<option value="enluminure">Enluminure</option>
				<option value="estampage">Estampage</option>
				<option value="estampe">Estampe</option>
				<option value="ex-libris">Ex-libris</option>
				<option value="filigrane">Filigrane</option>
				<option value="gravure">Gravure</option>
				<option value="Lithographie">Lithographie</option>
				<option value="livre">Livre</option>
				<option value="manuscrit">Manuscrit</option>
				<option value="miniature">Miniature</option>
				<option value="relevé">Relevé</option>
				<option value="reliure">Reliure</option>
				<option value="timbre à sec">Timbre à sec</option>
				
		<!--<?php foreach($denominations as $denomination){ ?>
				<option value="<?php echo $denomination->dénomination ; ?>"><?php echo $denomination->dénomination ; ?></option>
		<?php } ?> -->
		</select>
		<br /><br />		

		
	</div>		
	<!-- COLONNE DROITE -->
	<div id="droite_photos">

<!-- PATRONYME-->
		<label class="label1"><strong>Patronyme</strong></label>
		<input type="text" name="Patronyme"  <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br/>		
<!--ARMES -->
		<label class="label1" ><strong>Armes</strong></label>
		<input type="text" name="mot"<?php if (isset($_GET['mot'])){ ?>value="<?php echo $_GET['mot'] ;?>"<?php }; ?>/>
		<br /><br />
<!--DEVISE LEGENDE -->
		<label class="label1" ><strong>Devise / Légende</strong></label>
		<input type="text" name="devise_legende"<?php if (isset($_GET['mot'])){ ?>value="<?php echo $_GET['mot'] ;?>"<?php }; ?>/>
		<br /><br />

<!-- CATEGORIE
		<label class="label1"><strong>Catégorie</strong></label>-->
		<!--<input type="text" name="Categorie"  <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> /> -->
		<!--<select name="Categorie">
				<option value=""> </option>
		<?php foreach($categories as $categorie){ ?>
				<option value="<?php echo $categorie->catégorie ; ?>"><?php echo $categorie->catégorie ; ?></option>
		<?php } ?>
		</select>
	<br /><br />-->

<!-- MATERIAU
		
		<label class="label1"><strong>Matériau</strong></label>-->
		<!--<input type="text" name="Materiau"  <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> /> -->
		<!--<select name="Materiau" >
				<option value=""> </option>
		<?php foreach($materiaux as $materiau){ ?>
				<option value="<?php echo $materiau->matériau ; ?>"><?php echo $materiau->matériau ; ?></option>
		<?php } ?>
		</select>
		<br /><br />-->
	
	<!-- CIMIERS / ORNEMENTS EXTÉRIEURS -->
		<label class="label1"><strong>Cimiers / Ornements extérieurs</strong></label>
		<input type="text" name="Cimiers" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />

        <!--PRESENCE DE SCEAU -->
                <label class="label1"><strong>Sceau</strong></label><input type="checkbox" name="sceau" value="avec"><br /><br />

        <!-- DATE-->
	
		<label class="label1"><strong>Date</strong></label>
		<!--<input type="text" name="Date"  <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />-->
		<select name="Date">
				<option value=""> </option>
		<?php foreach($dates as $date){ ?>
				<option value="<?php echo $date->date ; ?>"><?php echo $date->date ; ?></option>
		<?php } ?>
		</select>
		<br /><br />		


</div> <!-- fin colonne droite-->	
<br /><br /><br /><br />
<!-- COLONNE GAUCHE 2-->
<div id="gauche_2">
	<!-- AUTEURS-->
		<label class="label1"><strong>Auteur(s)</strong></label>
		<input type="text" name="auteur" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />		
<!-- TITRE-->
		<label class="label1"><strong>Titre</strong></label>
		<input type="text" name="titre" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />		
<!-- LIEU EDITION -->
		<label class="label1"><strong>Lieu d'édition</strong></label>
		<input type="text" name="lieu_edition" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />	
<!-- ANNEE EDITION-->
		<label class="label1"><strong>Année d'édition</strong></label>
		<input type="text" name="annee_edition" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />
<!-- EDITEUR-->
		<label class="label1"><strong>Editeur</strong></label>
		<input type="text" name="editeur" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />
<!-- RELIURE-->
		<label class="label1"><strong>Reliure</strong></label>
		<input type="text" name="reliure" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />
</div>
<!-- #####-->

<!-- COLONNE DROITE 2-->
<div id="droite_2">
<!-- PROVENANCE-->
		<label class="label1"><strong>Provenance</strong></label>
		<input type="text" name="provenance" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />
<!-- SITE-->
		<label class="label1"><strong>Site</strong></label>
		<input type="text" name="site" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />
<!-- SECTION-->
		<label class="label1"><strong>Section</strong></label>
		<input type="text" name="section" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />
<!-- COTE-->
		<label class="label1"><strong>Cote</strong></label>
		<input type="text" name="cote" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />
<!-- FOLIO-->
		<label class="label1"><strong>Folio ou Emplacement</strong></label>
		<input type="text" name="folio" <?php if (isset($_GET['search'])){ ?>value="<?php echo $_GET['search'] ;?>"<?php }; ?> />
		<br /><br />
</div>
<!-- #####-->		
	
		<div style="margin-left:50%;">
		<br /><br /><br />
		<input type="submit" name="rechercher_photo" value="Rechercher" />
	</div>
	
		</form>
	<br />
	</fieldset><br />

<!-- </div>-->
<?php } ?> 


<?php }else{ ?>
<!-- Si l'admin n'est pas connecté on le renvoit sur la page identification -->
	<?php header("Location: ".base_url().'administration/identification'); ?>
<?php } ?>

<div>


