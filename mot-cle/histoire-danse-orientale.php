<?php
include'../php/mots-inerdits.php';
if(strpos($url_demande,'php')!==false OR strpos($url_demande,'?')!==false){include'../php/404.php';exit();}
$varunique='histoire de la danse orientale';
$article1=mysqli_query($connectionbd,"SELECT * FROM produit WHERE stock > 0 AND type LIKE '%oriental%' ORDER BY RAND() LIMIT 4");
$titre_page=$varunique.' : La rose de l&#039;orient.';
$description_page='Ici découvrez ce qu&#039;est la danse orientale, son histoire ses origines.';
$mot_cle_page='danse,danse orientale,article de danse orientale';
include'../php/haut.php'; ?>
<h2>La <em>danse orientale est un art millenaire</em> qui a survecu pour nous emerveiler.</h2>
<?php include 'produit.php'; ?>
<h3>Les origines de la danse orientale.</h3>
<p>&Agrave; l&#039;origine la <strong>danse orientale</strong> &eacute;tait pratiqu&eacute; de la M&eacute;sopotamie jusqu&#039;en &Eacute;gypte,<br />
sur tous le flanc est de la M&eacute;diterran&eacute;e, elle &eacute;tait surtout pratiqu&eacute; par les pr&ecirc;tresses,<br />
qui demandais aux dieux d&#039;accorder la fertilit&eacute; aux jeunes femmes qui se mariais.<br />
la <b>danse orientale</b> &eacute;tait un moyens de communiquer avec les dieux.</p>
<h2> la danse orientale nous emerveille toujours.</h2>
<p>Alexandre le Grand, en envahissant la Perse, entrant dans Babylone triomphant a &eacute;t&eacute; &eacute;merveiller de voir les femmes pratiquer la <strong>danse orientale</strong>.<br />
Et bien plus tard, ce fut C&eacute;sar et Marc Antoine qui ont succomb&eacute; au charme envo&ucirc;tant de la <em>danse orientale</em>,<br />
mais cette fois-ci en &Eacute;gypte et la liste est encore longue.</p>
<h2>La danse orientale a survecu d&eacute;couvrez comment :</h2> 
<p>Ensuite avec l&#039;arriv&eacute; des arabes puis des turcs, la <b>danse orientale</b> a faillit dispara&icirc;tre.<br />
Mais cela est sans compt&eacute; sans l&#039;ing&eacute;niosit&eacute; des femmes qui continuais &agrave; pratiqu&eacute; et &agrave; enseign&eacute; la <strong>danse orientale</strong> &agrave; leur fille.</p>
<p>Pour survivre la <em>danse orientale</em> s&#039;est transmise de m&egrave;re en fille, et ce pendant des si&egrave;cles,<br />
et arriv&eacute; jusqu&#039;&agrave; nous et elle a su s&#039;adapter &agrave; notre monde et notre mode de vie, mais nous &eacute;merveillera toujours.</p>
<h2>Ou trouver des articles de danse orientale ?</h2>
<p>La rose de l&#039;orient a s&eacute;lectionn&eacute; pour vous une gamme d&#039;articles de danse orientale, qui convient aux d&eacute;butantes comme aux professionnelles.</p>
<?php include'../php/bas.php'; ?>