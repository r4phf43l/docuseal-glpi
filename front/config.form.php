<?php

include ("../../../inc/includes.php");

// No autoload when plugin is not activated
require_once('../inc/config.class.php');

$config = new PluginDocusealConfig();
if (isset($_POST["update"])) {
   $config->check($_POST['id'], UPDATE);

   $config->update($_POST);

   Html::back();
}
Html::redirect($CFG_GLPI["root_doc"]."/front/config.form.php?forcetab=".
               urlencode('PluginDocusealConfig$1'));
