<?php

/* EyeswebcreaSliderBundle:Slider:slider.html.twig */
class __TwigTemplate_462a0af0b07dff74f327a83062b66ae1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"slides slides-design-slider\">
  <div class=\"slides_container\">
\t\t";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "elements"));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 4
            echo "\t\t\t<div>
\t\t\t\t<div class=\"slide-item-image\">
\t\t\t\t\t";
            // line 6
            if ($this->getAttribute($this->getContext($context, "options"), "forceResize")) {
                // line 7
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "element"), "image_url")), "forceResize", array(0 => $this->getAttribute($this->getContext($context, "options"), "width"), 1 => $this->getAttribute($this->getContext($context, "options"), "height")), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t";
            } else {
                // line 9
                echo "\t\t\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "element"), "image_url")), "resize", array(0 => $this->getAttribute($this->getContext($context, "options"), "width"), 1 => $this->getAttribute($this->getContext($context, "options"), "height")), "method"), "html", null, true);
                echo "\">
\t\t\t\t\t";
            }
            // line 11
            echo "\t\t\t\t</div>
\t\t\t\t";
            // line 12
            if ($this->getAttribute($this->getContext($context, "options"), "texte")) {
                // line 13
                echo "\t\t\t\t<div class=\"slide-item-texte\">
\t\t\t\t\t";
                // line 14
                echo $this->getAttribute($this->getContext($context, "element"), "descript");
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
    \t<ul class=\"pagination\">
\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "elements"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 22
            echo "\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "</a>
\t\t\t\t</li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 26
        echo "\t\t</ul>
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
