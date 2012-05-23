<?php

/* ::base.html.twig */
class __TwigTemplate_07f899c3b4f9f581da32cfb192661380 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'bandeau' => array($this, 'block_bandeau'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["idRubriqueBandeau"] = 7;
        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Fichier de définition css -->
        <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"/css/blueprint/screen.css\" type=\"text/css\" media=\"screen, projection\">
\t\t<link rel=\"stylesheet\" href=\"/css/blueprint/print.css\" type=\"text/css\" media=\"print\">
\t\t<link href='http://fonts.googleapis.com/css?family=Prosto+One|Great+Vibes' rel='stylesheet' type='text/css'>
\t\t<!–[if IE]><link rel=\"stylesheet\" href=\"/css/blueprint/ie.css\" type=\"text/css\" media=\"screen, projection\"><![endif]–>
        ";
        // line 15
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e51aafb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e51aafb_0") : $this->env->getExtension('assets')->getAssetUrl("css/compressed_global_1.css");
            // line 21
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 22
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "e51aafb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e51aafb_1") : $this->env->getExtension('assets')->getAssetUrl("css/compressed_blocks_2.css");
            // line 21
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 22
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "e51aafb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e51aafb_2") : $this->env->getExtension('assets')->getAssetUrl("css/compressed_effect_3.css");
            // line 21
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 22
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "e51aafb_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e51aafb_3") : $this->env->getExtension('assets')->getAssetUrl("css/compressed_global_4.css");
            // line 21
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 22
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
            // asset "e51aafb_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e51aafb_4") : $this->env->getExtension('assets')->getAssetUrl("css/compressed_Slider_5.css");
            // line 21
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 22
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        } else {
            // asset "e51aafb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_e51aafb") : $this->env->getExtension('assets')->getAssetUrl("css/compressed.css");
            // line 21
            echo "        \t\t
        \t<link rel=\"stylesheet\" href=\"";
            // line 22
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" type=\"text/css\" media=\"screen\" />
        ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "        
        <!-- Fichiers de script javascript -->
        <script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js\"></script>
    \t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js\"></script>
        
        ";
        // line 31
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "1ed6113_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ed6113_0") : $this->env->getExtension('assets')->getAssetUrl("js/compressed_global_1.js");
            // line 34
            echo "        \t\t
        \t<script src=\"";
            // line 35
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\"></script>
        ";
            // asset "1ed6113_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ed6113_1") : $this->env->getExtension('assets')->getAssetUrl("js/compressed_slides.min.jquery_2.js");
            // line 34
            echo "        \t\t
        \t<script src=\"";
            // line 35
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "1ed6113"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_1ed6113") : $this->env->getExtension('assets')->getAssetUrl("js/compressed.js");
            // line 34
            echo "        \t\t
        \t<script src=\"";
            // line 35
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 37
        echo "   \t\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "   \t\t";
        $this->env->loadTemplate("GoogleBundle:Analytics:async.html.twig")->display($context);
        // line 39
        echo "    </head>
    <body>
  \t\t\t    \t\t";
        // line 41
        if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
        if ((!twig_test_empty($this->getAttribute($this->getAttribute($_app_, "session"), "getFlashes", array(), "method")))) {
            // line 42
            echo "\t\t\t    \t\t\t<div id=\"notice\" class=\"notice\">
\t\t\t\t    \t\t\t<ul>
\t\t\t\t\t    \t\t\t";
            // line 44
            if (isset($context["app"])) { $_app_ = $context["app"]; } else { $_app_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($_app_, "session"), "getFlashes", array(), "method"));
            foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
                // line 45
                echo "\t\t\t\t\t\t\t\t\t\t  <li>";
                if (isset($context["flash"])) { $_flash_ = $context["flash"]; } else { $_flash_ = null; }
                echo twig_escape_filter($this->env, $_flash_, "html", null, true);
                echo "</li>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 47
            echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 50
        echo "    <div id=\"page\" class=\"container\">
    \t<div id=\"header\" class=\"span-24 last\">
    \t\t<div id=\"header-content\" class=\"span-24 last\">
\t\t\t\t";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 54
        echo "    \t\t</div>
    \t</div>
    \t<div id=\"body\" class=\"span-24 last\">
    \t\t<div id=\"body-content\" class=\"span-24 last\">
    \t\t\t<div class=\"span-24 last\" id=\"conteneur-bandeau\">
    \t\t\t\t";
        // line 59
        $this->displayBlock('bandeau', $context, $blocks);
        // line 62
        echo "    \t\t\t</div>
    \t\t\t<div>
\t    \t\t\t<div class=\"span-24 last\" id=\"conteneur-bas\">
\t\t    \t\t\t<div id=\"conteneur-bas-partie-milieu\"  class=\"span-24 last\" style=\"\">
\t\t    \t\t\t\t";
        // line 66
        $this->displayBlock('body', $context, $blocks);
        // line 67
        echo "\t\t    \t\t\t</div>
\t\t    \t\t\t<div id=\"conteneur-bas-partie-basse\" class=\"span-24 last\"></div>
\t    \t\t\t</div>
\t    \t\t\t
    \t\t\t</div>
    \t\t</div>
    \t</div>
    </div>
       <div id=\"footer\">
    \t\t<div id=\"footer-content\" class=\"container\"> 
    \t\t\t";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 78
        echo "    \t\t</div>
    \t</div>
    
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "restaurantdiclarenzo";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        $this->env->loadTemplate("::header.html.twig")->display($context);
    }

    // line 59
    public function block_bandeau($context, array $blocks = array())
    {
        echo " 
\t\t\t\t\t\t";
        // line 60
        $this->env->loadTemplate("::bandeau.html.twig")->display(array_merge($context, array("idRubriqueBandeau" => 35, "hauteurBandeau" => 200)));
        // line 61
        echo "\t    \t\t\t";
    }

    // line 66
    public function block_body($context, array $blocks = array())
    {
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        $this->env->loadTemplate("::footer.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
