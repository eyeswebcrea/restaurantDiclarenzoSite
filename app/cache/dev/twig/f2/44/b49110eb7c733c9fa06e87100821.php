<?php

/* EyeswebcreaAliasContentViewerBundle:Colorer:list_articles.html.twig */
class __TwigTemplate_f244b49110eb7c733c9fa06e87100821 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
            // asset "c06fa92_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c06fa92_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/service_service_1.css");
            // line 7
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "c06fa92"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c06fa92") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/service.css");
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

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"span-20 prepend-2 prepend-top service-list\">
\t\t";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "articles"));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "\t\t\t<div class=\"span-20 last block block-6-line service-item prepend-top\" id=\"college\">
\t\t\t\t<div class=\"span-17 block block-6-line last service-content\">
\t\t\t\t\t\t<div class=\"service-photo span-6 gradient-blue block block-6-line\">
\t\t\t\t\t\t\t<img class=\"prepend-top\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "article"), "getPathAbsoluteLocalLogo", array(), "method")), "cropResize", array(0 => 215, 1 => 150), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "getTitre", array(), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span-10 last service-article\">
\t\t\t\t\t\t\t<h2 class=\"service-article-titre\">";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
\t\t\t\t\t\t\t<div class=\"service-article-contenu\">
\t\t\t\t\t\t\t\t";
            // line 23
            echo $this->env->getExtension('SpipAccesContent')->twig_truncate_filter($this->env, $this->getAttribute($this->getContext($context, "article"), "getTexte", array(), "method"), 750);
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span-3 last block block-5-line prepend-top service-aside\" style=\"margin-left: 1px;\">
\t\t\t\t\t<img src=\"/images/lycee-service.jpg\" height=\"100%\">
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 32
        echo "\t</div>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaAliasContentViewerBundle:Colorer:list_articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
