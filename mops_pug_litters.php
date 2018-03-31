<?php 
include('header.html');

$monta = getMonta();
// print_r('<pre>');
// print_r($monta);
// print_r('</pre>');
?>

      <div class="mainbar">
        <div class="article">
          <h2><span><?= $lang[$lg]['litters_title']?></span></h2>
        </div>
        <div class="article">
            <table>        
                <?php 
                foreach ($monta as $m) { ?>
                    <tr>
                      <td align="left" width="50%">
                        <h2><?= $m['data'] ?></h2>
                      </td>
                    <tr>
                      <td>
                        <img width="870" src="administrare/media/<?= $m['poza1'] ?>"/>
                      </td>
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