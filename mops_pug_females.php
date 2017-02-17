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
                  <td><img width="280" src="administrare/media/<?= $mop['poza1'] ?>"/></td>
                </tr>
            <?php
              }
            } ?>
    			</table>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Dogs menu</h2>
          <ul class="sb_menu">
            <li><a href="mops_pug_males.php">Males</a></li>
            <li><a href="mops_pug_females.php">Females</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Recomended</span></h2>
          <ul class="ex_menu">
            <li><a href="http://www.artadresajuluicanin.ro" title="Profesional Dog training">Profesional Dog training</a><br />Profesioanl dog training in Timisoara and around</li>
            <li><a href="http://www.nik-majestic.com/" title="Canisa Nik Majestic">Canisa Nik Majestic</a><br />Canisa Nik Majestic - Tosa Inu</li>
          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

<?php include('footer.html') ?>