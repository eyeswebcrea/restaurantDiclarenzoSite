<?php

/* ::bandeau.html.twig */
class __TwigTemplate_1b68f25d34f49ed1a350bf6a7fccb69d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t    \t\t\t<div class=\"span-24 last\" id=\"bandeau\">
\t\t    \t\t\t\t\t<img src=\"/css/images/fotolia_27025959.png\" id=\"appotre\">
\t\t\t    \t\t\t \t";
        // line 3
        if (isset($context["idRubriqueBandeau"])) { $_idRubriqueBandeau_ = $context["idRubriqueBandeau"]; } else { $_idRubriqueBandeau_ = null; }
        echo $this->env->getExtension('EyeswebcreaSlider')->getSpipJquerySlider($_idRubriqueBandeau_, array("width" => 950, "height" => 250, "texte" => false, "forceResize" => true));
        echo "
\t\t    \t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "::bandeau.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
