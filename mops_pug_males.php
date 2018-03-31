<?php 
include('header.html');

$mops = getMops();
// print_r('<pre>');
// print_r($mops);
// print_r('</pre>');
?>

      <div class="mainbar">
        <div class="article">
          <h2><span><?= $lang[$lg]['pug_males_text1']?></span></h2>
		      <h3><?= $lang[$lg]['pug_males_text2']?></h3>
        </div>
        <div class="article">
    			<table>        
            <?php 
            foreach ($mops as $mop) {
              if ($mop['sex'] == 1 /* mascul */) { ?>
                <tr>
                  <td align="left" width="50%">
                    <h2><?= $mop['nume_en'] ?></h2>
                    <h3><?= $mop['titlu_en'] ?></h3>
                    <h3><?= $mop['parinti_en'] ?></h3>
                    <a target="blank" href="details.php?mop=<?= $mop['id'] .'&'. $lg_param ?>"><?= $lang[$lg]['click_for_details']?></a>
                  </td>
                  <td><img width="450" src="administrare/media/<?= $mop['poza1'] ?>"/></td>
                </tr>
            <?php
              }
            } ?>
    			</table>
        </div>
      </div>
      
      <div class="clr"></div>
    </div>
  </div>

<?php include('footer.html') ?>