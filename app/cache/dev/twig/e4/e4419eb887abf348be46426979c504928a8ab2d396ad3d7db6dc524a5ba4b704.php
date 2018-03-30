<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8be45fd6fc1558c6bae6d07026d9e3722b140f073a5c19ae31845f92b79b8c43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90dd038badd28ea6fb6a7c6c3a08b00a80c0878261b16e043cf00ee2538b7875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90dd038badd28ea6fb6a7c6c3a08b00a80c0878261b16e043cf00ee2538b7875->enter($__internal_90dd038badd28ea6fb6a7c6c3a08b00a80c0878261b16e043cf00ee2538b7875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90dd038badd28ea6fb6a7c6c3a08b00a80c0878261b16e043cf00ee2538b7875->leave($__internal_90dd038badd28ea6fb6a7c6c3a08b00a80c0878261b16e043cf00ee2538b7875_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6841f910fc82f801fc5e3ff21ef62d1e1a7d70150887f43bb144b46ab42dc2b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6841f910fc82f801fc5e3ff21ef62d1e1a7d70150887f43bb144b46ab42dc2b9->enter($__internal_6841f910fc82f801fc5e3ff21ef62d1e1a7d70150887f43bb144b46ab42dc2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6841f910fc82f801fc5e3ff21ef62d1e1a7d70150887f43bb144b46ab42dc2b9->leave($__internal_6841f910fc82f801fc5e3ff21ef62d1e1a7d70150887f43bb144b46ab42dc2b9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6250e109621697bd3ddf7e015130c56de44bff17eb66db82485b68c696e53b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6250e109621697bd3ddf7e015130c56de44bff17eb66db82485b68c696e53b9->enter($__internal_a6250e109621697bd3ddf7e015130c56de44bff17eb66db82485b68c696e53b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a6250e109621697bd3ddf7e015130c56de44bff17eb66db82485b68c696e53b9->leave($__internal_a6250e109621697bd3ddf7e015130c56de44bff17eb66db82485b68c696e53b9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7bffc62fdc01b8b0ca6ffcd9742d6fa9dd11b64ebda8b9d3d5e7281cb7f0d1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bffc62fdc01b8b0ca6ffcd9742d6fa9dd11b64ebda8b9d3d5e7281cb7f0d1b2->enter($__internal_7bffc62fdc01b8b0ca6ffcd9742d6fa9dd11b64ebda8b9d3d5e7281cb7f0d1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7bffc62fdc01b8b0ca6ffcd9742d6fa9dd11b64ebda8b9d3d5e7281cb7f0d1b2->leave($__internal_7bffc62fdc01b8b0ca6ffcd9742d6fa9dd11b64ebda8b9d3d5e7281cb7f0d1b2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/dev/www/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
