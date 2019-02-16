<?php

$contact=  array(      
						
						'Prenom'=>'Abdou Karim',
					   'Nom'=>'Fall',
					   'Tel'=>'773168640',
					   'Email'=>'abdoukfall9@gmail.com',
					   'N° Carte Etudiant'=>'201708DEE',
					   'Profession'=>'Etudiant'
					   'Date de naissaance'=>'26 Janvier 1996',
						'Identifiant Slack' =>'Abdu Kareem Fall');

?>

<!DOCTYPE html>
	<html lang="fr">
	
		<head>
			<meta charset="UTF-8">
			<title>Identifacation</title>
		<style>
			table,tr,td,th{
				border: 2px dashed black;
				padding : 15px;
				border-radius: 15px 15px 15px 15px;
				font-size: 35px;
				text-decoration-color: white;

			}
			body{
				background-color : deepskyblue;
			}
		</style>

=		</head>

		
		<body>
			<center style="padding-top: 8%;">
			
			<table>
				<th colspan="4"><a href="photo.jpg"><img src="photo.jpg" title="Cliquez pour agrandir" style="
    height: 200px;
    width: 170px;
    "/></a></th>
				<?php foreach ($contact as $key => $value): ?>
					<tr>
						<td><?php echo $key;?></td>
						<td><?php echo $value;?></td>	
					</tr>

				<?php endforeach ?>
			</table>
			</center>
		</body>
	
	</html>	

	