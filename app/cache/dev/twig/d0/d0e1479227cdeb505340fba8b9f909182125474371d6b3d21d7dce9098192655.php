<?php

/* PrestaShopBundle:Admin/Security:compromised.html.twig */
class __TwigTemplate_6dea3493d6ccb6a2b6307083b6a222cc64c1d57f01e2772426f804b5f0791a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("::base.html.twig", "PrestaShopBundle:Admin/Security:compromised.html.twig", 25);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6affdb46fd7c33d41e4335a675b9c871b5cbe87bc7c6c83826e91b788948dc0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6affdb46fd7c33d41e4335a675b9c871b5cbe87bc7c6c83826e91b788948dc0b->enter($__internal_6affdb46fd7c33d41e4335a675b9c871b5cbe87bc7c6c83826e91b788948dc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Security:compromised.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6affdb46fd7c33d41e4335a675b9c871b5cbe87bc7c6c83826e91b788948dc0b->leave($__internal_6affdb46fd7c33d41e4335a675b9c871b5cbe87bc7c6c83826e91b788948dc0b_prof);

    }

    // line 27
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2297606304bc5b52bc4c35d11d899d2d173b1264d784d249ee1d319b934b93a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2297606304bc5b52bc4c35d11d899d2d173b1264d784d249ee1d319b934b93a->enter($__internal_d2297606304bc5b52bc4c35d11d899d2d173b1264d784d249ee1d319b934b93a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 28
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/public/theme.css"), "html", null, true);
        echo "\" />
  <style>
    .fake-button {
      height: 40px;
      line-height: 30px;
    }

    #csrf-white-container div:first-child {
      background: white;
      padding: 50px;
    }

    #security-compromised-page h1 {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
";
        
        $__internal_d2297606304bc5b52bc4c35d11d899d2d173b1264d784d249ee1d319b934b93a->leave($__internal_d2297606304bc5b52bc4c35d11d899d2d173b1264d784d249ee1d319b934b93a_prof);

    }

    // line 47
    public function block_title($context, array $blocks = array())
    {
        $__internal_67b9bef71ba6f9060e553b5571a39c332dbc4a87ef124af64853313f8773a66b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b9bef71ba6f9060e553b5571a39c332dbc4a87ef124af64853313f8773a66b->enter($__internal_67b9bef71ba6f9060e553b5571a39c332dbc4a87ef124af64853313f8773a66b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 48
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Invalid token", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
";
        
        $__internal_67b9bef71ba6f9060e553b5571a39c332dbc4a87ef124af64853313f8773a66b->leave($__internal_67b9bef71ba6f9060e553b5571a39c332dbc4a87ef124af64853313f8773a66b_prof);

    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        $__internal_10f64725ec30f0fd14d59eea7cafb92ac7a14e515960ac68ac036d0b447f2402 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f64725ec30f0fd14d59eea7cafb92ac7a14e515960ac68ac036d0b447f2402->enter($__internal_10f64725ec30f0fd14d59eea7cafb92ac7a14e515960ac68ac036d0b447f2402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 51
        echo "  <div class=\"fluid-container\" id=\"security-compromised-page\" >
      <div id=\"csrf-white-container\" class=\"row justify-content-md-center\">
        <div class=\"col-md-8\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              ";
        // line 56
        echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1]Invalid token[/1]: direct access to this link may lead to a potential security breach.", array(), "Admin.Catalog.Help"), array("[1]" => "<b>", "[/1]" => "</b>"));
        echo "
            </p>
          </div>

          <h1 class=\"text-md-center\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Do you want to display this page?", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "</h1>
          <div class=\"text-md-center\">
            <a class=\"btn btn-lg btn-outline-danger mr-3\" href=\"";
        // line 62
        echo twig_escape_filter($this->env, ($context["requestUri"] ?? $this->getContext($context, "requestUri")), "html", null, true);
        echo "\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Yes, I understand the risks", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
            <a class=\"btn btn-lg btn-primary ml-3\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getAdminLink("AdminDashboard"), "html", null, true);
        echo "\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Take me out of there!", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>
  </div>
";
        
        $__internal_10f64725ec30f0fd14d59eea7cafb92ac7a14e515960ac68ac036d0b447f2402->leave($__internal_10f64725ec30f0fd14d59eea7cafb92ac7a14e515960ac68ac036d0b447f2402_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Security:compromised.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 66,  118 => 65,  113 => 63,  109 => 62,  104 => 60,  97 => 56,  90 => 51,  84 => 50,  74 => 48,  68 => 47,  42 => 28,  36 => 27,  11 => 25,);
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
{% extends '::base.html.twig' %}

{% block stylesheets %}
  <link rel=\"stylesheet\" href=\"{{ asset('themes/new-theme/public/theme.css') }}\" />
  <style>
    .fake-button {
      height: 40px;
      line-height: 30px;
    }

    #csrf-white-container div:first-child {
      background: white;
      padding: 50px;
    }

    #security-compromised-page h1 {
      padding-top: 40px;
      padding-bottom: 40px;
    }
  </style>
{% endblock %}

{% block title %}
  {{ 'Invalid token'|trans({},'Admin.Catalog.Help' ) }}
{% endblock %}
{% block body %}
  <div class=\"fluid-container\" id=\"security-compromised-page\" >
      <div id=\"csrf-white-container\" class=\"row justify-content-md-center\">
        <div class=\"col-md-8\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              {{ '[1]Invalid token[/1]: direct access to this link may lead to a potential security breach.'|trans({},'Admin.Catalog.Help')|replace({'[1]' : '<b>', '[/1]' : '</b>'})|raw }}
            </p>
          </div>

          <h1 class=\"text-md-center\">{{ 'Do you want to display this page?'|trans({},'Admin.Catalog.Help' ) }}</h1>
          <div class=\"text-md-center\">
            <a class=\"btn btn-lg btn-outline-danger mr-3\" href=\"{{ requestUri }}\">
              {{ 'Yes, I understand the risks'|trans({},'Admin.Catalog.Help' ) }}
            </a>
            <a class=\"btn btn-lg btn-primary ml-3\" href=\"{{ getAdminLink(\"AdminDashboard\") }}\">
              {{ 'Take me out of there!'|trans({},'Admin.Catalog.Help' ) }}
            </a>
          </div>
        </div>
      </div>
  </div>
{% endblock %}
", "PrestaShopBundle:Admin/Security:compromised.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Security/compromised.html.twig");
    }
}
