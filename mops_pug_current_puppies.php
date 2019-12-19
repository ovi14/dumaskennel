<?php 
include('header.html');

$pui = getPui();
// print_r('<pre>');
// print_r($pui);
// print_r('</pre>');
?>

      <div class="mainbar">
        <div class="article">
          <h2><span><?= $lang[$lg]['puppies_title']?></span></h2> 
        </div>
        <div class="article">
            <table>        
                <?php 
                foreach ($pui as $p) { 
                  $p = formatRowByLang($p, $lg);?>
                  <tr>
                    <td align="left" width="50%">
                      <h2><?= $p['parinti_afis'] ?></h2>
                      <a href="details.php?pui=<?= $p['id'] .'&'. $lg_param ?>"><h3><?= $lang[$lg]['click_for_details']?></h3></a>
                    </td>
                    <td><img width="450" src="administrare/media/<?= $p['poza1'] ?>"/></td>
                  </tr>
                <?php
                } ?>
            </table>
        </div>
      </div>
      
      <div class="clr"></div>
    </div>
  </div>

<?php include('footer.html') ?>