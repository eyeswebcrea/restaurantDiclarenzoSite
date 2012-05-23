<?php

/* SiteHomeBundle:Default:animations.html.twig */
class __TwigTemplate_1ee631f26d3178d0e1418a105e1616e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
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
            // asset "c9f2e84_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9f2e84_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/animation_animation_1.css");
            // line 8
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "c9f2e84_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9f2e84_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/animation_jquery.fancybox-1.3.4_2.css");
            // line 8
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "c9f2e84"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_c9f2e84") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/animation.css");
            // line 8
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        // line 14
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t    ";
        // line 16
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "12fd145_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_12fd145_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/animations_jquery.fancybox-1.3.4.pack_1.js");
            // line 18
            echo "        \t\t
        \t<script src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "12fd145"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_12fd145") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/animations.js");
            // line 18
            echo "        \t\t
        \t<script src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 21
        echo "\t<script type=\"text/javascript\">
\t\t\$(document).ready(function() {
\t\t\t\$(\"a.imgbox\").fancybox({
\t\t\t\t'transitionIn'\t:\t'elastic',
\t\t\t\t'transitionOut'\t:\t'elastic',
\t\t\t\t'speedIn'\t\t:\t300, 
\t\t\t\t'speedOut'\t\t:\t200, 
\t\t\t\t'overlayShow'\t:\ttrue
\t\t\t});
\t\t});
\t</script>
";
    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        // line 35
        echo "
\t<div class=\"animation-list span-22 prepend-1 append-1 last prepend-top append-bottom\">
\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 50)));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 38
            echo "\t\t\t<div class=\"animation-item span-10 append-bottom ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) != 0)) {
                echo "append-1";
            } else {
                echo "last";
            }
            echo "\">
\t\t\t\t<div class=\"block-srcshot\">
\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "article"), "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 800, 1 => 600), "method"), "html", null, true);
            echo "\" class=\"imgbox\">
\t\t\t\t\t\t<img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "article"), "getPathAbsoluteLocalLogo", array(), "method")), "resize", array(0 => 400, 1 => 300), "method"), "html", null, true);
            echo "\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "\t</div>
\t
";
    }

    public function getTemplateName()
    {
        return "SiteHomeBundle:Default:animations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
