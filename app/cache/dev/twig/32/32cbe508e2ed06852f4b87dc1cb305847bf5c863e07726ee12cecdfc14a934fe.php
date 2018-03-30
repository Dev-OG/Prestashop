<?php

/* @PrestaShop/Admin/WebProfiler/hooks_collector.html.twig */
class __TwigTemplate_629fbd81a4543ee43d7ff0715497665bdb9d8cf9a77e65903001afe8f67fff98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2fb2bc97571f250d1971bdcea84661d40c90599df61a62b71a7fddea48f7636 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2fb2bc97571f250d1971bdcea84661d40c90599df61a62b71a7fddea48f7636->enter($__internal_f2fb2bc97571f250d1971bdcea84661d40c90599df61a62b71a7fddea48f7636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2fb2bc97571f250d1971bdcea84661d40c90599df61a62b71a7fddea48f7636->leave($__internal_f2fb2bc97571f250d1971bdcea84661d40c90599df61a62b71a7fddea48f7636_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4b3d3db6bf5e29e0fb35be220daa67e84536007fb2e0f514021ac65c59ee95c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b3d3db6bf5e29e0fb35be220daa67e84536007fb2e0f514021ac65c59ee95c2->enter($__internal_4b3d3db6bf5e29e0fb35be220daa67e84536007fb2e0f514021ac65c59ee95c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "
        <span class=\"sf-toolbar-value\">Hooks (";
        // line 8
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array())), "html", null, true);
        echo ")</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">";
        // line 14
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array())), "html", null, true);
        echo " Hooks called</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
            // line 26
            echo "                            <tr><td>";
            echo twig_escape_filter($this->env, $context["hookName"], "html", null, true);
            echo "</td><td>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["hooks"]), "html", null, true);
            echo "</td></tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 28
            echo "                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['hookName'], $context['hooks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                    </tbody>
                </table>
            </div>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 35
        echo "
    ";
        // line 36
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
        echo "

";
        
        $__internal_4b3d3db6bf5e29e0fb35be220daa67e84536007fb2e0f514021ac65c59ee95c2->leave($__internal_4b3d3db6bf5e29e0fb35be220daa67e84536007fb2e0f514021ac65c59ee95c2_prof);

    }

    // line 40
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d353b1e465d989b431b8a96361fb62f3eb3ef0b87b1b5e70e3786ce19c4217dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d353b1e465d989b431b8a96361fb62f3eb3ef0b87b1b5e70e3786ce19c4217dd->enter($__internal_d353b1e465d989b431b8a96361fb62f3eb3ef0b87b1b5e70e3786ce19c4217dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 41
        echo "    ";
        // line 42
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 43
        echo twig_include($this->env, $context, "@WebProfiler/Icon/event.svg");
        echo "</span>
        <strong>Hooks</strong>
    </span>
";
        
        $__internal_d353b1e465d989b431b8a96361fb62f3eb3ef0b87b1b5e70e3786ce19c4217dd->leave($__internal_d353b1e465d989b431b8a96361fb62f3eb3ef0b87b1b5e70e3786ce19c4217dd_prof);

    }

    // line 48
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6432268091438dc96234b3484fcdf7d7f1b0d40a2bc8cbdb0b4831f8c238303f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6432268091438dc96234b3484fcdf7d7f1b0d40a2bc8cbdb0b4831f8c238303f->enter($__internal_6432268091438dc96234b3484fcdf7d7f1b0d40a2bc8cbdb0b4831f8c238303f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 49
        echo "    <h2>Hooks</h2>

    ";
        // line 51
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notCalledHooks", array()))) {
            // line 52
            echo "        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 56
            echo "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Hooks <span class=\"badge\">";
            // line 58
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array())), "html", null, true);
            echo "</span></h3>

                <div class=\"tab-content\">
                    ";
            // line 61
            echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "calledHooks", array()), true);
            echo "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Hooks <span class=\"badge\">";
            // line 66
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notCalledHooks", array())), "html", null, true);
            echo "</span></h3>
                <div class=\"tab-content\">
                    ";
            // line 68
            if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notCalledHooks", array()))) {
                // line 69
                echo "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 80
                echo "                        ";
                echo $context["helper"]->getrender_table($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "notCalledHooks", array()), false);
                echo "
                    ";
            }
            // line 82
            echo "                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_6432268091438dc96234b3484fcdf7d7f1b0d40a2bc8cbdb0b4831f8c238303f->leave($__internal_6432268091438dc96234b3484fcdf7d7f1b0d40a2bc8cbdb0b4831f8c238303f_prof);

    }

    // line 88
    public function getrender_table($__hookList__ = null, $__hookModules__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "hookList" => $__hookList__,
            "hookModules" => $__hookModules__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b1327af79db6b8bdaa85912d29e054b384ba37eab84f12766376da2b692f3623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b1327af79db6b8bdaa85912d29e054b384ba37eab84f12766376da2b692f3623->enter($__internal_b1327af79db6b8bdaa85912d29e054b384ba37eab84f12766376da2b692f3623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 89
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["hookList"] ?? $this->getContext($context, "hookList")));
            foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
                // line 90
                echo "        <h3>";
                echo twig_escape_filter($this->env, $context["hookName"], "html", null, true);
                echo "</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    ";
                // line 97
                if (($context["hookModules"] ?? $this->getContext($context, "hookModules"))) {
                    // line 98
                    echo "                        <th>Hooked modules</th>
                    ";
                }
                // line 100
                echo "                </tr>
            </thead>
            <tbody>
            ";
                // line 103
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["hooks"]);
                foreach ($context['_seq'] as $context["position"] => $context["hook"]) {
                    // line 104
                    echo "            <tr>
                <td>
                    ";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "args", array()), "html", null, true);
                    echo "
                </td>
                <td>
                    <span class=\"text-muted\">";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hook"], "location", array()), "html", null, true);
                    echo "</span>
                </td>
                ";
                    // line 111
                    if (($context["hookModules"] ?? $this->getContext($context, "hookModules"))) {
                        // line 112
                        echo "                    <td>
                        ";
                        // line 113
                        $context["modules"] = $this->getAttribute($context["hook"], "modules", array());
                        // line 114
                        echo "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
                        foreach ($context['_seq'] as $context["moduleName"] => $context["module"]) {
                            // line 115
                            echo "                            <h4><b>";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $context["moduleName"]), "html", null, true);
                            echo "</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                ";
                            // line 123
                            if ($this->getAttribute($context["module"], "callback", array(), "any", true, true)) {
                                // line 124
                                echo "                                <tr>
                                    <td>";
                                // line 125
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "callback", array()), "args", array()), "html", null, true);
                                echo "</td>
                                </tr>
                                ";
                            } else {
                                // line 128
                                echo "                                <tr>
                                    <td>";
                                // line 129
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["module"], "widget", array()), "args", array()), "html", null, true);
                                echo "</td>
                                </tr>
                                ";
                            }
                            // line 132
                            echo "                            </table>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['moduleName'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 134
                        echo "                    </td>
                ";
                    }
                    // line 136
                    echo "            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['position'], $context['hook'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 138
                echo "            </tbody>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['hookName'], $context['hooks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_b1327af79db6b8bdaa85912d29e054b384ba37eab84f12766376da2b692f3623->leave($__internal_b1327af79db6b8bdaa85912d29e054b384ba37eab84f12766376da2b692f3623_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  342 => 138,  335 => 136,  331 => 134,  324 => 132,  318 => 129,  315 => 128,  309 => 125,  306 => 124,  304 => 123,  292 => 115,  287 => 114,  285 => 113,  282 => 112,  280 => 111,  275 => 109,  269 => 106,  265 => 104,  261 => 103,  256 => 100,  252 => 98,  250 => 97,  239 => 90,  234 => 89,  218 => 88,  207 => 82,  201 => 80,  188 => 69,  186 => 68,  181 => 66,  173 => 61,  167 => 58,  163 => 56,  157 => 52,  155 => 51,  151 => 49,  145 => 48,  134 => 43,  131 => 42,  129 => 41,  123 => 40,  113 => 36,  110 => 35,  103 => 30,  96 => 28,  86 => 26,  81 => 25,  67 => 14,  63 => 12,  61 => 11,  58 => 10,  53 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/event.svg') }}
        <span class=\"sf-toolbar-value\">Hooks ({{ collector.calledHooks|length }})</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">{{ collector.calledHooks|length }} Hooks called</b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for hookName, hooks in collector.calledHooks %}
                            <tr><td>{{ hookName }}</td><td>{{ hooks|length }}</td></tr>
                        {% else %}
                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true }) }}

{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/event.svg') }}</span>
        <strong>Hooks</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Hooks</h2>

    {% if collector.notCalledHooks is empty %}
        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">Called Hooks <span class=\"badge\">{{ collector.calledHooks|length }}</span></h3>

                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledHooks, true) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">Not Called Hooks <span class=\"badge\">{{ collector.notCalledHooks|length }}</span></h3>
                <div class=\"tab-content\">
                    {% if collector.notCalledHooks is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notCalledHooks, false) }}
                    {% endif %}
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(hookList, hookModules) %}
    {% for hookName, hooks in hookList %}
        <h3>{{ hookName }}</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    {% if hookModules %}
                        <th>Hooked modules</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
            {% for position, hook in hooks %}
            <tr>
                <td>
                    {{ hook.args }}
                </td>
                <td>
                    <span class=\"text-muted\">{{ hook.location }}</span>
                </td>
                {% if hookModules %}
                    <td>
                        {% set modules = hook.modules %}
                        {% for moduleName, module in modules %}
                            <h4><b>{{ moduleName|capitalize }}</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                {% if module.callback is defined %}
                                <tr>
                                    <td>{{ module.callback.args }}</td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td>{{ module.widget.args }}</td>
                                </tr>
                                {% endif %}
                            </table>
                        {% endfor %}
                    </td>
                {% endif %}
            </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}
{% endmacro %}
", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/hooks_collector.html.twig");
    }
}
