<?php

/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_e86400d971fa271e9b01b3175ad73eda1a8a1c7052287f30e42ae79c18da810e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 25);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7127859dbe2119340f8cb2b16c32e19067662915a737a32c289b3c3ac0c56f57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7127859dbe2119340f8cb2b16c32e19067662915a737a32c289b3c3ac0c56f57->enter($__internal_7127859dbe2119340f8cb2b16c32e19067662915a737a32c289b3c3ac0c56f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/catalog.html.twig"));

        // line 26
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["categories"] ?? $this->getContext($context, "categories")), array(0 => "PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig"));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7127859dbe2119340f8cb2b16c32e19067662915a737a32c289b3c3ac0c56f57->leave($__internal_7127859dbe2119340f8cb2b16c32e19067662915a737a32c289b3c3ac0c56f57_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5dd25215a550f5fa756666548d836471e65bf872b0f502a4359259020b4cf09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5dd25215a550f5fa756666548d836471e65bf872b0f502a4359259020b4cf09->enter($__internal_a5dd25215a550f5fa756666548d836471e65bf872b0f502a4359259020b4cf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
  <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/product/catalog.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/pagination.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("themes/default/js/bundle/category-tree.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/jquery/ui/jquery.ui.sortable.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a5dd25215a550f5fa756666548d836471e65bf872b0f502a4359259020b4cf09->leave($__internal_a5dd25215a550f5fa756666548d836471e65bf872b0f502a4359259020b4cf09_prof);

    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        $__internal_47d6c8d604bb709e6785c13c422e241d0d0ec6e9110a54691e101d2f19328246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d6c8d604bb709e6785c13c422e241d0d0ec6e9110a54691e101d2f19328246->enter($__internal_47d6c8d604bb709e6785c13c422e241d0d0ec6e9110a54691e101d2f19328246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 37
        echo "  <div class=\"products-catalog\">

    ";
        // line 39
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", array("kpi_controller" => "AdminProductsController"));
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 43
        if (twig_length_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")))) {
            // line 44
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              ";
            // line 51
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? $this->getContext($context, "permission_error")), "html", null, true);
            echo "
            </p>
          </div>
        </div>
      </div>
      ";
        }
        // line 57
        echo "
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"float-right\">
            ";
        // line 61
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("displayDashboardToolbarIcons", array());
        echo "
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_export_action");
        echo "\">
              ";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), 1 => "cloud_upload"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["import_link"] ?? $this->getContext($context, "import_link")), "html", null, true);
        echo "\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), 1 => "cloud_download"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", array(), "Admin.Actions"), 1 => "code"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), 1 => "storage"), "method"), "html", null, true);
        echo "
            </a>
          </div>
        </div>
      </div>

      <div id=\"catalog-actions\" class=\"row\">
        <div class=\"col-md-1\">
          <label class=\"form-check-label\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              id=\"bulk_action_select_all\"
              onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              value=\"\"
            >
            ";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select all", array(), "Admin.Actions"), "html", null, true);
        echo "
          </label>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_bulk_action", array("action" => "activate_all"));
        echo "\"
          massediturl=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_mass_edit_action", array("action" => "sort"));
        echo "\"
          redirecturl=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
          redirecturlnextpage=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "offset" => (($context["offset"] ?? $this->getContext($context, "offset")) + ($context["limit"] ?? $this->getContext($context, "limit"))), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        >
          ";
        // line 99
        $context["buttons_action"] = array(0 => array("onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", array(), "Admin.Actions")), 1 => array("onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", array(), "Admin.Actions")));
        // line 110
        echo "
          ";
        // line 111
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", array(), "Admin.Actions"))));
        // line 120
        echo "

          ";
        // line 122
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? $this->getContext($context, "buttons_action")), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", array(), "Admin.Actions"))));
        // line 131
        echo "
          ";
        // line 132
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 132)->display(array_merge($context, array("div_style" => "btn-group dropup bulk-catalog", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", array(), "Admin.Global"), "buttonType" => "outline-secondary", "menu_icon" => "icon-caret-up", "items" =>         // line 139
($context["buttons_action"] ?? $this->getContext($context, "buttons_action")))));
        // line 141
        echo "        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"col-md-3 dropdown dropdown-clickable\">
          <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            ";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter by categories", array(), "Admin.Actions"), "html", null, true);
        echo "
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              ";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Expand", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              ";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Collapse", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              ";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Unselect", array(), "Admin.Actions"), "html", null, true);
        echo "
            </a>
            <hr>
            ";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["categories"] ?? $this->getContext($context, "categories")), 'widget');
        echo "
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => ($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" => ($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        echo "\"
        orderingurl=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? $this->getContext($context, "limit")), "orderBy" => "name", "sortOrder" => "asc")), "html", null, true);
        echo "\"
        newproducturl=\"";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_new");
        echo "\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"";
        // line 199
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter(($context["filter_category"] ?? $this->getContext($context, "filter_category")), "")) : ("")), "html", null, true);
        echo "\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table product mt-3\"
              redirecturl=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" =>         // line 208
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 209
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 210
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 211
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")))), "html", null, true);
        // line 212
        echo "\"
            >
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th class=\"small-text\" style=\"width: 8%\">
                    ";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ID", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 218
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 218)->display(array_merge($context, array("column" => "id_product")));
        // line 221
        echo "                  </th>
                  <th class=\"small-text\">
                    ";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Image", array(), "Admin.Global"), "html", null, true);
        echo "
                  </th>
                  <th class=\"small-text\">
                    ";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Name", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 227
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 227)->display(array_merge($context, array("column" => "name")));
        // line 230
        echo "                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    ";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reference", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 233
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 233)->display(array_merge($context, array("column" => "reference")));
        // line 236
        echo "                  </th>
                  <th class=\"small-text\">
                    ";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 239
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 239)->display(array_merge($context, array("column" => "name_category")));
        // line 242
        echo "                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    ";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price (tax excl.)", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
                    ";
        // line 245
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 245)->display(array_merge($context, array("column" => "price")));
        // line 248
        echo "                  </th>

                  ";
        // line 250
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 251
            echo "                  <th class=\"small-text\" style=\"width: 9%\">
                    ";
            // line 252
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", array(), "Admin.Catalog.Feature"), "html", null, true);
            echo "
                    ";
            // line 253
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 253)->display(array_merge($context, array("column" => "sav_quantity")));
            // line 256
            echo "                  </th>
                  ";
        } else {
            // line 258
            echo "                    <th></th>
                  ";
        }
        // line 260
        echo "
                  <th class=\"small-text\">
                    ";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status", array(), "Admin.Global"), "html", null, true);
        echo "
                    ";
        // line 263
        $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 263)->display(array_merge($context, array("column" => "active")));
        // line 266
        echo "                  </th>
                  ";
        // line 267
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 268
            echo "                    <th class=\"small-text\">
                      ";
            // line 269
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Position", array(), "Admin.Global"), "html", null, true);
            echo "
                      ";
            // line 270
            $this->loadTemplate("PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 270)->display(array_merge($context, array("column" => "position")));
            // line 273
            echo "                    </th>
                  ";
        }
        // line 275
        echo "                  <th class=\"small-text\" style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    ";
        // line 279
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 279)->display(array_merge($context, array("input_name" => "filter_column_id_product", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 285
($context["filter_column_id_product"] ?? $this->getContext($context, "filter_column_id_product")))));
        // line 287
        echo "                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search name", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name\"
                      value=\"";
        // line 295
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? $this->getContext($context, "filter_column_name")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search ref.", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_reference\"
                      value=\"";
        // line 304
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? $this->getContext($context, "filter_column_reference")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search category", array(), "Admin.Catalog.Help"), "html", null, true);
        echo "\"
                      name=\"filter_column_name_category\"
                      value=\"";
        // line 313
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? $this->getContext($context, "filter_column_name_category")), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    ";
        // line 317
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 317)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 323
($context["filter_column_price"] ?? $this->getContext($context, "filter_column_price")))));
        // line 325
        echo "                  </th>

                  ";
        // line 327
        if ($this->env->getExtension('PrestaShopBundle\Twig\LayoutExtension')->getConfiguration("PS_STOCK_MANAGEMENT")) {
            // line 328
            echo "                  <th>
                    ";
            // line 329
            $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 329)->display(array_merge($context, array("input_name" => "filter_column_sav_quantity", "min" => "-1000000", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>             // line 335
($context["filter_column_sav_quantity"] ?? $this->getContext($context, "filter_column_sav_quantity")))));
            // line 337
            echo "                  </th>
                  ";
        } else {
            // line 339
            echo "                    <th></th>
                  ";
        }
        // line 341
        echo "
                  <th id=\"product_filter_column_active\">
                    <div class=\"form-select\">
                      <select class=\"custom-select\"  name=\"filter_column_active\">
                        <option value=\"\"></option>
                        <option value=\"1\" ";
        // line 346
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                        <option value=\"0\" ";
        // line 347
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? $this->getContext($context, "filter_column_active")) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
                      </select>
                    </div>
                  </th>
                  ";
        // line 351
        if ((($context["has_category_filter"] ?? $this->getContext($context, "has_category_filter")) == true)) {
            // line 352
            echo "                    <th>
                      ";
            // line 353
            if ( !($context["activate_drag_and_drop"] ?? $this->getContext($context, "activate_drag_and_drop"))) {
                // line 354
                echo "                        <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reorder", array(), "Admin.Actions"), "html", null, true);
                echo "\" onclick=\"productOrderPrioritiesTable();\" />
                        ";
            } else {
                // line 356
                echo "                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save & refresh", array(), "Admin.Actions");
                echo "\" />
                    ";
            }
            // line 358
            echo "
                    </th>
                  ";
        }
        // line 361
        echo "                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Filter", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">search</i>
                      ";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Apply", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-link\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "\"
                    >
                      <i class=\"material-icons\">clear</i>
                      ";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Reset", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                  </th>
                </tr>
              </thead>
              ";
        // line 384
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle\\Controller\\Admin\\ProductController::listAction", array("limit" =>         // line 385
($context["limit"] ?? $this->getContext($context, "limit")), "offset" =>         // line 386
($context["offset"] ?? $this->getContext($context, "offset")), "orderBy" =>         // line 387
($context["orderBy"] ?? $this->getContext($context, "orderBy")), "sortOrder" =>         // line 388
($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "products" =>         // line 389
($context["products"] ?? $this->getContext($context, "products")), "last_sql" =>         // line 390
($context["last_sql"] ?? $this->getContext($context, "last_sql")))));
        // line 391
        echo "
            </table>
          </div>
        </div>

        ";
        // line 396
        if ((($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")) > 20)) {
            // line 397
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 399
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 400
($context["limit"] ?? $this->getContext($context, "limit")), "offset" => ($context["offset"] ?? $this->getContext($context, "offset")), "total" => ($context["product_count_filtered"] ?? $this->getContext($context, "product_count_filtered")), "caller_parameters" => ($context["pagination_parameters"] ?? $this->getContext($context, "pagination_parameters")), "limit_choices" => ($context["pagination_limit_choices"] ?? $this->getContext($context, "pagination_limit_choices")))));
            // line 401
            echo "
            </div>
          </div>
        ";
        }
        // line 405
        echo "
      </form>

    </div>
  </div>

  ";
        // line 412
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 412, "1846941269")->display(array_merge($context, array("id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 431
        echo "

  ";
        // line 434
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 434, "973808837")->display(array_merge($context, array("id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 453
        echo "

  ";
        // line 456
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 456, "592002843")->display(array_merge($context, array("id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 475
        echo "

  ";
        // line 478
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 478, "1141423780")->display(array_merge($context, array("id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 497
        echo "

  ";
        // line 500
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 500, "2085306977")->display(array_merge($context, array("id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", array(), "Admin.Catalog.Feature"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", array(), "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg")))));
        // line 517
        echo "
  ";
        // line 518
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 518, "530722834")->display(array_merge($context, array("id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg")))));
        // line 538
        echo "
";
        
        $__internal_47d6c8d604bb709e6785c13c422e241d0d0ec6e9110a54691e101d2f19328246->leave($__internal_47d6c8d604bb709e6785c13c422e241d0d0ec6e9110a54691e101d2f19328246_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  656 => 538,  654 => 518,  651 => 517,  648 => 500,  644 => 497,  641 => 478,  637 => 475,  634 => 456,  630 => 453,  627 => 434,  623 => 431,  620 => 412,  612 => 405,  606 => 401,  604 => 400,  603 => 399,  599 => 397,  597 => 396,  590 => 391,  588 => 390,  587 => 389,  586 => 388,  585 => 387,  584 => 386,  583 => 385,  582 => 384,  574 => 379,  568 => 376,  558 => 369,  552 => 366,  545 => 361,  540 => 358,  534 => 356,  528 => 354,  526 => 353,  523 => 352,  521 => 351,  512 => 347,  506 => 346,  499 => 341,  495 => 339,  491 => 337,  489 => 335,  488 => 329,  485 => 328,  483 => 327,  479 => 325,  477 => 323,  476 => 317,  469 => 313,  464 => 311,  454 => 304,  449 => 302,  439 => 295,  434 => 293,  426 => 287,  424 => 285,  423 => 279,  417 => 275,  413 => 273,  411 => 270,  407 => 269,  404 => 268,  402 => 267,  399 => 266,  397 => 263,  393 => 262,  389 => 260,  385 => 258,  381 => 256,  379 => 253,  375 => 252,  372 => 251,  370 => 250,  366 => 248,  364 => 245,  360 => 244,  356 => 242,  354 => 239,  350 => 238,  346 => 236,  344 => 233,  340 => 232,  336 => 230,  334 => 227,  330 => 226,  324 => 223,  320 => 221,  318 => 218,  314 => 217,  307 => 212,  305 => 211,  304 => 210,  303 => 209,  302 => 208,  301 => 207,  290 => 199,  283 => 195,  279 => 194,  275 => 193,  263 => 184,  257 => 181,  244 => 171,  231 => 161,  217 => 150,  206 => 141,  204 => 139,  203 => 132,  200 => 131,  198 => 122,  194 => 120,  192 => 111,  189 => 110,  187 => 99,  182 => 97,  178 => 96,  174 => 95,  170 => 94,  161 => 88,  142 => 72,  136 => 69,  130 => 66,  126 => 65,  121 => 63,  117 => 62,  113 => 61,  107 => 57,  98 => 51,  89 => 44,  87 => 43,  80 => 39,  76 => 37,  70 => 36,  61 => 33,  57 => 32,  53 => 31,  49 => 30,  44 => 29,  38 => 28,  31 => 25,  29 => 26,  11 => 25,);
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
{% form_theme categories 'PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"float-right\">
            {{ renderhook('displayDashboardToolbarIcons', {}) }}
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div id=\"catalog-actions\" class=\"row\">
        <div class=\"col-md-1\">
          <label class=\"form-check-label\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              id=\"bulk_action_select_all\"
              onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              value=\"\"
            >
            {{ \"Select all\"|trans({}, 'Admin.Actions') }}
          </label>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
            \"onclick\": \"bulkProductAction(this, 'activate_all');\",
            \"icon\": \"radio_button_checked\",
            \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          }, {
            \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
            \"icon\": \"radio_button_unchecked\",
            \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'delete_all');\",
            \"icon\": \"delete\",
            \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"col-md-3 dropdown dropdown-clickable\">
          <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table product mt-3\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th class=\"small-text\" style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th class=\"small-text\">
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th class=\"small-text\">
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th class=\"small-text\" style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <div class=\"form-select\">
                      <select class=\"custom-select\"  name=\"filter_column_active\">
                        <option value=\"\"></option>
                        <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                        <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                      </select>
                    </div>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-link\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_e86400d971fa271e9b01b3175ad73eda1a8a1c7052287f30e42ae79c18da810e_1846941269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 412
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 412);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed8328c9b9ff094879f4c2889a027ba7b198bdef233dc8a21212359d78035f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8328c9b9ff094879f4c2889a027ba7b198bdef233dc8a21212359d78035f77->enter($__internal_ed8328c9b9ff094879f4c2889a027ba7b198bdef233dc8a21212359d78035f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed8328c9b9ff094879f4c2889a027ba7b198bdef233dc8a21212359d78035f77->leave($__internal_ed8328c9b9ff094879f4c2889a027ba7b198bdef233dc8a21212359d78035f77_prof);

    }

    // line 422
    public function block_content($context, array $blocks = array())
    {
        $__internal_c4ac8219e5b56ab9e15dc678fcc32961f155ee6f4b1954fba5d2c5b6ce0cf22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ac8219e5b56ab9e15dc678fcc32961f155ee6f4b1954fba5d2c5b6ce0cf22a->enter($__internal_c4ac8219e5b56ab9e15dc678fcc32961f155ee6f4b1954fba5d2c5b6ce0cf22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 423
        echo "      <div class=\"modal-body\">
        ";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplication failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_c4ac8219e5b56ab9e15dc678fcc32961f155ee6f4b1954fba5d2c5b6ce0cf22a->leave($__internal_c4ac8219e5b56ab9e15dc678fcc32961f155ee6f4b1954fba5d2c5b6ce0cf22a_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1277 => 426,  1272 => 424,  1269 => 423,  1263 => 422,  1240 => 412,  656 => 538,  654 => 518,  651 => 517,  648 => 500,  644 => 497,  641 => 478,  637 => 475,  634 => 456,  630 => 453,  627 => 434,  623 => 431,  620 => 412,  612 => 405,  606 => 401,  604 => 400,  603 => 399,  599 => 397,  597 => 396,  590 => 391,  588 => 390,  587 => 389,  586 => 388,  585 => 387,  584 => 386,  583 => 385,  582 => 384,  574 => 379,  568 => 376,  558 => 369,  552 => 366,  545 => 361,  540 => 358,  534 => 356,  528 => 354,  526 => 353,  523 => 352,  521 => 351,  512 => 347,  506 => 346,  499 => 341,  495 => 339,  491 => 337,  489 => 335,  488 => 329,  485 => 328,  483 => 327,  479 => 325,  477 => 323,  476 => 317,  469 => 313,  464 => 311,  454 => 304,  449 => 302,  439 => 295,  434 => 293,  426 => 287,  424 => 285,  423 => 279,  417 => 275,  413 => 273,  411 => 270,  407 => 269,  404 => 268,  402 => 267,  399 => 266,  397 => 263,  393 => 262,  389 => 260,  385 => 258,  381 => 256,  379 => 253,  375 => 252,  372 => 251,  370 => 250,  366 => 248,  364 => 245,  360 => 244,  356 => 242,  354 => 239,  350 => 238,  346 => 236,  344 => 233,  340 => 232,  336 => 230,  334 => 227,  330 => 226,  324 => 223,  320 => 221,  318 => 218,  314 => 217,  307 => 212,  305 => 211,  304 => 210,  303 => 209,  302 => 208,  301 => 207,  290 => 199,  283 => 195,  279 => 194,  275 => 193,  263 => 184,  257 => 181,  244 => 171,  231 => 161,  217 => 150,  206 => 141,  204 => 139,  203 => 132,  200 => 131,  198 => 122,  194 => 120,  192 => 111,  189 => 110,  187 => 99,  182 => 97,  178 => 96,  174 => 95,  170 => 94,  161 => 88,  142 => 72,  136 => 69,  130 => 66,  126 => 65,  121 => 63,  117 => 62,  113 => 61,  107 => 57,  98 => 51,  89 => 44,  87 => 43,  80 => 39,  76 => 37,  70 => 36,  61 => 33,  57 => 32,  53 => 31,  49 => 30,  44 => 29,  38 => 28,  31 => 25,  29 => 26,  11 => 25,);
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
{% form_theme categories 'PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"float-right\">
            {{ renderhook('displayDashboardToolbarIcons', {}) }}
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div id=\"catalog-actions\" class=\"row\">
        <div class=\"col-md-1\">
          <label class=\"form-check-label\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              id=\"bulk_action_select_all\"
              onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              value=\"\"
            >
            {{ \"Select all\"|trans({}, 'Admin.Actions') }}
          </label>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
            \"onclick\": \"bulkProductAction(this, 'activate_all');\",
            \"icon\": \"radio_button_checked\",
            \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          }, {
            \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
            \"icon\": \"radio_button_unchecked\",
            \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'delete_all');\",
            \"icon\": \"delete\",
            \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"col-md-3 dropdown dropdown-clickable\">
          <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table product mt-3\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th class=\"small-text\" style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th class=\"small-text\">
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th class=\"small-text\">
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th class=\"small-text\" style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <div class=\"form-select\">
                      <select class=\"custom-select\"  name=\"filter_column_active\">
                        <option value=\"\"></option>
                        <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                        <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                      </select>
                    </div>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-link\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_e86400d971fa271e9b01b3175ad73eda1a8a1c7052287f30e42ae79c18da810e_973808837 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 434
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 434);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e8e82d04ee3bef5d72ca625e8468d32b3bb7a60a177b32c34a1c956d6a86785 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8e82d04ee3bef5d72ca625e8468d32b3bb7a60a177b32c34a1c956d6a86785->enter($__internal_4e8e82d04ee3bef5d72ca625e8468d32b3bb7a60a177b32c34a1c956d6a86785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e8e82d04ee3bef5d72ca625e8468d32b3bb7a60a177b32c34a1c956d6a86785->leave($__internal_4e8e82d04ee3bef5d72ca625e8468d32b3bb7a60a177b32c34a1c956d6a86785_prof);

    }

    // line 444
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a9cb8c9bb0e36e482998e20a77886fef8e2c84f1c4b07b768ad17018cdbffde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9cb8c9bb0e36e482998e20a77886fef8e2c84f1c4b07b768ad17018cdbffde->enter($__internal_0a9cb8c9bb0e36e482998e20a77886fef8e2c84f1c4b07b768ad17018cdbffde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 445
        echo "      <div class=\"modal-body\">
        ";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_0a9cb8c9bb0e36e482998e20a77886fef8e2c84f1c4b07b768ad17018cdbffde->leave($__internal_0a9cb8c9bb0e36e482998e20a77886fef8e2c84f1c4b07b768ad17018cdbffde_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1901 => 448,  1896 => 446,  1893 => 445,  1887 => 444,  1864 => 434,  1277 => 426,  1272 => 424,  1269 => 423,  1263 => 422,  1240 => 412,  656 => 538,  654 => 518,  651 => 517,  648 => 500,  644 => 497,  641 => 478,  637 => 475,  634 => 456,  630 => 453,  627 => 434,  623 => 431,  620 => 412,  612 => 405,  606 => 401,  604 => 400,  603 => 399,  599 => 397,  597 => 396,  590 => 391,  588 => 390,  587 => 389,  586 => 388,  585 => 387,  584 => 386,  583 => 385,  582 => 384,  574 => 379,  568 => 376,  558 => 369,  552 => 366,  545 => 361,  540 => 358,  534 => 356,  528 => 354,  526 => 353,  523 => 352,  521 => 351,  512 => 347,  506 => 346,  499 => 341,  495 => 339,  491 => 337,  489 => 335,  488 => 329,  485 => 328,  483 => 327,  479 => 325,  477 => 323,  476 => 317,  469 => 313,  464 => 311,  454 => 304,  449 => 302,  439 => 295,  434 => 293,  426 => 287,  424 => 285,  423 => 279,  417 => 275,  413 => 273,  411 => 270,  407 => 269,  404 => 268,  402 => 267,  399 => 266,  397 => 263,  393 => 262,  389 => 260,  385 => 258,  381 => 256,  379 => 253,  375 => 252,  372 => 251,  370 => 250,  366 => 248,  364 => 245,  360 => 244,  356 => 242,  354 => 239,  350 => 238,  346 => 236,  344 => 233,  340 => 232,  336 => 230,  334 => 227,  330 => 226,  324 => 223,  320 => 221,  318 => 218,  314 => 217,  307 => 212,  305 => 211,  304 => 210,  303 => 209,  302 => 208,  301 => 207,  290 => 199,  283 => 195,  279 => 194,  275 => 193,  263 => 184,  257 => 181,  244 => 171,  231 => 161,  217 => 150,  206 => 141,  204 => 139,  203 => 132,  200 => 131,  198 => 122,  194 => 120,  192 => 111,  189 => 110,  187 => 99,  182 => 97,  178 => 96,  174 => 95,  170 => 94,  161 => 88,  142 => 72,  136 => 69,  130 => 66,  126 => 65,  121 => 63,  117 => 62,  113 => 61,  107 => 57,  98 => 51,  89 => 44,  87 => 43,  80 => 39,  76 => 37,  70 => 36,  61 => 33,  57 => 32,  53 => 31,  49 => 30,  44 => 29,  38 => 28,  31 => 25,  29 => 26,  11 => 25,);
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
{% form_theme categories 'PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"float-right\">
            {{ renderhook('displayDashboardToolbarIcons', {}) }}
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div id=\"catalog-actions\" class=\"row\">
        <div class=\"col-md-1\">
          <label class=\"form-check-label\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              id=\"bulk_action_select_all\"
              onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              value=\"\"
            >
            {{ \"Select all\"|trans({}, 'Admin.Actions') }}
          </label>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
            \"onclick\": \"bulkProductAction(this, 'activate_all');\",
            \"icon\": \"radio_button_checked\",
            \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          }, {
            \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
            \"icon\": \"radio_button_unchecked\",
            \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'delete_all');\",
            \"icon\": \"delete\",
            \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"col-md-3 dropdown dropdown-clickable\">
          <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table product mt-3\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th class=\"small-text\" style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th class=\"small-text\">
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th class=\"small-text\">
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th class=\"small-text\" style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <div class=\"form-select\">
                      <select class=\"custom-select\"  name=\"filter_column_active\">
                        <option value=\"\"></option>
                        <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                        <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                      </select>
                    </div>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-link\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_e86400d971fa271e9b01b3175ad73eda1a8a1c7052287f30e42ae79c18da810e_592002843 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 456
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 456);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b3c88c67099159e26bf666d822116ffcf9c2ce39d0bc92eca94eead211afd77f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c88c67099159e26bf666d822116ffcf9c2ce39d0bc92eca94eead211afd77f->enter($__internal_b3c88c67099159e26bf666d822116ffcf9c2ce39d0bc92eca94eead211afd77f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3c88c67099159e26bf666d822116ffcf9c2ce39d0bc92eca94eead211afd77f->leave($__internal_b3c88c67099159e26bf666d822116ffcf9c2ce39d0bc92eca94eead211afd77f_prof);

    }

    // line 466
    public function block_content($context, array $blocks = array())
    {
        $__internal_70efd867cd9af88dff224ed032d0030cea4840ed24c71767279d8657e74b4999 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70efd867cd9af88dff224ed032d0030cea4840ed24c71767279d8657e74b4999->enter($__internal_70efd867cd9af88dff224ed032d0030cea4840ed24c71767279d8657e74b4999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 467
        echo "      <div class=\"modal-body\">
        ";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivation failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_70efd867cd9af88dff224ed032d0030cea4840ed24c71767279d8657e74b4999->leave($__internal_70efd867cd9af88dff224ed032d0030cea4840ed24c71767279d8657e74b4999_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2525 => 470,  2520 => 468,  2517 => 467,  2511 => 466,  2488 => 456,  1901 => 448,  1896 => 446,  1893 => 445,  1887 => 444,  1864 => 434,  1277 => 426,  1272 => 424,  1269 => 423,  1263 => 422,  1240 => 412,  656 => 538,  654 => 518,  651 => 517,  648 => 500,  644 => 497,  641 => 478,  637 => 475,  634 => 456,  630 => 453,  627 => 434,  623 => 431,  620 => 412,  612 => 405,  606 => 401,  604 => 400,  603 => 399,  599 => 397,  597 => 396,  590 => 391,  588 => 390,  587 => 389,  586 => 388,  585 => 387,  584 => 386,  583 => 385,  582 => 384,  574 => 379,  568 => 376,  558 => 369,  552 => 366,  545 => 361,  540 => 358,  534 => 356,  528 => 354,  526 => 353,  523 => 352,  521 => 351,  512 => 347,  506 => 346,  499 => 341,  495 => 339,  491 => 337,  489 => 335,  488 => 329,  485 => 328,  483 => 327,  479 => 325,  477 => 323,  476 => 317,  469 => 313,  464 => 311,  454 => 304,  449 => 302,  439 => 295,  434 => 293,  426 => 287,  424 => 285,  423 => 279,  417 => 275,  413 => 273,  411 => 270,  407 => 269,  404 => 268,  402 => 267,  399 => 266,  397 => 263,  393 => 262,  389 => 260,  385 => 258,  381 => 256,  379 => 253,  375 => 252,  372 => 251,  370 => 250,  366 => 248,  364 => 245,  360 => 244,  356 => 242,  354 => 239,  350 => 238,  346 => 236,  344 => 233,  340 => 232,  336 => 230,  334 => 227,  330 => 226,  324 => 223,  320 => 221,  318 => 218,  314 => 217,  307 => 212,  305 => 211,  304 => 210,  303 => 209,  302 => 208,  301 => 207,  290 => 199,  283 => 195,  279 => 194,  275 => 193,  263 => 184,  257 => 181,  244 => 171,  231 => 161,  217 => 150,  206 => 141,  204 => 139,  203 => 132,  200 => 131,  198 => 122,  194 => 120,  192 => 111,  189 => 110,  187 => 99,  182 => 97,  178 => 96,  174 => 95,  170 => 94,  161 => 88,  142 => 72,  136 => 69,  130 => 66,  126 => 65,  121 => 63,  117 => 62,  113 => 61,  107 => 57,  98 => 51,  89 => 44,  87 => 43,  80 => 39,  76 => 37,  70 => 36,  61 => 33,  57 => 32,  53 => 31,  49 => 30,  44 => 29,  38 => 28,  31 => 25,  29 => 26,  11 => 25,);
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
{% form_theme categories 'PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"float-right\">
            {{ renderhook('displayDashboardToolbarIcons', {}) }}
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div id=\"catalog-actions\" class=\"row\">
        <div class=\"col-md-1\">
          <label class=\"form-check-label\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              id=\"bulk_action_select_all\"
              onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              value=\"\"
            >
            {{ \"Select all\"|trans({}, 'Admin.Actions') }}
          </label>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
            \"onclick\": \"bulkProductAction(this, 'activate_all');\",
            \"icon\": \"radio_button_checked\",
            \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          }, {
            \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
            \"icon\": \"radio_button_unchecked\",
            \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'delete_all');\",
            \"icon\": \"delete\",
            \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"col-md-3 dropdown dropdown-clickable\">
          <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table product mt-3\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th class=\"small-text\" style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th class=\"small-text\">
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th class=\"small-text\">
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th class=\"small-text\" style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <div class=\"form-select\">
                      <select class=\"custom-select\"  name=\"filter_column_active\">
                        <option value=\"\"></option>
                        <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                        <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                      </select>
                    </div>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-link\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_e86400d971fa271e9b01b3175ad73eda1a8a1c7052287f30e42ae79c18da810e_1141423780 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 478
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 478);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89e3300c4df37b5752ac6bb89ea9e52a59b7fd73cdad0f29b457bc6b3a8486b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89e3300c4df37b5752ac6bb89ea9e52a59b7fd73cdad0f29b457bc6b3a8486b->enter($__internal_a89e3300c4df37b5752ac6bb89ea9e52a59b7fd73cdad0f29b457bc6b3a8486b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89e3300c4df37b5752ac6bb89ea9e52a59b7fd73cdad0f29b457bc6b3a8486b->leave($__internal_a89e3300c4df37b5752ac6bb89ea9e52a59b7fd73cdad0f29b457bc6b3a8486b_prof);

    }

    // line 488
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c147f9d5d073a2169be784e275215e82049108c177bc9aa15ab9ec1c2386bb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c147f9d5d073a2169be784e275215e82049108c177bc9aa15ab9ec1c2386bb9->enter($__internal_1c147f9d5d073a2169be784e275215e82049108c177bc9aa15ab9ec1c2386bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 489
        echo "      <div class=\"modal-body\">
        ";
        // line 490
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion in progress...", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          ";
        // line 492
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deletion failed.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "
        </span>
      </div>
    ";
        
        $__internal_1c147f9d5d073a2169be784e275215e82049108c177bc9aa15ab9ec1c2386bb9->leave($__internal_1c147f9d5d073a2169be784e275215e82049108c177bc9aa15ab9ec1c2386bb9_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3149 => 492,  3144 => 490,  3141 => 489,  3135 => 488,  3112 => 478,  2525 => 470,  2520 => 468,  2517 => 467,  2511 => 466,  2488 => 456,  1901 => 448,  1896 => 446,  1893 => 445,  1887 => 444,  1864 => 434,  1277 => 426,  1272 => 424,  1269 => 423,  1263 => 422,  1240 => 412,  656 => 538,  654 => 518,  651 => 517,  648 => 500,  644 => 497,  641 => 478,  637 => 475,  634 => 456,  630 => 453,  627 => 434,  623 => 431,  620 => 412,  612 => 405,  606 => 401,  604 => 400,  603 => 399,  599 => 397,  597 => 396,  590 => 391,  588 => 390,  587 => 389,  586 => 388,  585 => 387,  584 => 386,  583 => 385,  582 => 384,  574 => 379,  568 => 376,  558 => 369,  552 => 366,  545 => 361,  540 => 358,  534 => 356,  528 => 354,  526 => 353,  523 => 352,  521 => 351,  512 => 347,  506 => 346,  499 => 341,  495 => 339,  491 => 337,  489 => 335,  488 => 329,  485 => 328,  483 => 327,  479 => 325,  477 => 323,  476 => 317,  469 => 313,  464 => 311,  454 => 304,  449 => 302,  439 => 295,  434 => 293,  426 => 287,  424 => 285,  423 => 279,  417 => 275,  413 => 273,  411 => 270,  407 => 269,  404 => 268,  402 => 267,  399 => 266,  397 => 263,  393 => 262,  389 => 260,  385 => 258,  381 => 256,  379 => 253,  375 => 252,  372 => 251,  370 => 250,  366 => 248,  364 => 245,  360 => 244,  356 => 242,  354 => 239,  350 => 238,  346 => 236,  344 => 233,  340 => 232,  336 => 230,  334 => 227,  330 => 226,  324 => 223,  320 => 221,  318 => 218,  314 => 217,  307 => 212,  305 => 211,  304 => 210,  303 => 209,  302 => 208,  301 => 207,  290 => 199,  283 => 195,  279 => 194,  275 => 193,  263 => 184,  257 => 181,  244 => 171,  231 => 161,  217 => 150,  206 => 141,  204 => 139,  203 => 132,  200 => 131,  198 => 122,  194 => 120,  192 => 111,  189 => 110,  187 => 99,  182 => 97,  178 => 96,  174 => 95,  170 => 94,  161 => 88,  142 => 72,  136 => 69,  130 => 66,  126 => 65,  121 => 63,  117 => 62,  113 => 61,  107 => 57,  98 => 51,  89 => 44,  87 => 43,  80 => 39,  76 => 37,  70 => 36,  61 => 33,  57 => 32,  53 => 31,  49 => 30,  44 => 29,  38 => 28,  31 => 25,  29 => 26,  11 => 25,);
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
{% form_theme categories 'PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"float-right\">
            {{ renderhook('displayDashboardToolbarIcons', {}) }}
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div id=\"catalog-actions\" class=\"row\">
        <div class=\"col-md-1\">
          <label class=\"form-check-label\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              id=\"bulk_action_select_all\"
              onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              value=\"\"
            >
            {{ \"Select all\"|trans({}, 'Admin.Actions') }}
          </label>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
            \"onclick\": \"bulkProductAction(this, 'activate_all');\",
            \"icon\": \"radio_button_checked\",
            \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          }, {
            \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
            \"icon\": \"radio_button_unchecked\",
            \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'delete_all');\",
            \"icon\": \"delete\",
            \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"col-md-3 dropdown dropdown-clickable\">
          <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table product mt-3\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th class=\"small-text\" style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th class=\"small-text\">
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th class=\"small-text\">
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th class=\"small-text\" style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <div class=\"form-select\">
                      <select class=\"custom-select\"  name=\"filter_column_active\">
                        <option value=\"\"></option>
                        <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                        <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                      </select>
                    </div>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-link\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_e86400d971fa271e9b01b3175ad73eda1a8a1c7052287f30e42ae79c18da810e_2085306977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 500
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 500);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56d249d8d81a878e785aaaa5c3ae3295e1b540874cfd627da4a57c1dd2798430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56d249d8d81a878e785aaaa5c3ae3295e1b540874cfd627da4a57c1dd2798430->enter($__internal_56d249d8d81a878e785aaaa5c3ae3295e1b540874cfd627da4a57c1dd2798430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56d249d8d81a878e785aaaa5c3ae3295e1b540874cfd627da4a57c1dd2798430->leave($__internal_56d249d8d81a878e785aaaa5c3ae3295e1b540874cfd627da4a57c1dd2798430_prof);

    }

    // line 511
    public function block_content($context, array $blocks = array())
    {
        $__internal_90b44d6f890498a6392ea5ebcb530f1754ce241a976e53bd85cdfd18e1c50af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b44d6f890498a6392ea5ebcb530f1754ce241a976e53bd85cdfd18e1c50af9->enter($__internal_90b44d6f890498a6392ea5ebcb530f1754ce241a976e53bd85cdfd18e1c50af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 512
        echo "      <div class=\"modal-body\">
        ";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
        
        $__internal_90b44d6f890498a6392ea5ebcb530f1754ce241a976e53bd85cdfd18e1c50af9->leave($__internal_90b44d6f890498a6392ea5ebcb530f1754ce241a976e53bd85cdfd18e1c50af9_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  3768 => 513,  3765 => 512,  3759 => 511,  3736 => 500,  3149 => 492,  3144 => 490,  3141 => 489,  3135 => 488,  3112 => 478,  2525 => 470,  2520 => 468,  2517 => 467,  2511 => 466,  2488 => 456,  1901 => 448,  1896 => 446,  1893 => 445,  1887 => 444,  1864 => 434,  1277 => 426,  1272 => 424,  1269 => 423,  1263 => 422,  1240 => 412,  656 => 538,  654 => 518,  651 => 517,  648 => 500,  644 => 497,  641 => 478,  637 => 475,  634 => 456,  630 => 453,  627 => 434,  623 => 431,  620 => 412,  612 => 405,  606 => 401,  604 => 400,  603 => 399,  599 => 397,  597 => 396,  590 => 391,  588 => 390,  587 => 389,  586 => 388,  585 => 387,  584 => 386,  583 => 385,  582 => 384,  574 => 379,  568 => 376,  558 => 369,  552 => 366,  545 => 361,  540 => 358,  534 => 356,  528 => 354,  526 => 353,  523 => 352,  521 => 351,  512 => 347,  506 => 346,  499 => 341,  495 => 339,  491 => 337,  489 => 335,  488 => 329,  485 => 328,  483 => 327,  479 => 325,  477 => 323,  476 => 317,  469 => 313,  464 => 311,  454 => 304,  449 => 302,  439 => 295,  434 => 293,  426 => 287,  424 => 285,  423 => 279,  417 => 275,  413 => 273,  411 => 270,  407 => 269,  404 => 268,  402 => 267,  399 => 266,  397 => 263,  393 => 262,  389 => 260,  385 => 258,  381 => 256,  379 => 253,  375 => 252,  372 => 251,  370 => 250,  366 => 248,  364 => 245,  360 => 244,  356 => 242,  354 => 239,  350 => 238,  346 => 236,  344 => 233,  340 => 232,  336 => 230,  334 => 227,  330 => 226,  324 => 223,  320 => 221,  318 => 218,  314 => 217,  307 => 212,  305 => 211,  304 => 210,  303 => 209,  302 => 208,  301 => 207,  290 => 199,  283 => 195,  279 => 194,  275 => 193,  263 => 184,  257 => 181,  244 => 171,  231 => 161,  217 => 150,  206 => 141,  204 => 139,  203 => 132,  200 => 131,  198 => 122,  194 => 120,  192 => 111,  189 => 110,  187 => 99,  182 => 97,  178 => 96,  174 => 95,  170 => 94,  161 => 88,  142 => 72,  136 => 69,  130 => 66,  126 => 65,  121 => 63,  117 => 62,  113 => 61,  107 => 57,  98 => 51,  89 => 44,  87 => 43,  80 => 39,  76 => 37,  70 => 36,  61 => 33,  57 => 32,  53 => 31,  49 => 30,  44 => 29,  38 => 28,  31 => 25,  29 => 26,  11 => 25,);
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
{% form_theme categories 'PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"float-right\">
            {{ renderhook('displayDashboardToolbarIcons', {}) }}
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div id=\"catalog-actions\" class=\"row\">
        <div class=\"col-md-1\">
          <label class=\"form-check-label\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              id=\"bulk_action_select_all\"
              onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              value=\"\"
            >
            {{ \"Select all\"|trans({}, 'Admin.Actions') }}
          </label>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
            \"onclick\": \"bulkProductAction(this, 'activate_all');\",
            \"icon\": \"radio_button_checked\",
            \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          }, {
            \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
            \"icon\": \"radio_button_unchecked\",
            \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'delete_all');\",
            \"icon\": \"delete\",
            \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"col-md-3 dropdown dropdown-clickable\">
          <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table product mt-3\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th class=\"small-text\" style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th class=\"small-text\">
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th class=\"small-text\">
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th class=\"small-text\" style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <div class=\"form-select\">
                      <select class=\"custom-select\"  name=\"filter_column_active\">
                        <option value=\"\"></option>
                        <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                        <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                      </select>
                    </div>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-link\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_e86400d971fa271e9b01b3175ad73eda1a8a1c7052287f30e42ae79c18da810e_530722834 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 518
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 518);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7feb275cb36becac096fa0103f733606aa07c41354808d764db365a80e5b46b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7feb275cb36becac096fa0103f733606aa07c41354808d764db365a80e5b46b3->enter($__internal_7feb275cb36becac096fa0103f733606aa07c41354808d764db365a80e5b46b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Product/catalog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7feb275cb36becac096fa0103f733606aa07c41354808d764db365a80e5b46b3->leave($__internal_7feb275cb36becac096fa0103f733606aa07c41354808d764db365a80e5b46b3_prof);

    }

    // line 529
    public function block_content($context, array $blocks = array())
    {
        $__internal_d8245b2fc3e445650dec27f0ba2439b07a45d40af0aa8dad82044722abc0869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8245b2fc3e445650dec27f0ba2439b07a45d40af0aa8dad82044722abc0869d->enter($__internal_d8245b2fc3e445650dec27f0ba2439b07a45d40af0aa8dad82044722abc0869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 530
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? $this->getContext($context, "sql_manager_add_link")), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
        
        $__internal_d8245b2fc3e445650dec27f0ba2439b07a45d40af0aa8dad82044722abc0869d->leave($__internal_d8245b2fc3e445650dec27f0ba2439b07a45d40af0aa8dad82044722abc0869d_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Product/catalog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  4383 => 530,  4377 => 529,  4354 => 518,  3768 => 513,  3765 => 512,  3759 => 511,  3736 => 500,  3149 => 492,  3144 => 490,  3141 => 489,  3135 => 488,  3112 => 478,  2525 => 470,  2520 => 468,  2517 => 467,  2511 => 466,  2488 => 456,  1901 => 448,  1896 => 446,  1893 => 445,  1887 => 444,  1864 => 434,  1277 => 426,  1272 => 424,  1269 => 423,  1263 => 422,  1240 => 412,  656 => 538,  654 => 518,  651 => 517,  648 => 500,  644 => 497,  641 => 478,  637 => 475,  634 => 456,  630 => 453,  627 => 434,  623 => 431,  620 => 412,  612 => 405,  606 => 401,  604 => 400,  603 => 399,  599 => 397,  597 => 396,  590 => 391,  588 => 390,  587 => 389,  586 => 388,  585 => 387,  584 => 386,  583 => 385,  582 => 384,  574 => 379,  568 => 376,  558 => 369,  552 => 366,  545 => 361,  540 => 358,  534 => 356,  528 => 354,  526 => 353,  523 => 352,  521 => 351,  512 => 347,  506 => 346,  499 => 341,  495 => 339,  491 => 337,  489 => 335,  488 => 329,  485 => 328,  483 => 327,  479 => 325,  477 => 323,  476 => 317,  469 => 313,  464 => 311,  454 => 304,  449 => 302,  439 => 295,  434 => 293,  426 => 287,  424 => 285,  423 => 279,  417 => 275,  413 => 273,  411 => 270,  407 => 269,  404 => 268,  402 => 267,  399 => 266,  397 => 263,  393 => 262,  389 => 260,  385 => 258,  381 => 256,  379 => 253,  375 => 252,  372 => 251,  370 => 250,  366 => 248,  364 => 245,  360 => 244,  356 => 242,  354 => 239,  350 => 238,  346 => 236,  344 => 233,  340 => 232,  336 => 230,  334 => 227,  330 => 226,  324 => 223,  320 => 221,  318 => 218,  314 => 217,  307 => 212,  305 => 211,  304 => 210,  303 => 209,  302 => 208,  301 => 207,  290 => 199,  283 => 195,  279 => 194,  275 => 193,  263 => 184,  257 => 181,  244 => 171,  231 => 161,  217 => 150,  206 => 141,  204 => 139,  203 => 132,  200 => 131,  198 => 122,  194 => 120,  192 => 111,  189 => 110,  187 => 99,  182 => 97,  178 => 96,  174 => 95,  170 => 94,  161 => 88,  142 => 72,  136 => 69,  130 => 66,  126 => 65,  121 => 63,  117 => 62,  113 => 61,  107 => 57,  98 => 51,  89 => 44,  87 => 43,  80 => 39,  76 => 37,  70 => 36,  61 => 33,  57 => 32,  53 => 31,  49 => 30,  44 => 29,  38 => 28,  31 => 25,  29 => 26,  11 => 25,);
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
{% form_theme categories 'PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig' %}

{% block javascripts %}
  {{ parent() }}
  <script src=\"{{ asset('themes/default/js/bundle/product/catalog.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/pagination.js') }}\"></script>
  <script src=\"{{ asset('themes/default/js/bundle/category-tree.js') }}\"></script>
  <script src=\"{{ asset('../js/jquery/ui/jquery.ui.sortable.min.js') }}\"></script>
{% endblock %}

{% block content %}
  <div class=\"products-catalog\">

    {{ renderhook('legacy_block_kpi', {'kpi_controller': 'AdminProductsController'}) }}

    <div class=\"content container-fluid\">

      {% if permission_error|length %}
      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"alert alert-danger\" role=\"alert\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
              <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
            </button>
            <p class=\"alert-text\">
              {{ permission_error }}
            </p>
          </div>
        </div>
      </div>
      {% endif %}

      <div class=\"row\">
        <div class=\"col-md-12\">
          <div class=\"float-right\">
            {{ renderhook('displayDashboardToolbarIcons', {}) }}
            <a id=\"desc-product-export\" class=\"list-toolbar-btn\" href=\"{{ path('admin_product_export_action') }}\">
              {{ ps.tooltip((\"Export\"|trans({}, 'Admin.Actions')), 'cloud_upload') }}
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"{{ import_link }}\">
              {{ ps.tooltip((\"Import\"|trans({}, 'Admin.Actions')), 'cloud_download') }}
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              {{ ps.tooltip((\"Show SQL query\"|trans({}, 'Admin.Actions')), 'code') }}
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              {{ ps.tooltip((\"Export to SQL Manager\"|trans({}, 'Admin.Actions')), 'storage') }}
            </a>
          </div>
        </div>
      </div>

      <div id=\"catalog-actions\" class=\"row\">
        <div class=\"col-md-1\">
          <label class=\"form-check-label\">
            <input
              class=\"form-check-input\"
              type=\"checkbox\"
              id=\"bulk_action_select_all\"
              onclick=\"\$('#product_catalog_list').find('table td.checkbox-column input:checkbox').prop('checked', \$(this).prop('checked')); updateBulkMenu();\"
              value=\"\"
            >
            {{ \"Select all\"|trans({}, 'Admin.Actions') }}
          </label>
        </div>

        <div
          class=\"col-md-2\"
          bulkurl=\"{{ path('admin_product_bulk_action', {'action': 'activate_all'}) }}\"
          massediturl=\"{{ path('admin_product_mass_edit_action', {'action': 'sort'}) }}\"
          redirecturl=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
          redirecturlnextpage=\"{{ path('admin_product_catalog', {'limit': limit, 'offset': offset+limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        >
          {% set buttons_action = [
          {
            \"onclick\": \"bulkProductAction(this, 'activate_all');\",
            \"icon\": \"radio_button_checked\",
            \"label\": \"Activate selection\"|trans({}, 'Admin.Actions')
          }, {
            \"onclick\": \"bulkProductAction(this, 'deactivate_all');\",
            \"icon\": \"radio_button_unchecked\",
            \"label\": \"Deactivate selection\"|trans({}, 'Admin.Actions')
          }
          ] %}

          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'duplicate_all');\",
            \"icon\": \"content_copy\",
            \"label\": \"Duplicate selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}


          {% set buttons_action = buttons_action|merge([
          {
            \"divider\": true
          }, {
            \"onclick\": \"bulkProductAction(this, 'delete_all');\",
            \"icon\": \"delete\",
            \"label\": \"Delete selection\"|trans({}, 'Admin.Actions')
          }
          ]) %}

          {% include 'PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig' with {
            'div_style': \"btn-group dropup bulk-catalog\",
            'button_id': \"product_bulk_menu\",
            'disabled': true,
            'menu_label': \"Bulk actions\"|trans({}, 'Admin.Global'),
            'buttonType': \"outline-secondary\",
            'menu_icon': \"icon-caret-up\",
            'items': buttons_action
          }%}
        </div>
        <div id=\"product_catalog_category_tree_filter\" class=\"col-md-3 dropdown dropdown-clickable\">
          <button
            class=\"btn btn-outline-secondary dropdown-toggle\"
            type=\"button\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
          >
            {{ 'Filter by categories'|trans({}, 'Admin.Actions') }}
          </button>
          <div id=\"tree-categories\" class=\"dropdown-menu\">
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_expand\"
              onclick=\"productCategoryFilterExpand(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_expand\"
            >
              <i class=\"material-icons\">expand_more</i>
              {{ 'Expand'|trans({}, 'Admin.Actions') }}
            </a>
            <a
            class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_collapse\"
              onclick=\"productCategoryFilterCollapse(\$('div#product_catalog_category_tree_filter'), this);\"
              id=\"product_catalog_category_tree_filter_collapse\"
            >
              <i class=\"material-icons\">expand_less</i>
              {{ 'Collapse'|trans({}, 'Admin.Actions') }}
            </a>
            <a
              class=\"categories-tree-actions\"
              href=\"#\"
              name=\"product_catalog_category_tree_filter_reset\"
              onclick=\"productCategoryFilterReset(\$('div#product_catalog_category_tree_filter'));\"
              id=\"product_catalog_category_tree_filter_reset\"
            >
              <i class=\"material-icons\">radio_button_unchecked</i>
              {{ 'Unselect'|trans({}, 'Admin.Actions') }}
            </a>
            <hr>
            {{ form_widget(categories) }}
          </div>
        </div>
      </div>

      <form
        name=\"product_catalog_list\"
        id=\"product_catalog_list\"
        method=\"post\"
        action=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': orderBy, 'sortOrder': sortOrder}) }}\"
        orderingurl=\"{{ path('admin_product_catalog', {'limit': limit, 'orderBy': 'name', 'sortOrder': 'asc'}) }}\"
        newproducturl=\"{{ path('admin_product_new') }}\"
      >
        <div class=\"row\">
          <div class=\"col-md-12\">
            <input type=\"hidden\" name=\"filter_category\" value=\"{{ filter_category|default('') }}\" />
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-md-12\">
            <table
              class=\"table product mt-3\"
              redirecturl=\"{{ path('admin_product_catalog', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder})
              }}\"
            >
              <thead class=\"thead-default\">
                <tr class=\"column-headers\">
                  <th class=\"small-text\" style=\"width: 8%\">
                    {{ \"ID\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'id_product'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Image\"|trans({}, 'Admin.Global') }}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Name\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Reference\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'reference'
                    } %}
                  </th>
                  <th class=\"small-text\">
                    {{ \"Category\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'name_category'
                    } %}
                  </th>
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Price (tax excl.)\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'price'
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th class=\"small-text\" style=\"width: 9%\">
                    {{ \"Quantity\"|trans({}, 'Admin.Catalog.Feature') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'sav_quantity'
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th class=\"small-text\">
                    {{ \"Status\"|trans({}, 'Admin.Global') }}
                    {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                      'column': 'active'
                    } %}
                  </th>
                  {% if has_category_filter == true %}
                    <th class=\"small-text\">
                      {{ \"Position\"|trans({}, 'Admin.Global') }}
                      {% include 'PrestaShopBundle:Admin/Product/Include:catalog_order_carrets.html.twig' with {
                        'column': 'position'
                      } %}
                    </th>
                  {% endif %}
                  <th class=\"small-text\" style=\"width: 6%\"></th>
                </tr>
                <tr class=\"column-filters\">
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_id_product\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_id_product,
                    } %}
                  </th>
                  <th>&nbsp;</th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search name\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name\"
                      value=\"{{ filter_column_name }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search ref.\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_reference\"
                      value=\"{{ filter_column_reference }}\"
                    />
                  </th>
                  <th>
                    <input
                      type=\"text\"
                      class=\"form-control\"
                      placeholder=\"{{ \"Search category\"|trans({}, 'Admin.Catalog.Help') }}\"
                      name=\"filter_column_name_category\"
                      value=\"{{ filter_column_name_category }}\"
                    />
                  </th>
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_price\",
                      'min': '0',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_price,
                    } %}
                  </th>

                  {% if 'PS_STOCK_MANAGEMENT'|configuration %}
                  <th>
                    {% include 'PrestaShopBundle:Admin/Helpers:range_inputs.html.twig' with {
                      'input_name': \"filter_column_sav_quantity\",
                      'min': '-1000000',
                      'max': '1000000',
                      'minLabel': \"Min\"|trans({}, 'Admin.Global'),
                      'maxLabel': \"Max\"|trans({}, 'Admin.Global'),
                      'value': filter_column_sav_quantity,
                    } %}
                  </th>
                  {% else %}
                    <th></th>
                  {% endif %}

                  <th id=\"product_filter_column_active\">
                    <div class=\"form-select\">
                      <select class=\"custom-select\"  name=\"filter_column_active\">
                        <option value=\"\"></option>
                        <option value=\"1\" {% if (filter_column_active is defined) and filter_column_active == '1' %}selected=\"selected\"{% endif %}>Active</option>
                        <option value=\"0\" {% if (filter_column_active is defined) and filter_column_active == '0' %}selected=\"selected\"{% endif %}>Inactive</option>
                      </select>
                    </div>
                  </th>
                  {% if has_category_filter == true %}
                    <th>
                      {% if not(activate_drag_and_drop) %}
                        <input type=\"button\" class=\"btn btn-outline-secondary\" name=\"products_filter_position_asc\" value=\"{{ \"Reorder\"|trans({}, 'Admin.Actions') }}\" onclick=\"productOrderPrioritiesTable();\" />
                        {% else %}
                        <input type=\"button\" id=\"bulk_edition_save_keep\" class=\"btn\" onclick=\"bulkProductAction(this, 'edition');\" value=\"{{ \"Save & refresh\"|trans({}, 'Admin.Actions')|raw }}\" />
                    {% endif %}

                    </th>
                  {% endif %}
                  <th style=\"width: 12%\">
                    <button
                      type=\"submit\"
                      class=\"btn btn-primary\"
                      name=\"products_filter_submit\"
                      title=\"{{ \"Filter\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">search</i>
                      {{ \"Apply\"|trans({}, 'Admin.Actions') }}
                    </button>
                    <button
                      type=\"reset\"
                      class=\"btn btn-link\"
                      name=\"products_filter_reset\"
                      onclick=\"productColumnFilterReset(\$(this).closest('tr.column-filters'))\"
                      title=\"{{ \"Reset\"|trans({}, 'Admin.Actions') }}\"
                    >
                      <i class=\"material-icons\">clear</i>
                      {{ \"Reset\"|trans({}, 'Admin.Actions') }}
                    </button>
                  </th>
                </tr>
              </thead>
              {{ render(controller('PrestaShopBundle\\\\Controller\\\\Admin\\\\ProductController::listAction', {
                'limit': limit,
                'offset': offset,
                'orderBy': orderBy,
                'sortOrder': sortOrder,
                'products': products,
                'last_sql': last_sql
              })) }}
            </table>
          </div>
        </div>

        {% if product_count_filtered > 20 %}
          <div class=\"row\">
            <div class=\"col-md-12\">
              {{ render(controller('PrestaShopBundle:Admin\\\\Common:pagination',
              {'limit': limit, 'offset': offset, 'total': product_count_filtered, 'caller_parameters': pagination_parameters, 'limit_choices': pagination_limit_choices}))
              }}
            </div>
          </div>
        {% endif %}

      </form>

    </div>
  </div>

  {# Duplication product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_duplicate_all_modal\",
    'title': \"Duplicating products\"|trans({}, 'Admin.Catalog.Notification'),
    'closable': true,
    'progressbar': {
    'id': \"catalog_duplicate_all_progression\",
    'label': \"Duplicating...\"|trans({}, 'Admin.Catalog.Notification')
  },
    'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Duplication in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_duplicate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Duplication failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Activation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_activate_all_modal\",
  'title': \"Activating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_activate_all_progression\",
  'label': \"Activating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Activation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_activate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Activation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Desactivation product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_deactivate_all_modal\",
  'title': \"Deactivating products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_deactivate_all_progression\",
  'label': \"Deactivating...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deactivation in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_deactivate_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deactivation failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
  'id': \"catalog_delete_all_modal\",
  'title': \"Deleting products\"|trans({}, 'Admin.Catalog.Notification'),
  'closable': true,
  'progressbar': {
  'id': \"catalog_delete_all_progression\",
  'label': \"Deleting...\"|trans({}, 'Admin.Catalog.Notification')
  },
  'actions': [],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'Deletion in progress...'|trans({}, 'Admin.Catalog.Notification') }}
        <span id=\"catalog_delete_all_failure\" style=\"display: none;color: darkred;\">
          {{ 'Deletion failed.'|trans({}, 'Admin.Catalog.Notification') }}
        </span>
      </div>
    {% endblock %}
  {% endembed %}


  {# Confirmation deletion product modal #}
  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_deletion_modal\",
    'title': \"Delete products?\"|trans({}, 'Admin.Catalog.Feature'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Delete now\"|trans({}, 'Admin.Actions'),
      'value': 'confirm',
      'class': 'btn btn-primary btn-lg',
    }],
  }%}
    {% block content %}
      <div class=\"modal-body\">
        {{ 'These products will be deleted for good. Please confirm.'|trans({}, 'Admin.Catalog.Feature') }}
      </div>
    {% endblock %}
  {% endembed %}

  {% embed 'PrestaShopBundle:Admin/Helpers:bootstrap_popup.html.twig' with {
    'id': \"catalog_sql_query_modal\",
    'title': \"SQL query\"|trans({}, 'Admin.Global'),
    'closable': true,
    'actions': [{
      'type': 'button',
      'label': \"Export to SQL Manager\"|trans({}, 'Admin.Actions'),
      'value': 'sql_manager',
      'class': 'btn btn-primary btn-lg',
    }],
  } %}
    {% block content %}
      <form method=\"post\" action=\"{{ sql_manager_add_link }}\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    {% endblock %}
  {% endembed %}

{% endblock %}
", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}
