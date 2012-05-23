<?php

/* EyeswebcreaAssetServiceBundle:Default:index.html.twig */
class __TwigTemplate_3fd196f6da4988cf2d56a65ddc4be15e extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaAssetServiceBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
