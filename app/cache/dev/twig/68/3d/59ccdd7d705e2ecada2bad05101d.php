<?php

/* EyeswebcreaAliasContentEditorBundle:Default:arboresence.html.twig */
class __TwigTemplate_683d59ccdd7d705e2ecada2bad05101d extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"arborescense\">
\t<ul class=\"root\">
\t\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "arborescence"));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 4
            echo "\t\t\t<li>
\t\t\t\t";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EyeswebcreaAliasContentEditorBundle_editRubrique", array("id_rubrique" => $this->getAttribute($this->getContext($context, "rubrique"), "getId", array(), "method"))), "html", null, true);
            echo "\"><img src=\"http://www.saint-claude.fr/img/crayon.png\"></a>
\t\t\t</li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 8
        echo "\t</ul>
</div>";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaAliasContentEditorBundle:Default:arboresence.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
