<?php

/* GoogleBundle:Analytics:async.html.twig */
class __TwigTemplate_2c85b89ec5beab271367f9193c22920f extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
if (AntiMattr == null || typeof(AntiMattr) != 'object') { var AntiMattr = window.AntiMattr = {}; }
AntiMattr.GoogleAnalytics = {};

AntiMattr.GoogleAnalytics.onGatLoad = function(callback) {
    if (typeof _gat != \"undefined\") {
\t\tcallback();
    } else {
        var listener = this;
        setTimeout(function(){
            listener.onGatLoad(callback);\t\t\t\t\t
        },100);
    }
};

AntiMattr.GoogleAnalytics.notifyEvent = function(tracker, category, action, label, value) {
    var event = [tracker + '._trackEvent', category];
    if (typeof label != 'undefined') {
\t    event.push(label);
\t    if (typeof value != 'undefined') {
\t\t    event.push(value);
\t    }
    }
    _gaq.push(event);
};

if ( _gaq == null || typeof(_gaq) != 'array') { var _gaq = window._gaq = []; }

";
        // line 29
        if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_google_analytics_, "trackers"));
        foreach ($context['_seq'] as $context["key"] => $context["tracker"]) {
            // line 30
            echo "    _gaq.push(['";
            if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
            echo "._setAccount', '";
            if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "accountId"), "html", null, true);
            echo "']);

    ";
            // line 32
            if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
            if ($this->getAttribute($_tracker_, "domain")) {
                // line 33
                echo "        _gaq.push(['";
                if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                echo "._setDomainName', '";
                if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "domain"), "html", null, true);
                echo "']);

        ";
                // line 35
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_google_analytics_, "getAllowLinker", array(0 => $_key_), "method")) {
                    // line 36
                    echo "            _gaq.push(['";
                    if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                    echo "._setAllowLinker', true ]);
        ";
                } else {
                    // line 38
                    echo "            _gaq.push(['";
                    if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                    echo "._setAllowLinker', false ]);
        ";
                }
                // line 40
                echo "
        ";
                // line 41
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
                if ($this->getAttribute($_google_analytics_, "getAllowHash", array(0 => $_key_), "method")) {
                    // line 42
                    echo "            _gaq.push(['";
                    if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                    echo "._setAllowHash', true ]);
        ";
                } else {
                    // line 44
                    echo "            _gaq.push(['";
                    if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                    echo "._setAllowHash', false ]);
        ";
                }
                // line 46
                echo "    ";
            }
            // line 47
            echo "
    ";
            // line 48
            if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
            if ($this->getAttribute($_google_analytics_, "hasCustomVariables")) {
                // line 49
                echo "        ";
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_google_analytics_, "customVariables"));
                foreach ($context['_seq'] as $context["_key"] => $context["customVariable"]) {
                    // line 50
                    echo "            _gaq.push(['";
                    if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                    echo "._setCustomVar', ";
                    if (isset($context["customVariable"])) { $_customVariable_ = $context["customVariable"]; } else { $_customVariable_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_customVariable_, "index"), "html", null, true);
                    echo ", '";
                    if (isset($context["customVariable"])) { $_customVariable_ = $context["customVariable"]; } else { $_customVariable_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_customVariable_, "name"), "html", null, true);
                    echo "', '";
                    if (isset($context["customVariable"])) { $_customVariable_ = $context["customVariable"]; } else { $_customVariable_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_customVariable_, "value"), "html", null, true);
                    echo "', ";
                    if (isset($context["customVariable"])) { $_customVariable_ = $context["customVariable"]; } else { $_customVariable_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_customVariable_, "scope"), "html", null, true);
                    echo "]);
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customVariable'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 52
                echo "    ";
            }
            // line 53
            echo "
    ";
            // line 54
            if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
            if ($this->getAttribute($_google_analytics_, "hasPageViewQueue")) {
                // line 55
                echo "        ";
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_google_analytics_, "pageViewQueue"));
                foreach ($context['_seq'] as $context["_key"] => $context["pageView"]) {
                    // line 56
                    echo "            _gaq.push(['";
                    if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                    echo "._trackPageview', '";
                    if (isset($context["pageView"])) { $_pageView_ = $context["pageView"]; } else { $_pageView_ = null; }
                    echo twig_escape_filter($this->env, $_pageView_, "html", null, true);
                    echo "']);
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageView'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 58
                echo "    ";
            }
            // line 59
            echo "
    ";
            // line 60
            if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
            if ($this->getAttribute($_google_analytics_, "hasCustomPageView")) {
                // line 61
                echo "        _gaq.push(['";
                if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                echo "._trackPageview', '";
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                echo $this->getAttribute($_google_analytics_, "getCustomPageView", array(), "method");
                echo "']);
    ";
            } else {
                // line 63
                echo "        if (window.location.hash) {
            _gaq.push(['";
                // line 64
                if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                echo "._trackPageview', '";
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                echo $this->getAttribute($_google_analytics_, "getRequestUri", array(), "method");
                echo "'+window.location.hash]);
        } else {
            _gaq.push(['";
                // line 66
                if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                echo "._trackPageview', '";
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                echo $this->getAttribute($_google_analytics_, "getRequestUri", array(), "method");
                echo "']);
        }
    ";
            }
            // line 69
            echo "
    ";
            // line 70
            if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
            if (isset($context["key"])) { $_key_ = $context["key"]; } else { $_key_ = null; }
            if ($this->getAttribute($_google_analytics_, "getTrackPageLoadTime", array(0 => $_key_), "method")) {
                // line 71
                echo "        _gaq.push(['";
                if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                echo "._trackPageLoadTime']);
    ";
            }
            // line 73
            echo "
    ";
            // line 74
            if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
            if ($this->getAttribute($_google_analytics_, "isTransactionValid")) {
                // line 75
                echo "        ";
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                $context["transaction"] = $this->getAttribute($_google_analytics_, "transaction");
                // line 76
                echo "        _gaq.push(['";
                if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                echo "._addTrans',
            '";
                // line 77
                if (isset($context["transaction"])) { $_transaction_ = $context["transaction"]; } else { $_transaction_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_transaction_, "orderNumber"), "js"), "html", null, true);
                echo "', // order number required
            '";
                // line 78
                if (isset($context["transaction"])) { $_transaction_ = $context["transaction"]; } else { $_transaction_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_transaction_, "affiliation"), "js"), "html", null, true);
                echo "', // affiliation optional
            '";
                // line 79
                if (isset($context["transaction"])) { $_transaction_ = $context["transaction"]; } else { $_transaction_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_transaction_, "total"), "js"), "html", null, true);
                echo "', // total optional
            '";
                // line 80
                if (isset($context["transaction"])) { $_transaction_ = $context["transaction"]; } else { $_transaction_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_transaction_, "tax"), "js"), "html", null, true);
                echo "', // tax optional
            '";
                // line 81
                if (isset($context["transaction"])) { $_transaction_ = $context["transaction"]; } else { $_transaction_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_transaction_, "shipping"), "js"), "html", null, true);
                echo "', // shipping optional
            '";
                // line 82
                if (isset($context["transaction"])) { $_transaction_ = $context["transaction"]; } else { $_transaction_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_transaction_, "city"), "js"), "html", null, true);
                echo "', // city optional
            '";
                // line 83
                if (isset($context["transaction"])) { $_transaction_ = $context["transaction"]; } else { $_transaction_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_transaction_, "state"), "js"), "html", null, true);
                echo "', // state optional
            '";
                // line 84
                if (isset($context["transaction"])) { $_transaction_ = $context["transaction"]; } else { $_transaction_ = null; }
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_transaction_, "country"), "js"), "html", null, true);
                echo "' // country optional
        ]);

        ";
                // line 87
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                if ($this->getAttribute($_google_analytics_, "hasItems")) {
                    // line 88
                    echo "            ";
                    if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($_google_analytics_, "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 89
                        echo "                _gaq.push(['";
                        if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                        echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                        echo "._addItem',
                    '";
                        // line 90
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_item_, "orderNumber"), "js"), "html", null, true);
                        echo "', // order number required
                    '";
                        // line 91
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_item_, "sku"), "js"), "html", null, true);
                        echo "', // sku required
                    '";
                        // line 92
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_item_, "name"), "js"), "html", null, true);
                        echo "', // name optional
                    '";
                        // line 93
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_item_, "category"), "js"), "html", null, true);
                        echo "', // category optional
                    '";
                        // line 94
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_item_, "price"), "js"), "html", null, true);
                        echo "', // price required
                    '";
                        // line 95
                        if (isset($context["item"])) { $_item_ = $context["item"]; } else { $_item_ = null; }
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($_item_, "quantity"), "js"), "html", null, true);
                        echo "' // quantity required
                ]);
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_merge($_parent, array_intersect_key($context, $_parent));
                    // line 98
                    echo "        ";
                }
                // line 99
                echo "
        _gaq.push(['";
                // line 100
                if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                echo "._trackTrans']);

    ";
            }
            // line 103
            echo "    
    ";
            // line 104
            if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
            if ($this->getAttribute($_google_analytics_, "hasEventQueue")) {
                // line 105
                echo "        AntiMattr.GoogleAnalytics.onGatLoad(function() {
        ";
                // line 106
                if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($_google_analytics_, "eventQueue"));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 107
                    echo "            AntiMattr.GoogleAnalytics.notifyEvent('";
                    if (isset($context["tracker"])) { $_tracker_ = $context["tracker"]; } else { $_tracker_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_tracker_, "name"), "html", null, true);
                    echo "', '";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "category"), "html", null, true);
                    echo "','";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "action"), "html", null, true);
                    echo "','";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "label"), "html", null, true);
                    echo "','";
                    if (isset($context["event"])) { $_event_ = $context["event"]; } else { $_event_ = null; }
                    echo twig_escape_filter($this->env, $this->getAttribute($_event_, "value"), "html", null, true);
                    echo "');
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
                $context = array_merge($_parent, array_intersect_key($context, $_parent));
                // line 109
                echo "        });
    ";
            }
            // line 111
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tracker'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 113
        echo "
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? '";
        // line 116
        if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
        echo $this->getAttribute($_google_analytics_, "sourceHttps");
        echo "' : '";
        if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
        echo $this->getAttribute($_google_analytics_, "sourceHttp");
        echo "') + '";
        if (isset($context["google_analytics"])) { $_google_analytics_ = $context["google_analytics"]; } else { $_google_analytics_ = null; }
        echo $this->getAttribute($_google_analytics_, "sourceEndpoint");
        echo "';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
";
    }

    public function getTemplateName()
    {
        return "GoogleBundle:Analytics:async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
