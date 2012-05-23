<?php

/* EyeswebcreaSliderBundle:3D:slider.html.twig */
class __TwigTemplate_0df417e5c174cc571e0476ae3b954b0a extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  \t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
  \t
  \t<script type=\"text/javascript\">
\t\t\$(document).ready(function(){
\t\t\t
\t\t\t// set up hover panels
\t\t\t// although this can be done without JavaScript, we've attached these events
\t\t\t// because it causes the hover to be triggered when the element is tapped on a touch device
\t\t\t\$('.hover').hover(function(){
\t\t\t\t\$(this).addClass('flip');
\t\t\t},function(){
\t\t\t\t\$(this).removeClass('flip');
\t\t\t});
\t\t\t
\t\t});
\t</script>

  <div class=\"slides_container\">
\t\t";
        // line 19
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
            // line 20
            echo "\t\t\t<div class=\"item item-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo " hover panel\">
\t\t\t\t<div class=\"front\">
\t\t\t\t\t<img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('image')->image($this->getAttribute($this->getContext($context, "element"), "image_url")), "resize", array(0 => (($this->getAttribute($this->getContext($context, "options"), "width") / 2) - 30), 1 => 200), "method"), "html", null, true);
            echo "\">
\t\t\t\t</div>
\t\t\t\t<div class=\"back\">
\t\t\t\t\t<h2>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "titre"), "html", null, true);
            echo "</h2>
\t\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('SpipAccesContent')->twig_truncate_filter($this->env, $this->env->getExtension('SpipAccesContent')->twig_nohtml_filter($this->getAttribute($this->getContext($context, "element"), "descript")), $this->getAttribute($this->getContext($context, "options"), "texte_truncate")), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 27
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "element"), "link_url")))) {
                echo " <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "element"), "link_url"), "html", null, true);
                echo "\">Voir le détail</a> ";
            }
            // line 28
            echo "\t\t\t\t</div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 31
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaSliderBundle:3D:slider.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
