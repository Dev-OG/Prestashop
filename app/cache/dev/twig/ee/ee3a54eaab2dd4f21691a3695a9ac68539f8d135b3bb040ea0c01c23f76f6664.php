<?php

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_787d63153d42c00d15e057ebf093dd11d221e6fe7130e62ec61653b7c54af8d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
            'content_header' => array($this, 'block_content_header'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 25
        return $this->loadTemplate(twig_template_from_string($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getLegacyLayout($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_legacy_controller"), "method"), ((        // line 28
array_key_exists("layoutTitle", $context)) ? (($context["layoutTitle"] ?? $this->getContext($context, "layoutTitle"))) : ("")), ((        // line 29
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (($context["layoutHeaderToolbarBtn"] ?? $this->getContext($context, "layoutHeaderToolbarBtn"))) : (array())), ((        // line 30
array_key_exists("layoutDisplayType", $context)) ? (($context["layoutDisplayType"] ?? $this->getContext($context, "layoutDisplayType"))) : ("")), ((        // line 31
array_key_exists("showContentHeader", $context)) ? (($context["showContentHeader"] ?? $this->getContext($context, "showContentHeader"))) : (true)), ((        // line 32
array_key_exists("headerTabContent", $context)) ? (($context["headerTabContent"] ?? $this->getContext($context, "headerTabContent"))) : ("")), ((        // line 33
array_key_exists("enableSidebar", $context)) ? (($context["enableSidebar"] ?? $this->getContext($context, "enableSidebar"))) : (false)), ((        // line 34
array_key_exists("help_link", $context)) ? (($context["help_link"] ?? $this->getContext($context, "help_link"))) : ("")))), "@PrestaShop/Admin/layout.html.twig", 25);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37c09aeb5a777749cd47012d18673ae0859bfc41980601b7909f17aa70e4ae35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37c09aeb5a777749cd47012d18673ae0859bfc41980601b7909f17aa70e4ae35->enter($__internal_37c09aeb5a777749cd47012d18673ae0859bfc41980601b7909f17aa70e4ae35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/layout.html.twig"));

        // line 38
        $context["ps"] = $this->loadTemplate("PrestaShopBundle:Admin:macros.html.twig", "@PrestaShop/Admin/layout.html.twig", 38);
        // line 25
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_37c09aeb5a777749cd47012d18673ae0859bfc41980601b7909f17aa70e4ae35->leave($__internal_37c09aeb5a777749cd47012d18673ae0859bfc41980601b7909f17aa70e4ae35_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83294c3882d7a8de844c1367917db81caf93f800a3fd9d81da087534a7befd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83294c3882d7a8de844c1367917db81caf93f800a3fd9d81da087534a7befd14->enter($__internal_83294c3882d7a8de844c1367917db81caf93f800a3fd9d81da087534a7befd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_83294c3882d7a8de844c1367917db81caf93f800a3fd9d81da087534a7befd14->leave($__internal_83294c3882d7a8de844c1367917db81caf93f800a3fd9d81da087534a7befd14_prof);

    }

    // line 45
    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_7ec43b4744c9e578c30e2dfee6abafc3a208c7fab6162b6d793d2bbfe3457f24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ec43b4744c9e578c30e2dfee6abafc3a208c7fab6162b6d793d2bbfe3457f24->enter($__internal_7ec43b4744c9e578c30e2dfee6abafc3a208c7fab6162b6d793d2bbfe3457f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        // line 46
        echo "    <script>
        var translate_javascripts = ";
        // line 47
        echo twig_jsonencode_filter(($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        echo ";
        var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\DataFormatterExtension')->intCast($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        echo ";
    </script>
";
        
        $__internal_7ec43b4744c9e578c30e2dfee6abafc3a208c7fab6162b6d793d2bbfe3457f24->leave($__internal_7ec43b4744c9e578c30e2dfee6abafc3a208c7fab6162b6d793d2bbfe3457f24_prof);

    }

    // line 52
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_c0ed51d3ee4dc0916d2ea47ba6233802b0deb66e3c2c7a33485b13bef37ae326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ed51d3ee4dc0916d2ea47ba6233802b0deb66e3c2c7a33485b13bef37ae326->enter($__internal_c0ed51d3ee4dc0916d2ea47ba6233802b0deb66e3c2c7a33485b13bef37ae326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 53
        echo "    ";
        // line 73
        echo "    ";
        $context["layout"] = $this;
        // line 74
        echo "
    ";
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "error"), "method")) > 0)) {
            // line 76
            echo "        ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
            echo "
    ";
        }
        // line 78
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "failure"), "method")) > 0)) {
            // line 79
            echo "        ";
            echo $context["layout"]->getalert("danger", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "failure"), "method"));
            echo "
    ";
        }
        // line 81
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peek", array(0 => "success"), "method")) > 0)) {
            // line 82
            echo "        ";
            echo $context["layout"]->getalert("success", $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
            echo "
    ";
        }
        
        $__internal_c0ed51d3ee4dc0916d2ea47ba6233802b0deb66e3c2c7a33485b13bef37ae326->leave($__internal_c0ed51d3ee4dc0916d2ea47ba6233802b0deb66e3c2c7a33485b13bef37ae326_prof);

    }

    // line 86
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_be61c2f6879dbf7129f67ddf270a7d1a0f9b3ece780026e4ee954cce0845d079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be61c2f6879dbf7129f67ddf270a7d1a0f9b3ece780026e4ee954cce0845d079->enter($__internal_be61c2f6879dbf7129f67ddf270a7d1a0f9b3ece780026e4ee954cce0845d079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        // line 87
        echo "    <nav
            id=\"right-sidebar\"
            role=\"navigation\"
            class=\"col-xs-5 col-sm-4 col-md-4 col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
    >
        <img
                src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        echo "\"
                style=\"margin-top: 10em;\" alt=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Loading...", array(), "Admin.Global"), "html", null, true);
        echo "\"
        />
    </nav>
";
        
        $__internal_be61c2f6879dbf7129f67ddf270a7d1a0f9b3ece780026e4ee954cce0845d079->leave($__internal_be61c2f6879dbf7129f67ddf270a7d1a0f9b3ece780026e4ee954cce0845d079_prof);

    }

    // line 53
    public function getalert($__type__ = null, $__flashbagContent__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "flashbagContent" => $__flashbagContent__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_23511031b6d4ad7b89863af8b57386bb14725f459d470ce0767bad33239bccdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_23511031b6d4ad7b89863af8b57386bb14725f459d470ce0767bad33239bccdf->enter($__internal_23511031b6d4ad7b89863af8b57386bb14725f459d470ce0767bad33239bccdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "alert"));

            // line 54
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, ($context["type"] ?? $this->getContext($context, "type")), "html", null, true);
            echo "\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            ";
            // line 58
            if ((twig_length_filter($this->env, ($context["flashbagContent"] ?? $this->getContext($context, "flashbagContent"))) > 1)) {
                // line 59
                echo "                <ul class=\"alert-text\">
                ";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? $this->getContext($context, "flashbagContent")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 61
                    echo "                    <li>";
                    echo $context["flashMessage"];
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "                </ul>
            ";
            } else {
                // line 65
                echo "                <div class=\"alert-text\">
                ";
                // line 66
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["flashbagContent"] ?? $this->getContext($context, "flashbagContent")));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 67
                    echo "                    <p>";
                    echo $context["flashMessage"];
                    echo "</p>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                </div>
            ";
            }
            // line 71
            echo "        </div>
    ";
            
            $__internal_23511031b6d4ad7b89863af8b57386bb14725f459d470ce0767bad33239bccdf->leave($__internal_23511031b6d4ad7b89863af8b57386bb14725f459d470ce0767bad33239bccdf_prof);

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
        return "@PrestaShop/Admin/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 71,  226 => 69,  217 => 67,  213 => 66,  210 => 65,  206 => 63,  197 => 61,  193 => 60,  190 => 59,  188 => 58,  180 => 54,  164 => 53,  153 => 94,  149 => 93,  141 => 87,  135 => 86,  124 => 82,  121 => 81,  115 => 79,  112 => 78,  106 => 76,  104 => 75,  101 => 74,  98 => 73,  96 => 53,  90 => 52,  80 => 48,  76 => 47,  73 => 46,  67 => 45,  58 => 42,  53 => 41,  47 => 40,  40 => 25,  38 => 38,  29 => 34,  28 => 33,  27 => 32,  26 => 31,  25 => 30,  24 => 29,  23 => 28,  22 => 27,  21 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends(template_from_string(
getLegacyLayout(
app.request.attributes.get('_legacy_controller'),
layoutTitle is defined ? layoutTitle : '',
layoutHeaderToolbarBtn is defined ? layoutHeaderToolbarBtn : [],
layoutDisplayType is defined ? layoutDisplayType : '',
showContentHeader is defined ? showContentHeader : true,
headerTabContent is defined ? headerTabContent : '',
enableSidebar is defined ? enableSidebar : false,
help_link is defined ? help_link : ''
)
)) %}

{% import 'PrestaShopBundle:Admin:macros.html.twig' as ps %}

{% block javascripts %}
    <script src=\"{{ asset('themes/default/js/bundle/default.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/right-sidebar.js') }}\"></script>
{% endblock %}

{% block translate_javascripts %}
    <script>
        var translate_javascripts = {{ js_translatable|json_encode()|raw }};
        var PS_ALLOW_ACCENTED_CHARS_URL = {{ 'PS_ALLOW_ACCENTED_CHARS_URL'|configuration|intCast }};
    </script>
{% endblock %}

{% block content_header %}
    {% macro alert(type, flashbagContent) %}
        <div class=\"alert alert-{{ type }}\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
                <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            {% if flashbagContent|length > 1 %}
                <ul class=\"alert-text\">
                {% for flashMessage in flashbagContent %}
                    <li>{{ flashMessage|raw }}</li>
                {% endfor %}
                </ul>
            {% else %}
                <div class=\"alert-text\">
                {% for flashMessage in flashbagContent %}
                    <p>{{ flashMessage|raw }}</p>
                {% endfor %}
                </div>
            {% endif %}
        </div>
    {% endmacro %}
    {% import _self as layout %}

    {% if app.session.flashbag.peek('error')|length() > 0 %}
        {{ layout.alert('danger', app.session.flashbag.get('error')) }}
    {% endif %}
    {% if app.session.flashbag.peek('failure')|length() > 0 %}
        {{ layout.alert('danger', app.session.flashbag.get('failure')) }}
    {% endif %}
    {% if app.session.flashbag.peek('success')|length() > 0 %}
        {{ layout.alert('success', app.session.flashbag.get('success')) }}
    {% endif %}
{% endblock %}

{% block sidebar_right %}
    <nav
            id=\"right-sidebar\"
            role=\"navigation\"
            class=\"col-xs-5 col-sm-4 col-md-4 col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
    >
        <img
                src=\"{{ asset('themes/default/img/bundle/dashboard_loading.gif') }}\"
                style=\"margin-top: 10em;\" alt=\"{{ 'Loading...'|trans({}, 'Admin.Global') }}\"
        />
    </nav>
{% endblock %}
", "@PrestaShop/Admin/layout.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/layout.html.twig");
    }
}
