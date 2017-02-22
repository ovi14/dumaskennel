<?php 
include('header.html');

$pui = getPui();
// print_r('<pre>');
// print_r($pui);
// print_r('</pre>');
?>

      <div class="mainbar">
        <div class="article">
          <h2><span>Puppies at Duma's Kennel</span></h2> 
        </div>
        <div class="article">
            <table>        
                <?php 
                foreach ($pui as $p) { ?>
                    <tr>
                      <td align="left" width="50%">
                        <h2><?= $p['parinti'] ?></h2>
                        <a target="blank" href="details.php?pui=<?= $p['id'] ?>">Click for details</a>
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