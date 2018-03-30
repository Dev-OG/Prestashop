<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig */
class __TwigTemplate_593b3092542d5e39af45137289c1c7044bb29a7e766662270ef405b632a81179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'typeahead_product_collection_widget' => array($this, 'block_typeahead_product_collection_widget'),
            'typeahead_product_pack_collection_widget' => array($this, 'block_typeahead_product_pack_collection_widget'),
            'typeahead_customer_collection_widget' => array($this, 'block_typeahead_customer_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7964a89149b71a532fec004b04024b7eb905b99efd4104cae09cd20c78af20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7964a89149b71a532fec004b04024b7eb905b99efd4104cae09cd20c78af20a->enter($__internal_e7964a89149b71a532fec004b04024b7eb905b99efd4104cae09cd20c78af20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig"));

        // line 25
        $this->displayBlock('typeahead_product_collection_widget', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('typeahead_product_pack_collection_widget', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('typeahead_customer_collection_widget', $context, $blocks);
        
        $__internal_e7964a89149b71a532fec004b04024b7eb905b99efd4104cae09cd20c78af20a->leave($__internal_e7964a89149b71a532fec004b04024b7eb905b99efd4104cae09cd20c78af20a_prof);

    }

    // line 25
    public function block_typeahead_product_collection_widget($context, array $blocks = array())
    {
        $__internal_da199d8e6f14f4aa951afbd4c988dd1d6d49f17e44d10cf00d04eb0243770caa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da199d8e6f14f4aa951afbd4c988dd1d6d49f17e44d10cf00d04eb0243770caa->enter($__internal_da199d8e6f14f4aa951afbd4c988dd1d6d49f17e44d10cf00d04eb0243770caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_collection_widget"));

        // line 26
        echo "    <div
      class=\"autocomplete-search\"
      data-formid=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"
      data-fullname=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
      data-mappingvalue=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo "\"
      data-mappingname=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "\"
      data-remoteurl=\"";
        // line 32
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "\"
      data-limit=\"";
        // line 33
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "\"
    >
        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control search typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\">
        </div>
        <ul id=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            ";
        // line 41
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 42
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 43
                echo "                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        ";
                // line 48
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()));
                echo "
                      </div>
                      <input type=\"hidden\" name=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" />
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
        }
        // line 54
        echo "        </ul>
        <div class=\"invisible\" id=\"tplcollection-";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
          ";
        // line 56
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo "
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').on('focusout', function resetSearchBar() {
        \$('#";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead('val', '');
      });
    </script>
";
        
        $__internal_da199d8e6f14f4aa951afbd4c988dd1d6d49f17e44d10cf00d04eb0243770caa->leave($__internal_da199d8e6f14f4aa951afbd4c988dd1d6d49f17e44d10cf00d04eb0243770caa_prof);

    }

    // line 66
    public function block_typeahead_product_pack_collection_widget($context, array $blocks = array())
    {
        $__internal_5f0743767a78dc8b378e74c5d992d3b845e70c7f64be0f039b28a79b951b9f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0743767a78dc8b378e74c5d992d3b845e70c7f64be0f039b28a79b951b9f90->enter($__internal_5f0743767a78dc8b378e74c5d992d3b845e70c7f64be0f039b28a79b951b9f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_product_pack_collection_widget"));

        // line 67
        echo "    <h2 class=\"title-products ";
        echo (((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) ? ("") : ("hide"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("List of products for this pack", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</h2>
    <ul id=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list pack nostyle row\">
        ";
        // line 69
        if ((array_key_exists("collection", $context) && (twig_length_filter($this->env, ($context["collection"] ?? $this->getContext($context, "collection"))) > 0))) {
            // line 70
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["collection"] ?? $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "                <li data-product=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "image", array()), "html", null, true);
                echo "\" /> ";
                echo sprintf(($context["template_collection"] ?? $this->getContext($context, "template_collection")), $this->getAttribute($context["item"], "name", array()), $this->getAttribute($context["item"], "ref", array()), $this->getAttribute($context["item"], "quantity", array()));
                echo "
                        <input type=\"hidden\" name=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                        <input type=\"hidden\" name=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[data][]\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "quantity", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id_product_attribute", array()), "html", null, true);
                echo "\" />
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "        ";
        }
        // line 80
        echo "    </ul>

    <h2>";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "label", array()), "html", null, true);
        echo "</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead search ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">×</span>
                <input type=\"number\" id=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    ";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add", array(), "Admin.Actions"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#";
        // line 124
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('";
        // line 131
        ob_start();
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', data.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo ", data.ref, number);
                        html += '<input type=\"hidden\" name=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);
                        \$('#js_";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo " h4.title-products').removeClass('hide');

                        \$('#";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemQty').val(1);
                });

                //define source
                this['";
        // line 147
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.";
        // line 151
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                    },
                    remote: {
                        url: '";
        // line 154
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#";
        // line 166
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '";
        // line 188
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "',
                    source: this['";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
";
        
        $__internal_5f0743767a78dc8b378e74c5d992d3b845e70c7f64be0f039b28a79b951b9f90->leave($__internal_5f0743767a78dc8b378e74c5d992d3b845e70c7f64be0f039b28a79b951b9f90_prof);

    }

    // line 209
    public function block_typeahead_customer_collection_widget($context, array $blocks = array())
    {
        $__internal_581cb873011a8cdbde564cde6e2e3cef4a9517f16eba2ab02bb82357fd1f62f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_581cb873011a8cdbde564cde6e2e3cef4a9517f16eba2ab02bb82357fd1f62f7->enter($__internal_581cb873011a8cdbde564cde6e2e3cef4a9517f16eba2ab02bb82357fd1f62f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "typeahead_customer_collection_widget"));

        // line 210
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <input type=\"text\" id=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"form-control typeahead ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, ($context["placeholder"] ?? $this->getContext($context, "placeholder")), "html", null, true);
        echo "\" autocomplete=\"off\" />
    <ul id=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data\" class=\"typeahead-list product-list nostyle col-sm-12\"></ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['";
        // line 229
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.";
        // line 233
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                },
                remote: {
                    url: '";
        // line 236
        echo ($context["remote_url"] ?? $this->getContext($context, "remote_url"));
        echo "',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '";
        // line 256
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo "',
                source: this['";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.";
        // line 261
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo " +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if(";
        // line 267
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo " != 0 && \$('#";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data li').length >= ";
        echo twig_escape_filter($this->env, ($context["limit"] ?? $this->getContext($context, "limit")), "html", null, true);
        echo "){
                    return;
                }

                var value = suggestion.";
        // line 271
        echo twig_escape_filter($this->env, ($context["mapping_value"] ?? $this->getContext($context, "mapping_value")), "html", null, true);
        echo ";
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('";
        // line 277
        ob_start();
        echo ($context["template_collection"] ?? $this->getContext($context, "template_collection"));
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "', suggestion.";
        echo twig_escape_filter($this->env, ($context["mapping_name"] ?? $this->getContext($context, "mapping_name")), "html", null, true);
        echo ");
                html += '<input type=\"hidden\" name=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#";
        // line 280
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').show();
                \$('#";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
";
        
        $__internal_581cb873011a8cdbde564cde6e2e3cef4a9517f16eba2ab02bb82357fd1f62f7->leave($__internal_581cb873011a8cdbde564cde6e2e3cef4a9517f16eba2ab02bb82357fd1f62f7_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  577 => 281,  573 => 280,  568 => 278,  560 => 277,  551 => 271,  540 => 267,  531 => 261,  524 => 257,  520 => 256,  510 => 249,  494 => 236,  488 => 233,  481 => 229,  465 => 216,  458 => 212,  450 => 211,  445 => 210,  439 => 209,  426 => 202,  410 => 189,  406 => 188,  397 => 182,  378 => 166,  363 => 154,  357 => 151,  350 => 147,  343 => 143,  336 => 139,  331 => 137,  327 => 136,  320 => 132,  312 => 131,  302 => 124,  296 => 121,  287 => 115,  276 => 107,  264 => 98,  259 => 96,  251 => 91,  239 => 86,  232 => 82,  228 => 80,  225 => 79,  209 => 75,  199 => 74,  193 => 73,  185 => 71,  180 => 70,  178 => 69,  174 => 68,  167 => 67,  161 => 66,  150 => 61,  146 => 60,  139 => 56,  135 => 55,  132 => 54,  129 => 53,  118 => 50,  113 => 48,  107 => 45,  103 => 43,  98 => 42,  96 => 41,  92 => 40,  83 => 38,  77 => 35,  72 => 33,  68 => 32,  64 => 31,  60 => 30,  56 => 29,  52 => 28,  48 => 26,  42 => 25,  35 => 209,  32 => 208,  30 => 66,  27 => 65,  25 => 25,);
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
{% block typeahead_product_collection_widget %}
    <div
      class=\"autocomplete-search\"
      data-formid=\"{{ form.vars.id }}\"
      data-fullname=\"{{ form.vars.full_name }}\"
      data-mappingvalue=\"{{ mapping_value }}\"
      data-mappingname=\"{{ mapping_name }}\"
      data-remoteurl=\"{{ remote_url|raw }}\"
      data-limit=\"{{ limit }}\"
    >
        {{ form_errors(form) }}

        <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control search typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\">
        </div>
        <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list nostyle col-sm-12 product-list\">
            {% if collection is defined and collection|length > 0 %}
                {% for item in collection %}
                    <li class=\"media\">
                      <div class=\"media-left\">
                        <img class=\"media-object image\" src=\"{{ item.image }}\" />
                      </div>
                      <div class=\"media-body media-middle\">
                        {{ template_collection|format(item.name)|raw }}
                      </div>
                      <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.id }}\" />
                    </li>
                {% endfor %}
            {% endif %}
        </ul>
        <div class=\"invisible\" id=\"tplcollection-{{ form.vars.id }}\">
          {{ template_collection|raw }}
        </div>
    </div>
    <script type=\"text/javascript\">
      \$('#{{ form.vars.id }}').on('focusout', function resetSearchBar() {
        \$('#{{ form.vars.id }}').typeahead('val', '');
      });
    </script>
{% endblock %}

{% block typeahead_product_pack_collection_widget %}
    <h2 class=\"title-products {{ collection is defined and collection|length > 0 ? '' : 'hide' }}\">{{ 'List of products for this pack'|trans({}, 'Admin.Catalog.Feature') }}</h2>
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list pack nostyle row\">
        {% if collection is defined and collection|length > 0 %}
            {% for item in collection %}
                <li data-product=\"{{ item.id }}-{{ item.id_product_attribute }}\" class=\"col-xl-3 col-lg-6 mb-1\">
                    <div class=\"pack-product\">
                        <img class=\"cover\" src=\"{{ item.image }}\" /> {{ template_collection|format(item.name, item.ref, item.quantity)|raw }}
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                        <input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"{{ item.quantity }}x{{ item.id }}x{{ item.id_product_attribute }}\" />
                    </div>
                </li>
            {% endfor %}
        {% endif %}
    </ul>

    <h2>{{ form.vars.label }}</h2>

    <div class=\"row mb-2\">
        <div class=\"col-md-6\">
            <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead search {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <span class=\"input-group-addon\">×</span>
                <input type=\"number\" id=\"{{ form.vars.id }}-curPackItemQty\" class=\"form-control curPackItemQty\" min=\"1\" value=\"1\">
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"input-group\">
                <button id=\"{{ form.vars.id }}-curPackItemAdd\" class=\"btn btn-secondary btn-block\">
                    <i class=\"material-icons\">add</i>
                    {{ \"Add\"|trans({}, \"Admin.Actions\") }}
                </button>
            </div>
        </div>
        <div class=\"clearfix\"></div>

        <script>
            \$( document ).ready(function() {
                //remove collection item
                \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                    e.preventDefault();
                    var _this = \$(this);

                    modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                        onContinue: function(){
                            _this.closest('li').remove();
                            if(_this.parent().parent().length == 0){
                                \$('#js_{{ form.vars.id }} h4.title-products').addClass('hide');
                            }
                        }
                    }).show();
                });

                \$('#{{ form.vars.id }}-curPackItemAdd').click(function(e){
                    e.preventDefault();
                    if(\$(this).data('currentItem')){
                        var number = \$('#{{ form.vars.id }}-curPackItemQty').val();
                        var data = \$(this).data('currentItem');
                        var value = number + 'x' + data.id + 'x' + (data.id_product_attribute ? data.id_product_attribute : 0);

                        var html = '<li data-product=\"' + data.id + '-' + (data.id_product_attribute ? data.id_product_attribute : 0) + '\" class=\"col-xl-3 col-lg-6 mb-1\">';
                        html += '<div class=\"pack-product\">';
                        html += '<img class=\"cover\" src=\"' + data.image +'\" />';
                        html += sprintf('{% spaceless %}{{ template_collection|raw }}{% endspaceless %}', data.{{ mapping_name }}, data.ref, number);
                        html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                        html += '</div>';
                        html += '</li>';

                        \$('#{{ form.vars.id }}-data').append(html);
                        \$('#js_{{ form.vars.id }} h4.title-products').removeClass('hide');

                        \$('#{{ form.vars.id }}').val('');
                    }

                    \$(this).data('currentItem', null);
                    \$('#{{ form.vars.id }}-curPackItemQty').val(1);
                });

                //define source
                this['{{ form.vars.id }}_source'] = new Bloodhound({
                    datumTokenizer: Bloodhound.tokenizers.whitespace,
                    queryTokenizer: Bloodhound.tokenizers.whitespace,
                    identify: function(obj) {
                        return obj.{{ mapping_value }};
                    },
                    remote: {
                        url: '{{ remote_url|raw }}',
                        cache: false,
                        wildcard: '%QUERY',
                        transform: function(response){
                            var newResponse = [];

                            if(!response){
                                return newResponse;
                            }

                            //generate excludes IDs and filter results
                            var excludeIds = [];
                            \$.each(\$('#{{ form.vars.id }}-data li'), function(key, val){
                                excludeIds.push(\$(val).attr('data-product'));
                            });

                            \$.each(response, function(key, item){
                                if(excludeIds.indexOf(item.id + '-' + item.id_product_attribute) === -1){
                                    newResponse.push(item);
                                }
                            });

                            return newResponse;
                        }
                    }
                });

                //define typeahead
                \$('#{{ form.vars.id }}').typeahead({
                    limit: 20,
                    minLength: 2,
                    highlight: true,
                    hint: false
                }, {
                    display: '{{ mapping_name }}',
                    source: this['{{ form.vars.id }}_source'],
                    limit: 30,
                    templates: {
                        suggestion: function(item){
                            return '<div>' +
                                   '<table><tr>' +
                                   '<td rowspan=\"2\"><img src=\"'+ item.image +'\" style=\"width:50px; margin-right: 7px;\" /></td>' +
                                   '<td>' + item.name + '</td></tr>' +
                                   '<tr><td>REF: ' + item.ref + '</td></tr>' +
                                   '</table></div>'
                        }
                    }
                }).bind('typeahead:select', function(ev, suggestion) {
                    \$('#{{ form.vars.id }}-curPackItemAdd').data('currentItem', suggestion);
                });
            });
        </script>
    </div>
{% endblock %}

{% block typeahead_customer_collection_widget %}
    {{ form_errors(form) }}
    <input type=\"text\" id=\"{{ form.vars.id }}\" class=\"form-control typeahead {{ form.vars.id }}\" placeholder=\"{{ placeholder }}\" autocomplete=\"off\" />
    <ul id=\"{{ form.vars.id }}-data\" class=\"typeahead-list product-list nostyle col-sm-12\"></ul>
    <script>
        \$( document ).ready(function() {
            //remove collection item
            \$(document).on( 'click', '#{{ form.vars.id }}-data .delete', function(e) {
                e.preventDefault();
                var _this = \$(this);

                modalConfirmation.create(translate_javascripts['Are you sure to delete this?'], null, {
                    onContinue: function(){
                        _this.parent().parent().hide();
                        _this.parent().remove();
                    }
                }).show();
            });

            //define source
            this['{{ form.vars.id }}_source'] = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.whitespace,
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                identify: function(obj) {
                    return obj.{{ mapping_value }};
                },
                remote: {
                    url: '{{ remote_url|raw }}',
                    cache: false,
                    wildcard: '%QUERY',
                    transform: function(response){
                        if(!response){
                            return [];
                        }
                        return response;
                    }
                }
            });

            //define typeahead
            \$('#{{ form.vars.id }}').typeahead({
                limit: 200,
                minLength: 2,
                highlight: true,
                cache: false,
                hint: false,
            }, {
                display: '{{ mapping_name }}',
                source: this['{{ form.vars.id }}_source'],
                limit: 30,
                templates: {
                    suggestion: function(item){
                        return '<div>'+ item.{{ mapping_name }} +'</div>'
                    }
                }
            }).bind('typeahead:select', function(ev, suggestion) {

                //if collection length is up to limit, return
                if({{ limit }} != 0 && \$('#{{ form.vars.id }}-data li').length >= {{ limit }}){
                    return;
                }

                var value = suggestion.{{ mapping_value }};
                if (suggestion.id_product_attribute) {
                    value = value+','+suggestion.id_product_attribute;
                }

                var html = '<li class=\"media\">';
                html += sprintf('{% spaceless %}{{ template_collection|raw }}{% endspaceless %}', suggestion.{{ mapping_name }});
                html += '<input type=\"hidden\" name=\"{{ form.vars.full_name }}[data][]\" value=\"' + value + '\" />';
                html += '</li>';
                \$('#{{ form.vars.id }}-data').show();
                \$('#{{ form.vars.id }}-data').append(html);

            }).bind('typeahead:close', function(ev) {
                \$(ev.target).val('');
            });
        });
    </script>
{% endblock %}
", "PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/typeahead.html.twig");
    }
}
