<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Board</title>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="/css/scrum.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="/js/scrum/global.js"></script>
    </head>
    <body>
        <div id="main">
            <?php if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists("C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/HeaderMobile.tpl").".cac.php")) { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/HeaderMobile.tpl").".cac.php"; } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/Header.tpl").".cac.php"; } } else { include "C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/".md5("/src/Front/View/Header.tpl").".cac.php"; } ?>
            <?php $_aProtectedVar['model'] = str_replace("\\", "/", $_aProtectedVar['model']); if (!strstr($_aProtectedVar['model'], '/')) { $_aProtectedVar['model'] = "src/Front/View/".$_aProtectedVar['model']; } if (class_exists('\Mobile_Detect')) { $oMobileDetect = new \Mobile_Detect; } else { $oMobileDetect = null; } if ($oMobileDetect !== null && $oMobileDetect->isMobile()) { if (file_exists('C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/'.md5($_aProtectedVar['model']).".cac.php")) { include 'C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/'.md5($_aProtectedVar['model']).".cac.php"; } else { include 'C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/'.md5($_aProtectedVar['model']).".cac.php"; }} else { include 'C:\Users\judicael.paquet\Zend\workspaces\DefaultWorkspace10\scrum\data/cache/'.md5($_aProtectedVar['model']).".cac.php"; } ?>
        </div>
    </body>
</html>
<?php /* C:/Users/judicael.paquet/Zend/workspaces/DefaultWorkspace10/scrum/data/cache/dccf8350c3af6a73902f131cf50e473e.cac.php */ ?>
<?php /* template : \src\Front\View\Layout.tpl */ ?>