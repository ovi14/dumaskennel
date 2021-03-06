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
    			<table class="pug-table">        
            <?php 
            foreach ($mops as $mop) {
              $mop = formatRowByLang($mop, $lg);
              if ($mop['sex'] == 1 /* mascul */) { ?>
                <tr class="clickable-row" data-href="details.php?mop=<?= $mop['id'] .'&'. $lg_param ?>">
                  <td align="left" width="55%">
                    <h2><?= $mop['nume_afis'] ?></h2>
                    <h3><?= $mop['titlu_afis'] ?></h3>
                    <h3><?= $mop['parinti_afis'] ?></h3>
                    <a href="details.php?mop=<?= $mop['id'] .'&'. $lg_param ?>"><h3><?= $lang[$lg]['click_for_details']?></h3></a>
                  </td>
                  <td><img src="administrare/media/<?= $mop['poza1'] ?>"/></td>
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