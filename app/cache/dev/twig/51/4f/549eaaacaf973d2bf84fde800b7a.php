<?php

/* EyeswebcreaAliasContentEditorBundle::layout.html.twig */
class __TwigTemplate_514f549eaaacaf973d2bf84fde800b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_editorbundle' => array($this, 'block_body_editorbundle'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EyeswebcreaSecuserSpaceAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "\t\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t\t\t";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5f79317_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f79317_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/admin_admin_1.css");
            // line 8
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t";
        } else {
            // asset "5f79317"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_5f79317") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/admin.css");
            echo "\t\t\t<link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" />
\t\t";
        }
        unset($context["asset_url"]);
        // line 10
        echo "\t";
    }

    // line 15
    public function block_body_editorbundle($context, array $blocks = array())
    {
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"span-22 last\" id=\"secuserspace_adminbundle_global_container\">
\t\t<div class=\"span-6\" id=\"securerspace_adminbundle_global_left\"> ";
        // line 14
        $this->env->loadTemplate("EyeswebcreaAliasContentEditorBundle::global_left.html.twig")->display($context);
        echo " </div>
\t\t<div class=\"span-16 last\" id=\"secuserspace_adminbundle_global_middle\"> ";
        // line 15
        $this->displayBlock('body_editorbundle', $context, $blocks);
        echo "</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EyeswebcreaAliasContentEditorBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
