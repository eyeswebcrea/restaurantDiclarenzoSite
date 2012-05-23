<?php

/* EyeswebcreaAliasContentEditorBundle:Default:panel.html.twig */
class __TwigTemplate_ba1f850ba5d4cb234c910c820fee1216 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_editorbundle' => array($this, 'block_body_editorbundle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EyeswebcreaAliasContentEditorBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body_editorbundle($context, array $blocks = array())
    {
        // line 3
        echo "\t<table cellpadding=\"5\" cellspacing=\"0\">
\t\t<tr>
\t\t\t<th colspan=\"3\"> <h2>Les 5 derniers articles</h2> </th>
\t\t</tr>
\t\t<tr>
\t\t\t<th> Article id </th><th> Titre </th><th> Actions </th>
\t\t</tr>
\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 11
            echo "\t\t\t<tr>
\t\t\t\t<td> ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "getId", array(), "method"), "html", null, true);
            echo "</td> 
\t\t\t\t<td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "getTitre", array(), "method"), "html", null, true);
            echo "</td>
\t\t\t\t<td> <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EyeswebcreaAliasContentEditorBundle_editArticle", array("id_article" => $this->getAttribute($this->getContext($context, "article"), "getId", array(), "method"))), "html", null, true);
            echo "\">Editer</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EyeswebcreaAliasContentEditorBundle_deleteArticle", array("id_article" => $this->getAttribute($this->getContext($context, "article"), "getId", array(), "method"))), "html", null, true);
            echo "\">Supprimer </td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 17
        echo "\t</table>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaAliasContentEditorBundle:Default:panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
