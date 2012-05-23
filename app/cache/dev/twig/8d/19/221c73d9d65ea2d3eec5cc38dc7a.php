<?php

/* SpipAccesContentBundle:Default:index.html.twig */
class __TwigTemplate_8d19221c73d9d65ea2d3eec5cc38dc7a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "\t<style>
\t\tul.article-list {
\t\t\toverflow: hidden;
\t\t}
\t\t
\t\tul.categorie-list {
\t\t\t
\t\t}
\t\t
\t\tul.categorie-list li.categorie-item {
\t\t\tlist-style: none;
\t\t\tpadding: 5px;
\t\t\tbackground: black;
\t\t\tcolor: white;
\t\t\tborder-top-left-radius: 5px;
\t\t\tborder-bottom-left-radius: 5px;
\t\t\tdisplay: inline-block;
\t\t\tmargin-top: 5px;
\t\t}
\t\t
\t\tul.article-list li.article-item {
\t\t\tfloat: left;
\t\t\tbackground: red;
\t\t\tcolor: white;
\t\t\twidth: 200px;
\t\t\tborder: solid black 2px;
\t\t}
\t\t
\t\tul.article-list li.article-item h3.article-titre {
\t\t\tbackground: white;
\t\t\tcolor: red;
\t\t\ttext-transform: uppercase;
\t\t\tfont-weight: bold;
\t\t\tpadding: 5px;
\t\t\tpadding-left: 10px;
\t\t\tpadding-right: 10px;
\t\t}
\t\t
\t\tul.article-list li.article-item p.article-contenu {
\t\t\tpadding: 5px;
\t\t}
\t</style>
\t";
        // line 43
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello the lang is %LANG%", array("%LANG%" => $this->getContext($context, "LANG")), "messages");
        echo " (<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SpipAccesContentBundle_setLangue", array("langue" => "fr")), "html", null, true);
        echo "\">Francais</a> | <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SpipAccesContentBundle_setLangue", array("langue" => "en")), "html", null, true);
        echo "\">Anglais</a>)<BR>
\t
\t...";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("phrase.test", array("%test%" => "lol")), "html", null, true);
        echo "...
\tRubriques  : <BR>
\t<ul class=\"categorie-list\">
\t\t";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques());
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 49
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "\t\t
\tMot clefs :
\t<ul>
\t\t";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleMotsClef());
        foreach ($context['_seq'] as $context["_key"] => $context["mot"]) {
            // line 54
            echo "\t\t\t<li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mot"), "titre"), "html", null, true);
            echo " </li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mot'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "\t</ul>
\t</ul>


\tFichier : ";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "document"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "SpipAccesContentBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
