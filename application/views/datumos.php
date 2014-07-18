<!DOCTYPE html>
<html>
<head>
    <title>Demo</title>
    <link rel="stylesheet" href="dist/themes/default/style.min.css" />
    <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
   <script type="text/javascript" src="http://cachedcommons.org/cache/jquery-jstree/1.0.0/javascripts/jquery-jstree-min.js"></script>
    <script>
        $(document).ready(function(){
            $('#container').jstree(/* optional config object here */);
            
            
           $(function () {
  $('#container').on('changed.jstree', function (e, data) {
    console.log(data.selected);
  });
});

        });
    </script>
</head>
<body>
    <div id="container">
  <ul>
    <li>Root node
      <ul>
        <li id="child_node">Child node</li>
      </ul>
    </li>
  </ul>
</div>
</body>
</html>