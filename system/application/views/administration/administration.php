<!-- Si l'administrateur est connect� -->
<?php if ($connecte == true){ ?>

<div style="float:left;">
<img src="<?php echo base_url()?>ressources/images/Aix-en-Othe002=Hennequin.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Berulle004=France.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Brienne-le-Chateau001=Roffey.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Chaource045=Monstier.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/La-Motte-Tilly005=Terray.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Chaource045=Monstier.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/La-Motte-Tilly005=Terray.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Chaource-Part-006=Damoiseau.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Chauchigny001=Arnoult.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Chavanges003=Dauphin.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Cussangy015=Monstier.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Dienville002=Habsbourg.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Foucheres003=Amoncourt.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/La-Chaise001=Bury.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Maizieres-les-Brienne001 =France.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Poivres001=Crespy.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Rosnay-l-Hopital010=Marmier.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Rumilly-les-Vaudes016=Vendome.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Saint-Pouange003=Menisson.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-AD-007=Raigecourt.jpg" height="50px" width="40px"/><br />
</div>

<div style="float:right;">
<img src="<?php echo base_url()?>ressources/images/Estissac001=La-Rochefoucauld.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Rosnay-l-Hopital011=Loys.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-XIX-003=Hennequin.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Chaource-Part-006=Damoiseau.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-mediatheque-017=Mole.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Chaource045=Monstier.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-cathedrale-023=Bareton.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-cathedrale-049=Dufour.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-cathedrale-240=Pyon-Festuot.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-I-007=Bersat.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-II-050=Clerey-Mole.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-II-058=Maillet-Vigneron.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-II-110=Maillet-Maison.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-IV-068=NI-NI.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-mediatheque-016=Du-Plessis.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-Part-013=Bauffremont.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-VI-004=Champagne-Navarre.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-VII-013=Troyes.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-VII-031=Pleurre.jpg" height="50px" width="40px"/><br />
<img src="<?php echo base_url()?>ressources/images/Troyes-XIX-005=Blampignon.jpg" height="50px" width="40px"/><br />
</div>

<div class="corps">	

<h3><center>Espace d'administration</center></h3>

<?php }else{ ?>
<!-- Si l'admin n'est pas connect� on le renvoit sur la page identification -->
<center><h3>Administration</h3></center>

<?php header("Location: ".base_url().'administration/identification'); ?>

<?php } ?>

