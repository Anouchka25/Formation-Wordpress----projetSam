<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/blocks/woocommerceContent/processing_order.hbs */
class __TwigTemplate_6f4c268cfecc914dc0f92e34dd2fee289ec7de674fc85b8c0b2aff703e73f137 extends \MailPoetVendor\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"mailpoet_tools\"></div>
<div class=\"mailpoet_woocommerce_content_overlay\">
  <p>";
        // line 3
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Autogenerated content by WooCommerce");
        echo "</p>
</div>
<div class=\"mailpoet_content mailpoet_woocommerce_content\" data-automation-id=\"woocommerce_content\" style=\"font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-size:14px;line-height:150%;text-align:left;\">
<p style=\"margin:0 0 16px;font-size:14px;\">";
        // line 6
        echo \MailPoetVendor\twig_escape_filter($this->env, sprintf($this->extensions['MailPoet\Twig\I18n']->translate("Hi %s,", "woocommerce"), "Elon"), "html", null, true);
        echo "</p>
<p style=\"margin:0 0 16px;font-size:14px;\">";
        // line 7
        echo sprintf($this->extensions['MailPoet\Twig\I18n']->translate("Just to let you know &mdash; we've received your order #%s, and it is now being processed:", "woocommerce"), "0001");
        echo "</p>

<h2
\tstyle=\"display:block;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left\">
\t";
        // line 11
        echo $this->extensions['MailPoet\Twig\I18n']->translate("[Order #0001]", "woocommerce");
        echo "</h2>

<div style=\"margin-bottom:40px\">
\t<table class=\"m_3180768237544866075td\" cellspacing=\"0\" cellpadding=\"6\" border=\"1\"
\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;width:100%;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"col\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 19
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Product", "woocommerce");
        echo "</th>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"col\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 21
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Quantity", "woocommerce");
        echo "
\t\t\t\t</th>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"col\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 24
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Price", "woocommerce");
        echo "</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t<tr class=\"m_3180768237544866075order_item\">
\t\t\t\t<td class=\"m_3180768237544866075td\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;word-wrap:break-word\">
\t\t\t\t\tMy First Product </td>
\t\t\t\t<td class=\"m_3180768237544866075td\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif\">
\t\t\t\t\t1 </td>
\t\t\t\t<td class=\"m_3180768237544866075td\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;padding:12px;text-align:left;vertical-align:middle;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif\">
\t\t\t\t\t<span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">10,00<span
\t\t\t\t\t\t\tclass=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span> </td>
\t\t\t</tr>

\t\t</tbody>
\t\t<tfoot>
\t\t\t<tr>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"row\" colspan=\"2\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px\">
\t\t\t\t\t";
        // line 46
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Subtotal:", "woocommerce");
        echo "</th>
\t\t\t\t<td class=\"m_3180768237544866075td\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left;border-top-width:4px\">
\t\t\t\t\t<span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">10,00<span
\t\t\t\t\t\t\tclass=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span></td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"row\" colspan=\"2\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 54
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Shipping:", "woocommerce");
        echo "
\t\t\t\t</th>
\t\t\t\t<td class=\"m_3180768237544866075td\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">
\t\t\t\t\t<span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">4,90<span
\t\t\t\t\t\t\tclass=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"row\" colspan=\"2\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">
\t\t\t\t\t";
        // line 65
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Payment method:", "woocommerce");
        echo "</th>
\t\t\t\t<td class=\"m_3180768237544866075td\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">Paypal</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th class=\"m_3180768237544866075td\" scope=\"row\" colspan=\"2\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">";
        // line 71
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Total:", "woocommerce");
        echo "</th>
\t\t\t\t<td class=\"m_3180768237544866075td\"
\t\t\t\t\tstyle=\"border:1px solid #e4e4e4;vertical-align:middle;padding:12px;text-align:left\">
\t\t\t\t\t<span class=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">14,90<span
\t\t\t\t\t\t\tclass=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span> <small
\t\t\t\t\t\tclass=\"m_3180768237544866075includes_tax\">(includes <span
\t\t\t\t\t\t\tclass=\"m_3180768237544866075woocommerce-Price-amount m_3180768237544866075amount\">0,91<span
\t\t\t\t\t\t\t\tclass=\"m_3180768237544866075woocommerce-Price-currencySymbol\">€</span></span> VAT)</small>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</tfoot>
\t</table>
</div>

<table id=\"m_3180768237544866075addresses\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
\tstyle=\"width:100%;vertical-align:top;margin-bottom:40px;padding:0\">
\t<tbody>
\t\t<tr>
\t\t\t<td valign=\"top\" width=\"50%\"
\t\t\t\tstyle=\"text-align:left;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;border:0;padding:0\">
\t\t\t\t<h2
\t\t\t\t\tstyle=\"display:block;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left\">
\t\t\t\t\t";
        // line 93
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Billing address", "woocommerce");
        echo "</h2>

\t\t\t\t<address class=\"m_3180768237544866075address\" style=\"padding:12px;border:1px solid #e4e4e4\">Elon
\t\t\t\t\tMusk<br>42 rue Blue Origin<br>75000 Paris<br>France</address>
\t\t\t</td>
\t\t\t<td valign=\"top\" width=\"50%\"
\t\t\t\tstyle=\"text-align:left;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;padding:0\">
\t\t\t\t<h2
\t\t\t\t\tstyle=\"display:block;font-family:'Helvetica Neue',Helvetica,Roboto,Arial,sans-serif;font-size:18px;font-weight:bold;line-height:130%;margin:0 0 18px;text-align:left\">
\t\t\t\t\t";
        // line 102
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Shipping address", "woocommerce");
        echo "</h2>

\t\t\t\t<address class=\"m_3180768237544866075address\" style=\"padding:12px;border:1px solid #e4e4e4\">Elon
\t\t\t\t\tMusk<br>42 rue Blue Origin<br>75000 Paris<br>France</address>
\t\t\t</td>
\t\t</tr>
\t</tbody>
</table>
<p style=\"margin:0 0 16px;font-size:14px;\">";
        // line 110
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Thanks for shopping with us.", "woocommerce");
        echo "</p>
</div>
<div class=\"mailpoet_block_highlight\"></div>";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/blocks/woocommerceContent/processing_order.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 110,  176 => 102,  164 => 93,  139 => 71,  130 => 65,  116 => 54,  105 => 46,  80 => 24,  74 => 21,  69 => 19,  58 => 11,  51 => 7,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/blocks/woocommerceContent/processing_order.hbs", "C:\\laragon\\www\\projetSam\\wp-content\\plugins\\mailpoet\\views\\newsletter\\templates\\blocks\\woocommerceContent\\processing_order.hbs");
    }
}
