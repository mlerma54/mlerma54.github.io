<!DOCTYPE HTML>
<html>
<head>
<title>LaTeX Render</title>
<script type="text/x-mathjax-config">
  MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
</script>
<!-- script type="text/javascript"
  src="/MathJax/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script -->
<script type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.7/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
</script>
<style type="text/css">
.boxed {
  border: 1px solid black ;
  padding: 20px;
  margin: 0px;
}
</style>
</head>

<!-- <?php echo gethostname(); ?> -->

<body style="font-family:arial; font-size:120%; width:700px; padding:25px;">

<h2>$\LaTeX$ Renderer</h2>

<h3>Enter your equation using $\LaTeX$</h3>

<p>
When finished click the RENDER button, or anywhere outside the text area.
</p>

<form action="" method="post">
<p>
<textarea name="latex_input" id="latex_input" rows="4" cols="80" onChange="submit()">
<?php
echo htmlspecialchars($_POST["latex_input"]);
?>
</textarea>
</p>
<p><input type="submit" value="RENDER"/></p>
</form>

<p>
&nbsp;
</p>

<div class="boxed">
<?php
echo htmlspecialchars($_POST["latex_input"]);
?>
</div> 

<p>
&nbsp;<br>
</p>

<a href="example.html">Example</a>

</body>

</html>
