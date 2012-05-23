<?php

/* GoogleBundle:Adwords:track.html.twig */
class __TwigTemplate_f696209feb71b4260271eb6b63a57cad extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute($this->getContext($context, "google_adwords"), "hasActiveConversion", array(), "method")) {
            // line 2
            echo "<!-- GOOGLE CODE FOR CONVERSION START -->
<script type=\"text/javascript\">
/* <![CDATA[ */
var google_conversion_id = ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "google_adwords"), "activeConversion"), "getId", array(), "method"), "html", null, true);
            echo ";
var google_conversion_language = \"en\";
var google_conversion_format = \"2\";
var google_conversion_color = \"ffffff\";
var google_conversion_label = \"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "google_adwords"), "activeConversion"), "getLabel", array(), "method"), "html", null, true);
            echo "\";
var google_conversion_value = ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "google_adwords"), "activeConversion"), "getValue", array(), "method"), "html", null, true);
            echo ";
/* ]]> */
</script>
<script type=\"text/javascript\" src=\"https://www.googleadservices.com/pagead/conversion.js\">
</script>
<noscript>
<div style=\"display:inline;\">
<img height=\"1\" width=\"1\" style=\"border-style:none;\" alt=\"\" 
\tsrc=\"https://www.googleadservices.com/pagead/conversion/";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "google_adwords"), "activeConversion"), "getId", array(), "method"), "html", null, true);
            echo "/?label=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "google_adwords"), "activeConversion"), "getLabel", array(), "method"), "html", null, true);
            echo "&amp;guid=ON&amp;script=0\"/>
</div>
</noscript>
<!-- GOOGLE CODE FOR CONVERSION END -->
";
        }
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Adwords:track.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
