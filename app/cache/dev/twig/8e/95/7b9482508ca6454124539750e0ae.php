<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8e957b9482508ca6454124539750e0ae extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("TwigBundle:Exception:error.xml.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
