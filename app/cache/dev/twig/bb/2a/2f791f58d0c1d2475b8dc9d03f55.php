<?php

/* EyeswebcreaSecuserSpaceAdminBundle:Security:login.html.twig */
class __TwigTemplate_bb2a2f791f58d0c1d2475b8dc9d03f55 extends Twig_Template
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
        echo "\t<fieldset>
\t\t<legend> Se connecter </legend>
\t\t
\t\t<p class=\"submit\">
\t\t\t<input type=\"submit\" value=\"Se connecter\" />
\t\t</p>
\t</fieldset>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaSecuserSpaceAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
