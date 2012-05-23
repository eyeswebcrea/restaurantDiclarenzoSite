<?php

/* EyeswebcreaReferencementBundle:Default:index.html.twig */
class __TwigTemplate_0b0c6e3cb75ca9c7222b3923ef943592 extends Twig_Template
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
        return "EyeswebcreaReferencementBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
