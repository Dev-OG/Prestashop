<?php

/* PrestaShopBundle:Admin/Module/Includes:card_list.html.twig */
class __TwigTemplate_20b60ad9ee97b8944702ba2ddb09337ee8c397ba34dca3cfeb3192630226de8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'addon_version' => array($this, 'block_addon_version'),
            'addon_description' => array($this, 'block_addon_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f415d7d729fd470482cc937ce4541f6af98b39003f6baf1df090b8e39d5dfaab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f415d7d729fd470482cc937ce4541f6af98b39003f6baf1df090b8e39d5dfaab->enter($__internal_f415d7d729fd470482cc937ce4541f6af98b39003f6baf1df090b8e39d5dfaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig"));

        // line 25
        $context["isModuleActive"] = (($this->getAttribute($this->getAttribute(($context["module"] ?? null), "database", array(), "any", false, true), "active", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["module"] ?? null), "database", array(), "any", false, true), "active", array()), "0")) : ("0"));
        // line 26
        echo "
<div
  class=\"module-item module-item-list col-md-12 ";
        // line 28
        if (((($context["origin"] ?? $this->getContext($context, "origin")) == "manage") && (($context["isModuleActive"] ?? $this->getContext($context, "isModuleActive")) == "0"))) {
            echo "module-item-list-isNotActive";
        }
        echo "\"
  data-id=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "id", array()), "html", null, true);
        echo "\"
  data-name=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array()), "html", null, true);
        echo "\"
  data-scoring=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "avgRate", array()), "html", null, true);
        echo "\"
  data-logo=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "img", array()), "html", null, true);
        echo "\"
  data-author=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array()), "html", null, true);
        echo "\"
  data-version=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "version", array()), "html", null, true);
        echo "\"
  data-description=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "description", array()), "html", null, true);
        echo "\"
  data-tech-name=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
        echo "\"
  data-child-categories=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "categoryName", array()), "html", null, true);
        echo "\"
  data-categories=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "categoryParent", array()), "html", null, true);
        echo "\"
  data-type=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "productType", array()), "html", null, true);
        echo "\"
  data-price=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "price", array()), "raw", array()), "html", null, true);
        echo "\"
  data-active=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["isModuleActive"] ?? $this->getContext($context, "isModuleActive")), "html", null, true);
        echo "\"
  data-last-access=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "database", array()), "last_access_date", array()), "html", null, true);
        echo "\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-sm-12 col-md-12 col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "img", array()), "html", null, true);
        echo "\" class=\"text-md-center\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array()), "html", null, true);
        echo "\"/>
        </div>
      </div>
      <div class=\"col-md-12 col-lg-11 row\">
        <div class=\"col-sm-12 col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"";
        // line 57
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array());
        echo "\"
          >
            ";
        // line 59
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array())) {
            // line 60
            echo "              ";
            echo $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array());
            echo "

            ";
        } else {
            // line 63
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
            echo "
            ";
        }
        // line 65
        echo "            <span class=\"h5\">
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "picos", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["pico"]) {
            // line 67
            echo "                    <span class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["pico"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["pico"], "class", array()), "")) : ("")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pico"], "img", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pico"], "label", array()), "html", null, true);
            echo "\" /> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pico"], "text", array()), "html", null, true);
            echo "</span>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pico'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            </span>
          </h3>
        </div>
        <div class=\"col-sm-12 col-md-2\">
          <span class=\"text-ellipsis small-text\">
            ";
        // line 74
        $this->displayBlock('addon_version', $context, $blocks);
        // line 81
        echo "          </span>
        </div>
        <div class=\"col-sm-12 col-md-8 col-lg-7\">
          ";
        // line 84
        $this->displayBlock('addon_description', $context, $blocks);
        // line 95
        echo "        </div>
        <div class=\"col-sm-12 col-md-12 col-lg-3 text-md-right\">
          ";
        // line 97
        if ((array_key_exists("requireBulkActions", $context) && (($context["requireBulkActions"] ?? $this->getContext($context, "requireBulkActions")) == true))) {
            // line 98
            echo "            <div class=\"float-right module-checkbox-bulk-list\">
              <input type=\"checkbox\" data-name=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "displayName", array()), "html", null, true);
            echo "\" data-tech-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
            echo "\" />
            </div>
          ";
        }
        // line 102
        echo "          ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig", 102)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")))));
        // line 103
        echo "        </div>
        ";
        // line 104
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig", 104)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")), "additionalModalSuffix" => ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? $this->getContext($context, "additionalModalSuffix")), "")) : ("")))));
        // line 105
        echo "        ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig", 105)->display(array_merge($context, array("module" => ($context["module"] ?? $this->getContext($context, "module")))));
        // line 106
        echo "      </div>
    </div>
  </div>
</div>
";
        
        $__internal_f415d7d729fd470482cc937ce4541f6af98b39003f6baf1df090b8e39d5dfaab->leave($__internal_f415d7d729fd470482cc937ce4541f6af98b39003f6baf1df090b8e39d5dfaab_prof);

    }

    // line 74
    public function block_addon_version($context, array $blocks = array())
    {
        $__internal_b7babc307516dad5eab1972cfbe8ec1fd325e15a93e6d05bf63e06c369c1a43c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7babc307516dad5eab1972cfbe8ec1fd325e15a93e6d05bf63e06c369c1a43c->enter($__internal_b7babc307516dad5eab1972cfbe8ec1fd325e15a93e6d05bf63e06c369c1a43c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_version"));

        // line 75
        echo "              ";
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "productType", array()) == "service")) {
            // line 76
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", array("%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
              ";
        } else {
            // line 78
            echo "                ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% - by %author%", array("%version%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "version", array()), "%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
              ";
        }
        // line 80
        echo "            ";
        
        $__internal_b7babc307516dad5eab1972cfbe8ec1fd325e15a93e6d05bf63e06c369c1a43c->leave($__internal_b7babc307516dad5eab1972cfbe8ec1fd325e15a93e6d05bf63e06c369c1a43c_prof);

    }

    // line 84
    public function block_addon_description($context, array $blocks = array())
    {
        $__internal_03d724d11c92b33fd8d899e453f524528bb028f914aefbd1855b5e1e32371006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d724d11c92b33fd8d899e453f524528bb028f914aefbd1855b5e1e32371006->enter($__internal_03d724d11c92b33fd8d899e453f524528bb028f914aefbd1855b5e1e32371006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_description"));

        // line 85
        echo "            ";
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "description", array());
        echo "
            ";
        // line 86
        if (((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "description", array())) > 0) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "description", array())) < twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "fullDescription", array()))))) {
            // line 87
            echo "              ...
            ";
        }
        // line 89
        echo "            <span>
              ";
        // line 90
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "id", array()) != "0")) {
            // line 91
            echo "                <a class=\"module-read-more-list-btn url\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_module_cart", array("moduleId" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "id", array()))), "html", null, true);
            echo "\" data-target=\"#module-modal-read-more-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "name", array()), "html", null, true);
            echo twig_escape_filter($this->env, ((array_key_exists("additionalModalSuffix", $context)) ? (_twig_default_filter(($context["additionalModalSuffix"] ?? $this->getContext($context, "additionalModalSuffix")), "")) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Read More", array(), "Admin.Modules.Feature"), "html", null, true);
            echo "</a>
              ";
        }
        // line 93
        echo "            </span>
          ";
        
        $__internal_03d724d11c92b33fd8d899e453f524528bb028f914aefbd1855b5e1e32371006->leave($__internal_03d724d11c92b33fd8d899e453f524528bb028f914aefbd1855b5e1e32371006_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 93,  258 => 91,  256 => 90,  253 => 89,  249 => 87,  247 => 86,  242 => 85,  236 => 84,  229 => 80,  223 => 78,  217 => 76,  214 => 75,  208 => 74,  197 => 106,  194 => 105,  192 => 104,  189 => 103,  186 => 102,  178 => 99,  175 => 98,  173 => 97,  169 => 95,  167 => 84,  162 => 81,  160 => 74,  153 => 69,  138 => 67,  134 => 66,  131 => 65,  125 => 63,  118 => 60,  116 => 59,  111 => 57,  97 => 48,  88 => 42,  84 => 41,  80 => 40,  76 => 39,  72 => 38,  68 => 37,  64 => 36,  60 => 35,  56 => 34,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  36 => 29,  30 => 28,  26 => 26,  24 => 25,);
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
{% set isModuleActive = module.database.active|default('0') %}

<div
  class=\"module-item module-item-list col-md-12 {% if origin == 'manage' and isModuleActive == '0' %}module-item-list-isNotActive{% endif %}\"
  data-id=\"{{ module.attributes.id }}\"
  data-name=\"{{ module.attributes.displayName }}\"
  data-scoring=\"{{ module.attributes.avgRate }}\"
  data-logo=\"{{ module.attributes.img }}\"
  data-author=\"{{ module.attributes.author }}\"
  data-version=\"{{ module.attributes.version }}\"
  data-description=\"{{ module.attributes.description }}\"
  data-tech-name=\"{{ module.attributes.name }}\"
  data-child-categories=\"{{ module.attributes.categoryName }}\"
  data-categories=\"{{ module.attributes.categoryParent }}\"
  data-type=\"{{ module.attributes.productType }}\"
  data-price=\"{{ module.attributes.price.raw }}\"
  data-active=\"{{ isModuleActive }}\"
  data-last-access=\"{{ module.database.last_access_date }}\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-sm-12 col-md-12 col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"{{ module.attributes.img }}\" class=\"text-md-center\" alt=\"{{ module.attributes.displayName }}\"/>
        </div>
      </div>
      <div class=\"col-md-12 col-lg-11 row\">
        <div class=\"col-sm-12 col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"{{ module.attributes.displayName|raw }}\"
          >
            {% if module.attributes.displayName %}
              {{ module.attributes.displayName|raw }}

            {% else %}
              {{ module.attributes.name }}
            {% endif %}
            <span class=\"h5\">
                {% for pico in module.attributes.picos %}
                    <span class=\"{{pico.class|default('')}}\"><img src=\"{{pico.img}}\" alt=\"{{pico.label}}\" /> {{ pico.text}}</span>
                {% endfor %}
            </span>
          </h3>
        </div>
        <div class=\"col-sm-12 col-md-2\">
          <span class=\"text-ellipsis small-text\">
            {% block addon_version %}
              {% if module.attributes.productType == \"service\" %}
                {{ 'Service by %author%'|trans({'%author%' : '<b>' ~ module.attributes.author ~ '</b>'}, 'Admin.Modules.Feature')|raw }}
              {% else %}
                {{ 'v%version% - by %author%'|trans({ '%version%' : module.attributes.version, '%author%' : '<b>' ~ module.attributes.author ~ '</b>' }, 'Admin.Modules.Feature')|raw }}
              {% endif %}
            {% endblock %}
          </span>
        </div>
        <div class=\"col-sm-12 col-md-8 col-lg-7\">
          {% block addon_description %}
            {{ module.attributes.description|raw }}
            {% if module.attributes.description|length > 0 and module.attributes.description|length < module.attributes.fullDescription|length %}
              ...
            {% endif %}
            <span>
              {% if module.attributes.id != \"0\" %}
                <a class=\"module-read-more-list-btn url\" href=\"{{ path('admin_module_cart', {\"moduleId\": module.attributes.id }) }}\" data-target=\"#module-modal-read-more-{{module.attributes.name }}{{ additionalModalSuffix|default('') }}\">{{ 'Read More'|trans({}, 'Admin.Modules.Feature') }}</a>
              {% endif %}
            </span>
          {% endblock %}
        </div>
        <div class=\"col-sm-12 col-md-12 col-lg-3 text-md-right\">
          {% if requireBulkActions is defined and requireBulkActions == true %}
            <div class=\"float-right module-checkbox-bulk-list\">
              <input type=\"checkbox\" data-name=\"{{ module.attributes.displayName }}\" data-tech-name=\"{{module.attributes.name}}\" />
            </div>
          {% endif %}
          {% include 'PrestaShopBundle:Admin/Module/Includes:action_menu.html.twig' with { 'module': module } %}
        </div>
        {% include 'PrestaShopBundle:Admin/Module/Includes:modal_read_more.html.twig' with { 'module': module, 'additionalModalSuffix': additionalModalSuffix|default('') } %}
        {% include 'PrestaShopBundle:Admin/Module/Includes:modal_confirm.html.twig' with { 'module': module } %}
      </div>
    </div>
  </div>
</div>
", "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_list.html.twig");
    }
}
