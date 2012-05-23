<?php

/* SiteHomeBundle:Default:lacarte.html.twig */
class __TwigTemplate_ab3b740d80e7a8a97add2f7c49d74610 extends Twig_Template
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

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "78c7f0c_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78c7f0c_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/lacarte_lacarte_1.css");
            // line 9
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "78c7f0c"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78c7f0c") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/lacarte.css");
            // line 9
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        echo "\t
\t\t";
        // line 15
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 17
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "39728f9_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_39728f9_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/lacarte_lacarte_1.js");
            // line 20
            echo "        \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "39728f9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_39728f9") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/lacarte.js");
            echo "        \t<script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        // line 25
        echo " <div class=\"span-22 prepend-1 prepend-top\" id=\"nos-pizza\">
 \t\t\t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 6)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 27
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 29
        echo "\t\t
   \t\t<div class=\"span-22 menu-list\">
   \t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idParent" => 6)));
        foreach ($context['_seq'] as $context["_key"] => $context["pizza"]) {
            // line 32
            echo "   \t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => $this->getAttribute($this->getContext($context, "pizza"), "getIdRubrique", array(), "method")), array("titre" => "ASC")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 33
                echo "   \t\t\t\t<div class=\"block menu-item span-22 block ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                    echo "paire";
                } else {
                    echo "impaire";
                }
                echo "\" id=\"menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
                echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
                // line 36
                echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
                echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 40
            echo "   \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pizza'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 41
        echo "   \t\t</div>
\t\t
 </div>
<div class=\"span-22 prepend-1 prepend-top\" id=\"nos-pates\">
 \t\t\t\t";
        // line 45
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 5)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 46
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "rubrique"), "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 300, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "\"></h2>
   \t\t\t\t\t<p class=\"garniture\"> ";
            // line 47
            echo $this->getAttribute($this->getContext($context, "rubrique"), "getTexte", array(), "method");
            echo " </p>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 49
        echo "
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idParent" => 5)));
        foreach ($context['_seq'] as $context["_key"] => $context["pates"]) {
            // line 52
            echo "   \t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => $this->getAttribute($this->getContext($context, "pates"), "getIdRubrique", array(), "method")), array("titre" => "ASC")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 53
                echo "   \t\t\t\t\t<div class=\"block menu-item span-22 block   ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                    echo "paire";
                } else {
                    echo "impaire";
                }
                echo "\" id=\"menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
   \t\t\t\t\t\t<h2 class=\"block-title\">";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
                echo "</h2>
   \t\t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
                // line 56
                echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
                echo "
   \t\t\t\t\t\t</div>
   \t\t\t\t\t</div>
   \t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 59
            echo "\t
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pates'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-4 last\">
   \t\t\t
   \t\t</div>
 </div> 
 <div class=\"span-22 prepend-1 prepend-top\" id=\"nos-poissons\">
 \t\t\t\t";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 7)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 69
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "rubrique"), "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 300, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "\"></h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 71
        echo "
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 7), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 74
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 77
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 81
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-4 last\">
   \t\t\t
   \t\t</div>
 </div> 
 
 <div class=\"span-22 prepend-1 prepend-top\" id=\"ardoisesemaine\">
 \t\t\t\t";
        // line 89
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 13)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 90
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 92
        echo "
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 13), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 95
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t
   \t\t\t\t\t\t<img src=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "menu"), "getPathAbsoluteLocalLogo", array(), "method")), "resize", array(0 => 800, 1 => 1080), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "\">
   \t\t\t\t\t\t";
            // line 100
            echo $this->env->getExtension('SpipAccesContent')->twig_nl2br_filter($this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method"));
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 104
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-4 last\">
   \t\t\t
   \t\t</div>
 </div> 
 <div class=\"span-22 prepend-1 prepend-top\" id=\"cartedesvins\">
 \t\t\t\t";
        // line 111
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 10)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 112
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "rubrique"), "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 300, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "\"></h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 114
        echo "
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t\t";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 38)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 117
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 119
        echo "   \t\t\t\t
   \t\t\t\t<div class=\"block menu-item span-22 impaire\">
   \t\t\t\t\t<h2 class=\"block-title\"></h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t<ul><li><strong> Demi bouteille </strong></li><li><strong>Bouteille</strong></li></ul>
   \t\t\t\t\t\t&nbsp;
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
        // line 127
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 38), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 128
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 131
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 135
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t\t";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 39)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 139
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 141
        echo "   \t\t\t\t  <div class=\"block menu-item span-22 impaire\">
   \t\t\t\t\t<h2 class=\"block-title\"></h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t<ul><li><strong> Demi bouteille </strong></li><li><strong>Bouteille</strong></li></ul>
   \t\t\t\t\t\t&nbsp;
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
        // line 148
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 39), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 149
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 152
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 156
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t\t";
        // line 159
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 40)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 160
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 162
        echo "   \t\t\t\t<div class=\"block menu-item span-22 impaire\">
   \t\t\t\t\t<h2 class=\"block-title\"></h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t<ul><li><strong> Demi bouteille </strong></li><li><strong>Bouteille</strong></li></ul>
   \t\t\t\t\t\t&nbsp;
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
        // line 169
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 40), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 170
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 173
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 177
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t\t";
        // line 180
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 41)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 181
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 183
        echo "   \t\t\t\t<div class=\"block menu-item span-22 impaire\">
   \t\t\t\t\t<h2 class=\"block-title\"></h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t<ul><li><strong> Demi bouteille </strong></li><li><strong>Bouteille</strong></li></ul>
   \t\t\t\t\t\t&nbsp;
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
        // line 190
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 41), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            echo "  \t\t\t
   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            // line 191
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 194
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 198
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t\t";
        // line 201
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 42)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 202
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 204
        echo "   \t\t\t\t<div class=\"block menu-item span-22 impaire\">
   \t\t\t\t\t<h2 class=\"block-title\"></h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t<ul><li><strong> Demi bouteille </strong></li><li><strong>Bouteille</strong></li></ul>
   \t\t\t\t\t\t&nbsp;
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
        // line 211
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 42), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 212
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 215
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 219
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-22 menu-list\">\t
   \t\t\t\t";
        // line 222
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 43)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 223
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 225
        echo "   \t\t\t\t<div class=\"block menu-item span-22 impaire\">
   \t\t\t\t\t<h2 class=\"block-title\"></h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t<ul><li><strong> Demi bouteille </strong></li><li><strong>Bouteille</strong></li></ul>
   \t\t\t\t\t\t&nbsp;
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
        // line 232
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 43), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 233
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 234
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 236
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 240
        echo "   \t\t\t
   \t\t</div>
   \t\t
   \t\t<div class=\"span-4 last\">
   \t\t\t
   \t\t</div>
 </div> 
 
 <div class=\"span-22 prepend-1 prepend-top\" id=\"coktailsaperitisa\">
 \t\t\t\t";
        // line 249
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 11)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 250
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "rubrique"), "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 300, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "\"></h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 252
        echo "
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 254
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idParent" => 11)));
        foreach ($context['_seq'] as $context["_key"] => $context["aperitif"]) {
            // line 255
            echo "   \t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => $this->getAttribute($this->getContext($context, "aperitif"), "getIdRubrique", array(), "method")), array("titre" => "ASC")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 256
                echo "   \t\t\t\t\t<div class=\"block menu-item span-22 block   ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                    echo "paire";
                } else {
                    echo "impaire";
                }
                echo "\" id=\"menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
   \t\t\t\t\t\t<h2 class=\"block-title\">";
                // line 257
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
                echo "</h2>
   \t\t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
                // line 259
                echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
                echo "
   \t\t\t\t\t\t</div>
   \t\t\t\t\t</div>
   \t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 263
            echo "   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aperitif'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 264
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-4 last\">
   \t\t\t
   \t\t</div>
 </div> 
 <div class=\"span-22 prepend-1 prepend-top\" id=\"nos-plats\">
 \t\t\t\t";
        // line 271
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 31)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 272
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "rubrique"), "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 300, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "\"></h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 274
        echo "
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 276
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idParent" => 31)));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 277
            echo "   \t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => $this->getAttribute($this->getContext($context, "plat"), "getIdRubrique", array(), "method")), array("titre" => "ASC")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                // line 278
                echo "   \t\t\t\t\t<div class=\"block menu-item span-22 block   ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                    echo "paire";
                } else {
                    echo "impaire";
                }
                echo "\" id=\"menu-item-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">
   \t\t\t\t\t\t<h2 class=\"block-title\">";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
                echo "</h2>
   \t\t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
                // line 281
                echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
                echo "
   \t\t\t\t\t\t</div>
   \t\t\t\t\t</div>
   \t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 285
            echo "   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 286
        echo "   \t\t</div>
   \t\t<div class=\"span-4 last\">
   \t\t\t
   \t\t</div>
 </div> 
 
 
 <div class=\"span-22 prepend-1 prepend-top\" id=\"nos-salades-entrees-charcuterie\">
 \t\t\t\t";
        // line 294
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 14)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 295
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "rubrique"), "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 300, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "\"></h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 297
        echo "
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 299
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 25)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 300
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 302
        echo "   \t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 25), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 303
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 306
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 310
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 313
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 26)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 314
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 316
        echo "   \t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 26), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 317
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 318
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 320
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 324
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 327
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 27)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 328
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 330
        echo "   \t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 27), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 331
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 332
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 334
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 338
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 341
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 28)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 342
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 344
        echo "   \t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 28), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 345
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 346
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 348
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 352
        echo "   \t\t\t
   \t\t</div>
   \t\t
   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 356
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 29)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 357
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 359
        echo "   \t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 29), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 360
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 361
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 363
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 367
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-4 last\">
   \t\t\t
   \t\t</div>
 </div> 
 <div class=\"span-22 prepend-1 prepend-top append-bottom\" id=\"nos-viandes-grillees\">
 \t\t\t\t";
        // line 374
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 44)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 375
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo " <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "rubrique"), "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 300, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rubrique"), "getTitre", array(), "method"), "html", null, true);
            echo "\"></h2>
   \t\t\t\t\t<p class=\"garniture\"> ";
            // line 376
            echo $this->getAttribute($this->getContext($context, "rubrique"), "getTexte", array(), "method");
            echo " </p>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 378
        echo "   \t\t\t\t

   \t\t<div class=\"span-22 menu-list\">
   \t\t\t";
        // line 381
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 44), array("titre" => "ASC")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 382
            echo "   \t\t\t\t<div class=\"block menu-item span-22 block   ";
            if ((($this->getAttribute($this->getContext($context, "loop"), "index") % 2) == 0)) {
                echo "paire";
            } else {
                echo "impaire";
            }
            echo "\" id=\"menu-item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">
   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 383
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t\t<div class=\"block-content\">
   \t\t\t\t\t\t";
            // line 385
            echo $this->getAttribute($this->getContext($context, "menu"), "getTexte", array(), "method");
            echo "
   \t\t\t\t\t</div>
   \t\t\t\t</div>
   \t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 389
        echo "   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-4 last\">
   \t\t\t
   \t\t</div>
 </div> 
 
 
 
";
    }

    public function getTemplateName()
    {
        return "SiteHomeBundle:Default:lacarte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
