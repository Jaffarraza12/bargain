<?php

/* extension/checkout/order_success_page.twig */
class __TwigTemplate_dc8c7d46e96557776852fff6aa9c3e7725069ce2c86247a10b661b0b831ac82e extends Twig_Template
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
        // line 1
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
\t\t<button onclick=\"\$('.stay').val(1);\" type=\"submit\" form=\"form-order_success_page\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " & stay\" class=\"btn btn-success1\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " & stay </button>
\t\t<a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"Back to Onepagecheckout\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i> Back</a></div>
\t\t<h1>";
        // line 8
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t  <ul class=\"breadcrumb\">
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "        <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t  </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
     ";
        // line 17
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 18
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "\t
\t";
        // line 23
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 24
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 28
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> <?php echo \$text_edit; ?></h3>
\t\t<div class=\"pull-right\">
\t\t\t\t<b>Stores : </b><select onchange=\"location = this.options[this.selectedIndex].value;\" name=\"store_id\">
\t\t\t\t<option value=\"";
        // line 33
        echo (isset($context["store_action"]) ? $context["store_action"] : null);
        echo "&store_id=0\">";
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>
\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 35
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) {
                // line 36
                echo "\t\t\t\t\t<option selected=\"selected\" value=\"";
                echo (isset($context["store_action"]) ? $context["store_action"] : null);
                echo "&store_id=";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 38
                echo "\t\t\t\t\t<option value=\"";
                echo (isset($context["store_action"]) ? $context["store_action"] : null);
                echo "&store_id=";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t\t\t\t</select>
\t\t\t</div>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 45
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-order_success_page\" class=\"form-horizontal\">
\t\t  <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-cog\"></i> ";
        // line 47
        echo (isset($context["tab_general"]) ? $context["tab_general"] : null);
        echo "</a></li>
            <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-eye\"></i> ";
        // line 48
        echo (isset($context["tab_page"]) ? $context["tab_page"] : null);
        echo " Setting <span class=\"caret\"></span></a> 
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"#tab-order\" data-toggle=\"tab\"><i class=\"fa fa-eye\"></i> Default Layout</a></li>
\t\t\t\t</ul>
\t\t\t</li>
            <li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-language\"></i> ";
        // line 53
        echo (isset($context["tab_language"]) ? $context["tab_language"] : null);
        echo " <span class=\"caret\"></span></a>
\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t<li><a href=\"#tab-general_setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> General Setting</a></li>
\t\t\t\t\t<li><a href=\"#tab-page_setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> Page Setting</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li><a href=\"#tab-promote_product\" data-toggle=\"tab\"><i class=\"fa fa-tags fw\"></i>  ";
        // line 59
        echo (isset($context["tab_promote_product"]) ? $context["tab_promote_product"] : null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-analytics\" data-toggle=\"tab\"><i class=\"fa fa-line-chart\"></i>  ";
        // line 60
        echo (isset($context["tab_analytics"]) ? $context["tab_analytics"] : null);
        echo "</a></li>
            <li><a href=\"#tab-support\" data-toggle=\"tab\"><i class=\"fa fa-external-link\"></i> ";
        // line 61
        echo (isset($context["tab_support"]) ? $context["tab_support"] : null);
        echo "</a></li>
          </ul>
\t\t  <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 66
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t  <select name=\"order_success_page_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t<?php if (\$order_success_page_status) { ?>
\t\t\t\t\t";
        // line 70
        if ((isset($context["order_success_page_status"]) ? $context["order_success_page_status"] : null)) {
            // line 71
            echo "\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\">";
            // line 72
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t";
        } else {
            // line 74
            echo "\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 75
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t  </select>
\t\t\t\t  <input type=\"hidden\" name=\"stay\" class=\"stay\" value=\"0\"/>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order_order\"><span  data-toggle=\"tooltip\" title=\"";
        // line 82
        echo (isset($context["help_order_invoice"]) ? $context["help_order_invoice"] : null);
        echo "\">";
        echo (isset($context["entry_order_invoice"]) ? $context["entry_order_invoice"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 85
        if ((isset($context["order_success_page_order_invoice"]) ? $context["order_success_page_order_invoice"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 86
        if ((isset($context["order_success_page_order_invoice"]) ? $context["order_success_page_order_invoice"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_order_invoice\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 88
        if ( !(isset($context["order_success_page_order_invoice"]) ? $context["order_success_page_order_invoice"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 89
        if ( !(isset($context["order_success_page_order_invoice"]) ? $context["order_success_page_order_invoice"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_order_invoice\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order_order\"><span  data-toggle=\"tooltip\" title=\"";
        // line 95
        echo (isset($context["help_print_invoice"]) ? $context["help_print_invoice"] : null);
        echo "\">";
        echo (isset($context["entry_print_invoice"]) ? $context["entry_print_invoice"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 98
        if ((isset($context["order_success_page_print_invoice"]) ? $context["order_success_page_print_invoice"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 99
        if ((isset($context["order_success_page_print_invoice"]) ? $context["order_success_page_print_invoice"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_print_invoice\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 101
        if ( !(isset($context["order_success_page_print_invoice"]) ? $context["order_success_page_print_invoice"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 102
        if ( !(isset($context["order_success_page_print_invoice"]) ? $context["order_success_page_print_invoice"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_print_invoice\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t    <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-address\"><span  data-toggle=\"tooltip\" title=\"";
        // line 108
        echo (isset($context["help_bank_details"]) ? $context["help_bank_details"] : null);
        echo "\">";
        echo (isset($context["entry_bank_details"]) ? $context["entry_bank_details"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 111
        if ((isset($context["order_success_page_bank_details_status"]) ? $context["order_success_page_bank_details_status"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 112
        if ((isset($context["order_success_page_bank_details_status"]) ? $context["order_success_page_bank_details_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_bank_details_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 114
        if ( !(isset($context["order_success_page_bank_details_status"]) ? $context["order_success_page_bank_details_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 115
        if ( !(isset($context["order_success_page_bank_details_status"]) ? $context["order_success_page_bank_details_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_bank_details_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-order\">
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order_no\"><span  data-toggle=\"tooltip\" title=\"";
        // line 123
        echo (isset($context["help_order_details"]) ? $context["help_order_details"] : null);
        echo "\">";
        echo (isset($context["entry_order_details"]) ? $context["entry_order_details"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 126
        if ((isset($context["order_success_page_order_details"]) ? $context["order_success_page_order_details"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 127
        if ((isset($context["order_success_page_order_details"]) ? $context["order_success_page_order_details"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_order_details\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 129
        if ( !(isset($context["order_success_page_order_details"]) ? $context["order_success_page_order_details"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 130
        if ( !(isset($context["order_success_page_order_details"]) ? $context["order_success_page_order_details"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_order_details\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order-details\"><span  data-toggle=\"tooltip\" title=\"";
        // line 136
        echo (isset($context["help_order_comment"]) ? $context["help_order_comment"] : null);
        echo "\">";
        echo (isset($context["entry_order_comments"]) ? $context["entry_order_comments"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 139
        if ((isset($context["order_success_page_comment_status"]) ? $context["order_success_page_comment_status"] : null)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 140
        if ((isset($context["order_success_page_comment_status"]) ? $context["order_success_page_comment_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_comment_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 142
        if ( !(isset($context["order_success_page_comment_status"]) ? $context["order_success_page_comment_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 143
        if ( !(isset($context["order_success_page_comment_status"]) ? $context["order_success_page_comment_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_comment_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-address\"><span  data-toggle=\"tooltip\" title=\"";
        // line 149
        echo (isset($context["help_payment_address"]) ? $context["help_payment_address"] : null);
        echo "\">";
        echo (isset($context["entry_payment_address"]) ? $context["entry_payment_address"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 152
        if ((isset($context["order_success_page_payment_address_status"]) ? $context["order_success_page_payment_address_status"] : null)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 153
        if ((isset($context["order_success_page_payment_address_status"]) ? $context["order_success_page_payment_address_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_payment_address_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 155
        if ( !(isset($context["order_success_page_payment_address_status"]) ? $context["order_success_page_payment_address_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 156
        if ( !(isset($context["order_success_page_payment_address_status"]) ? $context["order_success_page_payment_address_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_payment_address_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shipping-address\"><span  data-toggle=\"tooltip\" title=\"";
        // line 162
        echo (isset($context["help_shipping_address"]) ? $context["help_shipping_address"] : null);
        echo "\">";
        echo (isset($context["entry_shipping_address"]) ? $context["entry_shipping_address"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 165
        if ((isset($context["order_success_page_shipping_address_status"]) ? $context["order_success_page_shipping_address_status"] : null)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 166
        if ((isset($context["order_success_page_shipping_address_status"]) ? $context["order_success_page_shipping_address_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_shipping_address_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 168
        if ( !(isset($context["order_success_page_shipping_address_status"]) ? $context["order_success_page_shipping_address_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 169
        if ( !(isset($context["order_success_page_shipping_address_status"]) ? $context["order_success_page_shipping_address_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_shipping_address_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_height\">";
        // line 175
        echo (isset($context["entry_image_height"]) ? $context["entry_image_height"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input type=\"text\" name=\"order_success_page_width\" class=\"form-control\" value=\"";
        // line 178
        echo (isset($context["order_success_page_width"]) ? $context["order_success_page_width"] : null);
        echo "\"/> 
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t  <input type=\"text\" name=\"order_success_page_height\" class=\"form-control\" value=\"";
        // line 181
        echo (isset($context["order_success_page_height"]) ? $context["order_success_page_height"] : null);
        echo "\"/>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title-background-color\">Title Background Color</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input type=\"text\" name=\"order_success_page_title_backgound\" class=\"form-control color\" value=\"";
        // line 189
        echo (isset($context["order_success_page_title_backgound"]) ? $context["order_success_page_title_backgound"] : null);
        echo "\"/> 
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-title-color\">Title Color</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t<input type=\"text\" name=\"order_success_page_title_color\" class=\"form-control color\" value=\"";
        // line 197
        echo (isset($context["order_success_page_title_color"]) ? $context["order_success_page_title_color"] : null);
        echo "\"/> 
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 206
        echo (isset($context["entry_show_image"]) ? $context["entry_show_image"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Product Name</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Model</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Sku</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Quantity</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Unit Price</th>
\t\t\t\t\t\t\t\t<th class=\"text-left\">Total</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 220
        if ((isset($context["order_success_page_product_image_status"]) ? $context["order_success_page_product_image_status"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 221
        if ((isset($context["order_success_page_product_image_status"]) ? $context["order_success_page_product_image_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_image_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 223
        if ( !(isset($context["order_success_page_product_image_status"]) ? $context["order_success_page_product_image_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 224
        if ( !(isset($context["order_success_page_product_image_status"]) ? $context["order_success_page_product_image_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_image_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 232
        if ((isset($context["order_success_page_product_name_status"]) ? $context["order_success_page_product_name_status"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 233
        if ((isset($context["order_success_page_product_name_status"]) ? $context["order_success_page_product_name_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_name_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 235
        if ( !(isset($context["order_success_page_product_name_status"]) ? $context["order_success_page_product_name_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 236
        if ( !(isset($context["order_success_page_product_name_status"]) ? $context["order_success_page_product_name_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_name_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 244
        if ((isset($context["order_success_page_product_model_status"]) ? $context["order_success_page_product_model_status"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 245
        if ((isset($context["order_success_page_product_model_status"]) ? $context["order_success_page_product_model_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_model_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 247
        if ( !(isset($context["order_success_page_product_model_status"]) ? $context["order_success_page_product_model_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 248
        if ( !(isset($context["order_success_page_product_model_status"]) ? $context["order_success_page_product_model_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_model_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 256
        if ((isset($context["order_success_page_product_sku_status"]) ? $context["order_success_page_product_sku_status"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 257
        if ((isset($context["order_success_page_product_sku_status"]) ? $context["order_success_page_product_sku_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_sku_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 259
        if ( !(isset($context["order_success_page_product_sku_status"]) ? $context["order_success_page_product_sku_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 260
        if ( !(isset($context["order_success_page_product_sku_status"]) ? $context["order_success_page_product_sku_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_sku_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 268
        if ((isset($context["order_success_page_product_qty_status"]) ? $context["order_success_page_product_qty_status"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 269
        if ((isset($context["order_success_page_product_qty_status"]) ? $context["order_success_page_product_qty_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_qty_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 271
        if ( !(isset($context["order_success_page_product_qty_status"]) ? $context["order_success_page_product_qty_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 272
        if ( !(isset($context["order_success_page_product_qty_status"]) ? $context["order_success_page_product_qty_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_qty_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 280
        if ((isset($context["order_success_page_product_unit_price_status"]) ? $context["order_success_page_product_unit_price_status"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 281
        if ((isset($context["order_success_page_product_unit_price_status"]) ? $context["order_success_page_product_unit_price_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_unit_price_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 283
        if ( !(isset($context["order_success_page_product_unit_price_status"]) ? $context["order_success_page_product_unit_price_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 284
        if ( !(isset($context["order_success_page_product_unit_price_status"]) ? $context["order_success_page_product_unit_price_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_unit_price_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 292
        if ((isset($context["order_success_page_product_total_status"]) ? $context["order_success_page_product_total_status"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 293
        if ((isset($context["order_success_page_product_total_status"]) ? $context["order_success_page_product_total_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_total_status\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 295
        if ( !(isset($context["order_success_page_product_total_status"]) ? $context["order_success_page_product_total_status"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 296
        if ( !(isset($context["order_success_page_product_total_status"]) ? $context["order_success_page_product_total_status"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_product_total_status\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-general_setting\">
\t\t\t\t<ul class=\"nav nav-tabs\" id=\"language\">
\t\t\t\t\t";
        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 310
            echo "\t\t\t\t\t  <li><a href=\"#language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "\t\t\t\t</ul>
\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 314
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 315
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order\">";
            // line 317
            echo (isset($context["entry_order_heading"]) ? $context["entry_order_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_order_heading";
            // line 319
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_order_heading"]) ? $context["order_success_page_order_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_order_heading"]) ? $context["order_success_page_order_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order-message\">Successfull Message for Guest User</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <textarea name=\"order_success_page_guest_message";
            // line 326
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control summernote\">";
            echo (($this->getAttribute((isset($context["order_success_page_guest_message"]) ? $context["order_success_page_guest_message"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_guest_message"]) ? $context["order_success_page_guest_message"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<h3>Short codes</h3>
\t\t\t\t\t\t\t\t{order_id} = Order Id<br/>
\t\t\t\t\t\t\t\t{first_name} = First Name<br/>
\t\t\t\t\t\t\t\t{last_name} = Last Name<br/>
\t\t\t\t\t\t\t\t{account} = Account Page<br/>
\t\t\t\t\t\t\t\t{order_history} = Order History Page<br/>
\t\t\t\t\t\t\t\t{downloads} = Download Page<br/>
\t\t\t\t\t\t\t\t{contact_us} = Contact Us<br/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order-message\">Successfull Message for Registered User</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <textarea name=\"order_success_page_register_message";
            // line 342
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" class=\"form-control summernote\">";
            echo (($this->getAttribute((isset($context["order_success_page_register_message"]) ? $context["order_success_page_register_message"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_register_message"]) ? $context["order_success_page_register_message"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<h3>Short codes</h3>
\t\t\t\t\t\t\t\t{order_id} = Order Id<br/>
\t\t\t\t\t\t\t\t{first_name} = First Name<br/>
\t\t\t\t\t\t\t\t{last_name} = Last Name<br/>
\t\t\t\t\t\t\t\t{account} = Account Page<br/>
\t\t\t\t\t\t\t\t{order_history} = Order History Page<br/>
\t\t\t\t\t\t\t\t{downloads} = Download Page<br/>
\t\t\t\t\t\t\t\t{contact_us} = Contact Us<br/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"tab-pane\" id=\"tab-page_setting\">
\t\t\t\t<ul class=\"nav nav-tabs\" id=\"languagetext\">
\t\t\t\t\t";
        // line 362
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 363
            echo "\t\t\t\t\t  <li><a href=\"#languagetext";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /> ";
            echo $this->getAttribute($context["language"], "name", array());
            echo "</a></li>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 365
        echo "\t\t\t\t</ul>
\t\t\t    <div class=\"tab-content\">
\t\t\t\t\t";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 368
            echo "\t\t\t\t\t<div class=\"tab-pane\" id=\"languagetext";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order\">";
            // line 370
            echo (isset($context["entry_order_details_heading"]) ? $context["entry_order_details_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_order_details_heading";
            // line 372
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_order_details_heading"]) ? $context["order_success_page_order_details_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_order_details_heading"]) ? $context["order_success_page_order_details_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order\">";
            // line 376
            echo (isset($context["entry_order_comments"]) ? $context["entry_order_comments"] : null);
            echo " Heading</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_order_comment_heading";
            // line 378
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_order_comment_heading"]) ? $context["order_success_page_order_comment_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_order_comment_heading"]) ? $context["order_success_page_order_comment_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order\">";
            // line 382
            echo (isset($context["entry_payment_address"]) ? $context["entry_payment_address"] : null);
            echo " Heading</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_payment_address_heading";
            // line 384
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_payment_address_heading"]) ? $context["order_success_page_payment_address_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_payment_address_heading"]) ? $context["order_success_page_payment_address_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order\">";
            // line 388
            echo (isset($context["entry_shipping_address"]) ? $context["entry_shipping_address"] : null);
            echo " Heading</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_shipping_address_heading";
            // line 390
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_shipping_address_heading"]) ? $context["order_success_page_shipping_address_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_shipping_address_heading"]) ? $context["order_success_page_shipping_address_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order\">";
            // line 394
            echo (isset($context["entry_bank_details"]) ? $context["entry_bank_details"] : null);
            echo " Heading</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_bank_details_heading";
            // line 396
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_bank_details_heading"]) ? $context["order_success_page_bank_details_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_bank_details_heading"]) ? $context["order_success_page_bank_details_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Image Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_image_title";
            // line 402
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_image_title"]) ? $context["order_success_page_image_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_image_title"]) ? $context["order_success_page_image_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Product Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_product_title";
            // line 408
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_product_title"]) ? $context["order_success_page_product_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_product_title"]) ? $context["order_success_page_product_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Model Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_model_title";
            // line 414
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_model_title"]) ? $context["order_success_page_model_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_model_title"]) ? $context["order_success_page_model_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Sku Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_sku_title";
            // line 420
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_sku_title"]) ? $context["order_success_page_sku_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_sku_title"]) ? $context["order_success_page_sku_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Quantity Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_qty_title";
            // line 426
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_qty_title"]) ? $context["order_success_page_qty_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_qty_title"]) ? $context["order_success_page_qty_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Unit Price Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_unit_title";
            // line 432
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_unit_title"]) ? $context["order_success_page_unit_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_unit_title"]) ? $context["order_success_page_unit_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Total Title</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_total_title";
            // line 438
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_total_title"]) ? $context["order_success_page_total_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_total_title"]) ? $context["order_success_page_total_title"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Print Invoice Text</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_print_invoice_text";
            // line 444
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_print_invoice_text"]) ? $context["order_success_page_print_invoice_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_print_invoice_text"]) ? $context["order_success_page_print_invoice_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_title\">Continue Button Text</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_continue_text";
            // line 450
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_continue_text"]) ? $context["order_success_page_continue_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_continue_text"]) ? $context["order_success_page_continue_text"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-order\">";
            // line 454
            echo (isset($context["entry_promote_products"]) ? $context["entry_promote_products"] : null);
            echo " Heading</label>
\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t  <input type=\"text\" class=\"form-control\" name=\"order_success_page_shipping_promote_product_heading";
            // line 456
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" value=\"";
            echo (($this->getAttribute((isset($context["order_success_page_shipping_promote_product_heading"]) ? $context["order_success_page_shipping_promote_product_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute((isset($context["order_success_page_shipping_promote_product_heading"]) ? $context["order_success_page_shipping_promote_product_heading"] : null), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 461
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-promote_product\">
\t\t\t\t <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-payment-address\"><span  data-toggle=\"tooltip\" title=\"";
        // line 465
        echo (isset($context["help_promote_products"]) ? $context["help_promote_products"] : null);
        echo "\">";
        echo (isset($context["entry_promote_products"]) ? $context["entry_promote_products"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 468
        if ((isset($context["order_success_page_promote_products"]) ? $context["order_success_page_promote_products"] : null)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 469
        if ((isset($context["order_success_page_promote_products"]) ? $context["order_success_page_promote_products"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " name=\"order_success_page_promote_products\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 471
        if ( !(isset($context["order_success_page_promote_products"]) ? $context["order_success_page_promote_products"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 472
        if ( !(isset($context["order_success_page_promote_products"]) ? $context["order_success_page_promote_products"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  name=\"order_success_page_promote_products\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-promote-product\"><span  data-toggle=\"tooltip\" title=\"";
        // line 478
        echo (isset($context["help_products"]) ? $context["help_products"] : null);
        echo "\">";
        echo (isset($context["entry_products"]) ? $context["entry_products"] : null);
        echo "</span></label>
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<input type=\"text\" name=\"promote_products\" value=\"\" placeholder=\"";
        // line 480
        echo (isset($context["entry_products"]) ? $context["entry_products"] : null);
        echo "\" id=\"input-product\" class=\"form-control\" />
\t\t\t\t\t<div id=\"promote-product\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t<?php foreach (\$products as \$product) { ?>
\t\t\t\t\t";
        // line 483
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 484
            echo "\t\t\t\t\t<div id=\"promote-product";
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo $this->getAttribute($context["product"], "name", array());
            echo "
\t\t\t\t\t  <input type=\"hidden\" name=\"order_success_page_product[]\" value=\"";
            // line 485
            echo $this->getAttribute($context["product"], "product_id", array());
            echo "\" />
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 488
        echo "\t\t\t\t  </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t  <div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_height\">";
        // line 492
        echo (isset($context["entry_image_height"]) ? $context["entry_image_height"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t<input type=\"text\" name=\"order_success_page_promote_product_width\" class=\"form-control\" value=\"";
        // line 495
        echo (isset($context["order_success_page_promote_product_width"]) ? $context["order_success_page_promote_product_width"] : null);
        echo "\"/> 
\t\t\t\t    </div>
\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t  <input type=\"text\" name=\"order_success_page_promote_product_height\" class=\"form-control\" value=\"";
        // line 498
        echo (isset($context["order_success_page_promote_product_height"]) ? $context["order_success_page_promote_product_height"] : null);
        echo "\"/>
\t\t\t\t    </div>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-analytics\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-google_analytics\">";
        // line 505
        echo (isset($context["entry_google_analytics"]) ? $context["entry_google_analytics"] : null);
        echo "</label>
\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t<textarea class=\"form-control\" rows=\"5\" name=\"order_success_page_google_analytics\">";
        // line 507
        echo (isset($context["order_success_page_google_analytics"]) ? $context["order_success_page_google_analytics"] : null);
        echo "</textarea>
\t\t\t\t</div>
\t\t\t  </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-support\">
\t\t\t  <p class=\"text-center\">For Support and Query Feel Free to contact:<br /><strong>extensionsbazaar@gmail.com</strong></p>
\t\t\t</div>
\t\t  </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('input[name=\\'promote_products\\']').autocomplete({
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 525
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(item) {
\t\t\$('input[name=\\'promote_products\\']').val('');
\t\t
\t\t\$('#promote-product' + item['value']).remove();
\t\t
\t\t\$('#promote-product').append('<div id=\"promote-product' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"order_success_page_product[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});
\t
\$('#promote-product').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script><!--
\$(document).ready(function() {
\t// Override summernotes image manager
\t\$('.summernote').each(function() {
\t\tvar element = this;
\t\t
\t\t\$(element).summernote({
\t\t\tdisableDragAndDrop: true,
\t\t\theight: 200,
\t\t\temptyPara: '',
\t\t\ttoolbar: [
\t\t\t\t['style', ['style']],
\t\t\t\t['font', ['bold', 'underline', 'clear']],
\t\t\t\t['fontname', ['fontname']],
\t\t\t\t['color', ['color']],
\t\t\t\t['para', ['ul', 'ol', 'paragraph']],
\t\t\t\t['table', ['table']],
\t\t\t\t['insert', ['link', 'image', 'video']],
\t\t\t\t['view', ['fullscreen', 'codeview', 'help']]
\t\t\t],
\t\t\tbuttons: {
    \t\t\timage: function() {
\t\t\t\t\tvar ui = \$.summernote.ui;

\t\t\t\t\t// create button
\t\t\t\t\tvar button = ui.button({
\t\t\t\t\t\tcontents: '<i class=\"note-icon-picture\" />',
\t\t\t\t\t\ttooltip: \$.summernote.lang[\$.summernote.options.lang].image.image,
\t\t\t\t\t\tclick: function () {
\t\t\t\t\t\t\t\$('#modal-image').remove();
\t\t\t\t\t\t
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=common/filemanager&token=' + getURLVar('token'),
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\t\t\$('#button-image i').replaceWith('<i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t\t\t\t\t\t\t\t\$('#button-image').prop('disabled', true);
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\t\$('#button-image i').replaceWith('<i class=\"fa fa-upload\"></i>');
\t\t\t\t\t\t\t\t\t\$('#button-image').prop('disabled', false);
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\$('body').append('<div id=\"modal-image\" class=\"modal\">' + html + '</div>');
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#modal-image').modal('show');
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\$('#modal-image').delegate('a.thumbnail', 'click', function(e) {
\t\t\t\t\t\t\t\t\t\te.preventDefault();
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$(element).summernote('insertImage', \$(this).attr('href'));
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\$('#modal-image').modal('hide');
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t
\t\t\t\t\treturn button.render();
\t\t\t\t}
  \t\t\t}
\t\t});
\t});
\t
});
//--></script> 
<link href=\"view/javascript/colorpicker/css/bootstrap-colorpicker.css\" rel=\"stylesheet\">
<script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
\$('#languagetext a:first').tab('show');
//--></script>
<script src=\"view/javascript/colorpicker/js/colorpicker-color.js\"></script>
<script src=\"view/javascript/colorpicker/js/colorpicker.js\"></script>
<script src=\"view/javascript/colorpicker/js/docs.js\"></script>
<script>
\$(function(){
 \$('.color').colorpicker();
});
</script>

<style>
.btn-success1{
    background-color:#8fbb6c;
    border-color:#7aae50;
    color:#fff;
}
.dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus{
\tbackground-color:#75a74d;
}
.dropdown-menu > li > a {
\tpadding: 6px 20px;
}
.nav-tabs .dropdown-menu{
\tmin-width: 267px;
}

.form-horizontal .control-label {
\tpadding-top: 5px;
}

.btn-success {
\tbackground-color: #fff;
\tcolor: #000;
\tborder-color: #ddd;
}
.btn-success1{
    background-color:#8fbb6c;
    border-color:#7aae50;
    color:#fff;
}
.btn-success1:hover{
    color:#fff;
}
</style>
";
        // line 667
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/checkout/order_success_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1438 => 667,  1293 => 525,  1272 => 507,  1267 => 505,  1257 => 498,  1251 => 495,  1245 => 492,  1239 => 488,  1230 => 485,  1223 => 484,  1219 => 483,  1213 => 480,  1206 => 478,  1193 => 472,  1187 => 471,  1178 => 469,  1172 => 468,  1164 => 465,  1158 => 461,  1145 => 456,  1140 => 454,  1131 => 450,  1120 => 444,  1109 => 438,  1098 => 432,  1087 => 426,  1076 => 420,  1065 => 414,  1054 => 408,  1043 => 402,  1032 => 396,  1027 => 394,  1018 => 390,  1013 => 388,  1004 => 384,  999 => 382,  990 => 378,  985 => 376,  976 => 372,  971 => 370,  965 => 368,  961 => 367,  957 => 365,  940 => 363,  936 => 362,  929 => 357,  906 => 342,  885 => 326,  873 => 319,  868 => 317,  862 => 315,  858 => 314,  854 => 312,  837 => 310,  833 => 309,  813 => 296,  807 => 295,  798 => 293,  792 => 292,  777 => 284,  771 => 283,  762 => 281,  756 => 280,  741 => 272,  735 => 271,  726 => 269,  720 => 268,  705 => 260,  699 => 259,  690 => 257,  684 => 256,  669 => 248,  663 => 247,  654 => 245,  648 => 244,  633 => 236,  627 => 235,  618 => 233,  612 => 232,  597 => 224,  591 => 223,  582 => 221,  576 => 220,  559 => 206,  547 => 197,  536 => 189,  525 => 181,  519 => 178,  513 => 175,  500 => 169,  494 => 168,  485 => 166,  479 => 165,  471 => 162,  458 => 156,  452 => 155,  443 => 153,  437 => 152,  429 => 149,  416 => 143,  410 => 142,  401 => 140,  395 => 139,  387 => 136,  374 => 130,  368 => 129,  359 => 127,  353 => 126,  345 => 123,  330 => 115,  324 => 114,  315 => 112,  309 => 111,  301 => 108,  288 => 102,  282 => 101,  273 => 99,  267 => 98,  259 => 95,  246 => 89,  240 => 88,  231 => 86,  225 => 85,  217 => 82,  210 => 77,  205 => 75,  200 => 74,  195 => 72,  190 => 71,  188 => 70,  181 => 66,  173 => 61,  169 => 60,  165 => 59,  156 => 53,  148 => 48,  144 => 47,  139 => 45,  133 => 41,  127 => 40,  117 => 38,  107 => 36,  104 => 35,  100 => 34,  94 => 33,  87 => 28,  79 => 24,  77 => 23,  74 => 22,  66 => 18,  64 => 17,  58 => 13,  47 => 11,  43 => 10,  38 => 8,  34 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/* 		<button onclick="$('.stay').val(1);" type="submit" form="form-order_success_page" data-toggle="tooltip" title="{{button_save}} & stay" class="btn btn-success1"><i class="fa fa-save"></i> {{button_save}} & stay </button>*/
/* 		<a href="{{cancel}}" data-toggle="tooltip" title="Back to Onepagecheckout" class="btn btn-default"><i class="fa fa-reply"></i> Back</a></div>*/
/* 		<h1>{{heading_title}}</h1>*/
/* 	  <ul class="breadcrumb">*/
/* 		{% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/* 	  </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*      {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* 	*/
/* 	{% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i>{{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo $text_edit; ?></h3>*/
/* 		<div class="pull-right">*/
/* 				<b>Stores : </b><select onchange="location = this.options[this.selectedIndex].value;" name="store_id">*/
/* 				<option value="{{store_action}}&store_id=0">{{ text_default }}</option>*/
/* 				{% for store in stores %}*/
/* 					{% if store.store_id==store_id %}*/
/* 					<option selected="selected" value="{{store_action}}&store_id={{store.store_id}}">{{store.name}}</option>*/
/* 					{% else %}*/
/* 					<option value="{{store_action}}&store_id={{store.store_id}}">{{store.name}}</option>*/
/* 					{% endif %}*/
/* 				{% endfor %}*/
/* 				</select>*/
/* 			</div>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <form action="{{action}}" method="post" enctype="multipart/form-data" id="form-order_success_page" class="form-horizontal">*/
/* 		  <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-general" data-toggle="tab"><i class="fa fa-cog"></i> {{tab_general}}</a></li>*/
/*             <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-eye"></i> {{tab_page}} Setting <span class="caret"></span></a> */
/* 				<ul class="dropdown-menu">*/
/* 					<li><a href="#tab-order" data-toggle="tab"><i class="fa fa-eye"></i> Default Layout</a></li>*/
/* 				</ul>*/
/* 			</li>*/
/*             <li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-language"></i> {{tab_language}} <span class="caret"></span></a>*/
/* 				<ul class="dropdown-menu">*/
/* 					<li><a href="#tab-general_setting" data-toggle="tab"><i class="fa fa-language"></i> General Setting</a></li>*/
/* 					<li><a href="#tab-page_setting" data-toggle="tab"><i class="fa fa-language"></i> Page Setting</a></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li><a href="#tab-promote_product" data-toggle="tab"><i class="fa fa-tags fw"></i>  {{tab_promote_product}}</a></li>*/
/* 			<li><a href="#tab-analytics" data-toggle="tab"><i class="fa fa-line-chart"></i>  {{tab_analytics}}</a></li>*/
/*             <li><a href="#tab-support" data-toggle="tab"><i class="fa fa-external-link"></i> {{tab_support}}</a></li>*/
/*           </ul>*/
/* 		  <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-general">*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-status">{{entry_status}}</label>*/
/* 				<div class="col-sm-5">*/
/* 				  <select name="order_success_page_status" id="input-status" class="form-control">*/
/* 					<?php if ($order_success_page_status) { ?>*/
/* 					{% if order_success_page_status %}*/
/* 					<option value="1" selected="selected">{{text_enabled}}</option>*/
/* 					<option value="0">{{text_disabled}}</option>*/
/* 					{% else %}*/
/* 					<option value="1">{{text_enabled}}</option>*/
/* 					<option value="0" selected="selected">{{text_disabled}}</option>*/
/* 					{% endif %}*/
/* 				  </select>*/
/* 				  <input type="hidden" name="stay" class="stay" value="0"/>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-order_order"><span  data-toggle="tooltip" title="{{help_order_invoice}}">{{entry_order_invoice}}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="btn-group" data-toggle="buttons">*/
/* 						<label class="btn btn-success btn-sm {% if order_success_page_order_invoice  %} active {% endif %}" >	*/
/* 							<input type="radio" {% if order_success_page_order_invoice  %} checked="checked" {% endif %} name="order_success_page_order_invoice"  value="1" autocomplete="off">{{text_yes}}*/
/* 						</label>*/
/* 						<label class="btn btn-success btn-sm {% if not order_success_page_order_invoice  %} active {% endif %}">*/
/* 							<input type="radio" {% if not order_success_page_order_invoice  %} checked="checked" {% endif %} name="order_success_page_order_invoice"  value="0" autocomplete="off">{{text_no}}*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-order_order"><span  data-toggle="tooltip" title="{{help_print_invoice}}">{{entry_print_invoice}}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="btn-group" data-toggle="buttons">*/
/* 						<label class="btn btn-success btn-sm {% if order_success_page_print_invoice  %} active {% endif %}" >	*/
/* 							<input type="radio" {% if order_success_page_print_invoice  %} checked="checked" {% endif %}  name="order_success_page_print_invoice"  value="1" autocomplete="off">{{text_yes}}*/
/* 						</label>*/
/* 						<label class="btn btn-success btn-sm {% if not order_success_page_print_invoice  %} active {% endif %}">*/
/* 							<input type="radio" {% if not order_success_page_print_invoice  %} checked="checked" {% endif %}  name="order_success_page_print_invoice"  value="0" autocomplete="off">{{text_no}}*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			    <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-shipping-address"><span  data-toggle="tooltip" title="{{help_bank_details}}">{{entry_bank_details}}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="btn-group" data-toggle="buttons">*/
/* 						<label class="btn btn-success btn-sm {% if order_success_page_bank_details_status  %} active {% endif %}" >	*/
/* 							<input type="radio" {% if order_success_page_bank_details_status  %} checked="checked" {% endif %}  name="order_success_page_bank_details_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 						</label>*/
/* 						<label class="btn btn-success btn-sm {% if not order_success_page_bank_details_status  %} active {% endif %}">*/
/* 							<input type="radio" {% if not order_success_page_bank_details_status  %} checked="checked" {% endif %} name="order_success_page_bank_details_status"  value="0" autocomplete="off">{{text_no}}*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-order">*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-order_no"><span  data-toggle="tooltip" title="{{help_order_details}}">{{entry_order_details}}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="btn-group" data-toggle="buttons">*/
/* 						<label class="btn btn-success btn-sm {% if order_success_page_order_details  %} active {% endif %}" >	*/
/* 							<input type="radio" {% if order_success_page_order_details  %} checked="checked" {% endif %} name="order_success_page_order_details"  value="1" autocomplete="off">{{text_yes}}*/
/* 						</label>*/
/* 						<label class="btn btn-success btn-sm {% if not order_success_page_order_details  %} active {% endif %}">*/
/* 							<input type="radio" {% if not order_success_page_order_details  %} checked="checked" {% endif %}  name="order_success_page_order_details"  value="0" autocomplete="off">{{text_no}}*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-order-details"><span  data-toggle="tooltip" title="{{help_order_comment}}">{{entry_order_comments}}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="btn-group" data-toggle="buttons">*/
/* 						<label class="btn btn-success btn-sm {% if order_success_page_comment_status  %} active {% endif %}">	*/
/* 							<input type="radio" {% if order_success_page_comment_status  %} checked="checked" {% endif %} name="order_success_page_comment_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 						</label>*/
/* 						<label class="btn btn-success btn-sm {% if not order_success_page_comment_status  %} active {% endif %}">*/
/* 							<input type="radio" {% if not order_success_page_comment_status  %} checked="checked" {% endif %} name="order_success_page_comment_status"  value="0" autocomplete="off">{{text_no}}*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-payment-address"><span  data-toggle="tooltip" title="{{help_payment_address}}">{{entry_payment_address}}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="btn-group" data-toggle="buttons">*/
/* 						<label class="btn btn-success btn-sm {% if order_success_page_payment_address_status  %} active {% endif %}">	*/
/* 							<input type="radio" {% if order_success_page_payment_address_status  %} checked="checked" {% endif %} name="order_success_page_payment_address_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 						</label>*/
/* 						<label class="btn btn-success btn-sm {% if not order_success_page_payment_address_status  %} active {% endif %}">*/
/* 							<input type="radio" {% if not order_success_page_payment_address_status  %} checked="checked" {% endif %} name="order_success_page_payment_address_status"  value="0" autocomplete="off">{{text_no}}*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-shipping-address"><span  data-toggle="tooltip" title="{{help_shipping_address}}">{{entry_shipping_address}}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="btn-group" data-toggle="buttons">*/
/* 						<label class="btn btn-success btn-sm {% if order_success_page_shipping_address_status  %} active {% endif %}">	*/
/* 							<input type="radio" {% if order_success_page_shipping_address_status  %} checked="checked" {% endif %} name="order_success_page_shipping_address_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 						</label>*/
/* 						<label class="btn btn-success btn-sm {% if not order_success_page_shipping_address_status  %} active {% endif %}">*/
/* 							<input type="radio" {% if not order_success_page_shipping_address_status  %} checked="checked" {% endif %} name="order_success_page_shipping_address_status"  value="0" autocomplete="off">{{text_no}}*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-image_height">{{entry_image_height}}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="col-sm-3">*/
/* 						<input type="text" name="order_success_page_width" class="form-control" value="{{order_success_page_width}}"/> */
/* 				    </div>*/
/* 					<div class="col-sm-3">*/
/* 					  <input type="text" name="order_success_page_height" class="form-control" value="{{order_success_page_height}}"/>*/
/* 				    </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-title-background-color">Title Background Color</label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="col-sm-3">*/
/* 						<input type="text" name="order_success_page_title_backgound" class="form-control color" value="{{order_success_page_title_backgound}}"/> */
/* 				    </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-title-color">Title Color</label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="col-sm-3">*/
/* 						<input type="text" name="order_success_page_title_color" class="form-control color" value="{{order_success_page_title_color}}"/> */
/* 				    </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<div class="col-sm-12">*/
/* 					<table class="table table-bordered">*/
/* 						<thead>*/
/* 							<tr>*/
/* 								<th class="text-left">{{entry_show_image}}</th>*/
/* 								<th class="text-left">Product Name</th>*/
/* 								<th class="text-left">Model</th>*/
/* 								<th class="text-left">Sku</th>*/
/* 								<th class="text-left">Quantity</th>*/
/* 								<th class="text-left">Unit Price</th>*/
/* 								<th class="text-left">Total</th>*/
/* 							</tr>*/
/* 						</thead>*/
/* 						<tbody>*/
/* 							<tr>*/
/* 								<td class="text-left">*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if order_success_page_product_image_status  %} active {% endif %}" >	*/
/* 												<input type="radio" {% if order_success_page_product_image_status  %} checked="checked" {% endif %}  name="order_success_page_product_image_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not order_success_page_product_image_status  %} active {% endif %}">*/
/* 												<input type="radio" {% if not order_success_page_product_image_status  %} checked="checked" {% endif %}  name="order_success_page_product_image_status"  value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if order_success_page_product_name_status  %} active {% endif %}" >	*/
/* 												<input type="radio" {% if order_success_page_product_name_status  %} checked="checked" {% endif %}  name="order_success_page_product_name_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not order_success_page_product_name_status  %} active {% endif %}">*/
/* 												<input type="radio" {% if not order_success_page_product_name_status  %} checked="checked" {% endif %}  name="order_success_page_product_name_status"  value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if order_success_page_product_model_status  %} active {% endif %}" >	*/
/* 												<input type="radio" {% if order_success_page_product_model_status  %} checked="checked" {% endif %}  name="order_success_page_product_model_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not order_success_page_product_model_status  %} active {% endif %}">*/
/* 												<input type="radio" {% if not order_success_page_product_model_status  %} checked="checked" {% endif %}  name="order_success_page_product_model_status"  value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if order_success_page_product_sku_status  %} active {% endif %}" >	*/
/* 												<input type="radio" {% if order_success_page_product_sku_status  %} checked="checked" {% endif %}  name="order_success_page_product_sku_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not order_success_page_product_sku_status  %} active {% endif %}">*/
/* 												<input type="radio" {% if not order_success_page_product_sku_status  %} checked="checked" {% endif %}  name="order_success_page_product_sku_status"  value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if order_success_page_product_qty_status  %} active {% endif %}" >	*/
/* 												<input type="radio" {% if order_success_page_product_qty_status  %} checked="checked" {% endif %}  name="order_success_page_product_qty_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not order_success_page_product_qty_status  %} active {% endif %}">*/
/* 												<input type="radio" {% if not order_success_page_product_qty_status  %} checked="checked" {% endif %}  name="order_success_page_product_qty_status"  value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if order_success_page_product_unit_price_status  %} active {% endif %}" >	*/
/* 												<input type="radio" {% if order_success_page_product_unit_price_status  %} checked="checked" {% endif %}  name="order_success_page_product_unit_price_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not order_success_page_product_unit_price_status  %} active {% endif %}">*/
/* 												<input type="radio" {% if not order_success_page_product_unit_price_status  %} checked="checked" {% endif %}  name="order_success_page_product_unit_price_status"  value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</td>*/
/* 								<td class="text-left">*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if order_success_page_product_total_status  %} active {% endif %}" >	*/
/* 												<input type="radio" {% if order_success_page_product_total_status  %} checked="checked" {% endif %}  name="order_success_page_product_total_status"  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not order_success_page_product_total_status  %} active {% endif %}">*/
/* 												<input type="radio" {% if not order_success_page_product_total_status  %} checked="checked" {% endif %}  name="order_success_page_product_total_status"  value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</td>*/
/* 							</tr>*/
/* 						</tbody>*/
/* 					</table>*/
/* 				</div>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-general_setting">*/
/* 				<ul class="nav nav-tabs" id="language">*/
/* 					{% for language in languages %}*/
/* 					  <li><a href="#language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 				<div class="tab-content">*/
/* 					{% for language in languages %}*/
/* 					<div class="tab-pane" id="language{{language.language_id}}">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order">{{entry_order_heading}}</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_order_heading{{language.language_id}}" value="{{order_success_page_order_heading[language.language_id] ? order_success_page_order_heading[language.language_id]}}"/>*/
/* 							</div>*/
/* 							*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order-message">Successfull Message for Guest User</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <textarea name="order_success_page_guest_message{{language.language_id}}" class="form-control summernote">{{order_success_page_guest_message[language.language_id] ? order_success_page_guest_message[language.language_id]}}</textarea>*/
/* 							</div>*/
/* 							<div class="col-sm-3">*/
/* 								<h3>Short codes</h3>*/
/* 								{order_id} = Order Id<br/>*/
/* 								{first_name} = First Name<br/>*/
/* 								{last_name} = Last Name<br/>*/
/* 								{account} = Account Page<br/>*/
/* 								{order_history} = Order History Page<br/>*/
/* 								{downloads} = Download Page<br/>*/
/* 								{contact_us} = Contact Us<br/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order-message">Successfull Message for Registered User</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <textarea name="order_success_page_register_message{{language.language_id}}" class="form-control summernote">{{order_success_page_register_message[language.language_id] ? order_success_page_register_message[language.language_id]}}</textarea>*/
/* 							</div>*/
/* 							<div class="col-sm-3">*/
/* 								<h3>Short codes</h3>*/
/* 								{order_id} = Order Id<br/>*/
/* 								{first_name} = First Name<br/>*/
/* 								{last_name} = Last Name<br/>*/
/* 								{account} = Account Page<br/>*/
/* 								{order_history} = Order History Page<br/>*/
/* 								{downloads} = Download Page<br/>*/
/* 								{contact_us} = Contact Us<br/>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="tab-pane" id="tab-page_setting">*/
/* 				<ul class="nav nav-tabs" id="languagetext">*/
/* 					{% for language in languages %}*/
/* 					  <li><a href="#languagetext{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 					{% endfor %}*/
/* 				</ul>*/
/* 			    <div class="tab-content">*/
/* 					{% for language in languages %}*/
/* 					<div class="tab-pane" id="languagetext{{language.language_id}}">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order">{{entry_order_details_heading}}</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_order_details_heading{{language.language_id}}" value="{{order_success_page_order_details_heading[language.language_id] ? order_success_page_order_details_heading[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order">{{entry_order_comments}} Heading</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_order_comment_heading{{language.language_id}}" value="{{order_success_page_order_comment_heading[language.language_id] ? order_success_page_order_comment_heading[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order">{{entry_payment_address}} Heading</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_payment_address_heading{{language.language_id}}" value="{{order_success_page_payment_address_heading[language.language_id] ? order_success_page_payment_address_heading[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order">{{entry_shipping_address}} Heading</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_shipping_address_heading{{language.language_id}}" value="{{order_success_page_shipping_address_heading[language.language_id] ? order_success_page_shipping_address_heading[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order">{{entry_bank_details}} Heading</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_bank_details_heading{{language.language_id}}" value="{{order_success_page_bank_details_heading[language.language_id] ? order_success_page_bank_details_heading[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Image Title</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_image_title{{language.language_id}}" value="{{order_success_page_image_title[language.language_id] ? order_success_page_image_title[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Product Title</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_product_title{{language.language_id}}" value="{{order_success_page_product_title[language.language_id] ? order_success_page_product_title[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Model Title</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_model_title{{language.language_id}}" value="{{order_success_page_model_title[language.language_id] ? order_success_page_model_title[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Sku Title</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_sku_title{{language.language_id}}" value="{{order_success_page_sku_title[language.language_id] ? order_success_page_sku_title[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Quantity Title</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_qty_title{{language.language_id}}" value="{{order_success_page_qty_title[language.language_id] ? order_success_page_qty_title[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Unit Price Title</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_unit_title{{language.language_id}}" value="{{order_success_page_unit_title[language.language_id] ? order_success_page_unit_title[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Total Title</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_total_title{{language.language_id}}" value="{{order_success_page_total_title[language.language_id] ? order_success_page_total_title[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Print Invoice Text</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_print_invoice_text{{language.language_id}}" value="{{order_success_page_print_invoice_text[language.language_id] ? order_success_page_print_invoice_text[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-image_title">Continue Button Text</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_continue_text{{language.language_id}}" value="{{order_success_page_continue_text[language.language_id] ? order_success_page_continue_text[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-order">{{entry_promote_products}} Heading</label>*/
/* 							<div class="col-sm-7">*/
/* 							  <input type="text" class="form-control" name="order_success_page_shipping_promote_product_heading{{language.language_id}}" value="{{order_success_page_shipping_promote_product_heading[language.language_id] ? order_success_page_shipping_promote_product_heading[language.language_id]}}"/>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				</div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-promote_product">*/
/* 				 <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-payment-address"><span  data-toggle="tooltip" title="{{help_promote_products}}">{{entry_promote_products}}</span></label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="btn-group" data-toggle="buttons">*/
/* 						<label class="btn btn-success btn-sm {% if order_success_page_promote_products  %} active {% endif %}" >	*/
/* 							<input type="radio" {% if order_success_page_promote_products  %} checked="checked" {% endif %} name="order_success_page_promote_products"  value="1" autocomplete="off">{{text_yes}}*/
/* 						</label>*/
/* 						<label class="btn btn-success btn-sm {% if not order_success_page_promote_products  %} active {% endif %}">*/
/* 							<input type="radio" {% if not order_success_page_promote_products  %} checked="checked" {% endif %}  name="order_success_page_promote_products"  value="0" autocomplete="off">{{text_no}}*/
/* 						</label>*/
/* 					</div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-promote-product"><span  data-toggle="tooltip" title="{{help_products}}">{{entry_products}}</span></label>*/
/* 				<div class="col-sm-4">*/
/* 					<input type="text" name="promote_products" value="" placeholder="{{entry_products}}" id="input-product" class="form-control" />*/
/* 					<div id="promote-product" class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 					<?php foreach ($products as $product) { ?>*/
/* 					{% for product in products %}*/
/* 					<div id="promote-product{{product.product_id}}"><i class="fa fa-minus-circle"></i> {{product.name}}*/
/* 					  <input type="hidden" name="order_success_page_product[]" value="{{product.product_id}}" />*/
/* 					</div>*/
/* 					{% endfor %}*/
/* 				  </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			  <div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-image_height">{{entry_image_height}}</label>*/
/* 				<div class="col-sm-10">*/
/* 					<div class="col-sm-2">*/
/* 						<input type="text" name="order_success_page_promote_product_width" class="form-control" value="{{order_success_page_promote_product_width}}"/> */
/* 				    </div>*/
/* 					<div class="col-sm-2">*/
/* 					  <input type="text" name="order_success_page_promote_product_height" class="form-control" value="{{order_success_page_promote_product_height}}"/>*/
/* 				    </div>*/
/* 				</div>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-analytics">*/
/* 				<div class="form-group">*/
/* 				<label class="col-sm-2 control-label" for="input-google_analytics">{{entry_google_analytics}}</label>*/
/* 				<div class="col-sm-7">*/
/* 					<textarea class="form-control" rows="5" name="order_success_page_google_analytics">{{order_success_page_google_analytics}}</textarea>*/
/* 				</div>*/
/* 			  </div>*/
/* 			</div>*/
/* 			<div class="tab-pane" id="tab-support">*/
/* 			  <p class="text-center">For Support and Query Feel Free to contact:<br /><strong>extensionsbazaar@gmail.com</strong></p>*/
/* 			</div>*/
/* 		  </div>*/
/*         </form>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <script type="text/javascript"><!--*/
/* $('input[name=\'promote_products\']').autocomplete({*/
/* 	source: function(request, response) {*/
/* 		$.ajax({*/
/* 			url: 'index.php?route=catalog/product/autocomplete&user_token={{user_token}}&filter_name=' +  encodeURIComponent(request),*/
/* 			dataType: 'json',*/
/* 			success: function(json) {*/
/* 				response($.map(json, function(item) {*/
/* 					return {*/
/* 						label: item['name'],*/
/* 						value: item['product_id']*/
/* 					}*/
/* 				}));*/
/* 			}*/
/* 		});*/
/* 	},*/
/* 	select: function(item) {*/
/* 		$('input[name=\'promote_products\']').val('');*/
/* 		*/
/* 		$('#promote-product' + item['value']).remove();*/
/* 		*/
/* 		$('#promote-product').append('<div id="promote-product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="order_success_page_product[]" value="' + item['value'] + '" /></div>');	*/
/* 	}*/
/* });*/
/* 	*/
/* $('#promote-product').delegate('.fa-minus-circle', 'click', function() {*/
/* 	$(this).parent().remove();*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script><!--*/
/* $(document).ready(function() {*/
/* 	// Override summernotes image manager*/
/* 	$('.summernote').each(function() {*/
/* 		var element = this;*/
/* 		*/
/* 		$(element).summernote({*/
/* 			disableDragAndDrop: true,*/
/* 			height: 200,*/
/* 			emptyPara: '',*/
/* 			toolbar: [*/
/* 				['style', ['style']],*/
/* 				['font', ['bold', 'underline', 'clear']],*/
/* 				['fontname', ['fontname']],*/
/* 				['color', ['color']],*/
/* 				['para', ['ul', 'ol', 'paragraph']],*/
/* 				['table', ['table']],*/
/* 				['insert', ['link', 'image', 'video']],*/
/* 				['view', ['fullscreen', 'codeview', 'help']]*/
/* 			],*/
/* 			buttons: {*/
/*     			image: function() {*/
/* 					var ui = $.summernote.ui;*/
/* */
/* 					// create button*/
/* 					var button = ui.button({*/
/* 						contents: '<i class="note-icon-picture" />',*/
/* 						tooltip: $.summernote.lang[$.summernote.options.lang].image.image,*/
/* 						click: function () {*/
/* 							$('#modal-image').remove();*/
/* 						*/
/* 							$.ajax({*/
/* 								url: 'index.php?route=common/filemanager&token=' + getURLVar('token'),*/
/* 								dataType: 'html',*/
/* 								beforeSend: function() {*/
/* 									$('#button-image i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 									$('#button-image').prop('disabled', true);*/
/* 								},*/
/* 								complete: function() {*/
/* 									$('#button-image i').replaceWith('<i class="fa fa-upload"></i>');*/
/* 									$('#button-image').prop('disabled', false);*/
/* 								},*/
/* 								success: function(html) {*/
/* 									$('body').append('<div id="modal-image" class="modal">' + html + '</div>');*/
/* 									*/
/* 									$('#modal-image').modal('show');*/
/* 									*/
/* 									$('#modal-image').delegate('a.thumbnail', 'click', function(e) {*/
/* 										e.preventDefault();*/
/* 										*/
/* 										$(element).summernote('insertImage', $(this).attr('href'));*/
/* 																	*/
/* 										$('#modal-image').modal('hide');*/
/* 									});*/
/* 								}*/
/* 							});						*/
/* 						}*/
/* 					});*/
/* 				*/
/* 					return button.render();*/
/* 				}*/
/*   			}*/
/* 		});*/
/* 	});*/
/* 	*/
/* });*/
/* //--></script> */
/* <link href="view/javascript/colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet">*/
/* <script type="text/javascript"><!--*/
/* $('#language a:first').tab('show');*/
/* $('#languagetext a:first').tab('show');*/
/* //--></script>*/
/* <script src="view/javascript/colorpicker/js/colorpicker-color.js"></script>*/
/* <script src="view/javascript/colorpicker/js/colorpicker.js"></script>*/
/* <script src="view/javascript/colorpicker/js/docs.js"></script>*/
/* <script>*/
/* $(function(){*/
/*  $('.color').colorpicker();*/
/* });*/
/* </script>*/
/* */
/* <style>*/
/* .btn-success1{*/
/*     background-color:#8fbb6c;*/
/*     border-color:#7aae50;*/
/*     color:#fff;*/
/* }*/
/* .dropdown-menu > .active > a, .dropdown-menu > .active > a:hover, .dropdown-menu > .active > a:focus{*/
/* 	background-color:#75a74d;*/
/* }*/
/* .dropdown-menu > li > a {*/
/* 	padding: 6px 20px;*/
/* }*/
/* .nav-tabs .dropdown-menu{*/
/* 	min-width: 267px;*/
/* }*/
/* */
/* .form-horizontal .control-label {*/
/* 	padding-top: 5px;*/
/* }*/
/* */
/* .btn-success {*/
/* 	background-color: #fff;*/
/* 	color: #000;*/
/* 	border-color: #ddd;*/
/* }*/
/* .btn-success1{*/
/*     background-color:#8fbb6c;*/
/*     border-color:#7aae50;*/
/*     color:#fff;*/
/* }*/
/* .btn-success1:hover{*/
/*     color:#fff;*/
/* }*/
/* </style>*/
/* {{footer}}*/
