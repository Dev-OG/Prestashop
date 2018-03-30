<?php

/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_f447b61eb06c34aaf8901e86452b9a999020a32b48df4d61e2f71f6ef6d556f4 extends Twig_Template
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
        // line 26
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["categories"] ?? null), array(0 => "PrestaShopBundle:Admin/Product/Include:categories_theme.html.twig"));
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "  <div class=\"products-catalog\">

    ";
        // line 39
        echo $this->env->getExtension('PrestaShopBundle\Twig\HookExtension')->renderHook("legacy_block_kpi", array("kpi_controller" => "AdminProductsController"));
        echo "

    <div class=\"content container-fluid\">

      ";
        // line 43
        if (twig_length_filter($this->env, ($context["permission_error"] ?? null))) {
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
            echo twig_escape_filter($this->env, ($context["permission_error"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export", array(), "Admin.Actions"), 1 => "cloud_upload"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-import\" class=\"list-toolbar-btn\" href=\"";
        // line 65
        echo twig_escape_filter($this->env, ($context["import_link"] ?? null), "html", null, true);
        echo "\">
              ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Import", array(), "Admin.Actions"), 1 => "cloud_download"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-show-sql\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"showLastSqlQuery();\">
              ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Show SQL query", array(), "Admin.Actions"), 1 => "code"), "method"), "html", null, true);
        echo "
            </a>
            <a id=\"desc-product-sql-manager\" class=\"list-toolbar-btn\" href=\"javascript:void(0);\" onclick=\"sendLastSqlQuery(createSqlQueryName());\">
              ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? null), "tooltip", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), 1 => "storage"), "method"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? null), "offset" => ($context["offset"] ?? null), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null))), "html", null, true);
        echo "\"
          redirecturlnextpage=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? null), "offset" => (($context["offset"] ?? null) + ($context["limit"] ?? null)), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null))), "html", null, true);
        echo "\"
        >
          ";
        // line 99
        $context["buttons_action"] = array(0 => array("onclick" => "bulkProductAction(this, 'activate_all');", "icon" => "radio_button_checked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate selection", array(), "Admin.Actions")), 1 => array("onclick" => "bulkProductAction(this, 'deactivate_all');", "icon" => "radio_button_unchecked", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivate selection", array(), "Admin.Actions")));
        // line 110
        echo "
          ";
        // line 111
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? null), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'duplicate_all');", "icon" => "content_copy", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicate selection", array(), "Admin.Actions"))));
        // line 120
        echo "

          ";
        // line 122
        $context["buttons_action"] = twig_array_merge(($context["buttons_action"] ?? null), array(0 => array("divider" => true), 1 => array("onclick" => "bulkProductAction(this, 'delete_all');", "icon" => "delete", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete selection", array(), "Admin.Actions"))));
        // line 131
        echo "
          ";
        // line 132
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:dropdown_menu.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 132)->display(array_merge($context, array("div_style" => "btn-group dropup bulk-catalog", "button_id" => "product_bulk_menu", "disabled" => true, "menu_label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Bulk actions", array(), "Admin.Global"), "buttonType" => "outline-secondary", "menu_icon" => "icon-caret-up", "items" =>         // line 139
($context["buttons_action"] ?? null))));
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["categories"] ?? null), 'widget');
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? null), "orderBy" => ($context["orderBy"] ?? null), "sortOrder" => ($context["sortOrder"] ?? null))), "html", null, true);
        echo "\"
        orderingurl=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_product_catalog", array("limit" => ($context["limit"] ?? null), "orderBy" => "name", "sortOrder" => "asc")), "html", null, true);
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
        echo twig_escape_filter($this->env, ((array_key_exists("filter_category", $context)) ? (_twig_default_filter(($context["filter_category"] ?? null), "")) : ("")), "html", null, true);
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
($context["limit"] ?? null), "offset" =>         // line 209
($context["offset"] ?? null), "orderBy" =>         // line 210
($context["orderBy"] ?? null), "sortOrder" =>         // line 211
($context["sortOrder"] ?? null))), "html", null, true);
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
        if ((($context["has_category_filter"] ?? null) == true)) {
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
($context["filter_column_id_product"] ?? null))));
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
        echo twig_escape_filter($this->env, ($context["filter_column_name"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["filter_column_reference"] ?? null), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["filter_column_name_category"] ?? null), "html", null, true);
        echo "\"
                    />
                  </th>
                  <th>
                    ";
        // line 317
        $this->loadTemplate("PrestaShopBundle:Admin/Helpers:range_inputs.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 317)->display(array_merge($context, array("input_name" => "filter_column_price", "min" => "0", "max" => "1000000", "minLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Min", array(), "Admin.Global"), "maxLabel" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Max", array(), "Admin.Global"), "value" =>         // line 323
($context["filter_column_price"] ?? null))));
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
($context["filter_column_sav_quantity"] ?? null))));
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
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "1"))) {
            echo "selected=\"selected\"";
        }
        echo ">Active</option>
                        <option value=\"0\" ";
        // line 347
        if ((array_key_exists("filter_column_active", $context) && (($context["filter_column_active"] ?? null) == "0"))) {
            echo "selected=\"selected\"";
        }
        echo ">Inactive</option>
                      </select>
                    </div>
                  </th>
                  ";
        // line 351
        if ((($context["has_category_filter"] ?? null) == true)) {
            // line 352
            echo "                    <th>
                      ";
            // line 353
            if ( !($context["activate_drag_and_drop"] ?? null)) {
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
($context["limit"] ?? null), "offset" =>         // line 386
($context["offset"] ?? null), "orderBy" =>         // line 387
($context["orderBy"] ?? null), "sortOrder" =>         // line 388
($context["sortOrder"] ?? null), "products" =>         // line 389
($context["products"] ?? null), "last_sql" =>         // line 390
($context["last_sql"] ?? null))));
        // line 391
        echo "
            </table>
          </div>
        </div>

        ";
        // line 396
        if ((($context["product_count_filtered"] ?? null) > 20)) {
            // line 397
            echo "          <div class=\"row\">
            <div class=\"col-md-12\">
              ";
            // line 399
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("PrestaShopBundle:Admin\\Common:pagination", array("limit" =>             // line 400
($context["limit"] ?? null), "offset" => ($context["offset"] ?? null), "total" => ($context["product_count_filtered"] ?? null), "caller_parameters" => ($context["pagination_parameters"] ?? null), "limit_choices" => ($context["pagination_limit_choices"] ?? null))));
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
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 412, "541106336")->display(array_merge($context, array("id" => "catalog_duplicate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_duplicate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Duplicating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 431
        echo "

  ";
        // line 434
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 434, "1290802138")->display(array_merge($context, array("id" => "catalog_activate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_activate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 453
        echo "

  ";
        // line 456
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 456, "832756860")->display(array_merge($context, array("id" => "catalog_deactivate_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_deactivate_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deactivating...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 475
        echo "

  ";
        // line 478
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 478, "1323235787")->display(array_merge($context, array("id" => "catalog_delete_all_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting products", array(), "Admin.Catalog.Notification"), "closable" => true, "progressbar" => array("id" => "catalog_delete_all_progression", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Deleting...", array(), "Admin.Catalog.Notification")), "actions" => array())));
        // line 497
        echo "

  ";
        // line 500
        echo "  ";
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 500, "1930218200")->display(array_merge($context, array("id" => "catalog_deletion_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete products?", array(), "Admin.Catalog.Feature"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete now", array(), "Admin.Actions"), "value" => "confirm", "class" => "btn btn-primary btn-lg")))));
        // line 517
        echo "
  ";
        // line 518
        $this->loadTemplate("@PrestaShop/Admin/Product/catalog.html.twig", "@PrestaShop/Admin/Product/catalog.html.twig", 518, "1529186867")->display(array_merge($context, array("id" => "catalog_sql_query_modal", "title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SQL query", array(), "Admin.Global"), "closable" => true, "actions" => array(0 => array("type" => "button", "label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Export to SQL Manager", array(), "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg")))));
        // line 538
        echo "
";
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
        return array (  641 => 538,  639 => 518,  636 => 517,  633 => 500,  629 => 497,  626 => 478,  622 => 475,  619 => 456,  615 => 453,  612 => 434,  608 => 431,  605 => 412,  597 => 405,  591 => 401,  589 => 400,  588 => 399,  584 => 397,  582 => 396,  575 => 391,  573 => 390,  572 => 389,  571 => 388,  570 => 387,  569 => 386,  568 => 385,  567 => 384,  559 => 379,  553 => 376,  543 => 369,  537 => 366,  530 => 361,  525 => 358,  519 => 356,  513 => 354,  511 => 353,  508 => 352,  506 => 351,  497 => 347,  491 => 346,  484 => 341,  480 => 339,  476 => 337,  474 => 335,  473 => 329,  470 => 328,  468 => 327,  464 => 325,  462 => 323,  461 => 317,  454 => 313,  449 => 311,  439 => 304,  434 => 302,  424 => 295,  419 => 293,  411 => 287,  409 => 285,  408 => 279,  402 => 275,  398 => 273,  396 => 270,  392 => 269,  389 => 268,  387 => 267,  384 => 266,  382 => 263,  378 => 262,  374 => 260,  370 => 258,  366 => 256,  364 => 253,  360 => 252,  357 => 251,  355 => 250,  351 => 248,  349 => 245,  345 => 244,  341 => 242,  339 => 239,  335 => 238,  331 => 236,  329 => 233,  325 => 232,  321 => 230,  319 => 227,  315 => 226,  309 => 223,  305 => 221,  303 => 218,  299 => 217,  292 => 212,  290 => 211,  289 => 210,  288 => 209,  287 => 208,  286 => 207,  275 => 199,  268 => 195,  264 => 194,  260 => 193,  248 => 184,  242 => 181,  229 => 171,  216 => 161,  202 => 150,  191 => 141,  189 => 139,  188 => 132,  185 => 131,  183 => 122,  179 => 120,  177 => 111,  174 => 110,  172 => 99,  167 => 97,  163 => 96,  159 => 95,  155 => 94,  146 => 88,  127 => 72,  121 => 69,  115 => 66,  111 => 65,  106 => 63,  102 => 62,  98 => 61,  92 => 57,  83 => 51,  74 => 44,  72 => 43,  65 => 39,  61 => 37,  58 => 36,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  35 => 29,  32 => 28,  28 => 25,  26 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_f447b61eb06c34aaf8901e86452b9a999020a32b48df4d61e2f71f6ef6d556f4_541106336 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 422
    public function block_content($context, array $blocks = array())
    {
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
        return array (  711 => 426,  706 => 424,  703 => 423,  700 => 422,  683 => 412,  641 => 538,  639 => 518,  636 => 517,  633 => 500,  629 => 497,  626 => 478,  622 => 475,  619 => 456,  615 => 453,  612 => 434,  608 => 431,  605 => 412,  597 => 405,  591 => 401,  589 => 400,  588 => 399,  584 => 397,  582 => 396,  575 => 391,  573 => 390,  572 => 389,  571 => 388,  570 => 387,  569 => 386,  568 => 385,  567 => 384,  559 => 379,  553 => 376,  543 => 369,  537 => 366,  530 => 361,  525 => 358,  519 => 356,  513 => 354,  511 => 353,  508 => 352,  506 => 351,  497 => 347,  491 => 346,  484 => 341,  480 => 339,  476 => 337,  474 => 335,  473 => 329,  470 => 328,  468 => 327,  464 => 325,  462 => 323,  461 => 317,  454 => 313,  449 => 311,  439 => 304,  434 => 302,  424 => 295,  419 => 293,  411 => 287,  409 => 285,  408 => 279,  402 => 275,  398 => 273,  396 => 270,  392 => 269,  389 => 268,  387 => 267,  384 => 266,  382 => 263,  378 => 262,  374 => 260,  370 => 258,  366 => 256,  364 => 253,  360 => 252,  357 => 251,  355 => 250,  351 => 248,  349 => 245,  345 => 244,  341 => 242,  339 => 239,  335 => 238,  331 => 236,  329 => 233,  325 => 232,  321 => 230,  319 => 227,  315 => 226,  309 => 223,  305 => 221,  303 => 218,  299 => 217,  292 => 212,  290 => 211,  289 => 210,  288 => 209,  287 => 208,  286 => 207,  275 => 199,  268 => 195,  264 => 194,  260 => 193,  248 => 184,  242 => 181,  229 => 171,  216 => 161,  202 => 150,  191 => 141,  189 => 139,  188 => 132,  185 => 131,  183 => 122,  179 => 120,  177 => 111,  174 => 110,  172 => 99,  167 => 97,  163 => 96,  159 => 95,  155 => 94,  146 => 88,  127 => 72,  121 => 69,  115 => 66,  111 => 65,  106 => 63,  102 => 62,  98 => 61,  92 => 57,  83 => 51,  74 => 44,  72 => 43,  65 => 39,  61 => 37,  58 => 36,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  35 => 29,  32 => 28,  28 => 25,  26 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_f447b61eb06c34aaf8901e86452b9a999020a32b48df4d61e2f71f6ef6d556f4_1290802138 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 444
    public function block_content($context, array $blocks = array())
    {
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
        return array (  784 => 448,  779 => 446,  776 => 445,  773 => 444,  756 => 434,  711 => 426,  706 => 424,  703 => 423,  700 => 422,  683 => 412,  641 => 538,  639 => 518,  636 => 517,  633 => 500,  629 => 497,  626 => 478,  622 => 475,  619 => 456,  615 => 453,  612 => 434,  608 => 431,  605 => 412,  597 => 405,  591 => 401,  589 => 400,  588 => 399,  584 => 397,  582 => 396,  575 => 391,  573 => 390,  572 => 389,  571 => 388,  570 => 387,  569 => 386,  568 => 385,  567 => 384,  559 => 379,  553 => 376,  543 => 369,  537 => 366,  530 => 361,  525 => 358,  519 => 356,  513 => 354,  511 => 353,  508 => 352,  506 => 351,  497 => 347,  491 => 346,  484 => 341,  480 => 339,  476 => 337,  474 => 335,  473 => 329,  470 => 328,  468 => 327,  464 => 325,  462 => 323,  461 => 317,  454 => 313,  449 => 311,  439 => 304,  434 => 302,  424 => 295,  419 => 293,  411 => 287,  409 => 285,  408 => 279,  402 => 275,  398 => 273,  396 => 270,  392 => 269,  389 => 268,  387 => 267,  384 => 266,  382 => 263,  378 => 262,  374 => 260,  370 => 258,  366 => 256,  364 => 253,  360 => 252,  357 => 251,  355 => 250,  351 => 248,  349 => 245,  345 => 244,  341 => 242,  339 => 239,  335 => 238,  331 => 236,  329 => 233,  325 => 232,  321 => 230,  319 => 227,  315 => 226,  309 => 223,  305 => 221,  303 => 218,  299 => 217,  292 => 212,  290 => 211,  289 => 210,  288 => 209,  287 => 208,  286 => 207,  275 => 199,  268 => 195,  264 => 194,  260 => 193,  248 => 184,  242 => 181,  229 => 171,  216 => 161,  202 => 150,  191 => 141,  189 => 139,  188 => 132,  185 => 131,  183 => 122,  179 => 120,  177 => 111,  174 => 110,  172 => 99,  167 => 97,  163 => 96,  159 => 95,  155 => 94,  146 => 88,  127 => 72,  121 => 69,  115 => 66,  111 => 65,  106 => 63,  102 => 62,  98 => 61,  92 => 57,  83 => 51,  74 => 44,  72 => 43,  65 => 39,  61 => 37,  58 => 36,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  35 => 29,  32 => 28,  28 => 25,  26 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_f447b61eb06c34aaf8901e86452b9a999020a32b48df4d61e2f71f6ef6d556f4_832756860 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 466
    public function block_content($context, array $blocks = array())
    {
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
        return array (  857 => 470,  852 => 468,  849 => 467,  846 => 466,  829 => 456,  784 => 448,  779 => 446,  776 => 445,  773 => 444,  756 => 434,  711 => 426,  706 => 424,  703 => 423,  700 => 422,  683 => 412,  641 => 538,  639 => 518,  636 => 517,  633 => 500,  629 => 497,  626 => 478,  622 => 475,  619 => 456,  615 => 453,  612 => 434,  608 => 431,  605 => 412,  597 => 405,  591 => 401,  589 => 400,  588 => 399,  584 => 397,  582 => 396,  575 => 391,  573 => 390,  572 => 389,  571 => 388,  570 => 387,  569 => 386,  568 => 385,  567 => 384,  559 => 379,  553 => 376,  543 => 369,  537 => 366,  530 => 361,  525 => 358,  519 => 356,  513 => 354,  511 => 353,  508 => 352,  506 => 351,  497 => 347,  491 => 346,  484 => 341,  480 => 339,  476 => 337,  474 => 335,  473 => 329,  470 => 328,  468 => 327,  464 => 325,  462 => 323,  461 => 317,  454 => 313,  449 => 311,  439 => 304,  434 => 302,  424 => 295,  419 => 293,  411 => 287,  409 => 285,  408 => 279,  402 => 275,  398 => 273,  396 => 270,  392 => 269,  389 => 268,  387 => 267,  384 => 266,  382 => 263,  378 => 262,  374 => 260,  370 => 258,  366 => 256,  364 => 253,  360 => 252,  357 => 251,  355 => 250,  351 => 248,  349 => 245,  345 => 244,  341 => 242,  339 => 239,  335 => 238,  331 => 236,  329 => 233,  325 => 232,  321 => 230,  319 => 227,  315 => 226,  309 => 223,  305 => 221,  303 => 218,  299 => 217,  292 => 212,  290 => 211,  289 => 210,  288 => 209,  287 => 208,  286 => 207,  275 => 199,  268 => 195,  264 => 194,  260 => 193,  248 => 184,  242 => 181,  229 => 171,  216 => 161,  202 => 150,  191 => 141,  189 => 139,  188 => 132,  185 => 131,  183 => 122,  179 => 120,  177 => 111,  174 => 110,  172 => 99,  167 => 97,  163 => 96,  159 => 95,  155 => 94,  146 => 88,  127 => 72,  121 => 69,  115 => 66,  111 => 65,  106 => 63,  102 => 62,  98 => 61,  92 => 57,  83 => 51,  74 => 44,  72 => 43,  65 => 39,  61 => 37,  58 => 36,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  35 => 29,  32 => 28,  28 => 25,  26 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_f447b61eb06c34aaf8901e86452b9a999020a32b48df4d61e2f71f6ef6d556f4_1323235787 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 488
    public function block_content($context, array $blocks = array())
    {
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
        return array (  930 => 492,  925 => 490,  922 => 489,  919 => 488,  902 => 478,  857 => 470,  852 => 468,  849 => 467,  846 => 466,  829 => 456,  784 => 448,  779 => 446,  776 => 445,  773 => 444,  756 => 434,  711 => 426,  706 => 424,  703 => 423,  700 => 422,  683 => 412,  641 => 538,  639 => 518,  636 => 517,  633 => 500,  629 => 497,  626 => 478,  622 => 475,  619 => 456,  615 => 453,  612 => 434,  608 => 431,  605 => 412,  597 => 405,  591 => 401,  589 => 400,  588 => 399,  584 => 397,  582 => 396,  575 => 391,  573 => 390,  572 => 389,  571 => 388,  570 => 387,  569 => 386,  568 => 385,  567 => 384,  559 => 379,  553 => 376,  543 => 369,  537 => 366,  530 => 361,  525 => 358,  519 => 356,  513 => 354,  511 => 353,  508 => 352,  506 => 351,  497 => 347,  491 => 346,  484 => 341,  480 => 339,  476 => 337,  474 => 335,  473 => 329,  470 => 328,  468 => 327,  464 => 325,  462 => 323,  461 => 317,  454 => 313,  449 => 311,  439 => 304,  434 => 302,  424 => 295,  419 => 293,  411 => 287,  409 => 285,  408 => 279,  402 => 275,  398 => 273,  396 => 270,  392 => 269,  389 => 268,  387 => 267,  384 => 266,  382 => 263,  378 => 262,  374 => 260,  370 => 258,  366 => 256,  364 => 253,  360 => 252,  357 => 251,  355 => 250,  351 => 248,  349 => 245,  345 => 244,  341 => 242,  339 => 239,  335 => 238,  331 => 236,  329 => 233,  325 => 232,  321 => 230,  319 => 227,  315 => 226,  309 => 223,  305 => 221,  303 => 218,  299 => 217,  292 => 212,  290 => 211,  289 => 210,  288 => 209,  287 => 208,  286 => 207,  275 => 199,  268 => 195,  264 => 194,  260 => 193,  248 => 184,  242 => 181,  229 => 171,  216 => 161,  202 => 150,  191 => 141,  189 => 139,  188 => 132,  185 => 131,  183 => 122,  179 => 120,  177 => 111,  174 => 110,  172 => 99,  167 => 97,  163 => 96,  159 => 95,  155 => 94,  146 => 88,  127 => 72,  121 => 69,  115 => 66,  111 => 65,  106 => 63,  102 => 62,  98 => 61,  92 => 57,  83 => 51,  74 => 44,  72 => 43,  65 => 39,  61 => 37,  58 => 36,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  35 => 29,  32 => 28,  28 => 25,  26 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_f447b61eb06c34aaf8901e86452b9a999020a32b48df4d61e2f71f6ef6d556f4_1930218200 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 511
    public function block_content($context, array $blocks = array())
    {
        // line 512
        echo "      <div class=\"modal-body\">
        ";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("These products will be deleted for good. Please confirm.", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "
      </div>
    ";
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
        return array (  998 => 513,  995 => 512,  992 => 511,  975 => 500,  930 => 492,  925 => 490,  922 => 489,  919 => 488,  902 => 478,  857 => 470,  852 => 468,  849 => 467,  846 => 466,  829 => 456,  784 => 448,  779 => 446,  776 => 445,  773 => 444,  756 => 434,  711 => 426,  706 => 424,  703 => 423,  700 => 422,  683 => 412,  641 => 538,  639 => 518,  636 => 517,  633 => 500,  629 => 497,  626 => 478,  622 => 475,  619 => 456,  615 => 453,  612 => 434,  608 => 431,  605 => 412,  597 => 405,  591 => 401,  589 => 400,  588 => 399,  584 => 397,  582 => 396,  575 => 391,  573 => 390,  572 => 389,  571 => 388,  570 => 387,  569 => 386,  568 => 385,  567 => 384,  559 => 379,  553 => 376,  543 => 369,  537 => 366,  530 => 361,  525 => 358,  519 => 356,  513 => 354,  511 => 353,  508 => 352,  506 => 351,  497 => 347,  491 => 346,  484 => 341,  480 => 339,  476 => 337,  474 => 335,  473 => 329,  470 => 328,  468 => 327,  464 => 325,  462 => 323,  461 => 317,  454 => 313,  449 => 311,  439 => 304,  434 => 302,  424 => 295,  419 => 293,  411 => 287,  409 => 285,  408 => 279,  402 => 275,  398 => 273,  396 => 270,  392 => 269,  389 => 268,  387 => 267,  384 => 266,  382 => 263,  378 => 262,  374 => 260,  370 => 258,  366 => 256,  364 => 253,  360 => 252,  357 => 251,  355 => 250,  351 => 248,  349 => 245,  345 => 244,  341 => 242,  339 => 239,  335 => 238,  331 => 236,  329 => 233,  325 => 232,  321 => 230,  319 => 227,  315 => 226,  309 => 223,  305 => 221,  303 => 218,  299 => 217,  292 => 212,  290 => 211,  289 => 210,  288 => 209,  287 => 208,  286 => 207,  275 => 199,  268 => 195,  264 => 194,  260 => 193,  248 => 184,  242 => 181,  229 => 171,  216 => 161,  202 => 150,  191 => 141,  189 => 139,  188 => 132,  185 => 131,  183 => 122,  179 => 120,  177 => 111,  174 => 110,  172 => 99,  167 => 97,  163 => 96,  159 => 95,  155 => 94,  146 => 88,  127 => 72,  121 => 69,  115 => 66,  111 => 65,  106 => 63,  102 => 62,  98 => 61,  92 => 57,  83 => 51,  74 => 44,  72 => 43,  65 => 39,  61 => 37,  58 => 36,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  35 => 29,  32 => 28,  28 => 25,  26 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}


/* @PrestaShop/Admin/Product/catalog.html.twig */
class __TwigTemplate_f447b61eb06c34aaf8901e86452b9a999020a32b48df4d61e2f71f6ef6d556f4_1529186867 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 529
    public function block_content($context, array $blocks = array())
    {
        // line 530
        echo "      <form method=\"post\" action=\"";
        echo twig_escape_filter($this->env, ($context["sql_manager_add_link"] ?? null), "html", null, true);
        echo "\" id=\"catalog_sql_query_modal_content\">
        <div class=\"modal-body\">
          <textarea name=\"sql\" rows=\"20\" cols=\"65\"></textarea>
          <input type=\"hidden\" name=\"name\" value=\"\" />
        </div>
      </form>
    ";
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
        return array (  1062 => 530,  1059 => 529,  1042 => 518,  998 => 513,  995 => 512,  992 => 511,  975 => 500,  930 => 492,  925 => 490,  922 => 489,  919 => 488,  902 => 478,  857 => 470,  852 => 468,  849 => 467,  846 => 466,  829 => 456,  784 => 448,  779 => 446,  776 => 445,  773 => 444,  756 => 434,  711 => 426,  706 => 424,  703 => 423,  700 => 422,  683 => 412,  641 => 538,  639 => 518,  636 => 517,  633 => 500,  629 => 497,  626 => 478,  622 => 475,  619 => 456,  615 => 453,  612 => 434,  608 => 431,  605 => 412,  597 => 405,  591 => 401,  589 => 400,  588 => 399,  584 => 397,  582 => 396,  575 => 391,  573 => 390,  572 => 389,  571 => 388,  570 => 387,  569 => 386,  568 => 385,  567 => 384,  559 => 379,  553 => 376,  543 => 369,  537 => 366,  530 => 361,  525 => 358,  519 => 356,  513 => 354,  511 => 353,  508 => 352,  506 => 351,  497 => 347,  491 => 346,  484 => 341,  480 => 339,  476 => 337,  474 => 335,  473 => 329,  470 => 328,  468 => 327,  464 => 325,  462 => 323,  461 => 317,  454 => 313,  449 => 311,  439 => 304,  434 => 302,  424 => 295,  419 => 293,  411 => 287,  409 => 285,  408 => 279,  402 => 275,  398 => 273,  396 => 270,  392 => 269,  389 => 268,  387 => 267,  384 => 266,  382 => 263,  378 => 262,  374 => 260,  370 => 258,  366 => 256,  364 => 253,  360 => 252,  357 => 251,  355 => 250,  351 => 248,  349 => 245,  345 => 244,  341 => 242,  339 => 239,  335 => 238,  331 => 236,  329 => 233,  325 => 232,  321 => 230,  319 => 227,  315 => 226,  309 => 223,  305 => 221,  303 => 218,  299 => 217,  292 => 212,  290 => 211,  289 => 210,  288 => 209,  287 => 208,  286 => 207,  275 => 199,  268 => 195,  264 => 194,  260 => 193,  248 => 184,  242 => 181,  229 => 171,  216 => 161,  202 => 150,  191 => 141,  189 => 139,  188 => 132,  185 => 131,  183 => 122,  179 => 120,  177 => 111,  174 => 110,  172 => 99,  167 => 97,  163 => 96,  159 => 95,  155 => 94,  146 => 88,  127 => 72,  121 => 69,  115 => 66,  111 => 65,  106 => 63,  102 => 62,  98 => 61,  92 => 57,  83 => 51,  74 => 44,  72 => 43,  65 => 39,  61 => 37,  58 => 36,  52 => 33,  48 => 32,  44 => 31,  40 => 30,  35 => 29,  32 => 28,  28 => 25,  26 => 26,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Product/catalog.html.twig", "/home/dev/www/src/PrestaShopBundle/Resources/views/Admin/Product/catalog.html.twig");
    }
}
