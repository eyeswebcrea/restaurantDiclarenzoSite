<?php

/* SiteHomeBundle:Default:contact.html.twig */
class __TwigTemplate_2a5907a84016fa62ce3dcf2428b9bd65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'bandeau' => array($this, 'block_bandeau'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "\t    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5dda2a4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5dda2a4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/contact_contact_1.css");
            // line 7
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "5dda2a4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5dda2a4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/contact.css");
            // line 7
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
    }

    // line 13
    public function block_bandeau($context, array $blocks = array())
    {
        echo " ";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "
\t<div id=\"formulaire-contact\" class=\"span-10 prepend-2 prepend-top\">
\t\t<fieldset class=\"formulaire\">
\t\t\t<legend> Nous contacter </legend>
\t\t\t
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t";
        // line 22
        echo $this->env->getExtension('actions')->renderAction("IHQSContactBundle:Contact:form", array(), array());
        // line 23
        echo "\t\t\t</form>
\t\t</fieldset>
\t\t<fieldset class=\"formulaire\">
\t\t\t<legend> Réserver la salle pour baptèmes, mariages, anniversaires </legend>
\t\t\t
\t\t\t<form action=\"#\" method=\"post\">
\t\t\t\t";
        // line 29
        echo $this->env->getExtension('actions')->renderAction("IHQSContactBundle:Contact:form", array(), array());
        // line 30
        echo "\t\t\t</form>
\t\t</fieldset>
\t</div>
\t<!-- 3, Route de la queue en brie - 94880 NOISEAU -->
\t<div id=\"plan-acces\" class=\"span-8 prepend-1 prepend-top\">
\t\t<img id=\"google-map\" class=\"prepend-top\" src=\"http://maps.googleapis.com/maps/api/staticmap?center=94880+1+Route+De+la+queue+en+brie&zoom=15&size=356x246&maptype=roadmap
&markers=color:red%7Clabel:D%7C48.77705,2.55044&sensor=false\">
\t</div>
<!--
\t<div class=\"span-10 prepend-2 prepend-top append-bottom\">
\t\t
\t</div>
-->
\t<div class=\"span-8 prepend-1 prepend-top last append-bottom\" id=\"contact\">
\t\t";
        // line 44
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idArticle" => 3)));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 45
            echo "\t\t\t<h2 class=\"block-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "titre"), "html", null, true);
            echo "</h2>
\t\t\t<div class=\"block-content\">
\t\t\t\t";
            // line 47
            echo $this->env->getExtension('SpipAccesContent')->twig_nl2br_filter($this->getAttribute($this->getContext($context, "article"), "texte"));
            echo "
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 50
        echo "\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "SiteHomeBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
