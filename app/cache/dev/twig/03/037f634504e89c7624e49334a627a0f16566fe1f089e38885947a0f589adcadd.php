<?php

/* PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig */
class __TwigTemplate_be0e5df29754c00cb114e4b603df6479e1d8888752c82ff90aab5433ac3a5535 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_list.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", 25);
        $this->blocks = array(
            'addon_version' => array($this, 'block_addon_version'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebe1e95b61c22b0bdda5fc1ff10f32bc3f0d1f220089d67dbd3b35f3a7d8c957 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebe1e95b61c22b0bdda5fc1ff10f32bc3f0d1f220089d67dbd3b35f3a7d8c957->enter($__internal_ebe1e95b61c22b0bdda5fc1ff10f32bc3f0d1f220089d67dbd3b35f3a7d8c957_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebe1e95b61c22b0bdda5fc1ff10f32bc3f0d1f220089d67dbd3b35f3a7d8c957->leave($__internal_ebe1e95b61c22b0bdda5fc1ff10f32bc3f0d1f220089d67dbd3b35f3a7d8c957_prof);

    }

    // line 30
    public function block_addon_version($context, array $blocks = array())
    {
        $__internal_4b04311ede23f44d4a2d14e17c39019420a08f0189b812600d3c3ec24145a0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b04311ede23f44d4a2d14e17c39019420a08f0189b812600d3c3ec24145a0a9->enter($__internal_4b04311ede23f44d4a2d14e17c39019420a08f0189b812600d3c3ec24145a0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_version"));

        // line 31
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "productType", array()) == "service")) {
            // line 32
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", array("%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
  ";
        } else {
            // line 34
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% - by %author%", array("%version%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "version", array()), "%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
  ";
        }
        
        $__internal_4b04311ede23f44d4a2d14e17c39019420a08f0189b812600d3c3ec24145a0a9->leave($__internal_4b04311ede23f44d4a2d14e17c39019420a08f0189b812600d3c3ec24145a0a9_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 34,  43 => 32,  40 => 31,  34 => 30,  11 => 25,);
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
{% extends \"PrestaShopBundle:Admin/Module/Includes:card_list.html.twig\" %}

{# Twig extension for \"Addons to update\" part in notification page #}

{# Display database version #}
{% block addon_version %}
  {% if module.attributes.productType == \"service\" %}
    {{ 'Service by %author%'|trans({'%author%' : '<b>' ~ module.attributes.author ~ '</b>'}, 'Admin.Modules.Feature')|raw }}
  {% else %}
    {{ 'v%version% - by %author%'|trans({ '%version%' : module.attributes.version, '%author%' : '<b>' ~ module.attributes.author ~ '</b>' }, 'Admin.Modules.Feature')|raw }}
  {% endif %}
{% endblock %}

", "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_manage_installed.html.twig");
    }
}
