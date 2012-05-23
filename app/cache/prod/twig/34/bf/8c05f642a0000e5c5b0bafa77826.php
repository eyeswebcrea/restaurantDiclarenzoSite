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
        if (isset($context["idRubrique"])) { $_idRubrique_ = $context["idRubrique"]; } else { $_idRubrique_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => $_idRubrique_)));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 3
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
            // line 4
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EyeswebcreaReferencement_referencement", array("slug" => $this->getAttribute($_article_, "urlSite"))), "html", null, true);
            echo "\">";
            if (isset($context["article"])) { $_article_ = $context["article"]; } else { $_article_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_article_, "titre"), "html", null, true);
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
