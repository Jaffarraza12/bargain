<?php

/* extension/checkout/onepagecheckout.twig */
class __TwigTemplate_cd3b4abe4213ec013ba8d5ae5851b599c7dd64ca5fc086bf3a0aaab18b263fdc extends Twig_Template
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
        echo "
<link type=\"text/css\" href=\"view/stylesheet/onepagecheckout.css\" rel=\"stylesheet\" media=\"screen\" />
";
        // line 3
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
\t\t<button onclick=\"\$('.stay').val(1);\" type=\"submit\" form=\"form-order_success_page\" data-toggle=\"tooltip\" title=\"";
        // line 8
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " & stay\" class=\"btn btn-success1\"><i class=\"fa fa-save\"></i> ";
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo " & stay </button>
\t\t</div>
       <h1>";
        // line 10
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 13
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
        // line 15
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
     ";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 24
        echo "\t ";
        if ((isset($context["success"]) ? $context["success"] : null)) {
            // line 25
            echo "    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i>";
            echo (isset($context["success"]) ? $context["success"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 29
        echo "\t<form action=\"";
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-OnePageCheackout\" class=\"form-horizontal\">
           <input type=\"hidden\" name=\"stay\" class=\"stay\" value=\"0\"/>
    <div class=\"panel panel-default\" id=\"onepagecheackout\">
      <div class=\"panel-heading clearfix\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 33
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h3>
\t\t\t<div class=\"pull-right\">
\t\t\t\t<b>Stores : </b><select onchange=\"location = this.options[this.selectedIndex].value;\" name=\"store_id\">
\t\t\t\t<option value=\"";
        // line 36
        echo (isset($context["store_action"]) ? $context["store_action"] : null);
        echo "&store_id=0\">";
        echo (isset($context["text_default"]) ? $context["text_default"] : null);
        echo "</option>
\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stores"]) ? $context["stores"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 38
            echo "\t\t\t\t\t";
            if (($this->getAttribute($context["store"], "store_id", array()) == (isset($context["store_id"]) ? $context["store_id"] : null))) {
                // line 39
                echo "\t\t\t\t\t<option selected=\"selected\" value=\"";
                echo (isset($context["store_action"]) ? $context["store_action"] : null);
                echo "&store_id=";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
\t\t\t\t\t";
            } else {
                // line 41
                echo "\t\t\t\t\t<option value=\"";
                echo (isset($context["store_action"]) ? $context["store_action"] : null);
                echo "&store_id=";
                echo $this->getAttribute($context["store"], "store_id", array());
                echo "\">";
                echo $this->getAttribute($context["store"], "name", array());
                echo "</option>
\t\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t\t</select>
\t\t\t</div>
      </div>
      <div class=\"panel-body\">
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t<li class=\"dropdown active\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-cog\"></i> ";
        // line 49
        echo (isset($context["entry_general"]) ? $context["entry_general"] : null);
        echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t<li><a href=\"#tab-general\" data-toggle=\"tab\"><i class=\"fa fa-cog\"></i>  ";
        // line 51
        echo (isset($context["entry_general"]) ? $context["entry_general"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t<li><a href=\"#tab-social_login\" data-toggle=\"tab\"><i class=\"fa fa-sign-in aria-hidden=\"true\"></i> ";
        // line 52
        echo (isset($context["entry_social_login"]) ? $context["entry_social_login"] : null);
        echo "</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-eye\"></i> Layout Setting <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#tab-layout\" data-toggle=\"tab\"><i class=\"fa fa-eye\"></i> Layout Setting</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-shopping-cart-setting\" data-toggle=\"tab\"><i class=\"fa fa-shopping-cart\"></i> ";
        // line 58
        echo (isset($context["entry_shopping_cart"]) ? $context["entry_shopping_cart"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-delivery_method-setting\" data-toggle=\"tab\"><i class=\"fa fa-truck\" aria-hidden=\"true\"></i> ";
        // line 59
        echo (isset($context["entry_delivery_method"]) ? $context["entry_delivery_method"] : null);
        echo " </a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-payment_method-setting\" data-toggle=\"tab\"><i class=\"fa fa-credit-card\" aria-hidden=\"true\"></i> ";
        // line 60
        echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
        echo " </a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-delivery-date-time\" data-toggle=\"tab\"><i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i> Estimated Delivery Date</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-confirm_order-setting\" data-toggle=\"tab\"><i class=\"fa fa-cart-plus\" aria-hidden=\"true\"></i> ";
        // line 62
        echo (isset($context["entry_confirm_order"]) ? $context["entry_confirm_order"] : null);
        echo " </a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-check-square-o\"></i> ";
        // line 65
        echo (isset($context["field_manage"]) ? $context["field_manage"] : null);
        echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#tab-personaldetails-setting\" data-toggle=\"tab\"><i class=\"fa fa-cogs\"></i> ";
        // line 67
        echo (isset($context["entry_personaldetails"]) ? $context["entry_personaldetails"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-payment-setting\" data-toggle=\"tab\"><i class=\"fa fa-cogs\"></i> ";
        // line 68
        echo (isset($context["entry_paymentdetails"]) ? $context["entry_paymentdetails"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-delivery-setting\" data-toggle=\"tab\"><i class=\"fa fa-cogs\"></i> ";
        // line 69
        echo (isset($context["entry_delivery_setting"]) ? $context["entry_delivery_setting"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a target=\"_new\" href=\"";
        // line 70
        echo (isset($context["customfeilds"]) ? $context["customfeilds"] : null);
        echo "\"><i class=\"fa fa-cogs\"></i> OpenCart Custom Feilds Settings</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"dropdown\"><a href=\"#\" data-toggle=\"dropdown\"><i class=\"fa fa-language\"></i> ";
        // line 73
        echo (isset($context["entry_language"]) ? $context["entry_language"] : null);
        echo " <span class=\"caret\"></span></a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li><a href=\"#tab-general-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 75
        echo (isset($context["entry_general"]) ? $context["entry_general"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-personaldetails-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 76
        echo (isset($context["entry_personaldetails"]) ? $context["entry_personaldetails"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-paymentdetails-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 77
        echo (isset($context["entry_paymentdetails"]) ? $context["entry_paymentdetails"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-delivery_detail-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 78
        echo (isset($context["entry_delivery_setting"]) ? $context["entry_delivery_setting"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-login-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 79
        echo (isset($context["entry_login"]) ? $context["entry_login"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-delivery_method-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 80
        echo (isset($context["entry_delivery_method"]) ? $context["entry_delivery_method"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-payment_method-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 81
        echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-delivery-language-date-time\" data-toggle=\"tab\"><i class=\"fa fa-language\" aria-hidden=\"true\"></i> Estimated Delivery Date</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-shopping-cart-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 83
        echo (isset($context["entry_shopping_cart"]) ? $context["entry_shopping_cart"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#tab-confirm_order-language-setting\" data-toggle=\"tab\"><i class=\"fa fa-language\"></i> ";
        // line 84
        echo (isset($context["entry_confirm_order"]) ? $context["entry_confirm_order"] : null);
        echo "</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li><a target=\"_blank\" href=\"";
        // line 87
        echo (isset($context["order_success"]) ? $context["order_success"] : null);
        echo "\"><i class=\"fa fa-file-o\" aria-hidden=\"true\"></i> Order Success Page</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-restore\" data-toggle=\"tab\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Restore Settings</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-analytics\" data-toggle=\"tab\"><i class=\"fa fa-line-chart\"></i> Analytics</a></li>
\t\t\t\t\t\t<li><a href=\"#tab-support\" data-toggle=\"tab\"><i class=\"fa fa-user\"></i> Support</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-restore\">
\t\t\t\t\t\t\t<p>If You want to Restore Module Settings to Demo Then It will use this featured.</p>
\t\t\t\t\t\t\t<a href=\"";
        // line 95
        echo (isset($context["restoresetting"]) ? $context["restoresetting"] : null);
        echo "\" class=\"btn btn-primary\">Click Here to Restore</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-analytics\">
\t\t\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rows"]) ? $context["rows"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 99
            echo "\t\t\t\t\t\t <div class=\"row\">
\t\t\t\t\t\t\t  ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["dashboard_1"]) {
                // line 101
                echo "\t\t\t\t\t\t\t  ";
                $context["class"] = sprintf("col-lg-%s %s", $this->getAttribute($context["dashboard_1"], "width", array()), "col-md-3 col-sm-6");
                // line 102
                echo "\t\t\t\t\t\t\t  ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["row"]);
                foreach ($context['_seq'] as $context["_key"] => $context["dashboard_2"]) {
                    // line 103
                    echo "\t\t\t\t\t\t\t  ";
                    if (($this->getAttribute($context["dashboard_2"], "width", array()) > 3)) {
                        // line 104
                        echo "\t\t\t\t\t\t\t  ";
                        $context["class"] = sprintf("col-lg-%s %s", $this->getAttribute($context["dashboard_1"], "width", array()), "col-md-12 col-sm-12");
                        // line 105
                        echo "\t\t\t\t\t\t\t  ";
                    }
                    // line 106
                    echo "\t\t\t\t\t\t\t  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "\t\t\t\t\t\t\t  <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">";
                echo $this->getAttribute($context["dashboard_1"], "output", array());
                echo "</div>
\t\t\t\t\t\t\t  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-layout\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"";
        // line 114
        echo (isset($context["help_register_account"]) ? $context["help_register_account"] : null);
        echo "\">";
        echo (isset($context["entry_register_account"]) ? $context["entry_register_account"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm button-account-type ";
        // line 118
        if ($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "register_status", array(), "array")) {
            echo " active ";
        }
        echo " \">\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[personaldetails][register_status]\" ";
        // line 119
        if ($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "register_status", array(), "array")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm button-account-type ";
        // line 121
        if ( !$this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "register_status", array(), "array")) {
            echo " active ";
        }
        echo " \">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[personaldetails][register_status]\" ";
        // line 122
        if ( !$this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "register_status", array(), "array")) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"";
        // line 128
        echo (isset($context["help_guest_checkout"]) ? $context["help_guest_checkout"] : null);
        echo "\">";
        echo (isset($context["entry_guest_checkout"]) ? $context["entry_guest_checkout"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 132
        if ($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "guest_status", array(), "array")) {
            echo " active ";
        }
        echo " \">\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[personaldetails][guest_status]\" ";
        // line 133
        if ($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "guest_status", array(), "array")) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 135
        if ( !$this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "guest_status", array(), "array")) {
            echo " active ";
        }
        echo "  \">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[personaldetails][guest_status]\" ";
        // line 136
        if ( !$this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "guest_status", array(), "array")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"";
        // line 142
        echo (isset($context["help_enable_login"]) ? $context["help_enable_login"] : null);
        echo "\">";
        echo (isset($context["entry_enable_login"]) ? $context["entry_enable_login"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 146
        if ($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "enable_login", array(), "array")) {
            echo " active ";
        }
        echo " \" >\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[login][enable_login]\" ";
        // line 147
        if ($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "enable_login", array(), "array")) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 150
        if ( !$this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "enable_login", array(), "array")) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[login][enable_login]\" ";
        // line 151
        if ( !$this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "enable_login", array(), "array")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-account_open\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Default select section\">";
        // line 157
        echo (isset($context["entry_account_open"]) ? $context["entry_account_open"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group btn-group-justified\" data-toggle=\"buttons\">\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 161
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array()), "account_open", array()) == "register")) {
            echo " active ";
        }
        echo " \">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[general][account_open]\" ";
        // line 162
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array()), "account_open", array()) == "register")) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"register\" autocomplete=\"off\" />";
        echo (isset($context["entry_register"]) ? $context["entry_register"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 164
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array()), "account_open", array()) == "guest")) {
            echo " active ";
        }
        echo " \">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[general][account_open]\" ";
        // line 165
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array()), "account_open", array()) == "guest")) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"guest\" autocomplete=\"off\" />";
        echo (isset($context["entry_guest"]) ? $context["entry_guest"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 167
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array()), "account_open", array()) == "login")) {
            echo "  active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[general][account_open]\" ";
        // line 168
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array()), "account_open", array()) == "login")) {
            echo "  checked=\"checked\" ";
        }
        echo " value=\"login\" autocomplete=\"off\" />";
        echo (isset($context["entry_login"]) ? $context["entry_login"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>\t\t
\t\t\t\t\t\t\t\t\t</div>\t 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Set the Field Layout. Row = the labels will be on one line with the input. Block style = the labels will be above the inputs.\">Field Layout</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 177
        if ((isset($context["onepagecheckout_field_layout"]) ? $context["onepagecheckout_field_layout"] : null)) {
            echo " active ";
        }
        echo " \">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_field_layout\" ";
        // line 178
        if ((isset($context["onepagecheckout_field_layout"]) ? $context["onepagecheckout_field_layout"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_row"]) ? $context["text_row"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 180
        if ( !(isset($context["onepagecheckout_field_layout"]) ? $context["onepagecheckout_field_layout"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_field_layout\" ";
        // line 181
        if ( !(isset($context["onepagecheckout_field_layout"]) ? $context["onepagecheckout_field_layout"] : null)) {
            echo " checked=\"checked\"  ";
        }
        echo "  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_block"]) ? $context["text_block"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Stop Cart Page and redirect to checkout page\">Stop Cart Page</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 190
        if ((isset($context["onepagecheckout_auto_redirect"]) ? $context["onepagecheckout_auto_redirect"] : null)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_auto_redirect\" ";
        // line 191
        if ((isset($context["onepagecheckout_auto_redirect"]) ? $context["onepagecheckout_auto_redirect"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 193
        if ( !(isset($context["onepagecheckout_auto_redirect"]) ? $context["onepagecheckout_auto_redirect"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_auto_redirect\" ";
        // line 194
        if ( !(isset($context["onepagecheckout_auto_redirect"]) ? $context["onepagecheckout_auto_redirect"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Show Countries which you want\">Show Countries:</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 204
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t\t  ";
            // line 206
            if (twig_in_filter($this->getAttribute($context["country"], "country_id", array()), (isset($context["onepagecheckout_selected_countries"]) ? $context["onepagecheckout_selected_countries"] : null))) {
                // line 207
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"onepagecheckout_selected_countries[]\" value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t";
                // line 208
                echo $this->getAttribute($context["country"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 210
                echo "\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"onepagecheckout_selected_countries[]\" value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t";
                // line 211
                echo $this->getAttribute($context["country"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 213
            echo "\t\t\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t\t \t</div>
\t\t\t\t\t\t\t\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a onclick=\"\$(this).parent().find('input[type=checkbox]').prop('checked', true );\" class=\"btn btn-primary btn-sm\">Selected All</a>
\t\t\t\t\t\t\t\t\t<a onclick=\"\$(this).parent().find('input[type=checkbox]').prop('checked', false );\" class=\"btn btn-danger btn-sm\">Unselected All</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Show Customer Groups which you want\">Show Customer Groups</span></label>
\t\t\t\t\t\t\t  <div class=\"col-sm-6\">
\t\t\t\t\t\t\t   <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> 
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 227
            echo "\t\t\t\t\t\t\t\t<div class=\"checkbox\">
\t\t\t\t\t\t\t\t  <label>
\t\t\t\t\t\t\t\t\t";
            // line 229
            if (twig_in_filter($this->getAttribute($context["customer_group"], "customer_group_id", array()), (isset($context["onepagecheckout_customer_group_display"]) ? $context["onepagecheckout_customer_group_display"] : null))) {
                // line 230
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"onepagecheckout_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t";
                // line 231
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 233
                echo "\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"onepagecheckout_customer_group_display[]\" value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t";
                // line 234
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "
\t\t\t\t\t\t\t\t\t";
            }
            // line 236
            echo "\t\t\t\t\t\t\t\t  </label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a onclick=\"\$(this).parent().find('input[type=checkbox]').prop('checked', true );\" class=\"btn btn-primary btn-sm\">Selected All</a>
\t\t\t\t\t\t\t\t<a onclick=\"\$(this).parent().find('input[type=checkbox]').prop('checked', false );\" class=\"btn btn-danger btn-sm\">Unselected All</a>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t   <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Customer Groups Input Type\">Display Input Type:</span></label>
\t\t\t\t\t\t\t   <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 248
        if ((isset($context["onepagecheckout_customer_group_type"]) ? $context["onepagecheckout_customer_group_type"] : null)) {
            echo " active ";
        }
        echo "  \">\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_customer_group_type\" ";
        // line 249
        if ((isset($context["onepagecheckout_customer_group_type"]) ? $context["onepagecheckout_customer_group_type"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">Radio Button
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 251
        if ( !(isset($context["onepagecheckout_customer_group_type"]) ? $context["onepagecheckout_customer_group_type"] : null)) {
            echo " active ";
        }
        echo " \">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_customer_group_type\" ";
        // line 252
        if ( !(isset($context["onepagecheckout_customer_group_type"]) ? $context["onepagecheckout_customer_group_type"] : null)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">select Box
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane active\" id=\"tab-general\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Checkout status\">";
        // line 260
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<select name=\"onepagecheckout_status\" id=\"input-status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t ";
        // line 263
        if ((isset($context["onepagecheckout_status"]) ? $context["onepagecheckout_status"] : null)) {
            // line 264
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 265
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 267
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 268
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 270
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Opencart has so many payment extensions and every payment extension has there own way. There are no common standard for this. and some extension use different type of things to use like divs, button, input buttons as button with different IDs and clasess for payment confirm button. you need to add another trigger class or an id of the tag. List them here separating by comma , for example .content-confirm-order input[type=submit] .content-confirm-order .button, .content-confirm-order .btn, .content-confirm-order #button-confirm\">Payment Tiggers</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_payment_trigger_button\" value=\"";
        // line 276
        echo (isset($context["onepagecheckout_payment_trigger_button"]) ? $context["onepagecheckout_payment_trigger_button"] : null);
        echo "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-country\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Set Default Country\"> ";
        // line 280
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t  <select name=\"onepagecheckout_country_id\" id=\"input-country\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 284
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["onepagecheckout_country_id"]) ? $context["onepagecheckout_country_id"] : null))) {
                // line 285
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 287
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 289
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        echo "\t\t\t\t\t\t\t\t  </select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-zone\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Set Default zone\">";
        // line 294
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t  <select name=\"onepagecheckout_zone_id\" id=\"input-zone\" class=\"form-control\"></select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t  <div class=\"form-group\">
\t\t\t\t\t\t\t  <label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"";
        // line 300
        echo (isset($context["help_customer_group"]) ? $context["help_customer_group"] : null);
        echo "\">";
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t  <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t<select name=\"onepagecheckout_customer_group_id\" id=\"input-customer-group\" class=\"form-control\">
\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t\t  ";
        // line 304
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 305
            echo "\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["onepagecheckout_customer_group_id"]) ? $context["onepagecheckout_customer_group_id"] : null))) {
                // line 306
                echo "\t\t\t\t\t\t\t\t  <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t  ";
            } else {
                // line 308
                echo "\t\t\t\t\t\t\t\t  <option value=\"";
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\">";
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</option>
\t\t\t\t\t\t\t\t ";
            }
            // line 310
            echo "\t\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t   <div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-postal_code\"><span data-toggle=\"tooltip\" title=\"";
        // line 315
        echo (isset($context["help_postal"]) ? $context["help_postal"] : null);
        echo "\">";
        echo (isset($context["entry_postal_code"]) ? $context["entry_postal_code"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_postal_code\" value=\"";
        // line 317
        echo (isset($context["onepagecheckout_postal_code"]) ? $context["onepagecheckout_postal_code"] : null);
        echo "\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t   </div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery_method-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 323
        echo (isset($context["entry_delivery_method"]) ? $context["entry_delivery_method"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"Default selected Shipping Method\">";
        // line 325
        echo (isset($context["entry_delivery_method"]) ? $context["entry_delivery_method"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"onepagecheckout_default_shipping\">
\t\t\t\t\t\t\t\t\t\t";
        // line 328
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["delivery_methods"]) ? $context["delivery_methods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["delivery_method"]) {
            // line 329
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
            // line 330
            if (($this->getAttribute($context["delivery_method"], "code", array(), "array") == (isset($context["onepagecheckout_default_shipping"]) ? $context["onepagecheckout_default_shipping"] : null))) {
                // line 331
                echo "\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"";
                echo $this->getAttribute($context["delivery_method"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["delivery_method"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 333
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["delivery_method"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["delivery_method"], "title", array());
                echo "</option>\t
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 335
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 336
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<!--26-01-2017-->
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Icon W x H</label>
\t\t\t\t\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_delivery_method_width\" value=\"";
        // line 344
        echo (isset($context["onepagecheckout_delivery_method_width"]) ? $context["onepagecheckout_delivery_method_width"] : null);
        echo "\"/>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_delivery_method_height\" value=\"";
        // line 347
        echo (isset($context["onepagecheckout_delivery_method_height"]) ? $context["onepagecheckout_delivery_method_height"] : null);
        echo "\"/>
\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!--26-01-2017-->
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Reload Payment Methods When customer choose shipping option\">Reload Payment</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 354
        if (((isset($context["onepagecheckout_payment_method_load_payment_method"]) ? $context["onepagecheckout_payment_method_load_payment_method"] : null) == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_payment_method_load_payment_method\" ";
        // line 355
        if (((isset($context["onepagecheckout_payment_method_load_payment_method"]) ? $context["onepagecheckout_payment_method_load_payment_method"] : null) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 357
        if (((isset($context["onepagecheckout_payment_method_load_payment_method"]) ? $context["onepagecheckout_payment_method_load_payment_method"] : null) == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_payment_method_load_payment_method\" ";
        // line 358
        if (((isset($context["onepagecheckout_payment_method_load_payment_method"]) ? $context["onepagecheckout_payment_method_load_payment_method"] : null) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 362
        if ((isset($context["delivery_methods"]) ? $context["delivery_methods"] : null)) {
            // line 363
            echo "\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 366
            echo (isset($context["entry_delivery_method"]) ? $context["entry_delivery_method"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 367
            echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
            // line 368
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t   ";
            // line 372
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["delivery_methods"]) ? $context["delivery_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["delivery_method"]) {
                // line 373
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 374
                echo $this->getAttribute($context["delivery_method"], "title", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><a href=\"\" id=\"thumb-logo";
                // line 376
                echo $this->getAttribute($context["delivery_method"], "code", array());
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo $this->getAttribute($context["delivery_method"], "thumb", array());
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"onepagecheckout_manage[delivery_method][";
                // line 377
                echo $this->getAttribute($context["delivery_method"], "code", array());
                echo "][image]\" value=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array()), $this->getAttribute($context["delivery_method"], "code", array()), array(), "array"), "image", array(), "array");
                echo "\" id=\"input-logo";
                echo $this->getAttribute($context["delivery_method"], "code", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
                // line 384
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array(), "array"), $this->getAttribute($context["delivery_method"], "code", array()), array(), "array"), "status", array(), "array") == 1)) {
                    echo " active ";
                }
                echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[delivery_method][";
                // line 385
                echo $this->getAttribute($context["delivery_method"], "code", array());
                echo "][status]\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array(), "array"), $this->getAttribute($context["delivery_method"], "code", array()), array(), "array"), "status", array(), "array") == 1)) {
                    echo " checked=\"checked\" ";
                }
                echo " value=\"1\" autocomplete=\"off\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
                // line 387
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array(), "array"), $this->getAttribute($context["delivery_method"], "code", array()), array(), "array"), "status", array(), "array") == 0)) {
                    echo " active ";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[delivery_method][";
                // line 388
                echo $this->getAttribute($context["delivery_method"], "code", array());
                echo "][status]\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array(), "array"), $this->getAttribute($context["delivery_method"], "code", array()), array(), "array"), "status", array(), "array") == 0)) {
                    echo " checked=\"checked\" ";
                }
                echo " value=\"0\" autocomplete=\"off\">";
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 396
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t";
        }
        // line 399
        echo "\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-payment_method-setting\">
\t\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<legend>";
        // line 403
        echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-customer-group\"><span data-toggle=\"tooltip\" title=\"Default selected Payment Method\">";
        // line 405
        echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t\t<select class=\"form-control\" name=\"onepagecheckout_default_payment\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 409
            echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 410
            if (($this->getAttribute($context["payment_method"], "code", array(), "array") == (isset($context["onepagecheckout_default_payment"]) ? $context["onepagecheckout_default_payment"] : null))) {
                // line 411
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"";
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 413
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "</option>\t
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 415
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 416
        echo "\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--26-01-2017-->
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Icon W x H</label>
\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_payment_method_width\" value=\"";
        // line 424
        echo (isset($context["onepagecheckout_payment_method_width"]) ? $context["onepagecheckout_payment_method_width"] : null);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t\t <div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_payment_method_height\" value=\"";
        // line 427
        echo (isset($context["onepagecheckout_payment_method_height"]) ? $context["onepagecheckout_payment_method_height"] : null);
        echo "\"/>
\t\t\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Reload Carts When customer choose payment option\">Reload Cart</span></label>
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 433
        if (((isset($context["onepagecheckout_payment_method_load_cart"]) ? $context["onepagecheckout_payment_method_load_cart"] : null) == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_payment_method_load_cart\" ";
        // line 434
        if (((isset($context["onepagecheckout_payment_method_load_cart"]) ? $context["onepagecheckout_payment_method_load_cart"] : null) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 436
        if (((isset($context["onepagecheckout_payment_method_load_cart"]) ? $context["onepagecheckout_payment_method_load_cart"] : null) == 0)) {
            echo " active ";
        }
        echo " >\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_payment_method_load_cart\" ";
        // line 437
        if (((isset($context["onepagecheckout_payment_method_load_cart"]) ? $context["onepagecheckout_payment_method_load_cart"] : null) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!--26-01-2017-->
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
        // line 443
        if ((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) {
            // line 444
            echo "\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 447
            echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
            // line 448
            echo (isset($context["entry_image"]) ? $context["entry_image"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
            // line 449
            echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t";
            // line 453
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                // line 454
                echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 455
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\"><a href=\"\" id=\"thumb-logo";
                // line 457
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
                echo $this->getAttribute($context["payment_method"], "thumb", array());
                echo "\" alt=\"\" title=\"\" data-placeholder=\"";
                echo (isset($context["placeholder"]) ? $context["placeholder"] : null);
                echo "\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"onepagecheckout_manage[payment_method][";
                // line 458
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "][image]\" value=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array()), $this->getAttribute($context["payment_method"], "code", array()), array(), "array"), "image", array(), "array");
                echo "\" id=\"input-logo";
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
                // line 465
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array(), "array"), $this->getAttribute($context["payment_method"], "code", array()), array(), "array"), "status", array(), "array") == 1)) {
                    echo " active ";
                }
                echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[payment_method][";
                // line 466
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "][status]\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array(), "array"), $this->getAttribute($context["payment_method"], "code", array()), array(), "array"), "status", array(), "array") == 1)) {
                    echo " checked=\"checked\" ";
                }
                echo " value=\"1\" autocomplete=\"off\">";
                echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
                // line 468
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array(), "array"), $this->getAttribute($context["payment_method"], "code", array()), array(), "array"), "status", array(), "array") == 0)) {
                    echo " active ";
                }
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[payment_method][";
                // line 469
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "][status]\" ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array(), "array"), $this->getAttribute($context["payment_method"], "code", array()), array(), "array"), "status", array(), "array") == 0)) {
                    echo " checked=\"checked\" ";
                }
                echo " value=\"0\" autocomplete=\"off\">";
                echo (isset($context["text_no"]) ? $context["text_no"] : null);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 477
            echo "\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t";
        }
        // line 480
        echo "\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery-date-time\">
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Enable or Disabled Delivery Date & Time\">Status</span></label>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 486
        if (((isset($context["onepagecheckout_delivery_status"]) ? $context["onepagecheckout_delivery_status"] : null) == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_delivery_status\" ";
        // line 487
        if (((isset($context["onepagecheckout_delivery_status"]) ? $context["onepagecheckout_delivery_status"] : null) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 489
        if (((isset($context["onepagecheckout_delivery_status"]) ? $context["onepagecheckout_delivery_status"] : null) == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_delivery_status\" ";
        // line 490
        if (((isset($context["onepagecheckout_delivery_status"]) ? $context["onepagecheckout_delivery_status"] : null) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Required Delivery Date & Time\">Required Delivery</span></label>
\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 497
        if (((isset($context["onepagecheckout_delivery_required"]) ? $context["onepagecheckout_delivery_required"] : null) == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_delivery_required\" ";
        // line 498
        if (((isset($context["onepagecheckout_delivery_required"]) ? $context["onepagecheckout_delivery_required"] : null) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 500
        if (((isset($context["onepagecheckout_delivery_required"]) ? $context["onepagecheckout_delivery_required"] : null) == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_delivery_required\" ";
        // line 501
        if (((isset($context["onepagecheckout_delivery_required"]) ? $context["onepagecheckout_delivery_required"] : null) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t  <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Availability Days Start From Current Date to next end days\">Availability Days</span></label>
\t\t\t\t\t\t\t  <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t  <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><input class=\"form-control\" type=\"text\" name=\"onepagecheckout_delivery_start_days\" value=\"";
        // line 509
        echo (isset($context["onepagecheckout_delivery_start_days"]) ? $context["onepagecheckout_delivery_start_days"] : null);
        echo "\"/><span class=\"input-group-addon\">Start X Days</span></div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t  <div class=\"col-sm-6\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\"><input class=\"form-control\" type=\"text\" name=\"onepagecheckout_delivery_end_days\" value=\"";
        // line 512
        echo (isset($context["onepagecheckout_delivery_end_days"]) ? $context["onepagecheckout_delivery_end_days"] : null);
        echo "\"/><span class=\"input-group-addon\">End X Days</span></div>
\t\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t   <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Disabled Delivery Dates <br/> Note: Date Format Should be YYYY-MM-DD,YYYY-MM-DD\">Disabled Delivery Dates</span></label>
\t\t\t\t\t\t\t   <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t <textarea class=\"form-control\" name=\"onepagecheckout_delivery_disable_days\">";
        // line 519
        echo (isset($context["onepagecheckout_delivery_disable_days"]) ? $context["onepagecheckout_delivery_disable_days"] : null);
        echo "</textarea>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t   <label class=\"col-sm-2 control-label\"><span data-toggle=\"tooltip\" title=\"Select Weekend\">Weekends</span></label>
\t\t\t\t\t\t\t   <div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t <select multiple class=\"form-control\" name=\"onepagecheckout_delivery_weekend[]\">
\t\t\t\t\t\t\t\t   ";
        // line 526
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weeks"]) ? $context["weeks"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["week"]) {
            // line 527
            echo "\t\t\t\t\t\t\t\t\t";
            if (twig_in_filter($context["key"], (isset($context["onepagecheckout_delivery_weekend"]) ? $context["onepagecheckout_delivery_weekend"] : null))) {
                // line 528
                echo "\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"";
                echo $context["key"];
                echo "\">";
                echo $context["week"];
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 530
                echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $context["key"];
                echo "\">";
                echo $context["week"];
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            // line 532
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['week'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 533
        echo "\t\t\t\t\t\t\t\t </select>
\t\t\t\t\t\t\t   </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-confirm_order-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 539
        echo (isset($context["entry_confirm_order"]) ? $context["entry_confirm_order"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-2 control-label\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Confirm Order auto trigger\">Auto Trigger Confirm Button</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 544
        if ((isset($context["onepagecheckout_autotrigger"]) ? $context["onepagecheckout_autotrigger"] : null)) {
            echo " active ";
        }
        echo " \" >    
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 545
        if ((isset($context["onepagecheckout_autotrigger"]) ? $context["onepagecheckout_autotrigger"] : null)) {
            echo " checked=\"checked\"  ";
        }
        echo "  name=\"onepagecheckout_autotrigger\"  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 547
        if ( !(isset($context["onepagecheckout_autotrigger"]) ? $context["onepagecheckout_autotrigger"] : null)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" ";
        // line 548
        if ( !(isset($context["onepagecheckout_autotrigger"]) ? $context["onepagecheckout_autotrigger"] : null)) {
            echo " checked=\"checked\"  ";
        }
        echo "  name=\"onepagecheckout_autotrigger\"  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<hr/>
\t\t\t\t\t\t\t\t\t\t<div style=\"font-size:14px;\" class=\"alert alert-info\">
\t\t\t\t\t\t\t\t\t\t\tAuto Trigger feature is very appropriate for one-page checkout extension. In Default process, Customer has to click on checkout button and then confirm it again but auto trigger undoubtedly triggers without clicking the second confirm button. The customer just needs to select the payment method and click the checkout button. Order will be placed automatically
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-autotrigger\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Choose payment methods which you want apply auto trigger condition.\">Auto Trigger Payments</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-9\">
\t\t\t\t\t\t\t\t\t<select class=\"form-control\" multiple name=\"onepagecheckout_trigger_payment_method[]\">
\t\t\t\t\t\t\t\t\t\t";
        // line 561
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
            // line 562
            echo "\t\t\t\t\t\t\t\t\t\t";
            if (twig_in_filter($this->getAttribute($context["payment_method"], "code", array()), (isset($context["onepagecheckout_trigger_payment_method"]) ? $context["onepagecheckout_trigger_payment_method"] : null))) {
                // line 563
                echo "\t\t\t\t\t\t\t\t\t\t<option selected=\"selected\" value=\"";
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 565
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["payment_method"], "code", array());
                echo "\">";
                echo $this->getAttribute($context["payment_method"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 567
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 568
        echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-terms\">
\t\t\t\t\t\t\t\t\t<span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Forces people to agree to terms before a customer can checkout.\">";
        // line 573
        echo (isset($context["entry_agree"]) ? $context["entry_agree"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<select name=\"onepagecheckout_manage[confirm_order][terms]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 576
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 577
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 578
            echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t";
            // line 579
            if (($this->getAttribute($context["information"], "information_id", array(), "array") == $this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "terms", array(), "array"))) {
                // line 580
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array(), "array");
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array(), "array");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 582
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array(), "array");
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array(), "array");
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 584
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 585
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group register_newsletter\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-checkout-term-auto\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Auto Checked Checkout Terms\">Auto Checked </span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 593
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "checkout_terms", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[confirm_order][checkout_terms]\" ";
        // line 594
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "checkout_terms", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 596
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "checkout_terms", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[confirm_order][checkout_terms]\" ";
        // line 597
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "checkout_terms", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Enable Order Comment Section\">";
        // line 603
        echo (isset($context["entry_comment_status"]) ? $context["entry_comment_status"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 607
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[confirm_order][comment_status]\" ";
        // line 608
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 610
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[confirm_order][comment_status]\" ";
        // line 611
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Forces people to add Order Comments\">";
        // line 617
        echo (isset($context["entry_require_comment_status"]) ? $context["entry_require_comment_status"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 621
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "require_comment_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[confirm_order][require_comment_status]\" ";
        // line 622
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "require_comment_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 624
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "require_comment_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[confirm_order][require_comment_status]\" ";
        // line 625
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "require_comment_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-shopping-button\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Enable Continue Shopping Button in Checkout page\">";
        // line 631
        echo (isset($context["entry_shopping_button"]) ? $context["entry_shopping_button"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 635
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "shopping_button_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[confirm_order][shopping_button_status]\" ";
        // line 636
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "shopping_button_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 638
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "shopping_button_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[confirm_order][shopping_button_status]\" ";
        // line 639
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "shopping_button_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-social_login\">
\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 648
        echo (isset($context["entry_facebook_login"]) ? $context["entry_facebook_login"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"";
        // line 650
        echo (isset($context["entry_shopping_cart_order"]) ? $context["entry_shopping_cart_order"] : null);
        echo "\" >";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 653
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "social_login", array(), "array"), "facebook_login_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "   \" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[social_login][facebook_login_status]\" ";
        // line 654
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "social_login", array(), "array"), "facebook_login_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 657
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "social_login", array(), "array"), "facebook_login_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[social_login][facebook_login_status]\" ";
        // line 658
        if (( !$this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "social_login", array(), "array"), "facebook_login_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add Redirect URL\">Redirect URL</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<b>";
        // line 666
        echo (isset($context["callback"]) ? $context["callback"] : null);
        echo "</b>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"onepagecheckout_facebook_callback\" value=\"";
        // line 667
        echo (isset($context["callback"]) ? $context["callback"] : null);
        echo "\"/>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add Facebook App ID\">APP ID</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_facebook_appid\" value=\"";
        // line 674
        echo (isset($context["onepagecheckout_facebook_appid"]) ? $context["onepagecheckout_facebook_appid"] : null);
        echo "\" placeholder=\"App ID\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left; margin-top:9px; margin-left:5px;\"><a target=\"_new\" href=\"https://developers.facebook.com/\">Click Here</a> to create new facebook app. </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add Facebook Secret ID\">App Secret </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_facebook_key\" value=\"";
        // line 681
        echo (isset($context["onepagecheckout_facebook_key"]) ? $context["onepagecheckout_facebook_key"] : null);
        echo "\" placeholder=\"App Secret\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<legend><?php echo \$entry_google_login; ?></legend>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"";
        // line 686
        echo (isset($context["entry_shopping_cart_order"]) ? $context["entry_shopping_cart_order"] : null);
        echo "\" >";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 689
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "social_login", array(), "array"), "google_login_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo " \" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[social_login][google_login_status]\" ";
        // line 690
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "social_login", array(), "array"), "google_login_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 693
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "social_login", array(), "array"), "google_login_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo " \">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[social_login][google_login_status]\" ";
        // line 694
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "social_login", array(), "array"), "google_login_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add Redirect URL\">Redirect URL</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t\t\t<b>";
        // line 702
        echo (isset($context["googlecallback"]) ? $context["googlecallback"] : null);
        echo "</b>
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"hidden\" name=\"onepagecheckout_google_callback\" value=\"";
        // line 703
        echo (isset($context["googlecallback"]) ? $context["googlecallback"] : null);
        echo "\"/>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add Google App ID\">APP ID</span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_google_appid\" value=\"";
        // line 710
        echo (isset($context["onepagecheckout_google_appid"]) ? $context["onepagecheckout_google_appid"] : null);
        echo "\" placeholder=\"App ID\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style=\"float:left; margin-top:9px; margin-left:5px;\"><a target=\"_new\" href=\"https://console.cloud.google.com/\">Click Here</a> to create new Google app. </div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Add Google Secret ID\">App Secret </span></label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"text\" name=\"onepagecheckout_google_key\" value=\"";
        // line 717
        echo (isset($context["onepagecheckout_google_key"]) ? $context["onepagecheckout_google_key"] : null);
        echo "\" placeholder=\"App Secret\"/>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-shopping-cart-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 724
        echo (isset($context["entry_shopping_cart"]) ? $context["entry_shopping_cart"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"";
        // line 726
        echo (isset($context["entry_shopping_cart_order"]) ? $context["entry_shopping_cart_order"] : null);
        echo "\" >";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 730
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "shopping_cart_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][shopping_cart_status]\" ";
        // line 731
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "shopping_cart_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 734
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "shopping_cart_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][shopping_cart_status]\" ";
        // line 735
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "shopping_cart_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-weight\"><span  data-toggle=\"tooltip\" title=\"";
        // line 741
        echo (isset($context["entry_show_weight"]) ? $context["entry_show_weight"] : null);
        echo "\" >";
        echo (isset($context["show_weight"]) ? $context["show_weight"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 744
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_weight", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_weight]\" ";
        // line 745
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_weight", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 748
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_weight", array(), "array") == 0)) {
            echo " active ";
        }
        echo " \">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_weight]\" ";
        // line 749
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_weight", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-qnty_update\"><span  data-toggle=\"tooltip\" title=\"";
        // line 755
        echo (isset($context["entry_show_qnty_update"]) ? $context["entry_show_qnty_update"] : null);
        echo "\">";
        echo (isset($context["show_qnty_update"]) ? $context["show_qnty_update"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 759
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_qnty_update", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_qnty_update]\" ";
        // line 760
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_qnty_update", array(), "array") == 1)) {
            echo " checked=checked ";
        }
        echo " value=\"1\" autocomplete=\"off\"> ";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 763
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_qnty_update", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_qnty_update]\" ";
        // line 764
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_qnty_update", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\"> ";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-image_width\">";
        // line 770
        echo (isset($context["show_image_width"]) ? $context["show_image_width"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\"  value=\"";
        // line 772
        echo (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_image_width", array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_image_width", array(), "array")) : (100));
        echo "\"  name=\"onepagecheckout_manage[shopping_cart][show_product_image_width]\" class=\"form-control\" Placeholder=\"";
        echo (isset($context["entry_width"]) ? $context["entry_width"] : null);
        echo "\"; >
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\"  value=\"";
        // line 775
        echo (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_image_height", array(), "array")) ? ($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_image_height", array(), "array")) : (100));
        echo "\"  name=\"onepagecheckout_manage[shopping_cart][show_product_image_height]\" class=\"form-control\" Placeholder=\"";
        echo (isset($context["entry_height"]) ? $context["entry_height"] : null);
        echo "\"; >
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3>Desktop View</h3>
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 782
        echo (isset($context["entry_show_image"]) ? $context["entry_show_image"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 783
        echo (isset($context["entry_show_product_name"]) ? $context["entry_show_product_name"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 784
        echo (isset($context["entry_show_model"]) ? $context["entry_show_model"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 785
        echo (isset($context["entry_show_quantity"]) ? $context["entry_show_quantity"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 786
        echo (isset($context["entry_show_unit_price"]) ? $context["entry_show_unit_price"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 787
        echo (isset($context["entry_show_total_price"]) ? $context["entry_show_total_price"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center hide\">Colspan</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 796
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_image", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_image]\" ";
        // line 797
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_image", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 800
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_image", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][show_product_image]\" ";
        // line 801
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_image", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 809
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_title", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_title]\" ";
        // line 810
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_title", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 813
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_title", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_title]\" ";
        // line 814
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_title", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 822
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_model", array(), "array") == 1)) {
            echo " active ";
        }
        echo " \" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_model]\" ";
        // line 823
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_model", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 826
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_model", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_model]\" ";
        // line 827
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_model", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 835
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_quantity", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_quantity]\" ";
        // line 836
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_quantity", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 839
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_quantity", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_quantity]\" ";
        // line 840
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_quantity", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 848
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_unit", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_unit]\" ";
        // line 849
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_unit", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 852
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_unit", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_unit]\" ";
        // line 853
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_unit", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 861
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_total_price", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_total_price]\" ";
        // line 862
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_total_price", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 865
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_total_price", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][show_product_total_price]\" ";
        // line 866
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "show_product_total_price", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 879
        echo (isset($context["enty_module_name"]) ? $context["enty_module_name"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 880
        echo (isset($context["entry_logged"]) ? $context["entry_logged"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 881
        echo (isset($context["entry_register_account"]) ? $context["entry_register_account"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 882
        echo (isset($context["entry_guest_order"]) ? $context["entry_guest_order"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 887
        echo (isset($context["entry_coupon"]) ? $context["entry_coupon"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 892
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_login_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][coupon_login_status]\" ";
        // line 893
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_login_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 896
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_login_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][coupon_login_status]\" ";
        // line 897
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_login_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 906
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_register_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][coupon_register_status]\" ";
        // line 907
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_register_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 910
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_register_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][coupon_register_status]\" ";
        // line 911
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_register_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 920
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_guest_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][coupon_guest_status]\" ";
        // line 921
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_guest_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 924
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_guest_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][coupon_guest_status]\" ";
        // line 925
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "coupon_guest_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 932
        echo (isset($context["entry_reward"]) ? $context["entry_reward"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 937
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_login_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][reward_login_status]\" ";
        // line 938
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_login_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 941
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_login_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][reward_login_status]\" ";
        // line 942
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_login_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>\t
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 951
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_register_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][reward_register_status]\" ";
        // line 952
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_register_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 955
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_register_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][reward_register_status]\" ";
        // line 956
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_register_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 965
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_guest_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][reward_guest_status]\" ";
        // line 966
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_guest_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 969
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_guest_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][reward_guest_status]\" ";
        // line 970
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "reward_guest_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
        // line 977
        echo (isset($context["entry_voucher"]) ? $context["entry_voucher"] : null);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 981
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_login_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][voucher_login_status]\" ";
        // line 982
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_login_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 985
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_login_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][voucher_login_status]\" ";
        // line 986
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_login_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 994
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_register_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][voucher_register_status]\" ";
        // line 995
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_register_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 998
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_register_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][voucher_register_status]\" ";
        // line 999
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_register_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1007
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_guest_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart][voucher_guest_status]\" ";
        // line 1008
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_guest_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "   value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1011
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_guest_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart][voucher_guest_status]\" ";
        // line 1012
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "voucher_guest_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3>Mobile View</h3>
\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 1025
        echo (isset($context["entry_show_image"]) ? $context["entry_show_image"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1026
        echo (isset($context["entry_show_product_name"]) ? $context["entry_show_product_name"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1027
        echo (isset($context["entry_show_model"]) ? $context["entry_show_model"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1028
        echo (isset($context["entry_show_quantity"]) ? $context["entry_show_quantity"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">";
        // line 1029
        echo (isset($context["entry_show_unit_price"]) ? $context["entry_show_unit_price"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 1030
        echo (isset($context["entry_show_total_price"]) ? $context["entry_show_total_price"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center hide\">Colspan</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1039
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_image", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_image]\" ";
        // line 1040
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_image", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 1043
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_image", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[shopping_cart_mb][show_product_image]\" ";
        // line 1044
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_image", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1052
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_title", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_title]\" ";
        // line 1053
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_title", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 1056
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_title", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_title]\" ";
        // line 1057
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_title", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1065
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_model", array(), "array") == 1)) {
            echo " active ";
        }
        echo " \" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_model]\" ";
        // line 1066
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_model", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 1069
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_model", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_model]\" ";
        // line 1070
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_model", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1078
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_quantity", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_quantity]\" ";
        // line 1079
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_quantity", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 1082
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_quantity", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_quantity]\" ";
        // line 1083
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_quantity", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1091
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_unit", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_unit]\" ";
        // line 1092
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_unit", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 1095
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_unit", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_unit]\" ";
        // line 1096
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_unit", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1104
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_total_price", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_total_price]\" ";
        // line 1105
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_total_price", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo "  value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm  ";
        // line 1108
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_total_price", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[shopping_cart_mb][show_product_total_price]\" ";
        // line 1109
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart_mb", array(), "array"), "show_product_total_price", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-personaldetails-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1121
        echo (isset($context["entry_personaldetails"]) ? $context["entry_personaldetails"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"form-group register_newsletter\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-newsletter\">";
        // line 1124
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1127
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "newsletter_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[personaldetails][newsletter_status]\" ";
        // line 1128
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "newsletter_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1130
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "newsletter_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[personaldetails][newsletter_status]\" ";
        // line 1131
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "newsletter_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-terms\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Forces people to agree to terms before an account can be created.\">Account Terms</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-3\">
\t\t\t\t\t\t\t\t\t\t<select name=\"onepagecheckout_manage[personaldetails][terms]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 1140
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 1142
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["information"], "information_id", array()) == $this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "terms", array(), "array"))) {
                // line 1143
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 1145
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 1147
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1148
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group register_newsletter\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-checkout-term-auto\"><span data-toggle=\"tooltip\" title=\"\" data-original-title=\"Auto Checked account Terms\">Auto Checked </span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1155
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "account_terms", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\">\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[personaldetails][account_terms]\" ";
        // line 1156
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "account_terms", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1158
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "account_terms", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[personaldetails][account_terms]\" ";
        // line 1159
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "account_terms", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table id=\"table-personal\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 1168
        echo (isset($context["entry_field_name"]) ? $context["entry_field_name"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 1169
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"));
        foreach ($context['_seq'] as $context["key"] => $context["fields"]) {
            // line 1174
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr class=\"row-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrows\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 1177
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"onepagecheckout_manage[personaldetails][fields][";
            // line 1178
            echo $context["key"];
            echo "][sort_order]\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "sort_order", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "sort_order", array(), "array")) : (0));
            echo "\" class=\"form-control mydragsort\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"onepagecheckout_manage[personaldetails][fields][";
            // line 1179
            echo $context["key"];
            echo "][label]\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) : (0));
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1183
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 1)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[personaldetails][fields][";
            // line 1184
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 1)) {
                echo " checked=\"checked\" ";
            }
            echo " value=\"1\" autocomplete=\"off\" />";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1186
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 2)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[personaldetails][fields][";
            // line 1187
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 2)) {
                echo " checked=\"checked\" ";
            }
            echo "  value=\"2\" autocomplete=\"off\" />";
            echo (isset($context["entry_and_required"]) ? $context["entry_and_required"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1190
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 0)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[personaldetails][fields][";
            // line 1191
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 0)) {
                echo " checked=\"checked\" ";
            }
            echo "   value=\"0\" autocomplete=\"off\" />";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1198
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-payment-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1205
        echo (isset($context["entry_payment_details_setting"]) ? $context["entry_payment_details_setting"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group hide\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"";
        // line 1207
        echo (isset($context["entry_payment_details_order"]) ? $context["entry_payment_details_order"] : null);
        echo "\">";
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1210
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "payment_details_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[payment_details][payment_details_status]\" ";
        // line 1211
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "payment_details_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1214
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "payment_details_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[payment_details][payment_details_status]\" ";
        // line 1215
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "payment_details_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table id=\"table-payment_details\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 1224
        echo (isset($context["entry_field_name"]) ? $context["entry_field_name"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 1225
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1229
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"));
        foreach ($context['_seq'] as $context["key"] => $context["fields"]) {
            // line 1230
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr class=\"row-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrows\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 1233
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"onepagecheckout_manage[payment_details][fields][";
            // line 1234
            echo $context["key"];
            echo "][sort_order]\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "sort_order", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "sort_order", array(), "array")) : (0));
            echo "\" class=\"form-control mydragsort\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"onepagecheckout_manage[payment_details][fields][";
            // line 1235
            echo $context["key"];
            echo "][label]\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) : (0));
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1239
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 1)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[payment_details][fields][";
            // line 1240
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 1)) {
                echo " checked=\"checked\" ";
            }
            echo " value=\"1\" autocomplete=\"off\" />";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1242
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 2)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[payment_details][fields][";
            // line 1243
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 2)) {
                echo " checked=\"checked\" ";
            }
            echo "  value=\"2\" autocomplete=\"off\" />";
            echo (isset($context["entry_and_required"]) ? $context["entry_and_required"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1246
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 0)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[payment_details][fields][";
            // line 1247
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 0)) {
                echo " checked=\"checked\" ";
            }
            echo "   value=\"0\" autocomplete=\"off\" />";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1254
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1261
        echo (isset($context["entry_delivery_setting"]) ? $context["entry_delivery_setting"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"With this feature, you can enable or disable the delivery address section.<br/> Note: When you will disable the delivery address then payment address and shipping address always same.\">Delivery Address</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1266
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "delivery_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[delivery][delivery_status]\" ";
        // line 1267
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "delivery_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1270
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "delivery_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[delivery][delivery_status]\" ";
        // line 1271
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "delivery_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-status\"><span  data-toggle=\"tooltip\" title=\"My delivery and billing addresses are the same.\">Auto Checked</span></label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1280
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "delivery_auto_status", array(), "array") == 1)) {
            echo " active ";
        }
        echo "\" >\t
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[delivery][delivery_auto_status]\" ";
        // line 1281
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "delivery_auto_status", array(), "array") == 1)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"1\" autocomplete=\"off\">";
        echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
        // line 1284
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "delivery_auto_status", array(), "array") == 0)) {
            echo " active ";
        }
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\"  name=\"onepagecheckout_manage[delivery][delivery_auto_status]\" ";
        // line 1285
        if (($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "delivery_auto_status", array(), "array") == 0)) {
            echo " checked=\"checked\" ";
        }
        echo " value=\"0\" autocomplete=\"off\">";
        echo (isset($context["text_no"]) ? $context["text_no"] : null);
        echo "
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table id=\"table-delivery\" class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
        // line 1295
        echo (isset($context["entry_field_name"]) ? $context["entry_field_name"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-right\">";
        // line 1296
        echo (isset($context["entry_status"]) ? $context["entry_status"] : null);
        echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 1300
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"));
        foreach ($context['_seq'] as $context["key"] => $context["fields"]) {
            // line 1301
            echo "\t\t\t\t\t\t\t\t\t\t\t<tr class=\"row-group\">
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-arrows\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
            // line 1304
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array");
            echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"onepagecheckout_manage[delivery][fields][";
            // line 1305
            echo $context["key"];
            echo "][sort_order]\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "sort_order", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "sort_order", array(), "array")) : (0));
            echo "\" class=\"form-control mydragsort\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"onepagecheckout_manage[delivery][fields][";
            // line 1306
            echo $context["key"];
            echo "][label]\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) : (0));
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-right\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-group\" data-toggle=\"buttons\">\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1310
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 1)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[delivery][fields][";
            // line 1311
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 1)) {
                echo " checked=\"checked\" ";
            }
            echo " value=\"1\" autocomplete=\"off\" />";
            echo (isset($context["text_yes"]) ? $context["text_yes"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1313
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 2)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[delivery][fields][";
            // line 1314
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 2)) {
                echo " checked=\"checked\" ";
            }
            echo "  value=\"2\" autocomplete=\"off\" />";
            echo (isset($context["entry_and_required"]) ? $context["entry_and_required"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-success btn-sm ";
            // line 1317
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 0)) {
                echo " active ";
            }
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"onepagecheckout_manage[delivery][fields][";
            // line 1318
            echo $context["key"];
            echo "][show]\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "show", array(), "array") == 0)) {
                echo " checked=\"checked\" ";
            }
            echo "   value=\"0\" autocomplete=\"off\" />";
            echo (isset($context["text_no"]) ? $context["text_no"] : null);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1325
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-login-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1332
        echo (isset($context["entry_login"]) ? $context["entry_login"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-general-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t\t<legend>";
        // line 1338
        echo (isset($context["entry_general"]) ? $context["entry_general"] : null);
        echo "</legend>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"general-language\">
\t\t\t\t\t\t\t\t";
        // line 1341
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1342
            echo "\t\t\t\t\t\t\t\t <li><a href=\"#checkout-language";
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
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1344
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t";
        // line 1346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1347
            echo "\t\t\t\t\t\t\t\t<div class=\"tab-pane\" id=\"checkout-language";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-register-tab\">
\t\t\t\t\t\t\t\t\t\t\tRegister Tab Name</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[general][register][";
            // line 1352
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"register tab name\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "register", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "register", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-guest\">
\t\t\t\t\t\t\t\t\t\t\tGuest Tab Name</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[general][guest][";
            // line 1359
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"guest tab name\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "guest", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "guest", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-login\">
\t\t\t\t\t\t\t\t\t\t\tLogin Tab Name</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[general][login][";
            // line 1366
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"login tab name\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "login", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "login", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1371
            echo (isset($context["entry_heading_title"]) ? $context["entry_heading_title"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[general][heading_title][";
            // line 1373
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading_title"]) ? $context["placeholder_heading_title"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-description";
            // line 1377
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" >";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control summernote\"  name=\"onepagecheckout_manage[general][description][";
            // line 1379
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_description"]) ? $context["entry_description"] : null);
            echo "\" id=\"input-description";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" >";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "description", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "description", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-description_bottom";
            // line 1384
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t";
            // line 1385
            echo (isset($context["entry_description_bottom"]) ? $context["entry_description_bottom"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control summernote\"  name=\"onepagecheckout_manage[general][description_bottom][";
            // line 1387
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_description_bottom"]) ? $context["entry_description_bottom"] : null);
            echo "\" id=\"input-description_bottom";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\" >";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "description_bottom", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "general", array(), "array"), "description_bottom", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "</textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1392
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-personaldetails-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1396
        echo (isset($context["entry_personaldetails"]) ? $context["entry_personaldetails"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"checkout-personals\">
\t\t\t\t\t\t\t\t\t";
        // line 1398
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1399
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-personal";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1401
        echo "\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 1403
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 1404
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (((isset($context["key"]) ? $context["key"] : null) == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-personal";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">\t
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1406
            echo (isset($context["entry_heading"]) ? $context["entry_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[register][heading_title][";
            // line 1408
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "register", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "register", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1415
            echo (isset($context["entry_field_name"]) ? $context["entry_field_name"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1416
            echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1417
            echo (isset($context["entry_placeholder"]) ? $context["entry_placeholder"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1418
            echo (isset($context["entry_error"]) ? $context["entry_error"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1423
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["fields"]) {
                // line 1424
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 1425
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "personaldetails", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) : (""));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[register][";
                // line 1426
                echo $context["key"];
                echo "][label][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "register", array(), "array"), $context["key"], array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "register", array(), "array"), $context["key"], array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[register][";
                // line 1427
                echo $context["key"];
                echo "][placeholder][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_placeholder"]) ? $context["entry_placeholder"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "register", array(), "array"), $context["key"], array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "register", array(), "array"), $context["key"], array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[register][";
                // line 1428
                echo $context["key"];
                echo "][error][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_error"]) ? $context["entry_error"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "register", array(), "array"), $context["key"], array(), "array"), "error", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "register", array(), "array"), $context["key"], array(), "array"), "error", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1431
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1436
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-login-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1441
        echo (isset($context["entry_login"]) ? $context["entry_login"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"checkout-language6\">
\t\t\t\t\t\t\t\t\t";
        // line 1443
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1444
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-language6";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1446
        echo "\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 1448
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1449
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-language6";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1451
            echo (isset($context["entry_heading"]) ? $context["entry_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[login][heading_title][";
            // line 1453
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1457
            echo (isset($context["entry_btn_text"]) ? $context["entry_btn_text"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[login][button_text][";
            // line 1459
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_btn_text"]) ? $context["entry_btn_text"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "button_text", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "button_text", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1463
            echo (isset($context["entry_wrong"]) ? $context["entry_wrong"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[login][wrong_message][";
            // line 1465
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_wrong"]) ? $context["entry_wrong"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "wrong_message", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "wrong_message", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1469
            echo (isset($context["entry_approved_message"]) ? $context["entry_approved_message"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[login][approved_message][";
            // line 1471
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_approved_message"]) ? $context["entry_approved_message"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "approved_message", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "approved_message", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1478
            echo (isset($context["entry_field_name"]) ? $context["entry_field_name"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1479
            echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1480
            echo (isset($context["entry_placeholder"]) ? $context["entry_placeholder"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 1485
            echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[login][email][label][";
            // line 1486
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_email_label"]) ? $context["entry_email_label"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "email", array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "email", array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[login][email][placeholder][";
            // line 1487
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_email_placeholder"]) ? $context["entry_email_placeholder"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "email", array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "email", array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
            // line 1490
            echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[login][password][label][";
            // line 1491
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_password_label"]) ? $context["entry_password_label"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "password", array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "password", array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[login][password][placeholder][";
            // line 1492
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["entry_password_placeholder"]) ? $context["entry_password_placeholder"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "password", array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "login", array(), "array"), "password", array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1499
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery_detail-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1504
        echo (isset($context["entry_delivery_setting"]) ? $context["entry_delivery_setting"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"checkout-deliverydetail\">
\t\t\t\t\t\t\t\t\t";
        // line 1506
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1507
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-deliverydetail";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1509
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 1511
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1512
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-deliverydetail";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1514
            echo (isset($context["entry_heading"]) ? $context["entry_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[delivery_detail][heading_title][";
            // line 1516
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_detail", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_detail", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1523
            echo (isset($context["entry_field_name"]) ? $context["entry_field_name"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1524
            echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1525
            echo (isset($context["entry_placeholder"]) ? $context["entry_placeholder"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1526
            echo (isset($context["entry_error"]) ? $context["entry_error"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1530
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["fields"]) {
                // line 1531
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 1532
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) : (""));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[delivery_detail][";
                // line 1533
                echo $context["key"];
                echo "][label][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_detail", array(), "array"), $context["key"], array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_detail", array(), "array"), $context["key"], array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[delivery_detail][";
                // line 1534
                echo $context["key"];
                echo "][placeholder][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_placeholder"]) ? $context["entry_placeholder"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_detail", array(), "array"), $context["key"], array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_detail", array(), "array"), $context["key"], array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[delivery_detail][";
                // line 1535
                echo $context["key"];
                echo "][error][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_error"]) ? $context["entry_error"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_detail", array(), "array"), $context["key"], array(), "array"), "error", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_detail", array(), "array"), $context["key"], array(), "array"), "error", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1538
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1543
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-paymentdetails-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1548
        echo (isset($context["entry_payment_details_setting"]) ? $context["entry_payment_details_setting"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"checkout-paymentdetail\">
\t\t\t\t\t\t\t\t\t";
        // line 1550
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1551
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-paymentdetail";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1553
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 1555
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1556
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-paymentdetail";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1558
            echo (isset($context["entry_heading"]) ? $context["entry_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[payment_details_language][heading_title][";
            // line 1560
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details_language", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details_language", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-hover\">
\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1567
            echo (isset($context["entry_field_name"]) ? $context["entry_field_name"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1568
            echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1569
            echo (isset($context["entry_placeholder"]) ? $context["entry_placeholder"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-left\">";
            // line 1570
            echo (isset($context["entry_error"]) ? $context["entry_error"] : null);
            echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 1574
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"));
            foreach ($context['_seq'] as $context["key"] => $context["fields"]) {
                // line 1575
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\">";
                // line 1576
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details", array(), "array"), "fields", array(), "array"), $context["key"], array(), "array"), "label", array(), "array")) : (""));
                echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[payment_details_language][";
                // line 1577
                echo $context["key"];
                echo "][label][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details_language", array(), "array"), $context["key"], array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details_language", array(), "array"), $context["key"], array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[payment_details_language][";
                // line 1578
                echo $context["key"];
                echo "][placeholder][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_placeholder"]) ? $context["entry_placeholder"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details_language", array(), "array"), $context["key"], array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details_language", array(), "array"), $context["key"], array(), "array"), "placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-left\"><input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[payment_details_language][";
                // line 1579
                echo $context["key"];
                echo "][error][";
                echo $this->getAttribute($context["language"], "language_id", array());
                echo "]\" placeholder=\"";
                echo (isset($context["entry_error"]) ? $context["entry_error"] : null);
                echo "\" value=\"";
                echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details_language", array(), "array"), $context["key"], array(), "array"), "error", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_details_language", array(), "array"), $context["key"], array(), "array"), "error", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
                echo "\"></td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1582
            echo "\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1587
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery_method-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1592
        echo (isset($context["entry_delivery_method"]) ? $context["entry_delivery_method"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"checkout-language3\">
\t\t\t\t\t\t\t\t\t";
        // line 1594
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1595
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-language3";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1597
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 1599
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1600
            echo "\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-language3";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-heading\">";
            // line 1602
            echo (isset($context["entry_heading"]) ? $context["entry_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[delivery_method][heading_title][";
            // line 1604
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 1607
            if ((isset($context["delivery_methods"]) ? $context["delivery_methods"] : null)) {
                // line 1608
                echo "\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 1611
                echo (isset($context["entry_delivery_method"]) ? $context["entry_delivery_method"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 1612
                echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 1616
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["delivery_methods"]) ? $context["delivery_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["delivery_method"]) {
                    // line 1617
                    echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 1618
                    echo $this->getAttribute($context["delivery_method"], "title", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\"  value=\"";
                    // line 1622
                    echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array(), "array"), $this->getAttribute($context["delivery_method"], "code", array(), "array"), array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery_method", array(), "array"), $this->getAttribute($context["delivery_method"], "code", array(), "array"), array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : ($this->getAttribute($context["delivery_method"], "title", array())));
                    echo "\" name=\"onepagecheckout_manage[delivery_method][";
                    echo $this->getAttribute($context["delivery_method"], "code", array());
                    echo "][label][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "]\" placeholder=\"";
                    echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
                    echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delivery_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1628
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t";
            }
            // line 1631
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1633
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-delivery-language-date-time\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>Estimated Delivery Date</legend>
\t\t\t\t\t\t\t     <ul class=\"nav nav-tabs\" id=\"checkout-delivery-language-date-time\">
\t\t\t\t\t\t\t\t\t";
        // line 1640
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1641
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-delivery-language-date-time";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1643
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t\t";
        // line 1645
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1646
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-delivery-language-date-time";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1648
            echo (isset($context["entry_heading"]) ? $context["entry_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[delivery][heading_title][";
            // line 1650
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), (isset($context["heading_title"]) ? $context["heading_title"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-label\">";
            // line 1654
            echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[delivery][label][";
            // line 1656
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), (isset($context["label"]) ? $context["label"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-required\">Error Massege</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[delivery][required][";
            // line 1662
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"Error Massege\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), (isset($context["required"]) ? $context["required"] : null), array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "delivery", array(), "array"), "required", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1667
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-payment_method-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1672
        echo (isset($context["entry_payment_method"]) ? $context["entry_payment_method"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"checkout-language3\">
\t\t\t\t\t\t\t\t\t";
        // line 1674
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1675
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-paymentmethod";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1677
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 1679
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1680
            echo "\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-paymentmethod";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-heading\">";
            // line 1682
            echo (isset($context["entry_heading"]) ? $context["entry_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[payment_method][heading_title][";
            // line 1684
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            // line 1687
            if ((isset($context["payment_methods"]) ? $context["payment_methods"] : null)) {
                // line 1688
                echo "\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 1691
                echo (isset($context["entry_delivery_method"]) ? $context["entry_delivery_method"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>";
                // line 1692
                echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 1696
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["payment_methods"]) ? $context["payment_methods"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["payment_method"]) {
                    // line 1697
                    echo "\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    // line 1698
                    echo $this->getAttribute($context["payment_method"], "title", array());
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\"  value=\"";
                    // line 1702
                    echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array(), "array"), $this->getAttribute($context["payment_method"], "code", array(), "array"), array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "payment_method", array(), "array"), $this->getAttribute($context["payment_method"], "code", array(), "array"), array(), "array"), "label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : ($this->getAttribute($context["payment_method"], "title", array())));
                    echo "\" name=\"onepagecheckout_manage[payment_method][";
                    echo $this->getAttribute($context["payment_method"], "code", array());
                    echo "][label][";
                    echo $this->getAttribute($context["language"], "language_id", array());
                    echo "]\" placeholder=\"";
                    echo (isset($context["entry_label"]) ? $context["entry_label"] : null);
                    echo "\" >
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1708
                echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t";
            }
            // line 1711
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1713
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-confirm_order-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1718
        echo (isset($context["entry_confirm_order"]) ? $context["entry_confirm_order"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"checkout-confirm\">
\t\t\t\t\t\t\t\t\t";
        // line 1720
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1721
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-confirm";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1723
        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t";
        // line 1725
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1726
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-confirm";
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "\">
\t\t\t\t\t\t\t<!--XML-->
\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-confirm-comment\">Comment Label</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[confirm_order][comment_label][";
            // line 1731
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"Comment Label\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_label", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-confirm-comment\">Comment Placeholder</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[confirm_order][comment_placeholder][";
            // line 1737
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"Comment Placeholder\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_placeholder", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t<!--XML-->
\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-confirm-button\">";
            // line 1743
            echo (isset($context["entry_confirm_button"]) ? $context["entry_confirm_button"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[confirm_order][confirm_button][";
            // line 1745
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_confirm_button"]) ? $context["placeholder_confirm_button"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "confirm_button", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "confirm_button", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-confirm-button\">";
            // line 1751
            echo (isset($context["entry_comment_error"]) ? $context["entry_comment_error"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[confirm_order][comment_error][";
            // line 1753
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["entry_comment_error"]) ? $context["entry_comment_error"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_error", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "comment_error", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-shopping-button\">";
            // line 1758
            echo (isset($context["entry_shopping_button"]) ? $context["entry_shopping_button"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[confirm_order][shopping_button][";
            // line 1760
            echo $this->getAttribute($context["language"], "language_id", array(), "array");
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_shopping_button"]) ? $context["placeholder_shopping_button"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "shopping_button", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "confirm_order", array(), "array"), "shopping_button", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1766
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-shopping-cart-language-setting\">
\t\t\t\t\t\t\t<fieldset>
\t\t\t\t\t\t\t\t<legend>";
        // line 1771
        echo (isset($context["entry_shopping_cart"]) ? $context["entry_shopping_cart"] : null);
        echo "</legend>
\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"checkout-language8\">
\t\t\t\t\t\t\t\t\t";
        // line 1773
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1774
            echo "\t\t\t\t\t\t\t\t\t <li ";
            if (($context["key"] == 0)) {
                echo " class=\"active\" ";
            }
            echo "><a href=\"#checkout-language8";
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
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1776
        echo "\t\t\t\t\t\t\t\t</ul>\t
\t\t\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t\t\t\t";
        // line 1778
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["language"]) {
            // line 1779
            echo "\t\t\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if (($context["key"] == 0)) {
                echo " active ";
            }
            echo "\" id=\"checkout-language8";
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-group \">\t
\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-heading\">";
            // line 1781
            echo (isset($context["entry_heading"]) ? $context["entry_heading"] : null);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[shopping_cart][heading_title][";
            // line 1783
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"";
            echo (isset($context["placeholder_heading"]) ? $context["placeholder_heading"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "heading_title", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-confirm-comment\">Clear cart</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[shopping_cart][clear_cart_text][";
            // line 1790
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"Alert Message\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "clear_cart_text", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "clear_cart_text", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"form-group\">\t
\t\t\t\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label \" for=\"input-confirm-comment\">Alert Message</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"onepagecheckout_manage[shopping_cart][alert_message][";
            // line 1796
            echo $this->getAttribute($context["language"], "language_id", array());
            echo "]\" placeholder=\"Alert Message\" value=\"";
            echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "alert_message", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["onepagecheckout_manage"]) ? $context["onepagecheckout_manage"] : null), "shopping_cart", array(), "array"), "alert_message", array(), "array"), $this->getAttribute($context["language"], "language_id", array()), array(), "array")) : (""));
            echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1801
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</fieldset>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-support\">
\t\t\t\t\t\t\t<p class=\"text-center\">For Support and Query Feel Free to contact:<br /><strong>extensionsbazaar@gmail.com</strong></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</div>
    </div>
</form>
</div>
</div>
<script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
<link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
<script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
<script type=\"text/javascript\">
\$('#general-language a:first').tab('show');
\$('#checkout-language a:first').tab('show');
\$('#checkout-language1 a:first').tab('show');
\$('#checkout-language2 a:first').tab('show');
\$('#checkout-language3 a:first').tab('show');
\$('#checkout-language4 a:first').tab('show');
\$('#checkout-language5 a:first').tab('show');
\$('#checkout-language6 a:first').tab('show');
\$('#checkout-language7 a:first').tab('show');
\$('#checkout-language8 a:first').tab('show');
\$('#checkout-language9 a:first').tab('show');
\$('#checkout-language10 a:first').tab('show');
\$('#checkout-language11 a:first').tab('show');
\$('#checkout-personals a:first').tab('show');
\$('#checkout-deliverydetail a:first').tab('show');
\$('#checkout-paymentdetail a:first').tab('show');
\$('#checkout-deliverymethod a:first').tab('show');
\$('#checkout-paymentmethod a:first').tab('show');
\$('#checkout-confirm a:first').tab('show');
\$('#language a:first').tab('show');
\$('#checkout-delivery-language-date-time a:first').tab('show');
//--></script>
<script type=\"text/javascript\">
// Drag Personal Details
\$(document).ready(function() {
\$(\"#table-personal tbody\").sortable({
\tcursor: \"move\",
\tstop: function() {
\t\t\$('#table-personal tbody .row-group').each(function() {
\t\t\t\$(this).find('.mydragsort').val(\$(this).index());
\t\t});
\t}
});

// Drag Delivery Details\t
\$(\"#table-delivery tbody\").sortable({
\tcursor: \"move\",
\tstop: function() {
\t\t\$('#table-delivery tbody .row-group').each(function() {
\t\t\t\$(this).find('.mydragsort').val(\$(this).index());
\t\t});
\t}
});
\t
// Drag Payment Details\t
\$(\"#table-payment_details tbody\").sortable({
\tcursor: \"move\",
\tstop: function() {
\t\t\$('#table-payment_details tbody .row-group').each(function() {
\t\t\t\$(this).find('.mydragsort').val(\$(this).index());
\t\t});
\t}
});
});
</script>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'onepagecheckout_country_id\\']').on('change', function() {
\t\$.ajax({
\t\t
\t\turl: 'index.php?route=localisation/country/country&user_token=";
        // line 1876
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('select[name=\\'onepagecheckout_country_id\\']').after(' <i class=\"fa fa-circle-o-notch fa-spin\"></i>');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('.fa-spin').remove();
\t\t},
\t\tsuccess: function(json) {
\t\t\thtml = '<option value=\"\">";
        // line 1885
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
          \t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 1891
        echo (isset($context["onepagecheckout_zone_id"]) ? $context["onepagecheckout_zone_id"] : null);
        echo "') {
            \t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 1898
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('select[name=\\'onepagecheckout_zone_id\\']').html(html);
\t\t\t
\t\t\t\$('#button-save').prop('disabled', false);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('select[name=\\'onepagecheckout_country_id\\']').trigger('change');
//--></script>
<script>
\$('.button-account-type').click(function() {
\tsetTimeout(function() {
\t\tvar account_type = \$('input[name=\\'onepagecheckout_manage[personaldetails][register_status]\\']:checked').val();
\t\tif(account_type == '1') {
\t\t\t\$('.register_newsletter').removeClass('hide');
\t\t}else{
\t\t\t\$('.register_newsletter').addClass('hide');
\t\t}
\t}, 300);
});
\$(document).ready(function() {
\t\$('.active.button-account-type').trigger('click');
});
</script>
<style>
.btn-success1{
    background-color:#8fbb6c;
    border-color:#7aae50;
    color:#fff;
}
</style>
";
        // line 1935
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/checkout/onepagecheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5065 => 1935,  5025 => 1898,  5015 => 1891,  5006 => 1885,  4994 => 1876,  4917 => 1801,  4904 => 1796,  4893 => 1790,  4879 => 1783,  4874 => 1781,  4864 => 1779,  4860 => 1778,  4856 => 1776,  4835 => 1774,  4831 => 1773,  4826 => 1771,  4819 => 1766,  4803 => 1760,  4798 => 1758,  4786 => 1753,  4781 => 1751,  4768 => 1745,  4763 => 1743,  4752 => 1737,  4741 => 1731,  4728 => 1726,  4724 => 1725,  4720 => 1723,  4699 => 1721,  4695 => 1720,  4690 => 1718,  4683 => 1713,  4676 => 1711,  4671 => 1708,  4653 => 1702,  4646 => 1698,  4643 => 1697,  4639 => 1696,  4632 => 1692,  4628 => 1691,  4623 => 1688,  4621 => 1687,  4611 => 1684,  4606 => 1682,  4596 => 1680,  4592 => 1679,  4588 => 1677,  4567 => 1675,  4563 => 1674,  4558 => 1672,  4551 => 1667,  4538 => 1662,  4525 => 1656,  4520 => 1654,  4509 => 1650,  4504 => 1648,  4494 => 1646,  4490 => 1645,  4486 => 1643,  4465 => 1641,  4461 => 1640,  4452 => 1633,  4445 => 1631,  4440 => 1628,  4422 => 1622,  4415 => 1618,  4412 => 1617,  4408 => 1616,  4401 => 1612,  4397 => 1611,  4392 => 1608,  4390 => 1607,  4380 => 1604,  4375 => 1602,  4365 => 1600,  4361 => 1599,  4357 => 1597,  4336 => 1595,  4332 => 1594,  4327 => 1592,  4320 => 1587,  4310 => 1582,  4295 => 1579,  4285 => 1578,  4275 => 1577,  4271 => 1576,  4268 => 1575,  4264 => 1574,  4257 => 1570,  4253 => 1569,  4249 => 1568,  4245 => 1567,  4231 => 1560,  4226 => 1558,  4216 => 1556,  4212 => 1555,  4208 => 1553,  4187 => 1551,  4183 => 1550,  4178 => 1548,  4171 => 1543,  4161 => 1538,  4146 => 1535,  4136 => 1534,  4126 => 1533,  4122 => 1532,  4119 => 1531,  4115 => 1530,  4108 => 1526,  4104 => 1525,  4100 => 1524,  4096 => 1523,  4082 => 1516,  4077 => 1514,  4067 => 1512,  4063 => 1511,  4059 => 1509,  4038 => 1507,  4034 => 1506,  4029 => 1504,  4022 => 1499,  4005 => 1492,  3997 => 1491,  3993 => 1490,  3983 => 1487,  3975 => 1486,  3971 => 1485,  3963 => 1480,  3959 => 1479,  3955 => 1478,  3941 => 1471,  3936 => 1469,  3925 => 1465,  3920 => 1463,  3909 => 1459,  3904 => 1457,  3893 => 1453,  3888 => 1451,  3878 => 1449,  3874 => 1448,  3870 => 1446,  3849 => 1444,  3845 => 1443,  3840 => 1441,  3833 => 1436,  3823 => 1431,  3808 => 1428,  3798 => 1427,  3788 => 1426,  3784 => 1425,  3781 => 1424,  3777 => 1423,  3769 => 1418,  3765 => 1417,  3761 => 1416,  3757 => 1415,  3743 => 1408,  3738 => 1406,  3728 => 1404,  3724 => 1403,  3720 => 1401,  3699 => 1399,  3695 => 1398,  3690 => 1396,  3684 => 1392,  3667 => 1387,  3662 => 1385,  3658 => 1384,  3644 => 1379,  3637 => 1377,  3626 => 1373,  3621 => 1371,  3611 => 1366,  3599 => 1359,  3587 => 1352,  3578 => 1347,  3574 => 1346,  3570 => 1344,  3553 => 1342,  3549 => 1341,  3543 => 1338,  3534 => 1332,  3525 => 1325,  3506 => 1318,  3500 => 1317,  3488 => 1314,  3482 => 1313,  3471 => 1311,  3465 => 1310,  3456 => 1306,  3450 => 1305,  3446 => 1304,  3441 => 1301,  3437 => 1300,  3430 => 1296,  3426 => 1295,  3409 => 1285,  3403 => 1284,  3393 => 1281,  3387 => 1280,  3371 => 1271,  3365 => 1270,  3355 => 1267,  3349 => 1266,  3341 => 1261,  3332 => 1254,  3313 => 1247,  3307 => 1246,  3295 => 1243,  3289 => 1242,  3278 => 1240,  3272 => 1239,  3263 => 1235,  3257 => 1234,  3253 => 1233,  3248 => 1230,  3244 => 1229,  3237 => 1225,  3233 => 1224,  3217 => 1215,  3211 => 1214,  3201 => 1211,  3195 => 1210,  3187 => 1207,  3182 => 1205,  3173 => 1198,  3154 => 1191,  3148 => 1190,  3136 => 1187,  3130 => 1186,  3119 => 1184,  3113 => 1183,  3104 => 1179,  3098 => 1178,  3094 => 1177,  3089 => 1174,  3085 => 1173,  3078 => 1169,  3074 => 1168,  3058 => 1159,  3052 => 1158,  3043 => 1156,  3037 => 1155,  3028 => 1148,  3022 => 1147,  3014 => 1145,  3006 => 1143,  3003 => 1142,  2999 => 1141,  2995 => 1140,  2979 => 1131,  2973 => 1130,  2964 => 1128,  2958 => 1127,  2952 => 1124,  2946 => 1121,  2927 => 1109,  2921 => 1108,  2911 => 1105,  2905 => 1104,  2890 => 1096,  2884 => 1095,  2874 => 1092,  2868 => 1091,  2853 => 1083,  2847 => 1082,  2837 => 1079,  2831 => 1078,  2816 => 1070,  2810 => 1069,  2800 => 1066,  2794 => 1065,  2779 => 1057,  2773 => 1056,  2763 => 1053,  2757 => 1052,  2742 => 1044,  2736 => 1043,  2726 => 1040,  2720 => 1039,  2708 => 1030,  2704 => 1029,  2700 => 1028,  2696 => 1027,  2692 => 1026,  2688 => 1025,  2668 => 1012,  2662 => 1011,  2652 => 1008,  2646 => 1007,  2631 => 999,  2625 => 998,  2615 => 995,  2609 => 994,  2594 => 986,  2588 => 985,  2578 => 982,  2572 => 981,  2565 => 977,  2551 => 970,  2545 => 969,  2535 => 966,  2529 => 965,  2513 => 956,  2507 => 955,  2497 => 952,  2491 => 951,  2475 => 942,  2469 => 941,  2459 => 938,  2453 => 937,  2445 => 932,  2431 => 925,  2425 => 924,  2415 => 921,  2409 => 920,  2393 => 911,  2387 => 910,  2377 => 907,  2371 => 906,  2355 => 897,  2349 => 896,  2339 => 893,  2333 => 892,  2325 => 887,  2317 => 882,  2313 => 881,  2309 => 880,  2305 => 879,  2285 => 866,  2279 => 865,  2269 => 862,  2263 => 861,  2248 => 853,  2242 => 852,  2232 => 849,  2226 => 848,  2211 => 840,  2205 => 839,  2195 => 836,  2189 => 835,  2174 => 827,  2168 => 826,  2158 => 823,  2152 => 822,  2137 => 814,  2131 => 813,  2121 => 810,  2115 => 809,  2100 => 801,  2094 => 800,  2084 => 797,  2078 => 796,  2066 => 787,  2062 => 786,  2058 => 785,  2054 => 784,  2050 => 783,  2046 => 782,  2034 => 775,  2026 => 772,  2021 => 770,  2008 => 764,  2002 => 763,  1992 => 760,  1986 => 759,  1977 => 755,  1964 => 749,  1958 => 748,  1948 => 745,  1942 => 744,  1934 => 741,  1921 => 735,  1915 => 734,  1905 => 731,  1899 => 730,  1890 => 726,  1885 => 724,  1875 => 717,  1865 => 710,  1855 => 703,  1851 => 702,  1836 => 694,  1830 => 693,  1820 => 690,  1814 => 689,  1806 => 686,  1798 => 681,  1788 => 674,  1778 => 667,  1774 => 666,  1759 => 658,  1753 => 657,  1743 => 654,  1737 => 653,  1729 => 650,  1724 => 648,  1708 => 639,  1702 => 638,  1693 => 636,  1687 => 635,  1680 => 631,  1667 => 625,  1661 => 624,  1652 => 622,  1646 => 621,  1639 => 617,  1626 => 611,  1620 => 610,  1611 => 608,  1605 => 607,  1598 => 603,  1585 => 597,  1579 => 596,  1570 => 594,  1564 => 593,  1554 => 585,  1548 => 584,  1540 => 582,  1532 => 580,  1530 => 579,  1527 => 578,  1523 => 577,  1519 => 576,  1513 => 573,  1506 => 568,  1500 => 567,  1492 => 565,  1484 => 563,  1481 => 562,  1477 => 561,  1457 => 548,  1451 => 547,  1442 => 545,  1436 => 544,  1428 => 539,  1420 => 533,  1414 => 532,  1406 => 530,  1398 => 528,  1395 => 527,  1391 => 526,  1381 => 519,  1371 => 512,  1365 => 509,  1350 => 501,  1344 => 500,  1335 => 498,  1329 => 497,  1315 => 490,  1309 => 489,  1300 => 487,  1294 => 486,  1286 => 480,  1281 => 477,  1261 => 469,  1255 => 468,  1244 => 466,  1238 => 465,  1224 => 458,  1216 => 457,  1211 => 455,  1208 => 454,  1204 => 453,  1197 => 449,  1193 => 448,  1189 => 447,  1184 => 444,  1182 => 443,  1169 => 437,  1163 => 436,  1154 => 434,  1148 => 433,  1139 => 427,  1133 => 424,  1123 => 416,  1117 => 415,  1109 => 413,  1101 => 411,  1099 => 410,  1096 => 409,  1092 => 408,  1086 => 405,  1081 => 403,  1075 => 399,  1070 => 396,  1050 => 388,  1044 => 387,  1033 => 385,  1027 => 384,  1013 => 377,  1005 => 376,  1000 => 374,  997 => 373,  993 => 372,  986 => 368,  982 => 367,  978 => 366,  973 => 363,  971 => 362,  960 => 358,  954 => 357,  945 => 355,  939 => 354,  929 => 347,  923 => 344,  913 => 336,  907 => 335,  899 => 333,  891 => 331,  889 => 330,  886 => 329,  882 => 328,  876 => 325,  871 => 323,  862 => 317,  855 => 315,  849 => 311,  843 => 310,  835 => 308,  827 => 306,  824 => 305,  820 => 304,  811 => 300,  802 => 294,  796 => 290,  790 => 289,  782 => 287,  774 => 285,  771 => 284,  767 => 283,  761 => 280,  754 => 276,  746 => 270,  741 => 268,  736 => 267,  731 => 265,  726 => 264,  724 => 263,  718 => 260,  705 => 252,  699 => 251,  692 => 249,  686 => 248,  675 => 239,  667 => 236,  662 => 234,  657 => 233,  652 => 231,  647 => 230,  645 => 229,  641 => 227,  637 => 226,  625 => 216,  617 => 213,  612 => 211,  607 => 210,  602 => 208,  597 => 207,  595 => 206,  591 => 204,  587 => 203,  571 => 194,  565 => 193,  556 => 191,  550 => 190,  534 => 181,  528 => 180,  519 => 178,  513 => 177,  497 => 168,  491 => 167,  482 => 165,  476 => 164,  467 => 162,  461 => 161,  454 => 157,  441 => 151,  435 => 150,  425 => 147,  419 => 146,  410 => 142,  397 => 136,  391 => 135,  382 => 133,  376 => 132,  367 => 128,  354 => 122,  348 => 121,  339 => 119,  333 => 118,  324 => 114,  319 => 111,  312 => 109,  301 => 107,  295 => 106,  292 => 105,  289 => 104,  286 => 103,  281 => 102,  278 => 101,  274 => 100,  271 => 99,  267 => 98,  261 => 95,  250 => 87,  244 => 84,  240 => 83,  235 => 81,  231 => 80,  227 => 79,  223 => 78,  219 => 77,  215 => 76,  211 => 75,  206 => 73,  200 => 70,  196 => 69,  192 => 68,  188 => 67,  183 => 65,  177 => 62,  172 => 60,  168 => 59,  164 => 58,  155 => 52,  151 => 51,  146 => 49,  139 => 44,  133 => 43,  123 => 41,  113 => 39,  110 => 38,  106 => 37,  100 => 36,  94 => 33,  86 => 29,  78 => 25,  75 => 24,  67 => 20,  65 => 19,  59 => 15,  48 => 13,  44 => 12,  39 => 10,  32 => 8,  24 => 3,  19 => 1,);
    }
}
/* {{ header }}*/
/* <link type="text/css" href="view/stylesheet/onepagecheckout.css" rel="stylesheet" media="screen" />*/
/* {{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <div class="pull-right">*/
/* 		<button onclick="$('.stay').val(1);" type="submit" form="form-order_success_page" data-toggle="tooltip" title="{{button_save}} & stay" class="btn btn-success1"><i class="fa fa-save"></i> {{button_save}} & stay </button>*/
/* 		</div>*/
/*        <h1>{{ heading_title }}</h1>*/
/*       <ul class="breadcrumb">*/
/*         {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*      {% if error_warning %}*/
/*     <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* 	 {% if success %}*/
/*     <div class="alert alert-success"><i class="fa fa-check-circle"></i>{{ success }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*     {% endif %}*/
/* 	<form action="{{action}}" method="post" enctype="multipart/form-data" id="form-OnePageCheackout" class="form-horizontal">*/
/*            <input type="hidden" name="stay" class="stay" value="0"/>*/
/*     <div class="panel panel-default" id="onepagecheackout">*/
/*       <div class="panel-heading clearfix">*/
/*         <h3 class="panel-title"><i class="fa fa-pencil"></i> {{ text_edit }}</h3>*/
/* 			<div class="pull-right">*/
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
/* 					<ul class="nav nav-tabs">*/
/* 						<li class="dropdown active"><a href="#" data-toggle="dropdown"><i class="fa fa-cog"></i> {{entry_general}} <span class="caret"></span></a>*/
/* 						<ul class="dropdown-menu">*/
/* 							<li><a href="#tab-general" data-toggle="tab"><i class="fa fa-cog"></i>  {{entry_general}}</a></li>*/
/* 							<li><a href="#tab-social_login" data-toggle="tab"><i class="fa fa-sign-in aria-hidden="true"></i> {{entry_social_login}}</a></li>*/
/* 						</ul>*/
/* 						</li>*/
/* 						<li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-eye"></i> Layout Setting <span class="caret"></span></a>*/
/* 							<ul class="dropdown-menu">*/
/* 								<li><a href="#tab-layout" data-toggle="tab"><i class="fa fa-eye"></i> Layout Setting</a></li>*/
/* 								<li><a href="#tab-shopping-cart-setting" data-toggle="tab"><i class="fa fa-shopping-cart"></i> {{entry_shopping_cart}}</a></li>*/
/* 								<li><a href="#tab-delivery_method-setting" data-toggle="tab"><i class="fa fa-truck" aria-hidden="true"></i> {{entry_delivery_method}} </a></li>*/
/* 								<li><a href="#tab-payment_method-setting" data-toggle="tab"><i class="fa fa-credit-card" aria-hidden="true"></i> {{entry_payment_method}} </a></li>*/
/* 								<li><a href="#tab-delivery-date-time" data-toggle="tab"><i class="fa fa-clock-o" aria-hidden="true"></i> Estimated Delivery Date</a></li>*/
/* 								<li><a href="#tab-confirm_order-setting" data-toggle="tab"><i class="fa fa-cart-plus" aria-hidden="true"></i> {{entry_confirm_order}} </a></li>*/
/* 						</ul>*/
/* 						</li>*/
/* 						<li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-check-square-o"></i> {{field_manage}} <span class="caret"></span></a>*/
/* 							<ul class="dropdown-menu">*/
/* 								<li><a href="#tab-personaldetails-setting" data-toggle="tab"><i class="fa fa-cogs"></i> {{entry_personaldetails}}</a></li>*/
/* 								<li><a href="#tab-payment-setting" data-toggle="tab"><i class="fa fa-cogs"></i> {{entry_paymentdetails}}</a></li>*/
/* 								<li><a href="#tab-delivery-setting" data-toggle="tab"><i class="fa fa-cogs"></i> {{entry_delivery_setting}}</a></li>*/
/* 								<li><a target="_new" href="{{customfeilds}}"><i class="fa fa-cogs"></i> OpenCart Custom Feilds Settings</a></li>*/
/* 							</ul>*/
/* 						</li>*/
/* 						<li class="dropdown"><a href="#" data-toggle="dropdown"><i class="fa fa-language"></i> {{entry_language}} <span class="caret"></span></a>*/
/* 							<ul class="dropdown-menu">*/
/* 								<li><a href="#tab-general-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_general}}</a></li>*/
/* 								<li><a href="#tab-personaldetails-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_personaldetails}}</a></li>*/
/* 								<li><a href="#tab-paymentdetails-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_paymentdetails}}</a></li>*/
/* 								<li><a href="#tab-delivery_detail-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_delivery_setting}}</a></li>*/
/* 								<li><a href="#tab-login-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_login}}</a></li>*/
/* 								<li><a href="#tab-delivery_method-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_delivery_method}}</a></li>*/
/* 								<li><a href="#tab-payment_method-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_payment_method}}</a></li>*/
/* 								<li><a href="#tab-delivery-language-date-time" data-toggle="tab"><i class="fa fa-language" aria-hidden="true"></i> Estimated Delivery Date</a></li>*/
/* 								<li><a href="#tab-shopping-cart-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_shopping_cart}}</a></li>*/
/* 								<li><a href="#tab-confirm_order-language-setting" data-toggle="tab"><i class="fa fa-language"></i> {{entry_confirm_order}}</a></li>*/
/* 							</ul>*/
/* 						</li>*/
/* 						<li><a target="_blank" href="{{order_success}}"><i class="fa fa-file-o" aria-hidden="true"></i> Order Success Page</a></li>*/
/* 						<li><a href="#tab-restore" data-toggle="tab"><i class="fa fa-undo" aria-hidden="true"></i> Restore Settings</a></li>*/
/* 						<li><a href="#tab-analytics" data-toggle="tab"><i class="fa fa-line-chart"></i> Analytics</a></li>*/
/* 						<li><a href="#tab-support" data-toggle="tab"><i class="fa fa-user"></i> Support</a></li>*/
/* 					</ul>*/
/* 					<div class="tab-content">*/
/* 						<div class="tab-pane" id="tab-restore">*/
/* 							<p>If You want to Restore Module Settings to Demo Then It will use this featured.</p>*/
/* 							<a href="{{restoresetting}}" class="btn btn-primary">Click Here to Restore</a>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-analytics">*/
/* 						{% for row in rows %}*/
/* 						 <div class="row">*/
/* 							  {% for dashboard_1 in row %}*/
/* 							  {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-3 col-sm-6') %}*/
/* 							  {% for dashboard_2 in row %}*/
/* 							  {% if dashboard_2.width > 3 %}*/
/* 							  {% set class = 'col-lg-%s %s'|format(dashboard_1.width, 'col-md-12 col-sm-12') %}*/
/* 							  {% endif %}*/
/* 							  {% endfor %}*/
/* 							  <div class="{{ class }}">{{ dashboard_1.output }}</div>*/
/* 							  {% endfor %}*/
/* 							</div>*/
/* 						{% endfor %}*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-layout">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="{{help_register_account}}">{{entry_register_account}}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 									<div class="btn-group" data-toggle="buttons">*/
/* 										*/
/* 										<label class="btn btn-success btn-sm button-account-type {% if onepagecheckout_manage['personaldetails']['register_status']  %} active {% endif %} ">	*/
/* 											<input type="radio"  name="onepagecheckout_manage[personaldetails][register_status]" {% if onepagecheckout_manage['personaldetails']['register_status']  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 										</label>											*/
/* 										<label class="btn btn-success btn-sm button-account-type {% if not onepagecheckout_manage['personaldetails']['register_status']  %} active {% endif %} ">*/
/* 											<input type="radio" name="onepagecheckout_manage[personaldetails][register_status]" {% if not onepagecheckout_manage['personaldetails']['register_status']  %} checked="checked" {% endif %}  value="0" autocomplete="off">{{text_no}}*/
/* 										</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="{{help_guest_checkout}}">{{entry_guest_checkout}}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 									<div class="btn-group" data-toggle="buttons">*/
/* 										*/
/* 										<label class="btn btn-success btn-sm {% if onepagecheckout_manage['personaldetails']['guest_status']  %} active {% endif %} ">	*/
/* 											<input type="radio"  name="onepagecheckout_manage[personaldetails][guest_status]" {% if onepagecheckout_manage['personaldetails']['guest_status']  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 										</label>											*/
/* 										<label class="btn btn-success btn-sm {% if not onepagecheckout_manage['personaldetails']['guest_status']  %} active {% endif %}  ">*/
/* 											<input type="radio" name="onepagecheckout_manage[personaldetails][guest_status]" {% if not onepagecheckout_manage['personaldetails']['guest_status']  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 										</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="{{help_enable_login}}">{{entry_enable_login}}</span></label>*/
/* 								<div class="col-sm-10">*/
/* 							*/
/* 									<div class="btn-group" data-toggle="buttons">*/
/* 										<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['login']['enable_login']  %} active {% endif %} " >	*/
/* 											<input type="radio"  name="onepagecheckout_manage[login][enable_login]" {% if onepagecheckout_manage['login']['enable_login']  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 										</label>*/
/* 										*/
/* 										<label class="btn btn-success btn-sm  {% if not onepagecheckout_manage['login']['enable_login']  %} active {% endif %}">*/
/* 											<input type="radio"  name="onepagecheckout_manage[login][enable_login]" {% if not onepagecheckout_manage['login']['enable_login']  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 										</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">	*/
/* 								<label class="col-sm-2 control-label" for="input-account_open"><span data-toggle="tooltip" title="" data-original-title="Default select section">{{entry_account_open}}</span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="btn-group btn-group-justified" data-toggle="buttons">	*/
/* 										*/
/* 										<label class="btn btn-success btn-sm {% if onepagecheckout_manage.general.account_open=='register'  %} active {% endif %} ">*/
/* 										<input type="radio" name="onepagecheckout_manage[general][account_open]" {% if onepagecheckout_manage.general.account_open=='register'  %} checked="checked" {% endif %} value="register" autocomplete="off" />{{entry_register}}*/
/* 										</label>*/
/* 										<label class="btn btn-success btn-sm {% if onepagecheckout_manage.general.account_open=='guest'  %} active {% endif %} ">*/
/* 										<input type="radio" name="onepagecheckout_manage[general][account_open]" {% if onepagecheckout_manage.general.account_open=='guest'  %} checked="checked" {% endif %}  value="guest" autocomplete="off" />{{entry_guest}}*/
/* 										</label>*/
/* 										<label class="btn btn-success btn-sm  {% if onepagecheckout_manage.general.account_open=='login'  %}  active {% endif %}">*/
/* 										<input type="radio" name="onepagecheckout_manage[general][account_open]" {% if onepagecheckout_manage.general.account_open=='login'  %}  checked="checked" {% endif %} value="login" autocomplete="off" />{{entry_login}}*/
/* 										</label>		*/
/* 									</div>	 */
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-md-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Set the Field Layout. Row = the labels will be on one line with the input. Block style = the labels will be above the inputs.">Field Layout</span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_field_layout  %} active {% endif %} ">	*/
/* 												<input type="radio"  name="onepagecheckout_field_layout" {% if onepagecheckout_field_layout  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_row}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not onepagecheckout_field_layout  %} active {% endif %}">*/
/* 												<input type="radio"  name="onepagecheckout_field_layout" {% if not onepagecheckout_field_layout  %} checked="checked"  {% endif %}  value="0" autocomplete="off">{{text_block}}*/
/* 											</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-md-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Stop Cart Page and redirect to checkout page">Stop Cart Page</span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_auto_redirect  %} active {% endif %}">	*/
/* 												<input type="radio"  name="onepagecheckout_auto_redirect" {% if onepagecheckout_auto_redirect  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not onepagecheckout_auto_redirect  %} active {% endif %}">*/
/* 												<input type="radio"  name="onepagecheckout_auto_redirect" {% if not onepagecheckout_auto_redirect  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-md-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Show Countries which you want">Show Countries:</span></label>*/
/* 								<div class="col-sm-6">*/
/* 									<div class="well well-sm" style="height: 150px; overflow: auto;">*/
/* 										{% for country in  countries %}*/
/* 										<div class="checkbox">*/
/* 										  <label>*/
/* 										  {% if country.country_id in onepagecheckout_selected_countries %}*/
/* 											<input type="checkbox" name="onepagecheckout_selected_countries[]" value="{{country.country_id}}" checked="checked" />*/
/* 											{{country.name}}*/
/* 											{% else %}*/
/* 											<input type="checkbox" name="onepagecheckout_selected_countries[]" value="{{country.country_id}}" />*/
/* 											{{country.name}}*/
/* 											{% endif %}*/
/* 										  </label>*/
/* 									 	</div>*/
/* 									  {% endfor %}*/
/* 									</div>*/
/* 									<a onclick="$(this).parent().find('input[type=checkbox]').prop('checked', true );" class="btn btn-primary btn-sm">Selected All</a>*/
/* 									<a onclick="$(this).parent().find('input[type=checkbox]').prop('checked', false );" class="btn btn-danger btn-sm">Unselected All</a>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 							  <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Show Customer Groups which you want">Show Customer Groups</span></label>*/
/* 							  <div class="col-sm-6">*/
/* 							   <div class="well well-sm" style="height: 150px; overflow: auto;"> */
/* 								*/
/* 								{% for customer_group in  customer_groups %}*/
/* 								<div class="checkbox">*/
/* 								  <label>*/
/* 									{% if customer_group.customer_group_id in onepagecheckout_customer_group_display %}*/
/* 									<input type="checkbox" name="onepagecheckout_customer_group_display[]" value="{{customer_group.customer_group_id}}" checked="checked" />*/
/* 									{{customer_group.name}}*/
/* 									{% else %}*/
/* 									<input type="checkbox" name="onepagecheckout_customer_group_display[]" value="{{customer_group.customer_group_id}}" />*/
/* 									{{customer_group.name}}*/
/* 									{% endif %}*/
/* 								  </label>*/
/* 								</div>*/
/* 								 {% endfor %}*/
/* 								</div>*/
/* 								<a onclick="$(this).parent().find('input[type=checkbox]').prop('checked', true );" class="btn btn-primary btn-sm">Selected All</a>*/
/* 								<a onclick="$(this).parent().find('input[type=checkbox]').prop('checked', false );" class="btn btn-danger btn-sm">Unselected All</a>*/
/* 							  </div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 							   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Customer Groups Input Type">Display Input Type:</span></label>*/
/* 							   <div class="col-sm-6">*/
/* 									<div class="btn-group" data-toggle="buttons">*/
/* 										<label class="btn btn-success btn-sm  {% if onepagecheckout_customer_group_type  %} active {% endif %}  ">	*/
/* 											<input type="radio"  name="onepagecheckout_customer_group_type" {% if onepagecheckout_customer_group_type  %} checked="checked" {% endif %} value="1" autocomplete="off">Radio Button*/
/* 										</label>*/
/* 										<label class="btn btn-success btn-sm {% if not onepagecheckout_customer_group_type  %} active {% endif %} ">*/
/* 											<input type="radio"  name="onepagecheckout_customer_group_type" {% if not onepagecheckout_customer_group_type  %} checked="checked" {% endif %} value="0" autocomplete="off">select Box*/
/* 										</label>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane active" id="tab-general">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Checkout status">{{entry_status}}</span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<select name="onepagecheckout_status" id="input-status" class="form-control">*/
/* 										 {% if onepagecheckout_status %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 										{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 										{% endif %}*/
/* 									</select>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Opencart has so many payment extensions and every payment extension has there own way. There are no common standard for this. and some extension use different type of things to use like divs, button, input buttons as button with different IDs and clasess for payment confirm button. you need to add another trigger class or an id of the tag. List them here separating by comma , for example .content-confirm-order input[type=submit] .content-confirm-order .button, .content-confirm-order .btn, .content-confirm-order #button-confirm">Payment Tiggers</span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<input class="form-control" type="text" name="onepagecheckout_payment_trigger_button" value="{{onepagecheckout_payment_trigger_button}}"/>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-country"><span data-toggle="tooltip" title="" data-original-title="Set Default Country"> {{entry_country}}</span></label>*/
/* 								<div class="col-sm-3">*/
/* 								  <select name="onepagecheckout_country_id" id="input-country" class="form-control">*/
/* 									{% for country in countries %}*/
/* 										{% if country.country_id == onepagecheckout_country_id %}*/
/* 										<option value="{{country.country_id}}" selected="selected">{{country.name}}</option>*/
/* 										{% else %}*/
/* 										<option value="{{country.country_id}}">{{country.name}}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 								  </select>*/
/* 								</div>*/
/* 							</div>*/
/* 						    <div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-zone"><span data-toggle="tooltip" title="" data-original-title="Set Default zone">{{entry_zone}}</span></label>*/
/* 								<div class="col-sm-3">*/
/* 								  <select name="onepagecheckout_zone_id" id="input-zone" class="form-control"></select>*/
/* 								</div>*/
/* 						   </div>*/
/* 						  <div class="form-group">*/
/* 							  <label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="{{help_customer_group}}">{{entry_customer_group}}</span></label>*/
/* 							  <div class="col-sm-3">*/
/* 								<select name="onepagecheckout_customer_group_id" id="input-customer-group" class="form-control">*/
/* 								 */
/* 									  {% for customer_group in customer_groups %}*/
/* 									{% if customer_group.customer_group_id == onepagecheckout_customer_group_id %}*/
/* 								  <option value="{{customer_group.customer_group_id}}" selected="selected">{{customer_group.name}}</option>*/
/* 								  {% else %}*/
/* 								  <option value="{{customer_group.customer_group_id}}">{{customer_group.name}}</option>*/
/* 								 {% endif %}*/
/* 								 {% endfor %}*/
/* 								</select>*/
/* 							  </div>*/
/* 						   </div>*/
/* 						   <div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-postal_code"><span data-toggle="tooltip" title="{{help_postal}}">{{entry_postal_code}}</span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<input type="text" class="form-control" name="onepagecheckout_postal_code" value="{{onepagecheckout_postal_code}}"/>*/
/* 								</div>*/
/* 						   </div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-delivery_method-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_delivery_method}}</legend>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="Default selected Shipping Method">{{entry_delivery_method}}</span></label>*/
/* 									<div class="col-md-5">*/
/* 										<select class="form-control" name="onepagecheckout_default_shipping">*/
/* 										{% for delivery_method in  delivery_methods %}*/
/* 										*/
/* 										{% if delivery_method['code']==onepagecheckout_default_shipping  %}*/
/* 											<option selected="selected" value="{{delivery_method.code}}">{{delivery_method.title}}</option>*/
/* 										{% else %}*/
/* 											<option value="{{delivery_method.code}}">{{delivery_method.title}}</option>	*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								*/
/* 								<!--26-01-2017-->*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label">Icon W x H</label>*/
/* 									 <div class="col-sm-3">*/
/* 										<input class="form-control" type="text" name="onepagecheckout_delivery_method_width" value="{{onepagecheckout_delivery_method_width}}"/>*/
/* 									  </div>*/
/* 									 <div class="col-sm-3">*/
/* 										<input class="form-control" type="text" name="onepagecheckout_delivery_method_height" value="{{onepagecheckout_delivery_method_height}}"/>*/
/* 									  </div>*/
/* 								</div>*/
/* 								<!--26-01-2017-->*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Reload Payment Methods When customer choose shipping option">Reload Payment</span></label>*/
/* 									<div class="btn-group" data-toggle="buttons">*/
/* 										<label class="btn btn-success btn-sm {% if onepagecheckout_payment_method_load_payment_method==1  %} active {% endif %}">	*/
/* 											<input type="radio"  name="onepagecheckout_payment_method_load_payment_method" {% if onepagecheckout_payment_method_load_payment_method==1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 										</label>*/
/* 										<label class="btn btn-success btn-sm {% if onepagecheckout_payment_method_load_payment_method==0  %} active {% endif %}">*/
/* 											<input type="radio"  name="onepagecheckout_payment_method_load_payment_method" {% if onepagecheckout_payment_method_load_payment_method==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 										</label>*/
/* 									</div>*/
/* 								</div>*/
/* 								{% if delivery_methods %}*/
/* 								<table class="table table-bordered">*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th class="text-left">{{entry_delivery_method}}</th>*/
/* 											<th class="text-center">{{entry_image}}</th>*/
/* 											<th class="text-right">{{entry_status}}</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody>*/
/* 									   {% for delivery_method in delivery_methods %}*/
/* 										<tr>*/
/* 											<td class="text-left">{{delivery_method.title}}</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12"><a href="" id="thumb-logo{{delivery_method.code}}" data-toggle="image" class="img-thumbnail"><img src="{{delivery_method.thumb}}" alt="" title="" data-placeholder="{{placeholder}}" /></a>*/
/* 													<input type="hidden" name="onepagecheckout_manage[delivery_method][{{delivery_method.code}}][image]" value="{{ onepagecheckout_manage.delivery_method[delivery_method.code]['image']}}" id="input-logo{{delivery_method.code}}" />*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-right">*/
/* 												<div class="col-md-12">*/
/* 													<div class="form-group">*/
/* 														<div class="btn-group" data-toggle="buttons">*/
/* 															<label class="btn btn-success btn-sm {% if onepagecheckout_manage['delivery_method'][delivery_method.code]['status']==1  %} active {% endif %}">	*/
/* 																<input type="radio"  name="onepagecheckout_manage[delivery_method][{{delivery_method.code}}][status]" {% if onepagecheckout_manage['delivery_method'][delivery_method.code]['status']==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 															</label>*/
/* 															<label class="btn btn-success btn-sm {% if  onepagecheckout_manage['delivery_method'][delivery_method.code]['status']==0  %} active {% endif %}">*/
/* 																<input type="radio"  name="onepagecheckout_manage[delivery_method][{{delivery_method.code}}][status]" {% if  onepagecheckout_manage['delivery_method'][delivery_method.code]['status']==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 															</label>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 										</tr>	*/
/* 										{% endfor %}*/
/* 									</tbody>*/
/* 								</table>*/
/* 								{% endif %}*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-payment_method-setting">*/
/* 								<fieldset>*/
/* 									<legend>{{ entry_payment_method }}</legend>*/
/* 									<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-customer-group"><span data-toggle="tooltip" title="Default selected Payment Method">{{ entry_payment_method }}</span></label>*/
/* 										<div class="col-md-5">*/
/* 											<select class="form-control" name="onepagecheckout_default_payment">*/
/* 											{% for payment_method in  payment_methods %}*/
/* 										*/
/* 											{% if payment_method['code']==onepagecheckout_default_payment  %}*/
/* 												<option selected="selected" value="{{payment_method.code}}">{{payment_method.title}}</option>*/
/* 											{% else %}*/
/* 												<option value="{{payment_method.code}}">{{payment_method.title}}</option>	*/
/* 											{% endif %}*/
/* 											{% endfor %}*/
/* 										*/
/* 											</select>*/
/* 										</div>*/
/* 									</div>*/
/* 									<!--26-01-2017-->*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-2 control-label">Icon W x H</label>*/
/* 										 <div class="col-sm-3">*/
/* 											<input class="form-control" type="text" name="onepagecheckout_payment_method_width" value="{{onepagecheckout_payment_method_width}}"/>*/
/* 										  </div>*/
/* 										 <div class="col-sm-3">*/
/* 											<input class="form-control" type="text" name="onepagecheckout_payment_method_height" value="{{onepagecheckout_payment_method_height}}"/>*/
/* 										  </div>*/
/* 									</div>*/
/* 									<div class="form-group">*/
/* 										<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Reload Carts When customer choose payment option">Reload Cart</span></label>*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_payment_method_load_cart==1  %} active {% endif %}">	*/
/* 												<input type="radio"  name="onepagecheckout_payment_method_load_cart" {% if onepagecheckout_payment_method_load_cart==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_payment_method_load_cart==0  %} active {% endif %} >">*/
/* 												<input type="radio"  name="onepagecheckout_payment_method_load_cart" {% if onepagecheckout_payment_method_load_cart==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 									<!--26-01-2017-->*/
/* 									*/
/* 									{% if payment_methods %}*/
/* 									<table class="table table-bordered">*/
/* 										<thead>*/
/* 											<tr>*/
/* 												<th class="text-left">{{entry_payment_method}}</th>*/
/* 												<th class="text-center">{{entry_image}}</th>*/
/* 												<th class="text-right">{{entry_status}}</th>*/
/* 											</tr>*/
/* 										</thead>*/
/* 										<tbody>*/
/* 										{% for payment_method in payment_methods %}*/
/* 										<tr>*/
/* 											<td class="text-left">{{payment_method.title}}</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12"><a href="" id="thumb-logo{{payment_method.code}}" data-toggle="image" class="img-thumbnail"><img src="{{payment_method.thumb}}" alt="" title="" data-placeholder="{{placeholder}}" /></a>*/
/* 													<input type="hidden" name="onepagecheckout_manage[payment_method][{{payment_method.code}}][image]" value="{{ onepagecheckout_manage.payment_method[payment_method.code]['image']}}" id="input-logo{{payment_method.code}}" />*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-right">*/
/* 												<div class="col-md-12">*/
/* 													<div class="form-group">*/
/* 														<div class="btn-group" data-toggle="buttons">*/
/* 															<label class="btn btn-success btn-sm {% if onepagecheckout_manage['payment_method'][payment_method.code]['status']==1  %} active {% endif %}">	*/
/* 																<input type="radio"  name="onepagecheckout_manage[payment_method][{{payment_method.code}}][status]" {% if onepagecheckout_manage['payment_method'][payment_method.code]['status']==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 															</label>*/
/* 															<label class="btn btn-success btn-sm {% if  onepagecheckout_manage['payment_method'][payment_method.code]['status']==0  %} active {% endif %}">*/
/* 																<input type="radio"  name="onepagecheckout_manage[payment_method][{{payment_method.code}}][status]" {% if  onepagecheckout_manage['payment_method'][payment_method.code]['status']==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 															</label>*/
/* 														</div>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 										</tr>*/
/* 										{% endfor %}*/
/* 									</tbody>*/
/* 								</table>*/
/* 								{% endif %}*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-delivery-date-time">*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Enable or Disabled Delivery Date & Time">Status</span></label>*/
/* 								<div class="btn-group" data-toggle="buttons">*/
/* 									<label class="btn btn-success btn-sm {% if onepagecheckout_delivery_status==1  %} active {% endif %}">	*/
/* 										<input type="radio"  name="onepagecheckout_delivery_status" {% if onepagecheckout_delivery_status==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 									</label>*/
/* 									<label class="btn btn-success btn-sm {% if onepagecheckout_delivery_status==0  %} active {% endif %}">*/
/* 										<input type="radio"  name="onepagecheckout_delivery_status" {% if onepagecheckout_delivery_status==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 									</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Required Delivery Date & Time">Required Delivery</span></label>*/
/* 								<div class="btn-group" data-toggle="buttons">*/
/* 									<label class="btn btn-success btn-sm {% if onepagecheckout_delivery_required==1  %} active {% endif %}">	*/
/* 										<input type="radio"  name="onepagecheckout_delivery_required" {% if onepagecheckout_delivery_required==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 									</label>*/
/* 									<label class="btn btn-success btn-sm {% if onepagecheckout_delivery_required==0  %} active {% endif %}">*/
/* 										<input type="radio"  name="onepagecheckout_delivery_required" {% if onepagecheckout_delivery_required==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 									</label>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 							  <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Availability Days Start From Current Date to next end days">Availability Days</span></label>*/
/* 							  <div class="col-sm-10">*/
/* 								  <div class="col-sm-6">*/
/* 										<div class="input-group"><input class="form-control" type="text" name="onepagecheckout_delivery_start_days" value="{{onepagecheckout_delivery_start_days}}"/><span class="input-group-addon">Start X Days</span></div>*/
/* 								  </div>*/
/* 								  <div class="col-sm-6">*/
/* 									<div class="input-group"><input class="form-control" type="text" name="onepagecheckout_delivery_end_days" value="{{onepagecheckout_delivery_end_days}}"/><span class="input-group-addon">End X Days</span></div>*/
/* 								  </div>*/
/* 							  </div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 							   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Disabled Delivery Dates <br/> Note: Date Format Should be YYYY-MM-DD,YYYY-MM-DD">Disabled Delivery Dates</span></label>*/
/* 							   <div class="col-sm-10">*/
/* 								 <textarea class="form-control" name="onepagecheckout_delivery_disable_days">{{onepagecheckout_delivery_disable_days}}</textarea>*/
/* 							   </div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 							   <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="Select Weekend">Weekends</span></label>*/
/* 							   <div class="col-sm-10">*/
/* 								 <select multiple class="form-control" name="onepagecheckout_delivery_weekend[]">*/
/* 								   {% for key,week in weeks %}*/
/* 									{% if key in onepagecheckout_delivery_weekend %}*/
/* 									<option selected="selected" value="{{key}}">{{week}}</option>*/
/* 									{% else %}*/
/* 									<option value="{{key}}">{{week}}</option>*/
/* 									{% endif %}*/
/* 									{% endfor %}*/
/* 								 </select>*/
/* 							   </div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-confirm_order-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_confirm_order}}</legend>*/
/* 								<div class="form-group">*/
/* 									<label class="col-md-2 control-label"><span data-toggle="tooltip" title="" data-original-title="Confirm Order auto trigger">Auto Trigger Confirm Button</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_autotrigger  %} active {% endif %} " >    */
/* 												<input type="radio" {% if onepagecheckout_autotrigger   %} checked="checked"  {% endif %}  name="onepagecheckout_autotrigger"  value="1" autocomplete="off">{{ text_yes }}*/
/* 											</label>*/
/* 											<label class="btn btn-success btn-sm {% if not onepagecheckout_autotrigger  %} active {% endif %}">*/
/* 												<input type="radio" {% if not onepagecheckout_autotrigger   %} checked="checked"  {% endif %}  name="onepagecheckout_autotrigger"  value="0" autocomplete="off">{{ text_no }}*/
/* 											</label>*/
/* 										</div>*/
/* 										<hr/>*/
/* 										<div style="font-size:14px;" class="alert alert-info">*/
/* 											Auto Trigger feature is very appropriate for one-page checkout extension. In Default process, Customer has to click on checkout button and then confirm it again but auto trigger undoubtedly triggers without clicking the second confirm button. The customer just needs to select the payment method and click the checkout button. Order will be placed automatically*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 								<label class="col-sm-2 control-label " for="input-autotrigger"><span data-toggle="tooltip" title="" data-original-title="Choose payment methods which you want apply auto trigger condition.">Auto Trigger Payments</span></label>*/
/* 								<div class="col-sm-9">*/
/* 									<select class="form-control" multiple name="onepagecheckout_trigger_payment_method[]">*/
/* 										{% for payment_method in payment_methods %}*/
/* 										{% if payment_method.code in onepagecheckout_trigger_payment_method %}*/
/* 										<option selected="selected" value="{{payment_method.code}}">{{payment_method.title}}</option>*/
/* 										{% else %}*/
/* 										<option value="{{payment_method.code}}">{{payment_method.title}}</option>*/
/* 										{% endif %}*/
/* 										{% endfor %}*/
/* 									</select>*/
/* 								</div>*/
/* 							  </div>*/
/* 								<div class="form-group">	*/
/* 									<label class="col-sm-2 control-label " for="input-terms">*/
/* 									<span data-toggle="tooltip" title="" data-original-title="Forces people to agree to terms before a customer can checkout.">{{entry_agree}}</span></label>*/
/* 									<div class="col-sm-3">*/
/* 										<select name="onepagecheckout_manage[confirm_order][terms]" class="form-control">*/
/* 											<option value="0">{{text_none}}</option>*/
/* 											{% for information in informations %}*/
/* 											*/
/* 											{% if information['information_id'] == onepagecheckout_manage['confirm_order']['terms'] %}*/
/* 											<option value="{{information['information_id']}}" selected="selected">{{information['title']}}</option>*/
/* 											{% else %}*/
/* 											<option value="{{information['information_id']}}">{{information['title']}}</option>*/
/* 											{% endif %}*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group register_newsletter">*/
/* 									<label class="col-sm-2 control-label" for="input-checkout-term-auto"><span data-toggle="tooltip" title="" data-original-title="Auto Checked Checkout Terms">Auto Checked </span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 										*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['confirm_order']['checkout_terms']==1  %} active {% endif %}">	*/
/* 												<input type="radio"  name="onepagecheckout_manage[confirm_order][checkout_terms]" {% if onepagecheckout_manage['confirm_order']['checkout_terms']==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['confirm_order']['checkout_terms']==0  %} active {% endif %}">*/
/* 												<input type="radio" name="onepagecheckout_manage[confirm_order][checkout_terms]" {% if onepagecheckout_manage['confirm_order']['checkout_terms']==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Enable Order Comment Section">{{entry_comment_status}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 										*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['confirm_order']['comment_status']==1  %} active {% endif %}">	*/
/* 												<input type="radio"  name="onepagecheckout_manage[confirm_order][comment_status]" {% if onepagecheckout_manage['confirm_order']['comment_status']==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['confirm_order']['comment_status']==0  %} active {% endif %}">*/
/* 												<input type="radio" name="onepagecheckout_manage[confirm_order][comment_status]" {% if onepagecheckout_manage['confirm_order']['comment_status']==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Forces people to add Order Comments">{{entry_require_comment_status}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 										*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['confirm_order']['require_comment_status']==1  %} active {% endif %}">	*/
/* 												<input type="radio"  name="onepagecheckout_manage[confirm_order][require_comment_status]" {% if onepagecheckout_manage['confirm_order']['require_comment_status']==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['confirm_order']['require_comment_status']==0  %} active {% endif %}">*/
/* 												<input type="radio" name="onepagecheckout_manage[confirm_order][require_comment_status]" {% if onepagecheckout_manage['confirm_order']['require_comment_status']==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-shopping-button"><span data-toggle="tooltip" title="" data-original-title="Enable Continue Shopping Button in Checkout page">{{entry_shopping_button}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 										*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['confirm_order']['shopping_button_status']==1  %} active {% endif %}">	*/
/* 												<input type="radio"  name="onepagecheckout_manage[confirm_order][shopping_button_status]" {% if onepagecheckout_manage['confirm_order']['shopping_button_status']==1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['confirm_order']['shopping_button_status']==0  %} active {% endif %}">*/
/* 												<input type="radio" name="onepagecheckout_manage[confirm_order][shopping_button_status]" {% if onepagecheckout_manage['confirm_order']['shopping_button_status']==0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-social_login">*/
/* 						<fieldset>*/
/* 								<legend>{{entry_facebook_login}}</legend>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="{{entry_shopping_cart_order}}" >{{entry_status}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['social_login']['facebook_login_status'] == 1  %} active {% endif %}   " >	*/
/* 												<input type="radio"  name="onepagecheckout_manage[social_login][facebook_login_status]" {% if onepagecheckout_manage['social_login']['facebook_login_status'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											*/
/* 											<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['social_login']['facebook_login_status'] == 0  %} active {% endif %}">*/
/* 												<input type="radio"  name="onepagecheckout_manage[social_login][facebook_login_status]" {% if not onepagecheckout_manage['social_login']['facebook_login_status'] == 0  %} active {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Add Redirect URL">Redirect URL</span></label>*/
/* 								<div class="col-sm-7">*/
/* 								<b>{{callback}}</b>*/
/* 									<input class="form-control" type="hidden" name="onepagecheckout_facebook_callback" value="{{callback}}"/>*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 								<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Add Facebook App ID">APP ID</span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<input class="form-control" type="text" name="onepagecheckout_facebook_appid" value="{{onepagecheckout_facebook_appid}}" placeholder="App ID"/>*/
/* 								</div>*/
/* 								<div style="float:left; margin-top:9px; margin-left:5px;"><a target="_new" href="https://developers.facebook.com/">Click Here</a> to create new facebook app. </div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Add Facebook Secret ID">App Secret </span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<input class="form-control" type="text" name="onepagecheckout_facebook_key" value="{{onepagecheckout_facebook_key}}" placeholder="App Secret"/>*/
/* 								</div>*/
/* 							</div>*/
/* 							<legend><?php echo $entry_google_login; ?></legend>*/
/* 							<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="{{entry_shopping_cart_order}}" >{{entry_status}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['social_login']['google_login_status'] == 1  %} active {% endif %} " >	*/
/* 												<input type="radio"  name="onepagecheckout_manage[social_login][google_login_status]" {% if onepagecheckout_manage['social_login']['google_login_status'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											*/
/* 											<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['social_login']['google_login_status'] == 0  %} active {% endif %} ">*/
/* 												<input type="radio"  name="onepagecheckout_manage[social_login][google_login_status]" {% if onepagecheckout_manage['social_login']['google_login_status'] == 0  %} checked="checked" {% endif %}   value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Add Redirect URL">Redirect URL</span></label>*/
/* 								<div class="col-sm-7">*/
/* 								<b>{{googlecallback}}</b>*/
/* 									<input class="form-control" type="hidden" name="onepagecheckout_google_callback" value="{{googlecallback}}"/>*/
/* 									*/
/* 								</div>*/
/* 							</div>*/
/* 								<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Add Google App ID">APP ID</span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<input class="form-control" type="text" name="onepagecheckout_google_appid" value="{{onepagecheckout_google_appid}}" placeholder="App ID"/>*/
/* 								</div>*/
/* 								<div style="float:left; margin-top:9px; margin-left:5px;"><a target="_new" href="https://console.cloud.google.com/">Click Here</a> to create new Google app. </div>*/
/* 							</div>*/
/* 							<div class="form-group">*/
/* 								<label class="col-sm-2 control-label" for="input-status"><span data-toggle="tooltip" title="" data-original-title="Add Google Secret ID">App Secret </span></label>*/
/* 								<div class="col-sm-3">*/
/* 									<input class="form-control" type="text" name="onepagecheckout_google_key" value="{{onepagecheckout_google_key}}" placeholder="App Secret"/>*/
/* 								</div>*/
/* 							</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-shopping-cart-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_shopping_cart}}</legend>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="{{entry_shopping_cart_order}}" >{{entry_status}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['shopping_cart_status'] == 1  %} active {% endif %}" >	*/
/* 												<input type="radio"  name="onepagecheckout_manage[shopping_cart][shopping_cart_status]" {% if onepagecheckout_manage['shopping_cart']['shopping_cart_status'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['shopping_cart_status'] == 0  %} active {% endif %}">*/
/* 												<input type="radio"  name="onepagecheckout_manage[shopping_cart][shopping_cart_status]" {% if onepagecheckout_manage['shopping_cart']['shopping_cart_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-weight"><span  data-toggle="tooltip" title="{{entry_show_weight}}" >{{show_weight}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_weight'] == 1  %} active {% endif %}" >	*/
/* 												<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_weight]" {% if onepagecheckout_manage['shopping_cart']['show_product_weight'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											*/
/* 											<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart']['show_product_weight'] == 0  %} active {% endif %} ">*/
/* 												<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_weight]" {% if onepagecheckout_manage['shopping_cart']['show_product_weight'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-qnty_update"><span  data-toggle="tooltip" title="{{entry_show_qnty_update}}">{{show_qnty_update}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_qnty_update'] == 1  %} active {% endif %}" >	*/
/* 												<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_qnty_update]" {% if onepagecheckout_manage['shopping_cart']['show_product_qnty_update'] == 1  %} checked=checked {% endif %} value="1" autocomplete="off"> {{text_yes}}*/
/* 											</label>*/
/* 											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_qnty_update'] == 0  %} active {% endif %}">*/
/* 												<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_qnty_update]" {% if onepagecheckout_manage['shopping_cart']['show_product_qnty_update'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off"> {{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-image_width">{{show_image_width}}</label>*/
/* 									<div class="col-sm-3">*/
/* 										<input type="text"  value="{{onepagecheckout_manage['shopping_cart']['show_product_image_width'] ? onepagecheckout_manage['shopping_cart']['show_product_image_width'] : 100}}"  name="onepagecheckout_manage[shopping_cart][show_product_image_width]" class="form-control" Placeholder="{{entry_width}}"; >*/
/* 									</div>*/
/* 									<div class="col-sm-3">*/
/* 										<input type="text"  value="{{onepagecheckout_manage['shopping_cart']['show_product_image_height'] ? onepagecheckout_manage['shopping_cart']['show_product_image_height'] : 100}}"  name="onepagecheckout_manage[shopping_cart][show_product_image_height]" class="form-control" Placeholder="{{entry_height}}"; >*/
/* 									</div>*/
/* 								</div>*/
/* 								<h3>Desktop View</h3>*/
/* 								<table class="table table-bordered">*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th class="text-left">{{entry_show_image}}</th>*/
/* 											<th class="text-center">{{entry_show_product_name}}</th>*/
/* 											<th class="text-center">{{entry_show_model}}</th>*/
/* 											<th class="text-center">{{entry_show_quantity}}</th>*/
/* 											<th class="text-center">{{entry_show_unit_price}}</th>*/
/* 											<th class="text-right">{{entry_show_total_price}}</th>*/
/* 											<th class="text-center hide">Colspan</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody>*/
/* 										<tr>*/
/* 											<td class="text-left">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_image'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_image]" {% if onepagecheckout_manage['shopping_cart']['show_product_image'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart']['show_product_image'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][show_product_image]" {% if onepagecheckout_manage['shopping_cart']['show_product_image'] == 0  %} checked="checked" {% endif %}  value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_title'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_title]" {% if onepagecheckout_manage['shopping_cart']['show_product_title'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart']['show_product_title'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_title]" {% if onepagecheckout_manage['shopping_cart']['show_product_title'] == 0  %} checked="checked" {% endif %}  value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_model'] == 1  %} active {% endif %} " >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_model]" {% if onepagecheckout_manage['shopping_cart']['show_product_model'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart']['show_product_model'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_model]" {% if onepagecheckout_manage['shopping_cart']['show_product_model'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_quantity'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_quantity]" {% if onepagecheckout_manage['shopping_cart']['show_product_quantity'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart']['show_product_quantity'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_quantity]" {% if onepagecheckout_manage['shopping_cart']['show_product_quantity'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_unit'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_unit]" {% if onepagecheckout_manage['shopping_cart']['show_product_unit'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart']['show_product_unit'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_unit]" {% if onepagecheckout_manage['shopping_cart']['show_product_unit'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-right">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['show_product_total_price'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_total_price]" {% if onepagecheckout_manage['shopping_cart']['show_product_total_price'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart']['show_product_total_price'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][show_product_total_price]" {% if onepagecheckout_manage['shopping_cart']['show_product_total_price'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 								</table>*/
/* 							</fieldset>*/
/* 							<fieldset>*/
/* 								<table class="table table-bordered">*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<td class="text-left">{{enty_module_name}}</td>*/
/* 											<th class="text-center">{{entry_logged}}</th>*/
/* 											<th class="text-center">{{entry_register_account}}</th>*/
/* 											<th class="text-right">{{entry_guest_order}}</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody>*/
/* 										<tr>*/
/* 											<td class="text-left">{{entry_coupon}}</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 												*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['coupon_login_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][coupon_login_status]" {% if onepagecheckout_manage['shopping_cart']['coupon_login_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['coupon_login_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][coupon_login_status]" {% if onepagecheckout_manage['shopping_cart']['coupon_login_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 												*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['coupon_register_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][coupon_register_status]" {% if onepagecheckout_manage['shopping_cart']['coupon_register_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['coupon_register_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][coupon_register_status]" {% if onepagecheckout_manage['shopping_cart']['coupon_register_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-right">*/
/* 												<div class="col-sm-12">*/
/* 												*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['coupon_guest_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][coupon_guest_status]" {% if onepagecheckout_manage['shopping_cart']['coupon_guest_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['coupon_guest_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][coupon_guest_status]" {% if onepagecheckout_manage['shopping_cart']['coupon_guest_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 										</tr>*/
/* 										<tr>*/
/* 											<td class="text-left">{{entry_reward}}</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 												*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['reward_login_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][reward_login_status]" {% if onepagecheckout_manage['shopping_cart']['reward_login_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['reward_login_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][reward_login_status]" {% if onepagecheckout_manage['shopping_cart']['reward_login_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>	*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 												*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['reward_register_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][reward_register_status]" {% if onepagecheckout_manage['shopping_cart']['reward_register_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['reward_register_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][reward_register_status]" {% if onepagecheckout_manage['shopping_cart']['reward_register_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-right">*/
/* 												<div class="col-sm-12">*/
/* 												*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['reward_guest_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][reward_guest_status]" {% if onepagecheckout_manage['shopping_cart']['reward_guest_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['reward_guest_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][reward_guest_status]" {% if onepagecheckout_manage['shopping_cart']['reward_guest_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 										</tr>*/
/* 										<tr>*/
/* 											<td class="text-left">{{entry_voucher}}</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['voucher_login_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][voucher_login_status]" {% if onepagecheckout_manage['shopping_cart']['voucher_login_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['voucher_login_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][voucher_login_status]" {% if onepagecheckout_manage['shopping_cart']['voucher_login_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['voucher_register_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][voucher_register_status]" {% if onepagecheckout_manage['shopping_cart']['voucher_register_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['voucher_register_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][voucher_register_status]" {% if onepagecheckout_manage['shopping_cart']['voucher_register_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-right">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['voucher_guest_status'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart][voucher_guest_status]" {% if onepagecheckout_manage['shopping_cart']['voucher_guest_status'] == 1  %} checked="checked" {% endif %}   value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart']['voucher_guest_status'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart][voucher_guest_status]" {% if onepagecheckout_manage['shopping_cart']['voucher_guest_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>											*/
/* 										</tr>*/
/* 									</tbody>*/
/* 								</table>*/
/* 								*/
/* 								<h3>Mobile View</h3>*/
/* 								<table class="table table-bordered">*/
/* 									<thead>*/
/* 										<tr>*/
/* 											<th class="text-left">{{entry_show_image}}</th>*/
/* 											<th class="text-center">{{entry_show_product_name}}</th>*/
/* 											<th class="text-center">{{entry_show_model}}</th>*/
/* 											<th class="text-center">{{entry_show_quantity}}</th>*/
/* 											<th class="text-center">{{entry_show_unit_price}}</th>*/
/* 											<th class="text-right">{{entry_show_total_price}}</th>*/
/* 											<th class="text-center hide">Colspan</th>*/
/* 										</tr>*/
/* 									</thead>*/
/* 									<tbody>*/
/* 										<tr>*/
/* 											<td class="text-left">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart_mb']['show_product_image'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_image]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_image'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart_mb']['show_product_image'] == 0  %} active {% endif %}">*/
/* 															<input type="radio" name="onepagecheckout_manage[shopping_cart_mb][show_product_image]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_image'] == 0  %} checked="checked" {% endif %}  value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart_mb']['show_product_title'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_title]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_title'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart_mb']['show_product_title'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_title]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_title'] == 0  %} checked="checked" {% endif %}  value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart_mb']['show_product_model'] == 1  %} active {% endif %} " >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_model]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_model'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart_mb']['show_product_model'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_model]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_model'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart_mb']['show_product_quantity'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_quantity]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_quantity'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart_mb']['show_product_quantity'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_quantity]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_quantity'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-center">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart_mb']['show_product_unit'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_unit]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_unit'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart_mb']['show_product_unit'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_unit]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_unit'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 											<td class="text-right">*/
/* 												<div class="col-sm-12">*/
/* 													<div class="btn-group" data-toggle="buttons">*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['shopping_cart_mb']['show_product_total_price'] == 1  %} active {% endif %}" >	*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_total_price]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_total_price'] == 1  %} checked="checked" {% endif %}  value="1" autocomplete="off">{{text_yes}}*/
/* 														</label>*/
/* 														*/
/* 														<label class="btn btn-success btn-sm  {% if onepagecheckout_manage['shopping_cart_mb']['show_product_total_price'] == 0  %} active {% endif %}">*/
/* 															<input type="radio"  name="onepagecheckout_manage[shopping_cart_mb][show_product_total_price]" {% if onepagecheckout_manage['shopping_cart_mb']['show_product_total_price'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 														</label>*/
/* 													</div>*/
/* 												</div>*/
/* 											</td>*/
/* 										</tr>*/
/* 									</tbody>*/
/* 								</table>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-personaldetails-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_personaldetails}}</legend>*/
/* 								*/
/* 								<div class="form-group register_newsletter">*/
/* 									<label class="col-sm-2 control-label" for="input-newsletter">{{entry_newsletter}}</label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['personaldetails']['newsletter_status'] == 1  %} active {% endif %}">	*/
/* 												<input type="radio"  name="onepagecheckout_manage[personaldetails][newsletter_status]" {% if onepagecheckout_manage['personaldetails']['newsletter_status'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['personaldetails']['newsletter_status'] == 0  %} active {% endif %}">*/
/* 												<input type="radio" name="onepagecheckout_manage[personaldetails][newsletter_status]" {% if onepagecheckout_manage['personaldetails']['newsletter_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">	*/
/* 									<label class="col-sm-2 control-label " for="input-terms"><span data-toggle="tooltip" title="" data-original-title="Forces people to agree to terms before an account can be created.">Account Terms</span></label>*/
/* 									<div class="col-sm-3">*/
/* 										<select name="onepagecheckout_manage[personaldetails][terms]" class="form-control">*/
/* 											<option value="0">{{text_none}}</option>*/
/* 											{% for information in informations %}*/
/* 											{% if information.information_id == onepagecheckout_manage['personaldetails']['terms'] %}*/
/* 											<option value="{{information.information_id}}" selected="selected">{{information.title}}</option>*/
/* 											{% else %}*/
/* 											<option value="{{information.information_id}}">{{information.title}}</option>*/
/* 											{% endif %}*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group register_newsletter">*/
/* 									<label class="col-sm-2 control-label" for="input-checkout-term-auto"><span data-toggle="tooltip" title="" data-original-title="Auto Checked account Terms">Auto Checked </span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['personaldetails']['account_terms'] == 1  %} active {% endif %}">	*/
/* 												<input type="radio"  name="onepagecheckout_manage[personaldetails][account_terms]" {% if onepagecheckout_manage['personaldetails']['account_terms'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['personaldetails']['account_terms'] == 0  %} active {% endif %}">*/
/* 												<input type="radio" name="onepagecheckout_manage[personaldetails][account_terms]" {% if onepagecheckout_manage['personaldetails']['account_terms'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="table-responsive">*/
/* 									<table id="table-personal" class="table table-bordered table-hover">*/
/* 										<thead>*/
/* 											<tr>*/
/* 												<th class="text-left">{{entry_field_name}}</th>*/
/* 												<th class="text-right">{{entry_status}}</th>*/
/* 											</tr>*/
/* 										</thead>*/
/* 										<tbody>*/
/* 											{% for key, fields in onepagecheckout_manage['personaldetails']['fields'] %}*/
/* 											<tr class="row-group">*/
/* 												<td class="text-left">*/
/* 													<i class="fa fa-arrows" aria-hidden="true"></i>*/
/* 													<span>{{onepagecheckout_manage['personaldetails']['fields'][key]['label']}}</span>*/
/* 													<input type="hidden" name="onepagecheckout_manage[personaldetails][fields][{{key}}][sort_order]" value="{{onepagecheckout_manage['personaldetails']['fields'][key]['sort_order'] ? onepagecheckout_manage['personaldetails']['fields'][key]['sort_order'] : 0}}" class="form-control mydragsort" />*/
/* 													<input type="hidden" name="onepagecheckout_manage[personaldetails][fields][{{key}}][label]" value="{{onepagecheckout_manage['personaldetails']['fields'][key]['label'] ? onepagecheckout_manage['personaldetails']['fields'][key]['label'] : 0}}" class="form-control" />*/
/* 												</td>*/
/* 												<td class="text-right">*/
/* 													<div class="btn-group" data-toggle="buttons">	*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['personaldetails']['fields'][key]['show'] == 1  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[personaldetails][fields][{{key}}][show]" {% if onepagecheckout_manage['personaldetails']['fields'][key]['show'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off" />{{text_yes}}*/
/* 														</label>*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['personaldetails']['fields'][key]['show'] == 2  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[personaldetails][fields][{{key}}][show]" {% if onepagecheckout_manage['personaldetails']['fields'][key]['show'] == 2  %} checked="checked" {% endif %}  value="2" autocomplete="off" />{{entry_and_required}}*/
/* 														</label>*/
/* 													*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['personaldetails']['fields'][key]['show'] == 0  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[personaldetails][fields][{{key}}][show]" {% if onepagecheckout_manage['personaldetails']['fields'][key]['show'] == 0  %} checked="checked" {% endif %}   value="0" autocomplete="off" />{{text_no}}*/
/* 														</label>*/
/* 														*/
/* 													</div>*/
/* 												</td>*/
/* 											</tr>*/
/* 											{% endfor %}*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-payment-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_payment_details_setting}}</legend>*/
/* 								<div class="form-group hide">*/
/* 									<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="{{entry_payment_details_order}}">{{entry_status}}</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['payment_details']['payment_details_status'] == 1  %} active {% endif %}" >	*/
/* 												<input type="radio"  name="onepagecheckout_manage[payment_details][payment_details_status]" {% if onepagecheckout_manage['payment_details']['payment_details_status'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['payment_details']['payment_details_status'] == 0  %} active {% endif %}">*/
/* 												<input type="radio" name="onepagecheckout_manage[payment_details][payment_details_status]" {% if onepagecheckout_manage['payment_details']['payment_details_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="table-responsive">*/
/* 									<table id="table-payment_details" class="table table-bordered table-hover">*/
/* 										<thead>*/
/* 											<tr>*/
/* 												<th class="text-left">{{entry_field_name}}</th>*/
/* 												<th class="text-right">{{entry_status}}</th>*/
/* 											</tr>*/
/* 										</thead>*/
/* 										<tbody>*/
/* 											{% for key, fields in onepagecheckout_manage['payment_details']['fields'] %}*/
/* 											<tr class="row-group">*/
/* 												<td class="text-left">*/
/* 													<i class="fa fa-arrows" aria-hidden="true"></i>*/
/* 													<span>{{onepagecheckout_manage['payment_details']['fields'][key]['label']}}</span>*/
/* 													<input type="hidden" name="onepagecheckout_manage[payment_details][fields][{{key}}][sort_order]" value="{{onepagecheckout_manage['payment_details']['fields'][key]['sort_order'] ? onepagecheckout_manage['payment_details']['fields'][key]['sort_order'] : 0}}" class="form-control mydragsort" />*/
/* 													<input type="hidden" name="onepagecheckout_manage[payment_details][fields][{{key}}][label]" value="{{onepagecheckout_manage['payment_details']['fields'][key]['label'] ? onepagecheckout_manage['payment_details']['fields'][key]['label'] : 0}}" class="form-control" />*/
/* 												</td>*/
/* 												<td class="text-right">*/
/* 													<div class="btn-group" data-toggle="buttons">	*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['payment_details']['fields'][key]['show'] == 1  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[payment_details][fields][{{key}}][show]" {% if onepagecheckout_manage['payment_details']['fields'][key]['show'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off" />{{text_yes}}*/
/* 														</label>*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['payment_details']['fields'][key]['show'] == 2  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[payment_details][fields][{{key}}][show]" {% if onepagecheckout_manage['payment_details']['fields'][key]['show'] == 2  %} checked="checked" {% endif %}  value="2" autocomplete="off" />{{entry_and_required}}*/
/* 														</label>*/
/* 													*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['payment_details']['fields'][key]['show'] == 0  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[payment_details][fields][{{key}}][show]" {% if onepagecheckout_manage['payment_details']['fields'][key]['show'] == 0  %} checked="checked" {% endif %}   value="0" autocomplete="off" />{{text_no}}*/
/* 														</label>*/
/* 														*/
/* 													</div>*/
/* 												</td>*/
/* 											</tr>*/
/* 											{% endfor %}*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-delivery-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_delivery_setting}}</legend>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="With this feature, you can enable or disable the delivery address section.<br/> Note: When you will disable the delivery address then payment address and shipping address always same.">Delivery Address</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['delivery']['delivery_status'] == 1  %} active {% endif %}" >	*/
/* 												<input type="radio"  name="onepagecheckout_manage[delivery][delivery_status]" {% if onepagecheckout_manage['delivery']['delivery_status'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['delivery']['delivery_status'] == 0  %} active {% endif %}">*/
/* 												<input type="radio" name="onepagecheckout_manage[delivery][delivery_status]" {% if onepagecheckout_manage['delivery']['delivery_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								<div class="form-group">*/
/* 									<label class="col-sm-2 control-label" for="input-status"><span  data-toggle="tooltip" title="My delivery and billing addresses are the same.">Auto Checked</span></label>*/
/* 									<div class="col-sm-10">*/
/* 										<div class="btn-group" data-toggle="buttons">*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['delivery']['delivery_auto_status'] == 1  %} active {% endif %}" >	*/
/* 												<input type="radio"  name="onepagecheckout_manage[delivery][delivery_auto_status]" {% if onepagecheckout_manage['delivery']['delivery_auto_status'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off">{{text_yes}}*/
/* 											</label>*/
/* 											*/
/* 											<label class="btn btn-success btn-sm {% if onepagecheckout_manage['delivery']['delivery_auto_status'] == 0  %} active {% endif %}">*/
/* 												<input type="radio"  name="onepagecheckout_manage[delivery][delivery_auto_status]" {% if onepagecheckout_manage['delivery']['delivery_auto_status'] == 0  %} checked="checked" {% endif %} value="0" autocomplete="off">{{text_no}}*/
/* 											</label>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 								*/
/* 								<div class="table-responsive">*/
/* 									<table id="table-delivery" class="table table-bordered table-hover">*/
/* 										<thead>*/
/* 											<tr>*/
/* 												<th class="text-left">{{entry_field_name}}</th>*/
/* 												<th class="text-right">{{entry_status}}</th>*/
/* 											</tr>*/
/* 										</thead>*/
/* 										<tbody>*/
/* 											{% for key, fields in onepagecheckout_manage['delivery']['fields'] %}*/
/* 											<tr class="row-group">*/
/* 												<td class="text-left">*/
/* 													<i class="fa fa-arrows" aria-hidden="true"></i>*/
/* 													<span>{{onepagecheckout_manage['delivery']['fields'][key]['label']}}</span>*/
/* 													<input type="hidden" name="onepagecheckout_manage[delivery][fields][{{key}}][sort_order]" value="{{onepagecheckout_manage['delivery']['fields'][key]['sort_order'] ? onepagecheckout_manage['delivery']['fields'][key]['sort_order'] : 0}}" class="form-control mydragsort" />*/
/* 													<input type="hidden" name="onepagecheckout_manage[delivery][fields][{{key}}][label]" value="{{onepagecheckout_manage['delivery']['fields'][key]['label'] ? onepagecheckout_manage['delivery']['fields'][key]['label'] : 0}}" class="form-control" />*/
/* 												</td>*/
/* 												<td class="text-right">*/
/* 													<div class="btn-group" data-toggle="buttons">	*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['delivery']['fields'][key]['show'] == 1  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[delivery][fields][{{key}}][show]" {% if onepagecheckout_manage['delivery']['fields'][key]['show'] == 1  %} checked="checked" {% endif %} value="1" autocomplete="off" />{{text_yes}}*/
/* 														</label>*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['delivery']['fields'][key]['show'] == 2  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[delivery][fields][{{key}}][show]" {% if onepagecheckout_manage['delivery']['fields'][key]['show'] == 2  %} checked="checked" {% endif %}  value="2" autocomplete="off" />{{entry_and_required}}*/
/* 														</label>*/
/* 													*/
/* 														<label class="btn btn-success btn-sm {% if onepagecheckout_manage['delivery']['fields'][key]['show'] == 0  %} active {% endif %}">*/
/* 														<input type="radio" name="onepagecheckout_manage[delivery][fields][{{key}}][show]" {% if onepagecheckout_manage['delivery']['fields'][key]['show'] == 0  %} checked="checked" {% endif %}   value="0" autocomplete="off" />{{text_no}}*/
/* 														</label>*/
/* 														*/
/* 													</div>*/
/* 												</td>*/
/* 											</tr>*/
/* 											{% endfor %}*/
/* 										</tbody>*/
/* 									</table>*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>						*/
/* 						<div class="tab-pane" id="tab-login-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_login}}</legend>*/
/* 								*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-general-language-setting">*/
/* 							<fieldset>*/
/* 									<legend>{{entry_general}}</legend>*/
/* 							</fieldset>*/
/* 							<ul class="nav nav-tabs" id="general-language">*/
/* 								{% for language in languages %}*/
/* 								 <li><a href="#checkout-language{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 								{% endfor %}*/
/* 							</ul>*/
/* 							<div class="tab-content">*/
/* 							{% for language in languages %}*/
/* 								<div class="tab-pane" id="checkout-language{{ language.language_id }}">	*/
/* 									<div class="form-group ">	*/
/* 										<label class="col-sm-2 control-label " for="input-register-tab">*/
/* 											Register Tab Name</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[general][register][{{ language.language_id }}]" placeholder="register tab name" value="{{ onepagecheckout_manage['general']['register'][language.language_id] ? onepagecheckout_manage['general']['register'][language.language_id] }}">*/
/* 											</div>*/
/* 									</div>*/
/* 									<div class="form-group ">	*/
/* 										<label class="col-sm-2 control-label " for="input-guest">*/
/* 											Guest Tab Name</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[general][guest][{{ language.language_id }}]" placeholder="guest tab name" value="{{ onepagecheckout_manage['general']['guest'][language.language_id] ? onepagecheckout_manage['general']['guest'][language.language_id] }}">*/
/* 											</div>*/
/* 									</div>*/
/* 									<div class="form-group">	*/
/* 										<label class="col-sm-2 control-label " for="input-login">*/
/* 											Login Tab Name</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[general][login][{{ language.language_id }}]" placeholder="login tab name" value="{{ onepagecheckout_manage['general']['login'][language.language_id] ? onepagecheckout_manage['general']['login'][language.language_id] }}">*/
/* 											</div>*/
/* 									</div>*/
/* 									<div class="form-group ">	*/
/* 										<label class="col-sm-2 control-label " for="input-heading">*/
/* 											{{entry_heading_title}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[general][heading_title][{{language.language_id}}]" placeholder="{{placeholder_heading_title}}" value="{{ onepagecheckout_manage['general']['heading_title'][language.language_id] ? onepagecheckout_manage['general']['heading_title'][language.language_id] }}">*/
/* 											</div>*/
/* 									</div>*/
/* 									<div class="form-group ">	*/
/* 										<label class="col-sm-2 control-label " for="input-description{{language.language_id}}" >{{entry_description}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<textarea class="form-control summernote"  name="onepagecheckout_manage[general][description][{{language.language_id}}]" placeholder="{{entry_description}}" id="input-description{{language.language_id}}" >{{ onepagecheckout_manage['general']['description'][language.language_id] ? onepagecheckout_manage['general']['description'][language.language_id] }}</textarea>*/
/* 											</div>*/
/* 									</div>*/
/* 									<div class="form-group ">	*/
/* 										*/
/* 											<label class="col-sm-2 control-label " for="input-description_bottom{{language.language_id}}">*/
/* 											{{entry_description_bottom}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<textarea class="form-control summernote"  name="onepagecheckout_manage[general][description_bottom][{{language.language_id}}]" placeholder="{{entry_description_bottom}}" id="input-description_bottom{{language.language_id}}" >{{onepagecheckout_manage['general']['description_bottom'][language.language_id] ? onepagecheckout_manage['general']['description_bottom'][language.language_id] }}</textarea>*/
/* 											</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							 {% endfor %}*/
/* 						</div>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-personaldetails-language-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_personaldetails}}</legend>*/
/* 								<ul class="nav nav-tabs" id="checkout-personals">*/
/* 									{% for key, language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-personal{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>	*/
/* 								<div class="tab-content">*/
/* 									{% for language in languages %}*/
/* 									<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-personal{{ language.language_id }}">	*/
/* 										<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{entry_heading}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[register][heading_title][{{ language.language_id }}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['register']['heading_title'][language.language_id] ? onepagecheckout_manage['register']['heading_title'][language.language_id] }}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="table-responsive">*/
/* 											<table class="table table-bordered table-hover">*/
/* 												<thead>*/
/* 													<tr>*/
/* 														<th class="text-left">{{entry_field_name}}</th>*/
/* 														<th class="text-left">{{entry_label}}</th>*/
/* 														<th class="text-left">{{entry_placeholder}}</th>*/
/* 														<th class="text-left">{{entry_error}}</th>*/
/* 													</tr>*/
/* 												</thead>*/
/* 												<tbody>*/
/* 													*/
/* 													{% for key, fields in onepagecheckout_manage['personaldetails']['fields'] %}*/
/* 													<tr>*/
/* 														<td class="text-left">{{onepagecheckout_manage['personaldetails']['fields'][key]['label'] ? onepagecheckout_manage['personaldetails']['fields'][key]['label'] : ''}}</td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[register][{{key}}][label][{{language.language_id}}]" placeholder="{{entry_label}}" value="{{onepagecheckout_manage['register'][key]['label'][language.language_id] ? onepagecheckout_manage['register'][key]['label'][language.language_id] : ''}}"></td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[register][{{key}}][placeholder][{{language.language_id}}]" placeholder="{{entry_placeholder}}" value="{{onepagecheckout_manage['register'][key]['placeholder'][language.language_id] ? onepagecheckout_manage['register'][key]['placeholder'][language.language_id] : ''}}"></td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[register][{{key}}][error][{{language.language_id}}]" placeholder="{{entry_error}}" value="{{onepagecheckout_manage['register'][key]['error'][language.language_id] ? onepagecheckout_manage['register'][key]['error'][language.language_id] : ''}}"></td>*/
/* 													</tr>*/
/* 													{% endfor %}*/
/* 												</tbody>*/
/* 											</table>*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-login-language-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_login}}</legend>*/
/* 								<ul class="nav nav-tabs" id="checkout-language6">*/
/* 									{% for key,language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-language6{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>	*/
/* 								<div class="tab-content">*/
/* 									{% for key,language in languages %}*/
/* 									<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-language6{{ language.language_id }}">*/
/* 										<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{entry_heading}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[login][heading_title][{{language.language_id }}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['login']['heading_title'][language.language_id] ? onepagecheckout_manage['login']['heading_title'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{entry_btn_text}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[login][button_text][{{language.language_id}}]" placeholder="{{entry_btn_text}}" value="{{onepagecheckout_manage['login']['button_text'][language.language_id] ? onepagecheckout_manage['login']['button_text'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{entry_wrong}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[login][wrong_message][{{language.language_id}}]" placeholder="{{entry_wrong}}" value="{{onepagecheckout_manage['login']['wrong_message'][language.language_id] ? onepagecheckout_manage['login']['wrong_message'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{entry_approved_message}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[login][approved_message][{{language.language_id}}]" placeholder="{{entry_approved_message}}" value="{{onepagecheckout_manage['login']['approved_message'][language.language_id] ? onepagecheckout_manage['login']['approved_message'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="table-responsive">*/
/* 											<table class="table table-bordered table-hover">*/
/* 												<thead>*/
/* 													<tr>*/
/* 														<th class="text-left">{{entry_field_name}}</th>*/
/* 														<th class="text-left">{{entry_label}}</th>*/
/* 														<th class="text-left">{{entry_placeholder}}</th>*/
/* 													</tr>*/
/* 												</thead>*/
/* 												<tbody>*/
/* 													<tr>*/
/* 														<td class="text-left">{{entry_email}}</td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[login][email][label][{{language.language_id}}]" placeholder="{{entry_email_label}}" value="{{onepagecheckout_manage['login']['email']['label'][language.language_id] ? onepagecheckout_manage['login']['email']['label'][language.language_id] : ''}}"></td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[login][email][placeholder][{{language.language_id}}]" placeholder="{{entry_email_placeholder}}" value="{{onepagecheckout_manage['login']['email']['placeholder'][language.language_id] ? onepagecheckout_manage['login']['email']['placeholder'][language.language_id] : ''}}"></td>*/
/* 													</tr>*/
/* 													<tr>*/
/* 														<td class="text-left">{{entry_password}}</td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[login][password][label][{{language.language_id}}]" placeholder="{{entry_password_label}}" value="{{onepagecheckout_manage['login']['password']['label'][language.language_id] ? onepagecheckout_manage['login']['password']['label'][language.language_id] : ''}}"></td>*/
/* 														<td class="text-center"><input type="text" class="form-control" name="onepagecheckout_manage[login][password][placeholder][{{language.language_id}}]" placeholder="{{entry_password_placeholder}}" value="{{onepagecheckout_manage['login']['password']['placeholder'][language.language_id] ? onepagecheckout_manage['login']['password']['placeholder'][language.language_id] : ''}}"></td>*/
/* 													</tr>*/
/* 												</tbody>*/
/* 											</table>*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-delivery_detail-language-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_delivery_setting}}</legend>*/
/* 								<ul class="nav nav-tabs" id="checkout-deliverydetail">*/
/* 									{% for key,language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-deliverydetail{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for key,language in languages %}*/
/* 									<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-deliverydetail{{ language.language_id }}">*/
/* 										<div class="form-group ">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{entry_heading}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[delivery_detail][heading_title][{{ language.language_id }}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['delivery_detail']['heading_title'][language.language_id] ? onepagecheckout_manage['delivery_detail']['heading_title'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="table-responsive">*/
/* 											<table class="table table-bordered table-hover">*/
/* 												<thead>*/
/* 													<tr>*/
/* 														<th class="text-left">{{entry_field_name}}</th>*/
/* 														<th class="text-left">{{entry_label}}</th>*/
/* 														<th class="text-left">{{entry_placeholder}}</th>*/
/* 														<th class="text-left">{{entry_error}}</th>*/
/* 													</tr>*/
/* 												</thead>*/
/* 												<tbody>*/
/* 													{% for key, fields in onepagecheckout_manage['delivery']['fields'] %}*/
/* 													<tr>*/
/* 														<td class="text-left">{{onepagecheckout_manage['delivery']['fields'][key]['label'] ? onepagecheckout_manage['delivery']['fields'][key]['label'] : ''}}</td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[delivery_detail][{{key}}][label][{{language.language_id}}]" placeholder="{{entry_label}}" value="{{onepagecheckout_manage['delivery_detail'][key]['label'][language.language_id] ? onepagecheckout_manage['delivery_detail'][key]['label'][language.language_id] : ''}}"></td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[delivery_detail][{{key}}][placeholder][{{language.language_id}}]" placeholder="{{entry_placeholder}}" value="{{onepagecheckout_manage['delivery_detail'][key]['placeholder'][language.language_id] ? onepagecheckout_manage['delivery_detail'][key]['placeholder'][language.language_id] : ''}}"></td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[delivery_detail][{{key}}][error][{{language.language_id}}]" placeholder="{{entry_error}}" value="{{onepagecheckout_manage['delivery_detail'][key]['error'][language.language_id] ? onepagecheckout_manage['delivery_detail'][key]['error'][language.language_id] : ''}}"></td>*/
/* 													</tr>*/
/* 													{% endfor %}*/
/* 												</tbody>*/
/* 											</table>*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-paymentdetails-language-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_payment_details_setting}}</legend>*/
/* 								<ul class="nav nav-tabs" id="checkout-paymentdetail">*/
/* 									{% for key,language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-paymentdetail{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for key,language in languages %}*/
/* 									<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-paymentdetail{{ language.language_id }}">*/
/* 										<div class="form-group ">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{entry_heading}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[payment_details_language][heading_title][{{ language.language_id }}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['payment_details_language']['heading_title'][language.language_id] ? onepagecheckout_manage['payment_details_language']['heading_title'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="table-responsive">*/
/* 											<table class="table table-bordered table-hover">*/
/* 												<thead>*/
/* 													<tr>*/
/* 														<th class="text-left">{{entry_field_name}}</th>*/
/* 														<th class="text-left">{{entry_label}}</th>*/
/* 														<th class="text-left">{{entry_placeholder}}</th>*/
/* 														<th class="text-left">{{entry_error}}</th>*/
/* 													</tr>*/
/* 												</thead>*/
/* 												<tbody>*/
/* 													{% for key, fields in onepagecheckout_manage['payment_details']['fields'] %}*/
/* 													<tr>*/
/* 														<td class="text-left">{{onepagecheckout_manage['payment_details']['fields'][key]['label'] ? onepagecheckout_manage['payment_details']['fields'][key]['label'] : ''}}</td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[payment_details_language][{{key}}][label][{{language.language_id}}]" placeholder="{{entry_label}}" value="{{onepagecheckout_manage['payment_details_language'][key]['label'][language.language_id] ? onepagecheckout_manage['payment_details_language'][key]['label'][language.language_id] : ''}}"></td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[payment_details_language][{{key}}][placeholder][{{language.language_id}}]" placeholder="{{entry_placeholder}}" value="{{onepagecheckout_manage['payment_details_language'][key]['placeholder'][language.language_id] ? onepagecheckout_manage['payment_details_language'][key]['placeholder'][language.language_id] : ''}}"></td>*/
/* 														<td class="text-left"><input type="text" class="form-control" name="onepagecheckout_manage[payment_details_language][{{key}}][error][{{language.language_id}}]" placeholder="{{entry_error}}" value="{{onepagecheckout_manage['payment_details_language'][key]['error'][language.language_id] ? onepagecheckout_manage['payment_details_language'][key]['error'][language.language_id] : ''}}"></td>*/
/* 													</tr>*/
/* 													{% endfor %}*/
/* 												</tbody>*/
/* 											</table>*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-delivery_method-language-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_delivery_method}}</legend>*/
/* 								<ul class="nav nav-tabs" id="checkout-language3">*/
/* 									{% for key,language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-language3{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for key,language in languages %}*/
/* 								<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-language3{{language.language_id}}">*/
/* 									<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label" for="input-heading">{{entry_heading}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[delivery_method][heading_title][{{language.language_id}}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['delivery_method']['heading_title'][language.language_id] ? onepagecheckout_manage['delivery_method']['heading_title'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 									</div>*/
/* 									{% if delivery_methods %}*/
/* 									<table class="table table-bordered">*/
/* 										<thead>*/
/* 											<tr>*/
/* 												<th>{{entry_delivery_method}}</th>*/
/* 												<th>{{entry_label}}</th>*/
/* 											</tr>*/
/* 										</thead>*/
/* 										<tbody>*/
/* 											{% for delivery_method in  delivery_methods %}*/
/* 											<tr>*/
/* 												<td>{{delivery_method.title}}</td>*/
/* 												<td>*/
/* 													<div class="col-md-12">*/
/* 														<div class="form-group">*/
/* 															<input type="text" class="form-control"  value="{{onepagecheckout_manage['delivery_method'][delivery_method['code']]['label'][language.language_id] ? onepagecheckout_manage['delivery_method'][delivery_method['code']]['label'][language.language_id] : delivery_method.title}}" name="onepagecheckout_manage[delivery_method][{{delivery_method.code}}][label][{{language.language_id}}]" placeholder="{{entry_label}}" >*/
/* 														</div>*/
/* 													</div>*/
/* 												</td>*/
/* 											</tr>*/
/* 											{% endfor %}*/
/* 										</tbody>*/
/* 									</table>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-delivery-language-date-time">*/
/* 							<fieldset>*/
/* 								<legend>Estimated Delivery Date</legend>*/
/* 							     <ul class="nav nav-tabs" id="checkout-delivery-language-date-time">*/
/* 									{% for key,language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-delivery-language-date-time{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 									{% for key,language in languages %}*/
/* 									<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-delivery-language-date-time{{ language.language_id }}">*/
/* 										<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{ entry_heading }}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[delivery][heading_title][{{ language.language_id }}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['delivery'][heading_title][language.language_id] ? onepagecheckout_manage['delivery']['heading_title'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label " for="input-label">{{entry_label}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[delivery][label][{{ language.language_id }}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['delivery'][label][language.language_id] ? onepagecheckout_manage['delivery']['label'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label " for="input-required">Error Massege</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[delivery][required][{{ language.language_id }}]" placeholder="Error Massege" value="{{onepagecheckout_manage['delivery'][required][language.language_id] ? onepagecheckout_manage['delivery']['required'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 										</div>*/
/* 									</div>*/
/* 									{% endfor %}*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-payment_method-language-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_payment_method}}</legend>*/
/* 								<ul class="nav nav-tabs" id="checkout-language3">*/
/* 									{% for key,language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-paymentmethod{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 								<div class="tab-content">*/
/* 								{% for key,language in languages %}*/
/* 								<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-paymentmethod{{language.language_id}}">*/
/* 									<div class="form-group">	*/
/* 											<label class="col-sm-2 control-label" for="input-heading">{{entry_heading}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[payment_method][heading_title][{{language.language_id}}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['payment_method']['heading_title'][language.language_id] ? onepagecheckout_manage['payment_method']['heading_title'][language.language_id] : ''}}">*/
/* 											</div>*/
/* 									</div>*/
/* 									{% if payment_methods %}*/
/* 									<table class="table table-bordered">*/
/* 										<thead>*/
/* 											<tr>*/
/* 												<th>{{entry_delivery_method}}</th>*/
/* 												<th>{{entry_label}}</th>*/
/* 											</tr>*/
/* 										</thead>*/
/* 										<tbody>*/
/* 											{% for payment_method in  payment_methods %}*/
/* 											<tr>*/
/* 												<td>{{payment_method.title}}</td>*/
/* 												<td>*/
/* 													<div class="col-md-12">*/
/* 														<div class="form-group">*/
/* 															<input type="text" class="form-control"  value="{{onepagecheckout_manage['payment_method'][payment_method['code']]['label'][language.language_id] ? onepagecheckout_manage['payment_method'][payment_method['code']]['label'][language.language_id] : payment_method.title}}" name="onepagecheckout_manage[payment_method][{{payment_method.code}}][label][{{language.language_id}}]" placeholder="{{entry_label}}" >*/
/* 														</div>*/
/* 													</div>*/
/* 												</td>*/
/* 											</tr>*/
/* 											{% endfor %}*/
/* 										</tbody>*/
/* 									</table>*/
/* 									{% endif %}*/
/* 								</div>*/
/* 								{% endfor %}*/
/* 								</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-confirm_order-language-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_confirm_order}}</legend>*/
/* 								<ul class="nav nav-tabs" id="checkout-confirm">*/
/* 									{% for key,language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-confirm{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>*/
/* 							<div class="tab-content">*/
/* 							{% for key,language in languages %}*/
/* 							<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-confirm{{language['language_id']}}">*/
/* 							<!--XML-->*/
/* 							<div class="form-group">	*/
/* 								<label class="col-sm-2 control-label " for="input-confirm-comment">Comment Label</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" class="form-control" name="onepagecheckout_manage[confirm_order][comment_label][{{language['language_id']}}]" placeholder="Comment Label" value="{{onepagecheckout_manage['confirm_order']['comment_label'][language.language_id] ? onepagecheckout_manage['confirm_order']['comment_label'][language.language_id] : ''}}">*/
/* 								</div>*/
/* 						    </div>*/
/* 							<div class="form-group">	*/
/* 								<label class="col-sm-2 control-label " for="input-confirm-comment">Comment Placeholder</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" class="form-control" name="onepagecheckout_manage[confirm_order][comment_placeholder][{{language['language_id']}}]" placeholder="Comment Placeholder" value="{{onepagecheckout_manage['confirm_order']['comment_placeholder'][language.language_id] ? onepagecheckout_manage['confirm_order']['comment_placeholder'][language.language_id] : ''}}">*/
/* 								</div>*/
/* 						    </div>*/
/* 							<!--XML-->*/
/* 							<div class="form-group ">	*/
/* 						*/
/* 								<label class="col-sm-2 control-label " for="input-confirm-button">{{entry_confirm_button}}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" class="form-control" name="onepagecheckout_manage[confirm_order][confirm_button][{{language['language_id']}}]" placeholder="{{placeholder_confirm_button}}" value="{{onepagecheckout_manage['confirm_order']['confirm_button'][language.language_id] ? onepagecheckout_manage['confirm_order']['confirm_button'][language.language_id] : ''}}">*/
/* 								</div>*/
/* 						*/
/* 							</div>*/
/* 							<div class="form-group ">	*/
/* 						*/
/* 								<label class="col-sm-2 control-label " for="input-confirm-button">{{entry_comment_error}}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" class="form-control" name="onepagecheckout_manage[confirm_order][comment_error][{{language['language_id']}}]" placeholder="{{entry_comment_error}}" value="{{onepagecheckout_manage['confirm_order']['comment_error'][language.language_id] ? onepagecheckout_manage['confirm_order']['comment_error'][language.language_id] : ''}}">*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="form-group ">	*/
/* 							*/
/* 								<label class="col-sm-2 control-label " for="input-shopping-button">{{entry_shopping_button}}</label>*/
/* 								<div class="col-sm-10">*/
/* 									<input type="text" class="form-control" name="onepagecheckout_manage[confirm_order][shopping_button][{{language['language_id']}}]" placeholder="{{placeholder_shopping_button}}" value="{{onepagecheckout_manage['confirm_order']['shopping_button'][language.language_id] ? onepagecheckout_manage['confirm_order']['shopping_button'][language.language_id] : ''}}">*/
/* 								</div>*/
/* 					*/
/* 							</div>*/
/* 							</div>*/
/* 							{% endfor %}*/
/* 							</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-shopping-cart-language-setting">*/
/* 							<fieldset>*/
/* 								<legend>{{entry_shopping_cart}}</legend>*/
/* 								<ul class="nav nav-tabs" id="checkout-language8">*/
/* 									{% for key,language in languages %}*/
/* 									 <li {% if key==0  %} class="active" {% endif %}><a href="#checkout-language8{{ language.language_id }}" data-toggle="tab"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /> {{ language.name }}</a></li>*/
/* 									{% endfor %}*/
/* 								</ul>	*/
/* 							<div class="tab-content">*/
/* 								{% for key,language in languages %}*/
/* 									<div class="tab-pane {% if key==0  %} active {% endif %}" id="checkout-language8{{ language.language_id }}">*/
/* 										<div class="form-group ">	*/
/* 											<label class="col-sm-2 control-label " for="input-heading">{{entry_heading}}</label>*/
/* 											<div class="col-sm-10">*/
/* 												<input type="text" class="form-control" name="onepagecheckout_manage[shopping_cart][heading_title][{{language.language_id}}]" placeholder="{{placeholder_heading}}" value="{{onepagecheckout_manage['shopping_cart']['heading_title'][language.language_id] ? onepagecheckout_manage['shopping_cart']['heading_title'][language.language_id]}}">*/
/* 											</div>*/
/* 										</div>*/
/* 									*/
/* 									<div class="form-group">	*/
/* 										<label class="col-sm-2 control-label " for="input-confirm-comment">Clear cart</label>*/
/* 										<div class="col-sm-10">*/
/* 											<input type="text" class="form-control" name="onepagecheckout_manage[shopping_cart][clear_cart_text][{{language.language_id}}]" placeholder="Alert Message" value="{{onepagecheckout_manage['shopping_cart']['clear_cart_text'][language.language_id] ? onepagecheckout_manage['shopping_cart']['clear_cart_text'][language.language_id]}}">*/
/* 										</div>*/
/* 									</div>*/
/* 									<div class="form-group">	*/
/* 										<label class="col-sm-2 control-label " for="input-confirm-comment">Alert Message</label>*/
/* 										<div class="col-sm-10">*/
/* 											<input type="text" class="form-control" name="onepagecheckout_manage[shopping_cart][alert_message][{{language.language_id}}]" placeholder="Alert Message" value="{{onepagecheckout_manage['shopping_cart']['alert_message'][language.language_id] ? onepagecheckout_manage['shopping_cart']['alert_message'][language.language_id]}}">*/
/* 										</div>*/
/* 									</div>*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 							</fieldset>*/
/* 						</div>*/
/* 						<div class="tab-pane" id="tab-support">*/
/* 							<p class="text-center">For Support and Query Feel Free to contact:<br /><strong>extensionsbazaar@gmail.com</strong></p>*/
/* 						</div>*/
/* 					</div>*/
/* 			</div>*/
/*     </div>*/
/* </form>*/
/* </div>*/
/* </div>*/
/* <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>*/
/* <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />*/
/* <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script>*/
/* <script type="text/javascript">*/
/* $('#general-language a:first').tab('show');*/
/* $('#checkout-language a:first').tab('show');*/
/* $('#checkout-language1 a:first').tab('show');*/
/* $('#checkout-language2 a:first').tab('show');*/
/* $('#checkout-language3 a:first').tab('show');*/
/* $('#checkout-language4 a:first').tab('show');*/
/* $('#checkout-language5 a:first').tab('show');*/
/* $('#checkout-language6 a:first').tab('show');*/
/* $('#checkout-language7 a:first').tab('show');*/
/* $('#checkout-language8 a:first').tab('show');*/
/* $('#checkout-language9 a:first').tab('show');*/
/* $('#checkout-language10 a:first').tab('show');*/
/* $('#checkout-language11 a:first').tab('show');*/
/* $('#checkout-personals a:first').tab('show');*/
/* $('#checkout-deliverydetail a:first').tab('show');*/
/* $('#checkout-paymentdetail a:first').tab('show');*/
/* $('#checkout-deliverymethod a:first').tab('show');*/
/* $('#checkout-paymentmethod a:first').tab('show');*/
/* $('#checkout-confirm a:first').tab('show');*/
/* $('#language a:first').tab('show');*/
/* $('#checkout-delivery-language-date-time a:first').tab('show');*/
/* //--></script>*/
/* <script type="text/javascript">*/
/* // Drag Personal Details*/
/* $(document).ready(function() {*/
/* $("#table-personal tbody").sortable({*/
/* 	cursor: "move",*/
/* 	stop: function() {*/
/* 		$('#table-personal tbody .row-group').each(function() {*/
/* 			$(this).find('.mydragsort').val($(this).index());*/
/* 		});*/
/* 	}*/
/* });*/
/* */
/* // Drag Delivery Details	*/
/* $("#table-delivery tbody").sortable({*/
/* 	cursor: "move",*/
/* 	stop: function() {*/
/* 		$('#table-delivery tbody .row-group').each(function() {*/
/* 			$(this).find('.mydragsort').val($(this).index());*/
/* 		});*/
/* 	}*/
/* });*/
/* 	*/
/* // Drag Payment Details	*/
/* $("#table-payment_details tbody").sortable({*/
/* 	cursor: "move",*/
/* 	stop: function() {*/
/* 		$('#table-payment_details tbody .row-group').each(function() {*/
/* 			$(this).find('.mydragsort').val($(this).index());*/
/* 		});*/
/* 	}*/
/* });*/
/* });*/
/* </script>*/
/*   <script type="text/javascript"><!--*/
/* $('select[name=\'onepagecheckout_country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		*/
/* 		url: 'index.php?route=localisation/country/country&user_token={{user_token}}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('select[name=\'onepagecheckout_country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('.fa-spin').remove();*/
/* 		},*/
/* 		success: function(json) {*/
/* 			html = '<option value="">{{text_select}}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/*           			html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{onepagecheckout_zone_id}}') {*/
/*             			html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{text_none}}</option>';*/
/* 			}*/
/* */
/* 			$('select[name=\'onepagecheckout_zone_id\']').html(html);*/
/* 			*/
/* 			$('#button-save').prop('disabled', false);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('select[name=\'onepagecheckout_country_id\']').trigger('change');*/
/* //--></script>*/
/* <script>*/
/* $('.button-account-type').click(function() {*/
/* 	setTimeout(function() {*/
/* 		var account_type = $('input[name=\'onepagecheckout_manage[personaldetails][register_status]\']:checked').val();*/
/* 		if(account_type == '1') {*/
/* 			$('.register_newsletter').removeClass('hide');*/
/* 		}else{*/
/* 			$('.register_newsletter').addClass('hide');*/
/* 		}*/
/* 	}, 300);*/
/* });*/
/* $(document).ready(function() {*/
/* 	$('.active.button-account-type').trigger('click');*/
/* });*/
/* </script>*/
/* <style>*/
/* .btn-success1{*/
/*     background-color:#8fbb6c;*/
/*     border-color:#7aae50;*/
/*     color:#fff;*/
/* }*/
/* </style>*/
/* {{footer}}*/
