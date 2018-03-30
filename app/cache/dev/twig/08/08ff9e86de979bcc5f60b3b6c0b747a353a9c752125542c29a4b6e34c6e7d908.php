<?php

/* PrestaShopBundle:Admin/Module:manage.html.twig */
class __TwigTemplate_e9b0d357130d158b521e6e4858a2ee5bda9731d55124636ee728088e8b03fe89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 25);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21a5e1c358812cf94099926e92ebce41d725131e399f5a7f585ef5a1cc83ab84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21a5e1c358812cf94099926e92ebce41d725131e399f5a7f585ef5a1cc83ab84->enter($__internal_21a5e1c358812cf94099926e92ebce41d725131e399f5a7f585ef5a1cc83ab84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module:manage.html.twig"));

        // line 111
        $context["js_translatable"] = twig_array_merge(array("Bulk Action - One module minimum" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You need to select at least one module to use the bulk action.", array(), "Admin.Modules.Notification"), "Bulk Action - Request not found" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action \"[1]\" is not available, impossible to perform your request.", array(), "Admin.Modules.Notification"), "Bulk Action - Request not available for module" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("The action [1] is not available for module [2]. Skipped.", array(), "Admin.Modules.Notification")),         // line 115
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21a5e1c358812cf94099926e92ebce41d725131e399f5a7f585ef5a1cc83ab84->leave($__internal_21a5e1c358812cf94099926e92ebce41d725131e399f5a7f585ef5a1cc83ab84_prof);

    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bdf9aa318eb7df73fecba42e5f60844186476541869e5935445dd85d18c3588 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bdf9aa318eb7df73fecba42e5f60844186476541869e5935445dd85d18c3588->enter($__internal_9bdf9aa318eb7df73fecba42e5f60844186476541869e5935445dd85d18c3588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 28
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/loader.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module_card.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/module/module.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9bdf9aa318eb7df73fecba42e5f60844186476541869e5935445dd85d18c3588->leave($__internal_9bdf9aa318eb7df73fecba42e5f60844186476541869e5935445dd85d18c3588_prof);

    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        $__internal_6695db333f7bf4db7cb0f941a0cd63584b568b4adaae26d10741de74599f9453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6695db333f7bf4db7cb0f941a0cd63584b568b4adaae26d10741de74599f9453->enter($__internal_6695db333f7bf4db7cb0f941a0cd63584b568b4adaae26d10741de74599f9453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 36
        echo "    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            ";
        // line 39
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 39)->display($context);
        // line 40
        echo "            ";
        // line 41
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 41)->display($context);
        // line 42
        echo "            ";
        // line 43
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 43)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 44
        echo "            ";
        // line 45
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 45)->display(array_merge($context, array("level" => ($context["level"] ?? $this->getContext($context, "level")), "errorMessage" => ($context["errorMessage"] ?? $this->getContext($context, "errorMessage")))));
        // line 46
        echo "            ";
        // line 47
        echo "            ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 47)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? $this->getContext($context, "topMenuData")))));
        // line 48
        echo "            <div class=\"module-sorting-menu\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 51
        if ((($context["level"] ?? $this->getContext($context, "level")) > twig_constant("PrestaShopBundle\\Security\\Voter\\PageVoter::LEVEL_UPDATE"))) {
            // line 52
            echo "                            <div class=\"module-sorting module-bulk-actions float-right\">
                                <select class=\"custom-select sort-component\">
                                  <option value=\"\" disabled selected>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk Actions", array(), "Admin.Global"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-uninstall\">";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Uninstall", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-disable\">";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-enable\">";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-reset\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-enable-mobile\">";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Mobile", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</option>
                                  <option value=\"bulk-disable-mobile\">";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable Mobile", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</option>
                                </select>
                            </div>
                        ";
        }
        // line 64
        echo "                        <div class=\"module-sorting module-sorting-author float-right\">
                            <select class=\"custom-select sort-component\">
                              <option value=\"\" disabled>- ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
        echo " -</option>
                              <option value=\"name\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "</option>
                              <option value=\"access-desc\" selected>";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last access", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 76
        echo "            <div class=\"module-short-list\">
                <span id=\"installed_modules\" class=\"module-search-result-wording\">";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% installed modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "modules", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Installed modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                  data-content=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These are all the modules you’ve added to your shop, either by buying it from PrestaShop Addons, or by uploading it directly.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
            ";
        // line 83
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 83)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "modules", array()), "display_type" => "list", "origin" => "manage", "id" => "all")));
        // line 84
        echo "
            <hr class=\"top-menu-separator\">

            <div class=\"module-short-list\">
                <span id=\"built-in_modules\" class=\"module-search-result-wording\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% built-in modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "native_modules", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Built-in modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                  data-content=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These modules from PrestaShop are preinstalled when you set-up your shop. They cover the basics of e-commerce and comes for free.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
            ";
        // line 94
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 94)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "native_modules", array()), "display_type" => "list", "origin" => "manage", "id" => "native")));
        // line 95
        echo "
            <hr class=\"top-menu-separator\">

            <div class=\"module-short-list\">
                <span id=\"theme_modules\" class=\"module-search-result-wording\">";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%nbModules% theme modules", array("%nbModules%" => twig_length_filter($this->env, $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "theme_bundle", array()))), "Admin.Modules.Feature"), "html", null, true);
        echo "</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Theme modules", array(), "Admin.Modules.Feature"), "html", null, true);
        echo "\"
                  data-content=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Each theme you install will come with its own set of modules. You’ll find here all the modules related to your active theme.", array(), "Admin.Modules.Help"), "html", null, true);
        echo "\">
                </span>
            </div>
            ";
        // line 105
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "PrestaShopBundle:Admin/Module:manage.html.twig", 105)->display(array_merge($context, array("modules" => $this->getAttribute(($context["modules"] ?? $this->getContext($context, "modules")), "theme_bundle", array()), "display_type" => "list", "origin" => "manage", "id" => "theme")));
        // line 106
        echo "
        </div>
    </div>
";
        
        $__internal_6695db333f7bf4db7cb0f941a0cd63584b568b4adaae26d10741de74599f9453->leave($__internal_6695db333f7bf4db7cb0f941a0cd63584b568b4adaae26d10741de74599f9453_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 106,  232 => 105,  226 => 102,  222 => 101,  217 => 99,  211 => 95,  209 => 94,  203 => 91,  199 => 90,  194 => 88,  188 => 84,  186 => 83,  180 => 80,  176 => 79,  171 => 77,  168 => 76,  158 => 68,  154 => 67,  150 => 66,  146 => 64,  139 => 60,  135 => 59,  131 => 58,  127 => 57,  123 => 56,  119 => 55,  115 => 54,  111 => 52,  109 => 51,  104 => 48,  101 => 47,  99 => 46,  96 => 45,  94 => 44,  91 => 43,  89 => 42,  86 => 41,  84 => 40,  81 => 39,  77 => 36,  71 => 35,  62 => 32,  58 => 31,  54 => 30,  50 => 29,  45 => 28,  39 => 27,  32 => 25,  30 => 115,  29 => 111,  11 => 25,);
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
{% extends '@PrestaShop/Admin/layout.html.twig' %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('themes/default/js/bundle/plugins/jquery.pstagger.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/loader.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module_card.js') }}\"></script>
    <script src=\"{{ asset('themes/default/js/bundle/module/module.js') }}\"></script>
{% endblock %}

{% block content %}
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            {# Bulk Action confirm modal #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_confirm_bulk_action.html.twig' %}
            {# PrestaTrust modal #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_confirm_prestatrust.html.twig' %}
            {# Addons connect modal with level authorization#}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_addons_connect.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# Contains toolbar-nav for module page with level authorization #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:modal_import.html.twig' with { 'level' : level, 'errorMessage' : errorMessage } %}
            {# Contains menu with Selection/Categories/Popular and Tag Search #}
            {% include 'PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig' with { 'topMenuData': topMenuData } %}
            <div class=\"module-sorting-menu\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        {% if level > constant('PrestaShopBundle\\\\Security\\\\Voter\\\\PageVoter::LEVEL_UPDATE') %}
                            <div class=\"module-sorting module-bulk-actions float-right\">
                                <select class=\"custom-select sort-component\">
                                  <option value=\"\" disabled selected>{{ 'Bulk Actions'|trans({}, 'Admin.Global') }}</option>
                                  <option value=\"bulk-uninstall\">{{ 'Uninstall'|trans({}, 'Admin.Actions') }}</option>
                                  <option value=\"bulk-disable\">{{ 'Disable'|trans({}, 'Admin.Actions') }}</option>
                                  <option value=\"bulk-enable\">{{ 'Enable'|trans({}, 'Admin.Actions') }}</option>
                                  <option value=\"bulk-reset\">{{ 'Reset'|trans({}, 'Admin.Actions') }}</option>
                                  <option value=\"bulk-enable-mobile\">{{ 'Enable Mobile'|trans({}, 'Admin.Modules.Feature') }}</option>
                                  <option value=\"bulk-disable-mobile\">{{ 'Disable Mobile'|trans({}, 'Admin.Modules.Feature') }}</option>
                                </select>
                            </div>
                        {% endif %}
                        <div class=\"module-sorting module-sorting-author float-right\">
                            <select class=\"custom-select sort-component\">
                              <option value=\"\" disabled>- {{ 'Sort by'|trans({}, 'Admin.Actions') }} -</option>
                              <option value=\"name\">{{ 'Name'|trans({}, 'Admin.Global') }}</option>
                              <option value=\"access-desc\" selected>{{ 'Last access'|trans({}, 'Admin.Modules.Feature') }}</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            {# Actual Page Content #}
            <div class=\"module-short-list\">
                <span id=\"installed_modules\" class=\"module-search-result-wording\">{{ '%nbModules% installed modules'|trans({'%nbModules%' : modules.modules|length}, 'Admin.Modules.Feature') }}</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"{{ \"Installed modules\"|trans({}, 'Admin.Modules.Feature') }}\"
                  data-content=\"{{ \"These are all the modules you’ve added to your shop, either by buying it from PrestaShop Addons, or by uploading it directly.\"|trans({}, 'Admin.Modules.Help') }}\">
                </span>
            </div>
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig' with { 'modules': modules.modules, 'display_type': 'list', 'origin': 'manage', 'id': 'all' } %}

            <hr class=\"top-menu-separator\">

            <div class=\"module-short-list\">
                <span id=\"built-in_modules\" class=\"module-search-result-wording\">{{ '%nbModules% built-in modules'|trans({'%nbModules%' : modules.native_modules|length}, 'Admin.Modules.Feature') }}</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"{{ \"Built-in modules\"|trans({}, 'Admin.Modules.Feature') }}\"
                  data-content=\"{{ \"These modules from PrestaShop are preinstalled when you set-up your shop. They cover the basics of e-commerce and comes for free.\"|trans({}, 'Admin.Modules.Help') }}\">
                </span>
            </div>
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig' with { 'modules': modules.native_modules, 'display_type': 'list', 'origin': 'manage', 'id': 'native' } %}

            <hr class=\"top-menu-separator\">

            <div class=\"module-short-list\">
                <span id=\"theme_modules\" class=\"module-search-result-wording\">{{ '%nbModules% theme modules'|trans({'%nbModules%' : modules.theme_bundle|length}, 'Admin.Modules.Feature') }}</span>
                <span class=\"help-box\" data-toggle=\"popover\"
                  data-title=\"{{ \"Theme modules\"|trans({}, 'Admin.Modules.Feature') }}\"
                  data-content=\"{{ \"Each theme you install will come with its own set of modules. You’ll find here all the modules related to your active theme.\"|trans({}, 'Admin.Modules.Help') }}\">
                </span>
            </div>
            {% include 'PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig' with { 'modules': modules.theme_bundle, 'display_type': 'list', 'origin': 'manage', 'id': 'theme' } %}

        </div>
    </div>
{% endblock %}

{% set js_translatable = {
\"Bulk Action - One module minimum\": \"You need to select at least one module to use the bulk action.\"|trans({}, 'Admin.Modules.Notification'),
\"Bulk Action - Request not found\": 'The action \"[1]\" is not available, impossible to perform your request.'|trans({}, 'Admin.Modules.Notification'),
\"Bulk Action - Request not available for module\": \"The action [1] is not available for module [2]. Skipped.\"|trans({}, 'Admin.Modules.Notification'),
}|merge(js_translatable) %}
", "PrestaShopBundle:Admin/Module:manage.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Module/manage.html.twig");
    }
}
