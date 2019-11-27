<?php
require_once('puxarcidade.php'); 

$cod = $_POST['title'];
if(!empty($cod)):
$busca = "SELECT * FROM tb_cidades WHERE uf = '$cod' ";

$result = $db->query($busca, PDO::FETCH_ASSOC) or die("erro");
?>

<select id="categoria-selecta" name="cidade">
				<option value="">
					Selecione
				</option>

				<?php 
				 foreach ($result as $row){
				    echo '<option value="'.$row["nome"].'">'.$row['nome'].'</option>';

				}
				?>
			
			</select>

<?php else: ?>

	<img src="img/pequeno-loader.gif">Selecione um estado
<?php endif; ?>