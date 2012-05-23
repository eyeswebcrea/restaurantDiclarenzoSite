<?php

/* knp_menu.html.twig */
class __TwigTemplate_f1c17280e5d93b1fb63183799893a1b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('compressed_root', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('root', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('list', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('children', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('item', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('linkElement', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('spanElement', $context, $blocks);
        // line 82
        echo "
";
        // line 83
        $this->displayBlock('label', $context, $blocks);
    }

    // line 9
    public function block_compressed_root($context, array $blocks = array())
    {
        // line 10
        ob_start();
        // line 11
        $this->displayBlock("root", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 15
    public function block_root($context, array $blocks = array())
    {
        // line 16
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["listAttributes"] = $this->getAttribute($_item_, "childrenAttributes");
        // line 17
        $this->displayBlock("list", $context, $blocks);
    }

    // line 20
    public function block_list($context, array $blocks = array())
    {
        // line 21
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((($this->getAttribute($_item_, "hasChildren") && (!($this->getAttribute($_options_, "depth") === 0))) && $this->getAttribute($_item_, "displayChildren"))) {
            // line 22
            echo "    <ul";
            if (isset($context["listAttributes"])) { $_listAttributes_ = $context["listAttributes"]; } else { $_listAttributes_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array(0 => $_listAttributes_), "method"), "html", null, true);
            echo ">
        ";
            // line 23
            $this->displayBlock("children", $context, $blocks);
            echo "
    </ul>
";
        }
    }

    // line 28
    public function block_children($context, array $blocks = array())
    {
        // line 30
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        $context["currentOptions"] = $_options_;
        // line 31
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        $context["currentItem"] = $_item_;
        // line 33
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if ((!(null === $this->getAttribute($_options_, "depth")))) {
            // line 34
            if (isset($context["currentOptions"])) { $_currentOptions_ = $context["currentOptions"]; } else { $_currentOptions_ = null; }
            $context["options"] = twig_array_merge($_currentOptions_, array("depth" => ($this->getAttribute($_currentOptions_, "depth") - 1)));
        }
        // line 36
        if (isset($context["currentItem"])) { $_currentItem_ = $context["currentItem"]; } else { $_currentItem_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_currentItem_, "children"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 37
            echo "    ";
            $this->displayBlock("item", $context, $blocks);
            echo "
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 40
        if (isset($context["currentItem"])) { $_currentItem_ = $context["currentItem"]; } else { $_currentItem_ = null; }
        $context["item"] = $_currentItem_;
        // line 41
        if (isset($context["currentOptions"])) { $_currentOptions_ = $context["currentOptions"]; } else { $_currentOptions_ = null; }
        $context["options"] = $_currentOptions_;
    }

    // line 44
    public function block_item($context, array $blocks = array())
    {
        // line 45
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if ($this->getAttribute($_item_, "displayed")) {
            // line 47
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["classes"] = (((!twig_test_empty($this->getAttribute($_item_, "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($_item_, "attribute", array(0 => "class"), "method"))) : (array()));
            // line 48
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "current")) {
                // line 49
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "currentClass")));
            } elseif ($this->getAttribute($_item_, "currentAncestor")) {
                // line 51
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "ancestorClass")));
            }
            // line 53
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeFirst")) {
                // line 54
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "firstClass")));
            }
            // line 56
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if ($this->getAttribute($_item_, "actsLikeLast")) {
                // line 57
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
                $context["classes"] = twig_array_merge($_classes_, array(0 => $this->getAttribute($_options_, "lastClass")));
            }
            // line 59
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["attributes"] = $this->getAttribute($_item_, "attributes");
            // line 60
            if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
            if ((!twig_test_empty($_classes_))) {
                // line 61
                if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
                if (isset($context["classes"])) { $_classes_ = $context["classes"]; } else { $_classes_ = null; }
                $context["attributes"] = twig_array_merge($_attributes_, array("class" => twig_join_filter($_classes_, " ")));
            }
            // line 64
            echo "    <li";
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array(0 => $_attributes_), "method"), "html", null, true);
            echo ">";
            // line 65
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
            if (((!twig_test_empty($this->getAttribute($_item_, "uri"))) && ((!$this->getAttribute($_item_, "current")) || $this->getAttribute($_options_, "currentAsLink")))) {
                // line 66
                echo "        ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 68
                echo "        ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 71
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($_item_, "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 72
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            $context["childrenClasses"] = twig_array_merge($_childrenClasses_, array(0 => ("menu_level_" . $this->getAttribute($_item_, "level"))));
            // line 73
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            if (isset($context["childrenClasses"])) { $_childrenClasses_ = $context["childrenClasses"]; } else { $_childrenClasses_ = null; }
            $context["listAttributes"] = twig_array_merge($this->getAttribute($_item_, "childrenAttributes"), array("class" => twig_join_filter($_childrenClasses_, " ")));
            // line 74
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>
";
        }
    }

    // line 79
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_item_, "uri"), "html", null, true);
        echo "\"";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($_item_, "linkAttributes")), "method"), "html", null, true);
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 81
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<span";
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($this, "attributes", array(0 => $this->getAttribute($_item_, "labelAttributes")), "method"), "html", null, true);
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>";
    }

    // line 83
    public function block_label($context, array $blocks = array())
    {
        if (isset($context["options"])) { $_options_ = $context["options"]; } else { $_options_ = null; }
        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
        if (($this->getAttribute($_options_, "allow_safe_labels") && $this->getAttribute($_item_, "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo $this->getAttribute($_item_, "label");
        } else {
            if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_item_, "label"), "html", null, true);
        }
    }

    // line 1
    public function getattributes($attributes = null)
    {
        $context = array_merge($this->env->getGlobals(), array(
            "attributes" => $attributes,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            if (isset($context["attributes"])) { $_attributes_ = $context["attributes"]; } else { $_attributes_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_attributes_);
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 3
                if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                if (((!(null === $_value_)) && (!($_value_ === false)))) {
                    // line 4
                    if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
                    if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
                    echo sprintf(" %s=\"%s\"", $_name_, ((($_value_ === true)) ? (twig_escape_filter($this->env, $_name_)) : (twig_escape_filter($this->env, $_value_))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        } catch(Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ob_get_clean();
    }

    public function getTemplateName()
    {
        return "knp_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
