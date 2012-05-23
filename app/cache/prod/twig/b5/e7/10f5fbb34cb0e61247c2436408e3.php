<?php

/* ::footer.html.twig */
class __TwigTemplate_b5e710f5fbb34cb0e61247c2436408e3 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<img id=\"cerise\" src=\"/css/images/fotolia_17975758.png\">
\t<!--
\t\tDecoration supprimé non fonctionelle sous ie7
\t<img id=\"decoration-left\" src=\"/css/images/fotolia_25634387.png\">
\t<img id=\"decoration-right\" src=\"/css/images/fotolia_25634387-right.png\">
\t-->
\t<div class=\"referencement\">
\t\t";
        // line 8
        echo $this->env->getExtension('actions')->renderAction("EyeswebcreaReferencementBundle:Default:listReference", array(), array());
        // line 9
        echo "\t</div>


<div id=\"footer-real\" class=\"block container\">
\t<p>Diclarenzo | <a href=\"mailto:gq@eyeswebcrea.fr\">Webmaster</a> | <a href=\"#\">Mentions légales</a> | conception Eyeswebcrea 2012 - 2013</p>
\t<p id=\"email-link\"><a target=\"blank\" rel=\"nofollow\" href=\"https://mail.restaurantdiclarenzo.com/\">E-mail</a></p>
</div>

";
    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
