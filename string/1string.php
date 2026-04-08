<html>
<body>
<p>1. strlen("hello word")=</p>
<?php  echo strlen("hello word"); ?>
<p>2. str_word_count("hello word a ab")=</p>
<?php  echo str_word_count("hello word a ab"); ?>
<p>3. strrev("hello")=</p>
<?php echo strrev("hello"); ?>
<p>4. strpos("hello word", "word")=</p>
<?php echo strpos("hello word", "word"); ?>
<p>5. str_replace("hello","hai", "hello word")=</p>
<?php echo str_replace("hello","hai", "hello word"); ?>
<p>6. strcmp("hello word","hello word")=</p>
<?php echo strcmp("hello word","hello word"); ?>
<p>7. strtolower("WELCOME")=</p>
<?php echo strtolower("WELCOME"); ?>
<p>8. strtoupper("welcome")=</p>
<?php echo strtoupper("welcome"); ?>
<p>9. strtr("hella waard","a","oo")=</p>
<?php echo strtr("hella waard","aa","oo"); ?>
<p>10. substr("hello word",6)=</p>
<?php echo substr("hello word",6); ?>
<p>11. substr("this is a really long sentence that i wish to cut sort", 22,6)=</p>
<?php echo substr("this is a really long sentence that i wish to cut sort", 22,5); ?>


<p>12. ucfirst("hello word.word hello")=</p>
<?php echo ucfirst("hello word. word hello"); ?>
<p>13. lcfirst("HELLO WORD. WORD HELLO")=</p>
<?php echo lcfirst("HELLO WORD. WORD HELLO"); ?>

<p>14. $a= explode('=',"host=localhost; db=sales; uid=root; pwd=demo");<br> print_r($a)</p>
<?php $a= explode('=',"host=localhost; db=sales; uid=root; pwd=demo");
      print_r($a);
 ?>

</body>
</html>
