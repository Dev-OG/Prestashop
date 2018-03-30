<?php

/* PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig */
class __TwigTemplate_e500781a8fa59e0dfd7f54b80e49335cb16929d54642998ab59ada0e504189b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfdf184cc6ce1ffe164b589c6f01b2207050ac8bde3723d2157fe40b46522f37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdf184cc6ce1ffe164b589c6f01b2207050ac8bde3723d2157fe40b46522f37->enter($__internal_dfdf184cc6ce1ffe164b589c6f01b2207050ac8bde3723d2157fe40b46522f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig"));

        // line 25
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "urls", array())) >= 1)) {
            // line 26
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "urls", array()));
            foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                // line 27
                echo "    ";
                if (twig_in_filter($context["module_action"], array(0 => "disable", 1 => "uninstall", 2 => "reset"))) {
                    // line 28
                    echo "      <div id=\"module-modal-confirm-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                    echo "\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                ";
                    // line 34
                    if (($context["module_action"] == "disable")) {
                        // line 35
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Disable module?", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 37
                    echo "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 38
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Uninstall module?", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 40
                    echo "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 41
                        echo "                  ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset module?", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                ";
                    }
                    // line 43
                    echo "              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body row\">
              <div class=\"col-md-12\">
                <p>
                  ";
                    // line 51
                    if (($context["module_action"] == "disable")) {
                        // line 52
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to disable %moduleName% module.", array("%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array())), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <br>
                    ";
                        // line 55
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your current settings will be saved, but the module will no longer be active.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                  ";
                    }
                    // line 57
                    echo "                  ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 58
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are about to uninstall %moduleName% module.", array("%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array())), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    ";
                        // line 60
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "confirmUninstall", array()), "html", null, true);
                        echo "
                    <br>
                    <br>
                    ";
                        // line 63
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will disable the module and delete all its files. For good.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <label>
                      <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                        echo "\"> ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional: delete module folder after uninstall.", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                    </label>
                    <br>
                    <span class=\"italic red\">
                      ";
                        // line 70
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This action cannot be undone.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    </span>
                  ";
                    }
                    // line 73
                    echo "                  ";
                    if (($context["module_action"] == "reset")) {
                        // line 74
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You're about to reset %moduleName% module.", array("%moduleName%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array())), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <br>
                    ";
                        // line 77
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will restore the defaults settings.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    <br>
                    <span class=\"italic red\">
                      ";
                        // line 80
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This action cannot be undone.", array(), "Admin.Modules.Notification"), "html", null, true);
                        echo "
                    </span>
                  ";
                    }
                    // line 83
                    echo "                </p>
              </div>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cancel", array(), "Admin.Actions"), "html", null, true);
                    echo "\" />
              ";
                    // line 88
                    if (($context["module_action"] == "disable")) {
                        // line 89
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 90
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 91
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 93
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                        echo "\"
                >
                  ";
                        // line 95
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, disable it", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 98
                    echo "              ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 99
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 100
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 101
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 103
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                        echo "\"
                >
                  ";
                        // line 105
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, uninstall it", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 108
                    echo "              ";
                    if (($context["module_action"] == "reset")) {
                        // line 109
                        echo "                <a
                  class=\"btn btn-primary uppercase module_action_modal_";
                        // line 110
                        echo twig_escape_filter($this->env, $context["module_action"], "html", null, true);
                        echo "\"
                  href=\"";
                        // line 111
                        echo twig_escape_filter($this->env, $context["module_url"], "html", null, true);
                        echo "\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"";
                        // line 113
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
                        echo "\"
                >
                  ";
                        // line 115
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, reset it", array(), "Admin.Modules.Feature"), "html", null, true);
                        echo "
                </a>
              ";
                    }
                    // line 118
                    echo "            </div>
          </div>
        </div>
      </div>
    ";
                }
                // line 123
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_dfdf184cc6ce1ffe164b589c6f01b2207050ac8bde3723d2157fe40b46522f37->leave($__internal_dfdf184cc6ce1ffe164b589c6f01b2207050ac8bde3723d2157fe40b46522f37_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 123,  239 => 118,  233 => 115,  228 => 113,  223 => 111,  219 => 110,  216 => 109,  213 => 108,  207 => 105,  202 => 103,  197 => 101,  193 => 100,  190 => 99,  187 => 98,  181 => 95,  176 => 93,  171 => 91,  167 => 90,  164 => 89,  162 => 88,  158 => 87,  152 => 83,  146 => 80,  140 => 77,  133 => 74,  130 => 73,  124 => 70,  115 => 66,  109 => 63,  103 => 60,  97 => 58,  94 => 57,  89 => 55,  82 => 52,  80 => 51,  70 => 43,  64 => 41,  61 => 40,  55 => 38,  52 => 37,  46 => 35,  44 => 34,  32 => 28,  29 => 27,  24 => 26,  22 => 25,);
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
{% if module.attributes.urls|length >= 1 %}
  {% for module_action, module_url in module.attributes.urls %}
    {% if module_action in ['disable', 'uninstall', 'reset'] %}
      <div id=\"module-modal-confirm-{{module.attributes.name}}-{{ module_action }}\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                {% if module_action == 'disable' %}
                  {{ \"Disable module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
                {% if module_action == 'uninstall' %}
                  {{ \"Uninstall module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
                {% if module_action == 'reset' %}
                  {{ \"Reset module?\"|trans({}, 'Admin.Modules.Feature') }}
                {% endif %}
              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body row\">
              <div class=\"col-md-12\">
                <p>
                  {% if module_action == 'disable' %}
                    {{ \"You are about to disable %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                    <br>
                    <br>
                    {{ \"Your current settings will be saved, but the module will no longer be active.\"|trans({}, 'Admin.Modules.Notification') }}
                  {% endif %}
                  {% if module_action == 'uninstall' %}
                    {{ \"You are about to uninstall %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                    <br>
                    {{ module.attributes.confirmUninstall }}
                    <br>
                    <br>
                    {{ \"This will disable the module and delete all its files. For good.\"|trans({}, 'Admin.Modules.Notification') }}
                    <br>
                    <label>
                      <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"{{module.attributes.name}}\"> {{ \"Optional: delete module folder after uninstall.\"|trans({}, 'Admin.Modules.Feature') }}
                    </label>
                    <br>
                    <span class=\"italic red\">
                      {{ \"This action cannot be undone.\"|trans({}, 'Admin.Modules.Notification') }}
                    </span>
                  {% endif %}
                  {% if module_action == 'reset' %}
                    {{ \"You're about to reset %moduleName% module.\"|trans({'%moduleName%': module.attributes.displayName}, 'Admin.Modules.Notification') }}
                    <br>
                    <br>
                    {{ \"This will restore the defaults settings.\"|trans({}, 'Admin.Modules.Notification') }}
                    <br>
                    <span class=\"italic red\">
                      {{ \"This action cannot be undone.\"|trans({}, 'Admin.Modules.Notification') }}
                    </span>
                  {% endif %}
                </p>
              </div>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"{{ \"Cancel\"|trans({}, 'Admin.Actions') }}\" />
              {% if module_action == 'disable' %}
                <a
                  class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\"
                  href=\"{{ module_url }}\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"{{module.attributes.name}}\"
                >
                  {{ \"Yes, disable it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
              {% if module_action == 'uninstall' %}
                <a
                  class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\"
                  href=\"{{ module_url }}\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"{{module.attributes.name}}\"
                >
                  {{ \"Yes, uninstall it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
              {% if module_action == 'reset' %}
                <a
                  class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\"
                  href=\"{{ module_url }}\"
                  data-dismiss=\"modal\"
                  data-tech-name=\"{{module.attributes.name}}\"
                >
                  {{ \"Yes, reset it\"|trans({}, 'Admin.Modules.Feature') }}
                </a>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    {% endif %}
  {% endfor %}
{% endif %}
", "PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/modal_confirm.html.twig");
    }
}
