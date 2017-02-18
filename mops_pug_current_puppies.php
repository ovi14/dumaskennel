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
                      <td><img width="280" src="administrare/media/<?= $p['poza1'] ?>"/></td>
                    </tr>
                <?php
                } ?>
            </table>
        </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Mops/pug menu</h2>
          <ul class="sb_menu">
            <li><a href="mops_pug_current_puppies.php">Current Puppies</a></li>
            <li><a href="mops_pug_litters.php">Mating Plan</a></li>
          </ul>
        </div>
        <div class="gadget">
          <h2 class="star"><span>Recommended</span></h2>
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