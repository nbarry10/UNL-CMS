<?php
// $Id: maestro-task-content-type.tpl.php,v 1.5 2010/08/10 19:04:36 chevy Exp $

/**
 * @file
 * maestro-task-content-type.tpl.php
 */

?>

<div class="maestro_task">
  <div class="t"><div class="b"><div class="r"><div class="l"><div class="bl"><div class="br"><div class="tl-bl"><div class="tr-bl">

    <div id="task_title<?php print $tdid; ?>" class="tm-bl maestro_task_title">
      <?php print $taskname; ?>
    </div>
    <div class="maestro_task_body">
      <?php print t('Content Type Task'); ?><br />
      <div id="task_assignment<?php print $tdid; ?>"><?php print $ti->getAssignmentDisplay(); ?></div>
    </div>

  </div></div></div></div></div></div></div></div>
</div>