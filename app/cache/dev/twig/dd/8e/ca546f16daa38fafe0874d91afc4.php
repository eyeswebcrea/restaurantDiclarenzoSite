<?php

/* EyeswebcreaSliderBundle:Default:index.html.twig */
class __TwigTemplate_dd8eca546f16daa38fafe0874d91afc4 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t\t\t\t<div id=\"ok\">
\t\t\t\t\t\t";
        // line 2
        echo $this->env->getExtension('EyeswebcreaSlider')->getSpipJquerySlider(5, array("width" => 950, "height" => 237, "theme" => "CSS3"));
        echo "
\t\t\t\t\t</div>";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaSliderBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
