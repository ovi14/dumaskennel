<?php 
include('header.html');

$row = array();
if(isset($_GET['mop'])) {
  $row = getMopById($_GET['mop']);
} else if(isset($_GET['pui'])) {
  $row = getPuiById($_GET['pui']);
} else if(isset($_GET['monta'])) {
  $row = getMontaById($_GET['monta']);
}

// print_r('<pre>');
// print_r($row);
// print_r('</pre>');
?>

      <div class="mainbar">
        <div class="article">

          <h2><span><?= $row['nume']?></span></h2>
          <div class="details-container">
      			<table id="details_table" border="0">
              <?php 
              if($row['titlu'] != "") { ?>
                <tr>
                  <td width="20%">Title:</td>
                  <td><?= $row['titlu'] ?></td>
                </tr>  
              <?php } 
              if($row['parinti'] != "") { ?>
                <tr>
                  <td>Parents:</td>
                  <td><?= $row['parinti'] ?></td>
                </tr>  
              <?php }  
              if($row['sex'] != "") { ?>
                <tr>
                  <td>Gender:</td>
                  <td><?= ($row['sex']==1 ? "male" : "female") ?></td>
                </tr>  
              <?php }  
              if($row['data'] != "") { ?>
                <tr>
                  <td>Date:</td>
                  <td><?= $row['data'] ?></td>
                </tr>  
              <?php } ?>           
      			</table>

            <?php if($row['poza1'] != "") { ?>
              <br>
              <img src="administrare/media/<?= $row['poza1'] ?>"  width="870"/> 
            <?php } ?> 
            <?php if($row['pedigree'] != "") { ?>
              <br>
              <div>Pedigree:</div>
              <a target="_blank" href="administrare/media/<?= $row['pedigree'] ?>"><img src="administrare/media/<?= $row['pedigree'] ?>" width="870"/></a>
            <?php } ?> 

            <?php if(($row['poza2'] != "") || ($row['poza3'] != "") || ($row['poza4'] != "") || ($row['poza5'] != "") || ($row['poza6'] != "")) { ?>
              <br>
              <div>Photo Galery:</div>
              <?php if($row['poza2'] != "") { ?>
                <br>
                <img src="administrare/media/<?= $row['poza2'] ?>"  width="870"/> 
              <?php } ?> 
              <?php if($row['poza3'] != "") { ?>
                <br>
                <img src="administrare/media/<?= $row['poza3'] ?>"  width="870"/> 
              <?php } ?> 
              <?php if($row['poza4'] != "") { ?>
                <br>
                <img src="administrare/media/<?= $row['poza4'] ?>"  width="870"/> 
              <?php } ?> 
              <?php if($row['poza5'] != "") { ?>
                <br>
                <img src="administrare/media/<?= $row['poza5'] ?>"  width="870"/> 
              <?php } ?> 
              <?php if($row['poza6'] != "") { ?>
                <br>
                <img src="administrare/media/<?= $row['poza6'] ?>"  width="870"/> 
              <?php } ?> 
            <?php } ?> 

          </div>     
        </div>
      </div>

      <div class="clr"></div>
    </div>
  </div>

<?php include('footer.html') ?>