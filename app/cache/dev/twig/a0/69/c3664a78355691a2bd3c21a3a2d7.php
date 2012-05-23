<?php

/* EyeswebcreaSecuserSpaceAdminBundle::layout.html.twig */
class __TwigTemplate_a069c3664a78355691a2bd3c21a3a2d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Administration ";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "\t<h3 id=\"logo\" class=\"span-6\">";
        $this->displayBlock('title', $context, $blocks);
        echo "</h3> 
\t<div class=\"menu\" class=\"span-14\">";
        // line 5
        echo $this->env->getExtension('knp_menu')->render("EyeswebcreaSecuserSpaceAdminBundle:Builder:adminMenu");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaSecuserSpaceAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
