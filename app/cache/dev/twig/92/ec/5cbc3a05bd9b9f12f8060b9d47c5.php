<?php

/* EyeswebcreaReferencementBundle:Default:referencement.html.twig */
class __TwigTemplate_92ec5cbc3a05bd9b9f12f8060b9d47c5 extends Twig_Template
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
        echo "\t<div class=\"block span-20 prepend-2 append-2 last prepend-top append-bottom\">
\t\t<div class=\"span-10 prepend-top\">
\t\t\t<img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "article"), "getPathAbsoluteLocalLogo", array(), "method")), "resize", array(0 => 300, 1 => 300), "method"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo "\">
\t\t</div>
\t\t<div class=\"span-10 last\">
\t\t\t<h2 class=\"block-title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
        echo "</h2>
\t\t\t<div class=\"block-content\">
\t\t\t\t";
        // line 11
        echo $this->getAttribute($this->getContext($context, "article"), "texte");
        echo "
\t\t\t</div>
\t\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaReferencementBundle:Default:referencement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
