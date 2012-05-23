<?php

/* ::bandeau.html.twig */
class __TwigTemplate_1b68f25d34f49ed1a350bf6a7fccb69d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t    \t\t\t<div class=\"span-24 last\" id=\"bandeau\">
\t\t\t    \t\t\t \t";
        // line 2
        echo $this->env->getExtension('EyeswebcreaSlider')->getSpipJquerySlider($this->getContext($context, "idRubriqueBandeau"), array("width" => 950, "height" => 250, "texte" => false, "forceResize" => true));
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
