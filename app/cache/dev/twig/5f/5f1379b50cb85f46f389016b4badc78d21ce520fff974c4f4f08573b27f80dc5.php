<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6d1efc42b1b7ba4d571d974f0af85d15f0f1c82c291fa20120915726bc7a87fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_d5d8b424573d68913a63c67ebbc0aecf8768d227257ad4a48f50b3845a066d87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5d8b424573d68913a63c67ebbc0aecf8768d227257ad4a48f50b3845a066d87->enter($__internal_d5d8b424573d68913a63c67ebbc0aecf8768d227257ad4a48f50b3845a066d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5d8b424573d68913a63c67ebbc0aecf8768d227257ad4a48f50b3845a066d87->leave($__internal_d5d8b424573d68913a63c67ebbc0aecf8768d227257ad4a48f50b3845a066d87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d70e056991f68aa48a33b8f0d98c06a6d0275f573c3ec5cc81b3f7e79645d15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d70e056991f68aa48a33b8f0d98c06a6d0275f573c3ec5cc81b3f7e79645d15->enter($__internal_0d70e056991f68aa48a33b8f0d98c06a6d0275f573c3ec5cc81b3f7e79645d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d70e056991f68aa48a33b8f0d98c06a6d0275f573c3ec5cc81b3f7e79645d15->leave($__internal_0d70e056991f68aa48a33b8f0d98c06a6d0275f573c3ec5cc81b3f7e79645d15_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c4e146811af4d21c51ead134700985c96c72542b599cafc7497b3e9ad8bb790b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e146811af4d21c51ead134700985c96c72542b599cafc7497b3e9ad8bb790b->enter($__internal_c4e146811af4d21c51ead134700985c96c72542b599cafc7497b3e9ad8bb790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c4e146811af4d21c51ead134700985c96c72542b599cafc7497b3e9ad8bb790b->leave($__internal_c4e146811af4d21c51ead134700985c96c72542b599cafc7497b3e9ad8bb790b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4010190f2e4fe760996d06a0b24d1e2dfb5661d1c1301723e9bb6ebeb956f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4010190f2e4fe760996d06a0b24d1e2dfb5661d1c1301723e9bb6ebeb956f7c->enter($__internal_c4010190f2e4fe760996d06a0b24d1e2dfb5661d1c1301723e9bb6ebeb956f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c4010190f2e4fe760996d06a0b24d1e2dfb5661d1c1301723e9bb6ebeb956f7c->leave($__internal_c4010190f2e4fe760996d06a0b24d1e2dfb5661d1c1301723e9bb6ebeb956f7c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/dev/www/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
