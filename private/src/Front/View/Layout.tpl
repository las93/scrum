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
            {include file='/src/Front/View/Header.tpl'}
            {include file=$model}
        </div>
    </body>
</html>