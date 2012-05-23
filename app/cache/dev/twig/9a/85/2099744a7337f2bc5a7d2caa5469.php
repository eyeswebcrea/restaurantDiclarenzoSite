<?php

/* SpipAccesContentBundle:Login:login.html.twig */
class __TwigTemplate_9a852099744a7337f2bc5a7d2caa5469 extends Twig_Template
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
        return "::base.html.twig";
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
\t\t<fieldset>
\t\t\t<legend>Administration</legend>
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
\t\t\t\t<p>
\t\t\t\t\t<input type=\"submit\" value=\"Se connecter\">
\t\t\t\t</p>
\t\t\t</form>
\t\t</fieldset>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "SpipAccesContentBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
