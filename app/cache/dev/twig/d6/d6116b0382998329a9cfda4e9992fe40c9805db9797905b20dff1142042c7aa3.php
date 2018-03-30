<?php

/* @PrestaShop/Admin/WebProfiler/config.html.twig */
class __TwigTemplate_6cc861ce8ec754310c70bbb65796147de0ee31c96d206711148923da5dbf81f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Collector/config.html.twig", "@PrestaShop/Admin/WebProfiler/config.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Collector/config.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_799bcc494dca8552bda6a6af63567792e04d518c410364ca9a399485a21a4f5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799bcc494dca8552bda6a6af63567792e04d518c410364ca9a399485a21a4f5b->enter($__internal_799bcc494dca8552bda6a6af63567792e04d518c410364ca9a399485a21a4f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/config.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_799bcc494dca8552bda6a6af63567792e04d518c410364ca9a399485a21a4f5b->leave($__internal_799bcc494dca8552bda6a6af63567792e04d518c410364ca9a399485a21a4f5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_aa2b6443456ec3b33bcb06b7ddc8ed8f3201e906198527e3c59fced5ed0aa355 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2b6443456ec3b33bcb06b7ddc8ed8f3201e906198527e3c59fced5ed0aa355->enter($__internal_aa2b6443456ec3b33bcb06b7ddc8ed8f3201e906198527e3c59fced5ed0aa355_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "  ";
        if (("unknown" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 5
            echo "    ";
            $context["block_status"] = "";
            // line 6
            echo "    ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 7
            echo "  ";
        } elseif (("eol" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 8
            echo "    ";
            $context["block_status"] = "red";
            // line 9
            echo "    ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 10
            echo "  ";
        } elseif (("eom" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 11
            echo "    ";
            $context["block_status"] = "yellow";
            // line 12
            echo "    ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 13
            echo "  ";
        } elseif (("dev" == $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyState", array()))) {
            // line 14
            echo "    ";
            $context["block_status"] = "yellow";
            // line 15
            echo "    ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 16
            echo "  ";
        } else {
            // line 17
            echo "    ";
            $context["block_status"] = "";
            // line 18
            echo "    ";
            $context["symfony_version_status"] = "";
            // line 19
            echo "  ";
        }
        // line 20
        echo "
  ";
        // line 21
        ob_start();
        // line 22
        echo "      <span class=\"sf-toolbar-label\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/new-theme/scss/img/glyph.png"), "html", null, true);
        echo "\" /></span>
      <span class=\"sf-toolbar-value\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
        echo "</span>
  ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 25
        echo "
  ";
        // line 26
        ob_start();
        // line 27
        echo "    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
          <b>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationname", array()), "html", null, true);
        echo "</b>
          <span>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
        echo "</span>
        </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>Profiler token</b>
        <span>
          ";
        // line 36
        if (($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))) {
            // line 37
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "</a>
          ";
        } else {
            // line 39
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "token", array()), "html", null, true);
            echo "
          ";
        }
        // line 41
        echo "        </span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>Symfony</b>
        <span>
          <a href=\"https://symfony.com/doc/";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo "/index.html\" rel=\"help\">
            Read Symfony ";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "symfonyversion", array()), "html", null, true);
        echo " Docs
          </a>
        </span>
      </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
        <b>PHP version</b>
        <span>
        ";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "phpversion", array()), "html", null, true);
        echo "
          &nbsp; <a href=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_phpinfo");
        echo "\">View phpinfo()</a>
                </span>
      </div>

      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
        <b>PHP Extensions</b>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 65
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasxdebug", array())) ? ("green") : ("red"));
        echo "\">xdebug</span>
        <span class=\"sf-toolbar-status sf-toolbar-status-";
        // line 66
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasaccelerator", array())) ? ("green") : ("red"));
        echo "\">accel</span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>PHP SAPI</b>
        <span>";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "sapiName", array()), "html", null, true);
        echo "</span>
      </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
          <b>Resources</b>
          <span>
            ";
        // line 79
        $context["appVersion"] = twig_slice($this->env, twig_join_filter(twig_split_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), ".")), 0, 2);
        // line 80
        echo "              <a href=\"http://doc.prestashop.com/display/PS";
        echo twig_escape_filter($this->env, ($context["appVersion"] ?? $this->getContext($context, "appVersion")), "html", null, true);
        echo "\" rel=\"help\">
                  Read PrestaShop ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "applicationversion", array()), "html", null, true);
        echo " Docs
              </a>
          </span>
        </div>
    </div>
  ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 87
        echo "
  ";
        // line 88
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true, "name" => "config", "status" => ($context["block_status"] ?? $this->getContext($context, "block_status")), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . ($context["symfony_version_status"] ?? $this->getContext($context, "symfony_version_status"))) . "\"")));
        echo "
";
        
        $__internal_aa2b6443456ec3b33bcb06b7ddc8ed8f3201e906198527e3c59fced5ed0aa355->leave($__internal_aa2b6443456ec3b33bcb06b7ddc8ed8f3201e906198527e3c59fced5ed0aa355_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/WebProfiler/config.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 88,  218 => 87,  209 => 81,  204 => 80,  202 => 79,  191 => 71,  183 => 66,  179 => 65,  170 => 59,  166 => 58,  153 => 48,  149 => 47,  141 => 41,  135 => 39,  127 => 37,  125 => 36,  116 => 30,  112 => 29,  108 => 27,  106 => 26,  103 => 25,  98 => 23,  93 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  79 => 17,  76 => 16,  73 => 15,  70 => 14,  67 => 13,  64 => 12,  61 => 11,  58 => 10,  55 => 9,  52 => 8,  49 => 7,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Collector/config.html.twig' %}

{% block toolbar %}
  {% if 'unknown' == collector.symfonyState %}
    {% set block_status = '' %}
    {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
  {% elseif 'eol' == collector.symfonyState %}
    {% set block_status = 'red' %}
    {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
  {% elseif 'eom' == collector.symfonyState %}
    {% set block_status = 'yellow' %}
    {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
  {% elseif 'dev' == collector.symfonyState %}
    {% set block_status = 'yellow' %}
    {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
  {% else %}
    {% set block_status = '' %}
    {% set symfony_version_status = '' %}
  {% endif %}

  {% set icon %}
      <span class=\"sf-toolbar-label\"><img src=\"{{ asset('themes/new-theme/scss/img/glyph.png') }}\" /></span>
      <span class=\"sf-toolbar-value\">{{ collector.applicationversion }}</span>
  {% endset %}

  {% set text %}
    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
          <b>{{ collector.applicationname }}</b>
          <span>{{ collector.applicationversion }}</span>
        </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>Profiler token</b>
        <span>
          {% if profiler_url %}
            <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
          {% else %}
            {{ collector.token }}
          {% endif %}
        </span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>Symfony</b>
        <span>
          <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
            Read Symfony {{ collector.symfonyversion }} Docs
          </a>
        </span>
      </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
        <b>PHP version</b>
        <span>
        {{ collector.phpversion }}
          &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
      </div>

      <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
        <b>PHP Extensions</b>
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasxdebug ? 'green' : 'red' }}\">xdebug</span>
        <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasaccelerator ? 'green' : 'red' }}\">accel</span>
      </div>

      <div class=\"sf-toolbar-info-piece\">
        <b>PHP SAPI</b>
        <span>{{ collector.sapiName }}</span>
      </div>
    </div>

    <div class=\"sf-toolbar-info-group\">
        <div class=\"sf-toolbar-info-piece\">
          <b>Resources</b>
          <span>
            {% set appVersion = collector.applicationversion|split('.')|join()[:2] %}
              <a href=\"http://doc.prestashop.com/display/PS{{ appVersion }}\" rel=\"help\">
                  Read PrestaShop {{ collector.applicationversion }} Docs
              </a>
          </span>
        </div>
    </div>
  {% endset %}

  {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right', block_attrs: 'title=\"' ~ symfony_version_status ~ '\"' }) }}
{% endblock %}
", "@PrestaShop/Admin/WebProfiler/config.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/WebProfiler/config.html.twig");
    }
}
