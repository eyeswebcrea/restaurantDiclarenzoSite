<?php

/* EyeswebcreaSliderBundle:CSS3:slider.html.twig */
class __TwigTemplate_298b65d73e616ddbefec093861643ae1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>

";
        // line 3
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "ecb6178_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ecb6178_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/global_slides.min.jquery_1.js");
            // line 6
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        } else {
            // asset "ecb6178"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_ecb6178") : $this->env->getExtension('assets')->getAssetUrl("_controller/global.js");
            echo "\t<script src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
";
        }
        unset($context["asset_url"]);
        // line 7
        echo " 

<script>
\t\$(document).ready(function() {
\t\t\$(\".slides\").slides();
\t});
</script>

<div class=\"slides\">
  <div class=\"slides_container\">
\t\t";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 18
            echo "\t\t\t<div class=\"item\">
\t\t\t\t<div class=\"item-image\">
\t\t\t\t\t<img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "element"), "image_url")), "resize", array(0 => $this->getAttribute($this->getContext($context, "options"), "width"), 1 => $this->getAttribute($this->getContext($context, "options"), "height")), "method"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"item-contenu\">
\t\t\t\t\t<p> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "descript"), "html", null, true);
            echo "</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 27
        echo "  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaSliderBundle:CSS3:slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
