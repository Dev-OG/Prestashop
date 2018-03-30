<?php

/* ::base.html.twig */
class __TwigTemplate_c04c3d87f2ff412da7922a2f59c486f1629430e452c31ec765905ab300d426e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a75d6c0e963c85ffeac8ddeb7e919cac079704031116050bc8ec6089589a51da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a75d6c0e963c85ffeac8ddeb7e919cac079704031116050bc8ec6089589a51da->enter($__internal_a75d6c0e963c85ffeac8ddeb7e919cac079704031116050bc8ec6089589a51da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 25
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 29
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 34
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_a75d6c0e963c85ffeac8ddeb7e919cac079704031116050bc8ec6089589a51da->leave($__internal_a75d6c0e963c85ffeac8ddeb7e919cac079704031116050bc8ec6089589a51da_prof);

    }

    // line 29
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa54b3aa8cf32411e757c5a97a7d87baa2c569193b0c55afe3c698779d5546b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa54b3aa8cf32411e757c5a97a7d87baa2c569193b0c55afe3c698779d5546b5->enter($__internal_fa54b3aa8cf32411e757c5a97a7d87baa2c569193b0c55afe3c698779d5546b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fa54b3aa8cf32411e757c5a97a7d87baa2c569193b0c55afe3c698779d5546b5->leave($__internal_fa54b3aa8cf32411e757c5a97a7d87baa2c569193b0c55afe3c698779d5546b5_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b5edee20df90199a70483cd9d86e9470c28e3680908fc7f832ca1b4b00942060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5edee20df90199a70483cd9d86e9470c28e3680908fc7f832ca1b4b00942060->enter($__internal_b5edee20df90199a70483cd9d86e9470c28e3680908fc7f832ca1b4b00942060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b5edee20df90199a70483cd9d86e9470c28e3680908fc7f832ca1b4b00942060->leave($__internal_b5edee20df90199a70483cd9d86e9470c28e3680908fc7f832ca1b4b00942060_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfb6bde03c4ea3d7b5368cf1dd6ce67398176d0f280a8f409fe54888540b0f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb6bde03c4ea3d7b5368cf1dd6ce67398176d0f280a8f409fe54888540b0f4e->enter($__internal_bfb6bde03c4ea3d7b5368cf1dd6ce67398176d0f280a8f409fe54888540b0f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bfb6bde03c4ea3d7b5368cf1dd6ce67398176d0f280a8f409fe54888540b0f4e->leave($__internal_bfb6bde03c4ea3d7b5368cf1dd6ce67398176d0f280a8f409fe54888540b0f4e_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_702514746d84be53c9ab9d3b097c46211961034745aa72a84fafdb665c76eb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_702514746d84be53c9ab9d3b097c46211961034745aa72a84fafdb665c76eb2e->enter($__internal_702514746d84be53c9ab9d3b097c46211961034745aa72a84fafdb665c76eb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_702514746d84be53c9ab9d3b097c46211961034745aa72a84fafdb665c76eb2e->leave($__internal_702514746d84be53c9ab9d3b097c46211961034745aa72a84fafdb665c76eb2e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  82 => 34,  71 => 30,  59 => 29,  50 => 36,  47 => 35,  45 => 34,  38 => 31,  36 => 30,  32 => 29,  26 => 25,);
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/dev/www/app/Resources/views/base.html.twig");
    }
}
