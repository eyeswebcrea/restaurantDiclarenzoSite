<?php

/* ::header.html.twig */
class __TwigTemplate_8cc343c99db155b22dfd8230dfdbc727 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    \t\t\t<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteHomeBundle_homepage"), "html", null, true);
        echo "\"><h1 class=\"title span-8\"><img src=\"/images/logo.png\"><p>Di'Clarenzo</p></h1></a>
    \t\t\t<div class=\"menu span-16 last\">";
        // line 2
        echo $this->env->getExtension('knp_menu')->render("SiteHomeBundle:MainBuilder:build");
        echo "</div>
    \t\t\t<div id=\"telephone\" class=\"transition-effect\">01.49.62.07.94</div>
";
    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
