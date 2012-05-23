<?php

/* EyeswebcreaSliderBundle:Slider:slider.html.twig */
class __TwigTemplate_462a0af0b07dff74f327a83062b66ae1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"slides\">
  <div class=\"slides_container\">
\t\t";
        // line 3
        if (isset($context["elements"])) { $_elements_ = $context["elements"]; } else { $_elements_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_elements_);
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 4
            echo "\t\t\t<div>
\t\t\t\t<div class=\"slide-item-image\">
\t\t\t\t\t";
            // line 6
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if ($this->getAttribute($_options_, "forceResize")) {
                // line 7
                echo "\t\t\t\t\t\t\t<img src=\"";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($_element_, "image_url")), "forceResize", array(0 => $this->getAttribute($_options_, "width"), 1 => $this->getAttribute($_options_, "height")), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t\t\t\t<img src=\"";
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($_element_, "image_url")), "resize", array(0 => $this->getAttribute($_options_, "width"), 1 => $this->getAttribute($_options_, "height")), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t";
            }
            // line 11
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 12
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if ($this->getAttribute($_options_, "texte")) {
                // line 13
                echo "\t\t\t\t<div class=\"slide-item-texte\">
\t\t\t\t\t";
                // line 14
                if (isset($context["element"])) { $_element_ = $context["element"]; } else { $_element_ = null; }
                echo $this->getAttribute($_element_, "descript");
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 17
            echo "\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaSliderBundle:Slider:slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
