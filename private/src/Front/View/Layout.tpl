<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Draggable - Constrain movement</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
      .draggable { width: 190px; height: 90px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
      #draggable, #draggable2 { margin-bottom:20px; }
      #draggable { cursor: e-resize; }
      #draggable2 { cursor: e-resize; }
      #containment-wrapper { width: 95%; height:150px; border:2px solid #ccc; padding: 10px; }
      h3 { clear: left; }
  </style>
  <script>
    $(function() {
        $( "#draggable" ).draggable({ axis: "x" });
        $( "#draggable" ).draggable("option", "grid", [ 220, 1 ]);
    });
  </script>
</head>
<body>
 
<h3>Constrain movement along an axis:</h3>
 
<div id="draggable" class="draggable ui-widget-content">
  Cart<br/>
  En tant que Batman, je veux retrouver Robin
</div>
 
 
</body>
</html>