<?php

/* SiteHomeBundle:Default:index.html.twig */
class __TwigTemplate_a3e8e81256abc62361ba735de7c58c29 extends Twig_Template
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

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "\t    ";
        // line 7
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1e1f7b8_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e1f7b8_0") : $this->env->getExtension('assets')->getAssetUrl("css/mercerie_index_1.css");
            // line 9
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 10
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "1e1f7b8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1e1f7b8") : $this->env->getExtension('assets')->getAssetUrl("css/mercerie.css");
            // line 9
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 10
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "


   <div class=\"span-24 block block-10-line\">
   \t
   \t<div class=\"prepend-1 span-15 prepend-top append-1 \" id=\"specialitesitalie-and-specialitespoissons\">
   \t\t<div class=\"span-8 block block-8-line\" id=\"specialitesitalie\">
   \t\t\t<div class=\"span-8 patespizza-list block block-8-line\">
   \t\t\t\t";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 24
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            if (isset($context["rubrique"])) { $_rubrique_ = $context["rubrique"]; } else { $_rubrique_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_rubrique_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "   \t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idParent" => 4), array("titre" => "ASC")));
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
            // line 27
            echo "\t\t   \t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteHomeBundle_lacarte"), "html", null, true);
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getDescriptif", array(), "method"), "html", null, true);
            echo "\">
\t\t   \t\t\t\t<div class=\"transition-effect transition-effect-out patespizza-item span-8 prepend-top last block\" id=\"sandwitches-item-";
            // line 28
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\">
\t\t   \t\t\t\t\t<h2 class=\"span-4 last block-title\">";
            // line 29
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
\t\t   \t\t\t\t\t<div class=\"block-content\">
\t\t   \t\t\t\t\t\t<img src=\"";
            // line 31
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($_menu_, "getPathAbsoluteLocalLogo", array(), "method")), "resize", array(0 => 306, 1 => 159), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTitre", array(), "method"), "html", null, true);
            echo "\">
\t\t   \t\t\t\t\t</div>
\t\t   \t\t\t\t</div>
\t\t   \t\t\t</a>
\t\t   \t\t\t<div class=\"clear\"></div>
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
        // line 37
        echo "   \t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 4)));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 38
            echo "\t   \t\t\t\t<div class=\"block prepend-top patespizza-details details\">
\t   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 39
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
\t   \t\t\t\t\t<div class=\"block-content\">
\t   \t\t\t\t\t\t";
            // line 41
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTexte", array(), "method"), "html", null, true);
            echo "
\t   \t\t\t\t\t\t<a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteHomeBundle_lacarte"), "html", null, true);
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getUrlSite", array(), "method"), "html", null, true);
            echo "\">En savoir plus</a>
\t   \t\t\t\t\t</div>
\t   \t\t\t\t</div>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 46
        echo "   \t\t\t</div>
   \t\t\t
   \t\t</div>
   \t\t<div class=\"span-6 prepend-1 block block-8-lines last \" id=\"specialitespoissons\">
   \t\t\t<div class=\"span-6  specialitespoissons-list\">
   \t\t\t\t";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 12)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 52
            echo "   \t\t\t\t\t<h2 class=\"titre text-center\">";
            if (isset($context["rubrique"])) { $_rubrique_ = $context["rubrique"]; } else { $_rubrique_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_rubrique_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 54
        echo "   \t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idParent" => 12), array("titre" => "ASC")));
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
            // line 55
            echo "   \t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteHomeBundle_lacarte"), "html", null, true);
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getDescriptif", array(), "method"), "html", null, true);
            echo "\">
\t   \t\t\t\t<div class=\"transition-effect transition-effect-out  specialitespoissons-item prepend-top transition-effect span-6 last  block block-6-line showgrid\" id=\"saladesdivers-item-";
            // line 56
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\">
\t   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 57
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
\t   \t\t\t\t\t<div class=\"block-content\">
\t   \t\t\t\t\t\t<img src=\"";
            // line 59
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($_menu_, "getPathAbsoluteLocalLogo", array(), "method")), "resize", array(0 => 226, 1 => 345), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTitre", array(), "method"), "html", null, true);
            echo "\">
\t   \t\t\t\t\t</div>
\t   \t\t\t\t</div>
\t   \t\t\t\t</a>
\t   \t\t\t\t<div class=\"clear\"></div>
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
        // line 65
        echo "   \t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idRubrique" => 12)));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 66
            echo "\t   \t\t\t\t<div class=\"block prepend-top specialitespoissons-details details\">
\t   \t\t\t\t\t<h2 class=\"block-title\">";
            // line 67
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
\t   \t\t\t\t\t<div class=\"block-content\">
\t   \t\t\t\t\t\t";
            // line 69
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTexte", array(), "method"), "html", null, true);
            echo "
\t   \t\t\t\t\t\t<a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteHomeBundle_lacarte"), "html", null, true);
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getUrlSite", array(), "method"), "html", null, true);
            echo "\">En savoir plus</a>
\t   \t\t\t\t\t</div>
\t   \t\t\t\t</div>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 74
        echo "   \t\t\t</div>
   \t\t</div>\t
   \t</div>
   \t\t<div class=\"span-7 prepend-top  block block-8-lines last\" id=\"ardoiseentrees\">
   \t\t\t<div class=\"span-6  last ardoise-list\">
   \t\t\t\t";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idRubrique" => 15)));
        foreach ($context['_seq'] as $context["_key"] => $context["rubrique"]) {
            // line 80
            echo "   \t\t\t\t\t\t<h2 class=\"titre\">";
            if (isset($context["rubrique"])) { $_rubrique_ = $context["rubrique"]; } else { $_rubrique_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_rubrique_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rubrique'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 82
        echo "   \t\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleRubriques(array("idParent" => 15), array("titre" => "ASC")));
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
            // line 83
            echo "   \t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("SiteHomeBundle_lacarte"), "html", null, true);
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getDescriptif", array(), "method"), "html", null, true);
            echo "\">
\t\t   \t\t\t\t<div class=\"ardoise-item span-3  ";
            // line 84
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            if ((($this->getAttribute($_loop_, "index") % 2) == 0)) {
                echo "last";
            }
            echo " block block-3-line\" id=\"ardoise-item-";
            if (isset($context["loop"])) { $_loop_ = $context["loop"]; } else { $_loop_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_loop_, "index"), "html", null, true);
            echo "\">
\t\t   \t\t\t\t\t<h2 class=\"block-title transition-effect transition-effect-zoomtitre\">";
            // line 85
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
\t\t   \t\t\t\t\t<div class=\"block-content\">
\t\t   \t\t\t\t\t\t<img src=\"";
            // line 87
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($_menu_, "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 106, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["menu"])) { $_menu_ = $context["menu"]; } else { $_menu_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_menu_, "getTitre", array(), "method"), "html", null, true);
            echo "\">
\t\t   \t\t\t\t\t</div>
\t\t   \t\t\t\t</div>
\t   \t\t\t\t</a>
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
        // line 92
        echo "   \t\t\t\t\t   \t\t\t\t
   \t\t\t\t<div class=\"clear\"></div>
   \t\t\t\t";
        // line 94
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('SpipAccesContent')->boucleArticles(array("idArticle" => 185)));
        foreach ($context['_seq'] as $context["_key"] => $context["animation"]) {
            // line 95
            echo "\t   \t\t\t\t<div class=\"block animation\" id=\"animation\">
\t   \t\t\t\t\t<h2 class=\"block-title transition-effect transition-effect-zoomtitre\">";
            // line 96
            if (isset($context["animation"])) { $_animation_ = $context["animation"]; } else { $_animation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_animation_, "getTitre", array(), "method"), "html", null, true);
            echo "</h2>
\t   \t\t\t\t\t<div class=\"block-srcshot\">
\t   \t\t\t\t\t\t<img src=\"";
            // line 98
            if (isset($context["animation"])) { $_animation_ = $context["animation"]; } else { $_animation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($_animation_, "getPathAbsoluteLocalLogo", array(), "method")), "forceResize", array(0 => 226, 1 => 100), "method"), "html", null, true);
            echo "\" alt=\"";
            if (isset($context["animation"])) { $_animation_ = $context["animation"]; } else { $_animation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_animation_, "getTitre", array(), "method"), "html", null, true);
            echo "\">
\t   \t\t\t\t\t</div>
\t   \t\t\t\t\t<div class=\"block-content\">";
            // line 100
            if (isset($context["animation"])) { $_animation_ = $context["animation"]; } else { $_animation_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_animation_, "getTexte", array(), "method"), "html", null, true);
            echo "</div>
\t   \t\t\t\t</div>
\t   \t\t\t\t<div class=\"clear\"></div>
   \t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['animation'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 104
        echo "   \t\t\t</div>
   \t\t\t\t
   \t\t\t
   \t\t</div>
   \t
   \t\t
  
   </div>


";
    }

    public function getTemplateName()
    {
        return "SiteHomeBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
