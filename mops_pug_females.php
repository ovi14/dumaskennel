<?php 
include('header.html');

$mops = getMops();
// print_r('<pre>');
// print_r($mops);
// print_r('</pre>');
?>

      <div class="mainbar">
        <div class="article">
          <h2><span>Our dogs at Duma's Kennel</span></h2>
		      <h3>FEMALE -  mops of Duma's Kennel - scroll down for all females</h3>
        </div>
        <div class="article">
    			<table>
            <?php 
            foreach ($mops as $mop) {
              if ($mop['sex'] == 2 /* femela */) { ?>
                <tr>
                  <td align="left" width="50%">
                    <h2><?= $mop['nume'] ?></h2>
                    <h3><?= $mop['titlu'] ?></h3>
                    <h3><?= $mop['parinti'] ?></h3>
                    <a target="blank" href="details.php?mop=<?= $mop['id'] ?>">Click for details</a>
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