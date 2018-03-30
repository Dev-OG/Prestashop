<?php

/* PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig */
class __TwigTemplate_a73a58a2fd67c632e9d92df883a0821994725eb98f918c4d22249903667e4c6f extends Twig_Template
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
        $__internal_fa84cfea797df1da23e466ef969e16b91004cd36903b76371fcf6b09ba97b27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa84cfea797df1da23e466ef969e16b91004cd36903b76371fcf6b09ba97b27d->enter($__internal_fa84cfea797df1da23e466ef969e16b91004cd36903b76371fcf6b09ba97b27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig"));

        // line 25
        $context["column"] = ((array_key_exists("column", $context)) ? (_twig_default_filter(($context["column"] ?? $this->getContext($context, "column")), "")) : (""));
        // line 26
        $context["sortOrder"] = ((array_key_exists("sortOrder", $context)) ? (_twig_default_filter(($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "")) : (""));
        // line 27
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "")) : (""));
        // line 28
        echo "
";
        // line 29
        if (($context["column"] ?? $this->getContext($context, "column"))) {
            // line 30
            echo "  ";
            ob_start();
            // line 31
            echo "    <span
      psorderby=\"";
            // line 32
            echo twig_escape_filter($this->env, ($context["column"] ?? $this->getContext($context, "column")), "html", null, true);
            echo "\"
      psorderway=\"asc\"
      class=\"icon-caret-up icon-caret ";
            // line 34
            if (((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == ($context["column"] ?? $this->getContext($context, "column"))) && (($context["sortOrder"] ?? $this->getContext($context, "sortOrder")) == "asc"))) {
                echo "-current";
            }
            echo "\"
    >
      &#9650;
    </span>
    <span
      psorderby=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["column"] ?? $this->getContext($context, "column")), "html", null, true);
            echo "\"
      psorderway=\"desc\"
      class=\"icon-caret-down icon-caret ";
            // line 41
            if (((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == ($context["column"] ?? $this->getContext($context, "column"))) && (($context["sortOrder"] ?? $this->getContext($context, "sortOrder")) == "desc"))) {
                echo "-current";
            }
            echo "\"
    >
      &#9660;
    </span>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_fa84cfea797df1da23e466ef969e16b91004cd36903b76371fcf6b09ba97b27d->leave($__internal_fa84cfea797df1da23e466ef969e16b91004cd36903b76371fcf6b09ba97b27d_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 41,  54 => 39,  44 => 34,  39 => 32,  36 => 31,  33 => 30,  31 => 29,  28 => 28,  26 => 27,  24 => 26,  22 => 25,);
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
{% set column = column|default('') %}
{% set sortOrder = sortOrder|default('') %}
{% set orderBy = orderBy|default('') %}

{% if column %}
  {% spaceless %}
    <span
      psorderby=\"{{ column }}\"
      psorderway=\"asc\"
      class=\"icon-caret-up icon-caret {% if orderBy == column and sortOrder == 'asc' %}-current{% endif %}\"
    >
      &#9650;
    </span>
    <span
      psorderby=\"{{ column }}\"
      psorderway=\"desc\"
      class=\"icon-caret-down icon-caret {% if orderBy == column and sortOrder == 'desc' %}-current{% endif %}\"
    >
      &#9660;
    </span>
  {% endspaceless %}
{% endif %}
", "PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/Include/catalog_order_carrets.html.twig");
    }
}
