<?php

/* EyeswebcreaSecuserSpaceAdminBundle:Default:index.html.twig */
class __TwigTemplate_edab315890d598cc523abe0d2adad1bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EyeswebcreaSecuserSpaceAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t<div class=\"span-20 prepend-2 append-2 last prepend-top\">
\t\tBienvenu dans l'espace d'administration de votre site internet
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaSecuserSpaceAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
