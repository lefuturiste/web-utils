<h1> List of modules </h1>

<?php

echo "<ul>\n";
foreach ($config['modules'] as $name => $moduleConf) {
  if ($name == 'modules') { continue; }
  ?>
  <li>
    <a href="http://<?= $name . '.' . $config['domain'] ?>"><?= $name ?></a>

    <?php
    if (isset($moduleConf['alias'])) {
      echo ' : ';
      foreach ($moduleConf['alias'] as $alias) {
        ?>
        <a href="http://<?= $alias . '.' . $config['domain'] ?>"><?= $alias ?></a>,
        <?php
      }
    }
    ?> 
  </li>
  <?php
}
echo "</ul>";
