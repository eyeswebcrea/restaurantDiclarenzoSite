<?php

/* IHQSContactBundle:Contact:form.html.twig */
class __TwigTemplate_ab0b741752e82d2ab9e42028ce2474f4 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form class=\"contact-form\" action=\"\" ";
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderEnctype($_form_);
        echo " method=\"post\">
    ";
        // line 2
        if (isset($context["form"])) { $_form_ = $context["form"]; } else { $_form_ = null; }
        echo $this->env->getExtension('form')->renderWidget($_form_);
        echo "
    <div>
        <input type=\"submit\" class=\"submit\" value=\"";
        // line 4
        echo $this->env->getExtension('translator')->getTranslator()->trans("Submit contact form", array(), "messages");
        echo "\" />
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "IHQSContactBundle:Contact:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
