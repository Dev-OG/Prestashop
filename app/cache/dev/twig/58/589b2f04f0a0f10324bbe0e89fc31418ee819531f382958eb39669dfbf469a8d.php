<?php

/* @AdvancedParameters/system_information.html.twig */
class __TwigTemplate_98f1d162dd0754370068aa80edd45268d2eeb136f9f941461f75f4dbf7902457 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@AdvancedParameters/system_information.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97cbb522ca423d0ee9164dc384d51945e5e2bb04c7d2f3ad436d5fec2bf27942 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97cbb522ca423d0ee9164dc384d51945e5e2bb04c7d2f3ad436d5fec2bf27942->enter($__internal_97cbb522ca423d0ee9164dc384d51945e5e2bb04c7d2f3ad436d5fec2bf27942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AdvancedParameters/system_information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97cbb522ca423d0ee9164dc384d51945e5e2bb04c7d2f3ad436d5fec2bf27942->leave($__internal_97cbb522ca423d0ee9164dc384d51945e5e2bb04c7d2f3ad436d5fec2bf27942_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_d387ef21179a56c1c38755c8d632ef88184a1095dc29dd1a274e0ddb1cd0d3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d387ef21179a56c1c38755c8d632ef88184a1095dc29dd1a274e0ddb1cd0d3e1->enter($__internal_d387ef21179a56c1c38755c8d632ef88184a1095dc29dd1a274e0ddb1cd0d3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Configuration information", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This information must be provided when you report an issue on our bug tracker or forum.", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        ";
        // line 41
        if ($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "notHostMode", array())) {
            // line 42
            echo "        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server information", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    ";
            // line 48
            if ( !twig_test_empty($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "uname", array()))) {
                // line 49
                echo "                        <p>
                            <strong>";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server information", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "uname", array()), "html", null, true);
                echo "
                        </p>
                    ";
            }
            // line 53
            echo "                    <p>
                        <strong>";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Server software version:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "server", array()), "version", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PHP version:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "server", array()), "php", array()), "version", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Memory limit:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "server", array()), "php", array()), "memoryLimit", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max execution time:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "server", array()), "php", array()), "maxExecutionTime", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Upload Max File size:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "server", array()), "php", array()), "maxFileSizeUpload", array()), "html", null, true);
            echo "
                    </p>
                    ";
            // line 68
            if ($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "instaWebInstalled", array())) {
                // line 69
                echo "                        <p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PageSpeed module for Apache installed (mod_instaweb)", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "</p>
                    ";
            }
            // line 71
            echo "                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Database information", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL version:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "database", array()), "version", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL server:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "database", array()), "server", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL name:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "database", array()), "name", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL user:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "database", array()), "user", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tables prefix:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "database", array()), "prefix", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 97
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL engine:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "database", array()), "engine", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MySQL driver:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "database", array()), "driver", array()), "html", null, true);
            echo "
                    </p>
                </div>
            </div>
        </div>
    </div>
    ";
        }
        // line 107
        echo "    <div class=\"col-lg-6\">
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Store information", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PrestaShop version:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "shop", array()), "version", array()), "html", null, true);
        echo "
                    </p>
                    <p>
                        <strong>";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shop URL:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "shop", array()), "url", array()), "html", null, true);
        echo "
                    </p>
                    <p>
                        <strong>";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Current theme in use:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "shop", array()), "theme", array()), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail configuration", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Mail method:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong>

                        ";
        // line 136
        if ($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "isNativePHPmail", array())) {
            // line 137
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are using the PHP mail() function.", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
                        ";
        } else {
            // line 139
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You are using your own SMTP parameters.", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</p>
                    <p>
                        <strong>";
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP server:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "smtp", array()), "server", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 144
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP username:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 145
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "smtp", array()), "user", array()))) {
                // line 146
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Defined", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "
                        ";
            } else {
                // line 148
                echo "                            <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 150
            echo "                    </p>
                    <p>
                        <strong>";
            // line 152
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP password:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 153
            if ( !twig_test_empty($this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "smtp", array()), "password", array()))) {
                // line 154
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Defined", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "
                        ";
            } else {
                // line 156
                echo "                            <span style=\"color:red;\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Not defined", array(), "Admin.Advparameters.Feature"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 158
            echo "                    </p>
                    <p>
                        <strong>";
            // line 160
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Encryption:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "smtp", array()), "encryption", array()), "html", null, true);
            echo "
                    </p>
                    <p>
                        <strong>";
            // line 163
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SMTP port:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "smtp", array()), "port", array()), "html", null, true);
            echo "
                    </p>
                    ";
        }
        // line 166
        echo "                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your information", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your web browser:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, ($context["userAgent"] ?? $this->getContext($context, "userAgent")), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card\" id=\"checkConfiguration\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> ";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Check your configuration", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Required parameters:", array(), "Admin.Advparameters.Feature"), "html", null, true);
        echo "</strong>
                    ";
        // line 191
        if (($this->getAttribute(($context["requirements"] ?? $this->getContext($context, "requirements")), "failRequired", array()) == false)) {
            // line 192
            echo "                        <span class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OK", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
                    </p>
                    ";
        } else {
            // line 195
            echo "                        <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please fix the following error(s)", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "</span>
                        </p>
                        <ul>
                            ";
            // line 198
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["requirements"] ?? $this->getContext($context, "requirements")), "testsRequired", array()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 199
                echo "                                ";
                if ((("fail" == $context["value"]) && twig_in_filter($context["key"], twig_get_array_keys_filter($this->getAttribute(($context["requirements"] ?? $this->getContext($context, "requirements")), "testsErrors", array()))))) {
                    // line 200
                    echo "                                    <li>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["requirements"] ?? $this->getContext($context, "requirements")), "testsErrors", array()), $context["key"], array(), "array"), "html", null, true);
                    echo "</li>
                                ";
                }
                // line 202
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            echo "                        </ul>
                    ";
        }
        // line 205
        echo "                    ";
        if ($this->getAttribute(($context["requirements"] ?? null), "failOptional", array(), "any", true, true)) {
            // line 206
            echo "                        <p>
                        <strong>";
            // line 207
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Optional parameters:", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "</strong>
                        ";
            // line 208
            if (($this->getAttribute(($context["requirements"] ?? $this->getContext($context, "requirements")), "failOptional", array()) == false)) {
                // line 209
                echo "                            <span class=\"text-success\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OK", array(), "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
                            </p>
                        ";
            } else {
                // line 212
                echo "                            <span class=\"text-danger\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please fix the following error(s)", array(), "Admin.Advparameters.Notification"), "html", null, true);
                echo "</span>
                            </p>
                            <ul>
                                ";
                // line 215
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["requirements"] ?? $this->getContext($context, "requirements")), "testsOptional", array()));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 216
                    echo "                                    ";
                    if ((("fail" == $context["value"]) && $this->getAttribute(($context["testsErrors"] ?? null), $context["key"], array(), "array", true, true))) {
                        // line 217
                        echo "                                        <li>";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["requirements"] ?? $this->getContext($context, "requirements")), "testsErrors", array()), $context["key"], array(), "array"), "html", null, true);
                        echo "</li>
                                    ";
                    }
                    // line 219
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 220
                echo "                            </ul>
                        ";
            }
            // line 222
            echo "                    ";
        }
        // line 223
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        // line 228
        if ($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "notHostMode", array())) {
            // line 229
            echo "    <div class=\"card\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">info_outline</i> ";
            // line 231
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of changed files", array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
        </h3>
        <div class=\"card-block\">
            <div class=\"card-text\" id=\"changedFiles\">
                <i class=\"material-icons\">loop</i> ";
            // line 235
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Checking files...", array(), "Admin.Advparameters.Notification"), "html", null, true);
            echo "
            </div>
        </div>
    </div>
";
        }
        // line 240
        if ($this->getAttribute(($context["system"] ?? $this->getContext($context, "system")), "notHostMode", array())) {
            // line 241
            echo "    <script>
        \$(document).ready(function()
        {
            var translations = {
                missing: '";
            // line 245
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Missing files", array(), "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                updated: '";
            // line 246
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated files", array(), "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                changesDetected: '";
            // line 247
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Changed/missing files have been detected.", array(), "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "',
                noChangeDetected: '";
            // line 248
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No change has been detected in your files.", array(), "Admin.Advparameters.Notification"), "js"), "html", null, true);
            echo "'
            };

            \$.ajax({
                type: 'POST',
                url: '";
            // line 253
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_system_information_check_files");
            echo "',
                data: {},
                dataType: 'json',
                success: function(json)
                {
                    var tab = {
                        'missing': translations.missing,
                        'updated': translations.updated,
                    };

                    if (json.missing.length || json.updated.length)
                        \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">'+ translations.changesDetected +'</p></div>');
                    else
                        \$('#changedFiles').html('<div class=\"alert alert-success\" role=\"alert\"><p class=\"alert-text\">'+ translations.noChangeDetected +'</p></div>');

                    \$.each(tab, function(key, lang) {
                        if (json[key].length) {
                            var html = \$('<ul>').attr('id', key+'_files');
                            \$(json[key]).each(function(key, file) {
                                html.append(\$('<li>').html(file))
                            });
                            \$('#changedFiles')
                                .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
                                .append(html);
                        }
                    });
                }
            });
        });
    </script>
";
        }
        
        $__internal_d387ef21179a56c1c38755c8d632ef88184a1095dc29dd1a274e0ddb1cd0d3e1->leave($__internal_d387ef21179a56c1c38755c8d632ef88184a1095dc29dd1a274e0ddb1cd0d3e1_prof);

    }

    public function getTemplateName()
    {
        return "@AdvancedParameters/system_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 253,  529 => 248,  525 => 247,  521 => 246,  517 => 245,  511 => 241,  509 => 240,  501 => 235,  494 => 231,  490 => 229,  488 => 228,  481 => 223,  478 => 222,  474 => 220,  468 => 219,  462 => 217,  459 => 216,  455 => 215,  448 => 212,  441 => 209,  439 => 208,  435 => 207,  432 => 206,  429 => 205,  425 => 203,  419 => 202,  413 => 200,  410 => 199,  406 => 198,  399 => 195,  392 => 192,  390 => 191,  386 => 190,  378 => 185,  365 => 177,  357 => 172,  349 => 166,  341 => 163,  333 => 160,  329 => 158,  323 => 156,  317 => 154,  315 => 153,  311 => 152,  307 => 150,  301 => 148,  295 => 146,  293 => 145,  289 => 144,  281 => 141,  275 => 139,  269 => 137,  267 => 136,  262 => 134,  254 => 129,  241 => 121,  233 => 118,  225 => 115,  217 => 110,  212 => 107,  200 => 100,  192 => 97,  184 => 94,  176 => 91,  168 => 88,  160 => 85,  152 => 82,  144 => 77,  136 => 71,  130 => 69,  128 => 68,  121 => 66,  113 => 63,  105 => 60,  97 => 57,  89 => 54,  86 => 53,  78 => 50,  75 => 49,  73 => 48,  66 => 44,  62 => 42,  60 => 41,  53 => 37,  46 => 33,  40 => 29,  34 => 28,  11 => 25,);
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
{% trans_default_domain \"Admin.Advparameters.Feature\" %}

{% block content %}
<div class=\"row\">
    <div class=\"col-lg-6\">
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> {{ 'Configuration information'|trans }}
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>{{ 'This information must be provided when you report an issue on our bug tracker or forum.'|trans }}</p>
                </div>
            </div>
        </div>
        {% if system.notHostMode %}
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> {{ 'Server information'|trans }}
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    {% if system.uname is not empty %}
                        <p>
                            <strong>{{ 'Server information'|trans }}</strong> {{ system.uname }}
                        </p>
                    {% endif %}
                    <p>
                        <strong>{{ 'Server software version:'|trans }}</strong> {{ system.server.version }}
                    </p>
                    <p>
                        <strong>{{ 'PHP version:'|trans }}</strong> {{ system.server.php.version }}
                    </p>
                    <p>
                        <strong>{{ 'Memory limit:'|trans }}</strong> {{ system.server.php.memoryLimit }}
                    </p>
                    <p>
                        <strong>{{ 'Max execution time:'|trans }}</strong> {{ system.server.php.maxExecutionTime }}
                    </p>
                    <p>
                        <strong>{{ 'Upload Max File size:'|trans }}</strong> {{ system.server.php.maxFileSizeUpload }}
                    </p>
                    {% if system.instaWebInstalled %}
                        <p>{{ 'PageSpeed module for Apache installed (mod_instaweb)'|trans }}</p>
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> {{ 'Database information'|trans({}, 'Admin.Advparameters.Feature') }}
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>{{ 'MySQL version:'|trans }}</strong> {{ system.database.version }}
                    </p>
                    <p>
                        <strong>{{ 'MySQL server:'|trans }}</strong> {{ system.database.server }}
                    </p>
                    <p>
                        <strong>{{ 'MySQL name:'|trans }}</strong> {{ system.database.name }}
                    </p>
                    <p>
                        <strong>{{ 'MySQL user:'|trans }}</strong> {{ system.database.user }}
                    </p>
                    <p>
                        <strong>{{ 'Tables prefix:'|trans }}</strong> {{ system.database.prefix }}
                    </p>
                    <p>
                        <strong>{{ 'MySQL engine:'|trans }}</strong> {{ system.database.engine }}
                    </p>
                    <p>
                        <strong>{{ 'MySQL driver:'|trans }}</strong> {{ system.database.driver }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    {% endif %}
    <div class=\"col-lg-6\">
        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> {{ 'Store information'|trans }}
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>{{ 'PrestaShop version:'|trans }}</strong> {{ system.shop.version }}
                    </p>
                    <p>
                        <strong>{{ 'Shop URL:'|trans }}</strong> {{ system.shop.url }}
                    </p>
                    <p>
                        <strong>{{ 'Current theme in use:'|trans }}</strong> {{ system.shop.theme }}
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> {{ 'Mail configuration'|trans }}
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>{{ 'Mail method:'|trans }}</strong>

                        {% if system.isNativePHPmail %}
                        {{ 'You are using the PHP mail() function.'|trans }}
                        {% else %}
                        {{ 'You are using your own SMTP parameters.'|trans }}</p>
                    <p>
                        <strong>{{ 'SMTP server:'|trans }}</strong> {{ system.smtp.server }}
                    </p>
                    <p>
                        <strong>{{ 'SMTP username:'|trans }}</strong>
                        {% if system.smtp.user is not empty %}
                            {{ 'Defined'|trans }}
                        {% else %}
                            <span style=\"color:red;\">{{ 'Not defined'|trans }}</span>
                        {% endif %}
                    </p>
                    <p>
                        <strong>{{ 'SMTP password:'|trans }}</strong>
                        {% if system.smtp.password is not empty %}
                            {{ 'Defined'|trans }}
                        {% else %}
                            <span style=\"color:red;\">{{ 'Not defined'|trans }}</span>
                        {% endif %}
                    </p>
                    <p>
                        <strong>{{ 'Encryption:'|trans }}</strong> {{ system.smtp.encryption }}
                    </p>
                    <p>
                        <strong>{{ 'SMTP port:'|trans }}</strong> {{ system.smtp.port }}
                    </p>
                    {% endif %}
                </div>
            </div>
        </div>

        <div class=\"card\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> {{ 'Your information'|trans }}
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>{{ 'Your web browser:'|trans }}</strong> {{ userAgent }}
                    </p>
                </div>
            </div>
        </div>

        <div class=\"card\" id=\"checkConfiguration\">
            <h3 class=\"card-header\">
                <i class=\"material-icons\">info_outline</i> {{ 'Check your configuration'|trans }}
            </h3>
            <div class=\"card-block\">
                <div class=\"card-text\">
                    <p>
                        <strong>{{ 'Required parameters:'|trans }}</strong>
                    {% if requirements.failRequired == false %}
                        <span class=\"text-success\">{{ 'OK'|trans({}, 'Admin.Advparameters.Notification') }}</span>
                    </p>
                    {% else %}
                        <span class=\"text-danger\">{{ 'Please fix the following error(s)'|trans({}, 'Admin.Advparameters.Notification') }}</span>
                        </p>
                        <ul>
                            {% for key, value in requirements.testsRequired %}
                                {% if 'fail' == value and key in requirements.testsErrors|keys %}
                                    <li>{{ requirements.testsErrors[key] }}</li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    {% endif %}
                    {% if requirements.failOptional is defined %}
                        <p>
                        <strong>{{ 'Optional parameters:'|trans }}</strong>
                        {% if requirements.failOptional == false %}
                            <span class=\"text-success\">{{ 'OK'|trans({}, 'Admin.Advparameters.Notification') }}</span>
                            </p>
                        {% else %}
                            <span class=\"text-danger\">{{ 'Please fix the following error(s)'|trans({}, 'Admin.Advparameters.Notification') }}</span>
                            </p>
                            <ul>
                                {% for key, value in requirements.testsOptional %}
                                    {% if 'fail' == value and testsErrors[key] is defined %}
                                        <li>{{ requirements.testsErrors[key] }}</li>
                                    {% endif %}
                                {% endfor %}
                            </ul>
                        {% endif %}
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</div>
{% if system.notHostMode %}
    <div class=\"card\">
        <h3 class=\"card-header\">
            <i class=\"material-icons\">info_outline</i> {{ 'List of changed files'|trans }}
        </h3>
        <div class=\"card-block\">
            <div class=\"card-text\" id=\"changedFiles\">
                <i class=\"material-icons\">loop</i> {{ 'Checking files...'|trans({}, 'Admin.Advparameters.Notification') }}
            </div>
        </div>
    </div>
{% endif %}
{% if system.notHostMode %}
    <script>
        \$(document).ready(function()
        {
            var translations = {
                missing: '{{ \"Missing files\"|trans({}, \"Admin.Advparameters.Notification\")|e('js') }}',
                updated: '{{ \"Updated files\"|trans({}, \"Admin.Advparameters.Notification\")|e('js') }}',
                changesDetected: '{{ \"Changed/missing files have been detected.\"|trans({}, \"Admin.Advparameters.Notification\")|e('js') }}',
                noChangeDetected: '{{ \"No change has been detected in your files.\"|trans({}, \"Admin.Advparameters.Notification\")|e('js') }}'
            };

            \$.ajax({
                type: 'POST',
                url: '{{ path(\"admin_system_information_check_files\") }}',
                data: {},
                dataType: 'json',
                success: function(json)
                {
                    var tab = {
                        'missing': translations.missing,
                        'updated': translations.updated,
                    };

                    if (json.missing.length || json.updated.length)
                        \$('#changedFiles').html('<div class=\"alert alert-warning\" role=\"alert\"><p class=\"alert-text\">'+ translations.changesDetected +'</p></div>');
                    else
                        \$('#changedFiles').html('<div class=\"alert alert-success\" role=\"alert\"><p class=\"alert-text\">'+ translations.noChangeDetected +'</p></div>');

                    \$.each(tab, function(key, lang) {
                        if (json[key].length) {
                            var html = \$('<ul>').attr('id', key+'_files');
                            \$(json[key]).each(function(key, file) {
                                html.append(\$('<li>').html(file))
                            });
                            \$('#changedFiles')
                                .append(\$('<h4>').html(lang+' ('+json[key].length+')'))
                                .append(html);
                        }
                    });
                }
            });
        });
    </script>
{% endif %}
{% endblock %}
", "@AdvancedParameters/system_information.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Configure/AdvancedParameters/system_information.html.twig");
    }
}
