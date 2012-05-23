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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "google_analytics"), "trackers"));
        foreach ($context['_seq'] as $context["key"] => $context["tracker"]) {
            // line 30
            echo "    _gaq.push(['";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
            echo "._setAccount', '";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "accountId"), "html", null, true);
            echo "']);

    ";
            // line 32
            if ($this->getAttribute($this->getContext($context, "tracker"), "domain")) {
                // line 33
                echo "        _gaq.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                echo "._setDomainName', '";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "domain"), "html", null, true);
                echo "']);

        ";
                // line 35
                if ($this->getAttribute($this->getContext($context, "google_analytics"), "getAllowLinker", array(0 => $this->getContext($context, "key")), "method")) {
                    // line 36
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                    echo "._setAllowLinker', true ]);
        ";
                } else {
                    // line 38
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                    echo "._setAllowLinker', false ]);
        ";
                }
                // line 40
                echo "
        ";
                // line 41
                if ($this->getAttribute($this->getContext($context, "google_analytics"), "getAllowHash", array(0 => $this->getContext($context, "key")), "method")) {
                    // line 42
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                    echo "._setAllowHash', true ]);
        ";
                } else {
                    // line 44
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
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
            if ($this->getAttribute($this->getContext($context, "google_analytics"), "hasCustomVariables")) {
                // line 49
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "google_analytics"), "customVariables"));
                foreach ($context['_seq'] as $context["_key"] => $context["customVariable"]) {
                    // line 50
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                    echo "._setCustomVar', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "customVariable"), "index"), "html", null, true);
                    echo ", '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "customVariable"), "name"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "customVariable"), "value"), "html", null, true);
                    echo "', ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "customVariable"), "scope"), "html", null, true);
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
            if ($this->getAttribute($this->getContext($context, "google_analytics"), "hasPageViewQueue")) {
                // line 55
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "google_analytics"), "pageViewQueue"));
                foreach ($context['_seq'] as $context["_key"] => $context["pageView"]) {
                    // line 56
                    echo "            _gaq.push(['";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                    echo "._trackPageview', '";
                    echo twig_escape_filter($this->env, $this->getContext($context, "pageView"), "html", null, true);
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
            if ($this->getAttribute($this->getContext($context, "google_analytics"), "hasCustomPageView")) {
                // line 61
                echo "        _gaq.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                echo "._trackPageview', '";
                echo $this->getAttribute($this->getContext($context, "google_analytics"), "getCustomPageView", array(), "method");
                echo "']);
    ";
            } else {
                // line 63
                echo "        if (window.location.hash) {
            _gaq.push(['";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                echo "._trackPageview', '";
                echo $this->getAttribute($this->getContext($context, "google_analytics"), "getRequestUri", array(), "method");
                echo "'+window.location.hash]);
        } else {
            _gaq.push(['";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                echo "._trackPageview', '";
                echo $this->getAttribute($this->getContext($context, "google_analytics"), "getRequestUri", array(), "method");
                echo "']);
        }
    ";
            }
            // line 69
            echo "
    ";
            // line 70
            if ($this->getAttribute($this->getContext($context, "google_analytics"), "getTrackPageLoadTime", array(0 => $this->getContext($context, "key")), "method")) {
                // line 71
                echo "        _gaq.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                echo "._trackPageLoadTime']);
    ";
            }
            // line 73
            echo "
    ";
            // line 74
            if ($this->getAttribute($this->getContext($context, "google_analytics"), "isTransactionValid")) {
                // line 75
                echo "        ";
                $context["transaction"] = $this->getAttribute($this->getContext($context, "google_analytics"), "transaction");
                // line 76
                echo "        _gaq.push(['";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                echo "._addTrans',
            '";
                // line 77
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "orderNumber"), "js"), "html", null, true);
                echo "', // order number required
            '";
                // line 78
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "affiliation"), "js"), "html", null, true);
                echo "', // affiliation optional
            '";
                // line 79
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "total"), "js"), "html", null, true);
                echo "', // total optional
            '";
                // line 80
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "tax"), "js"), "html", null, true);
                echo "', // tax optional
            '";
                // line 81
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "shipping"), "js"), "html", null, true);
                echo "', // shipping optional
            '";
                // line 82
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "city"), "js"), "html", null, true);
                echo "', // city optional
            '";
                // line 83
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "state"), "js"), "html", null, true);
                echo "', // state optional
            '";
                // line 84
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "transaction"), "country"), "js"), "html", null, true);
                echo "' // country optional
        ]);

        ";
                // line 87
                if ($this->getAttribute($this->getContext($context, "google_analytics"), "hasItems")) {
                    // line 88
                    echo "            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "google_analytics"), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 89
                        echo "                _gaq.push(['";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                        echo "._addItem',
                    '";
                        // line 90
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "orderNumber"), "js"), "html", null, true);
                        echo "', // order number required
                    '";
                        // line 91
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "sku"), "js"), "html", null, true);
                        echo "', // sku required
                    '";
                        // line 92
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "name"), "js"), "html", null, true);
                        echo "', // name optional
                    '";
                        // line 93
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "category"), "js"), "html", null, true);
                        echo "', // category optional
                    '";
                        // line 94
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "price"), "js"), "html", null, true);
                        echo "', // price required
                    '";
                        // line 95
                        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "quantity"), "js"), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                echo "._trackTrans']);

    ";
            }
            // line 103
            echo "    
    ";
            // line 104
            if ($this->getAttribute($this->getContext($context, "google_analytics"), "hasEventQueue")) {
                // line 105
                echo "        AntiMattr.GoogleAnalytics.onGatLoad(function() {
        ";
                // line 106
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "google_analytics"), "eventQueue"));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 107
                    echo "            AntiMattr.GoogleAnalytics.notifyEvent('";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "tracker"), "name"), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "category"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "action"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "label"), "html", null, true);
                    echo "','";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "event"), "value"), "html", null, true);
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
        echo $this->getAttribute($this->getContext($context, "google_analytics"), "sourceHttps");
        echo "' : '";
        echo $this->getAttribute($this->getContext($context, "google_analytics"), "sourceHttp");
        echo "') + '";
        echo $this->getAttribute($this->getContext($context, "google_analytics"), "sourceEndpoint");
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
