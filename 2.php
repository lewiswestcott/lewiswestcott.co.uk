<html>
  <head></head>
  <body>
    <!-- A root element for TypeIt to target. -->
    <span id="myElement"></span>

    <!-- The script itself, loaded AFTER your root element. -->
    <script src="<https://unpkg.com/typeit@8.2.0/dist/index.umd.js>"></script>
    <script>
      new TypeIt("#myElement", {
        strings: "This is what will be typed!",
      }).go();
    </script>
  </body>
</html>