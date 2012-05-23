<?php

/* EyeswebcreaReferencementBundle:Default:listReference.html.twig */
class __TwigTemplate_34bf8c05f642a0000e5c5b0bafa77826 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t\t<ul class=\"referencement\">
\t\t\t";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => $this->getContext($context, "idRubrique"))));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EyeswebcreaReferencement_referencement", array("slug" => $this->getAttribute($this->getContext($context, "article"), "urlSite"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 7
        echo "\t\t</ul>";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaReferencementBundle:Default:listReference.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
