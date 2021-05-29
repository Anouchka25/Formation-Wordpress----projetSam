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

/* segments.html */
class __TwigTemplate_4532e954b242eddf2ac220cf02f05449fdba2fbe6af8fc90815644776b9d1c9b extends \MailPoetVendor\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'translations' => [$this, 'block_translations'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "segments.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  <div id=\"segments_container\"></div>

  <script type=\"text/javascript\">
    var mailpoet_listing_per_page = ";
        // line 7
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["items_per_page"] ?? null), "html", null, true);
        echo ";
    var mailpoet_beacon_articles = [
      '5d667fc22c7d3a7a4d77c426',
      '57f47ca3c697914f21035256',
      '5d4beee42c7d3a330e3c4207',
      '5e187a3a2c7d3a7e9ae607ff',
      '57ce079f903360649f6e56fc',
      '5d722c7104286364bc8ecf19',
      '5a574bd92c7d3a194368233e',
      '59a89621042863033a1c82e6'
    ];
    var mailpoet_mss_active = ";
        // line 18
        echo json_encode(($context["mss_active"] ?? null));
        echo ";
    var mailpoet_subscribers_limit = ";
        // line 19
        ((($context["subscribers_limit"] ?? null)) ? (print (\MailPoetVendor\twig_escape_filter($this->env, ($context["subscribers_limit"] ?? null), "html", null, true))) : (print ("false")));
        echo ";
    var mailpoet_subscribers_limit_reached = ";
        // line 20
        echo ((($context["subscribers_limit_reached"] ?? null)) ? ("true") : ("false"));
        echo ";
    var mailpoet_has_valid_api_key = ";
        // line 21
        echo ((($context["has_valid_api_key"] ?? null)) ? ("true") : ("false"));
        echo ";
    var mailpoet_mss_key_invalid = ";
        // line 22
        echo ((($context["mss_key_invalid"] ?? null)) ? ("true") : ("false"));
        echo ";
    var mailpoet_subscribers_count = ";
        // line 23
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["subscriber_count"] ?? null), "html", null, true);
        echo ";
    var mailpoet_has_premium_support = ";
        // line 24
        echo ((($context["has_premium_support"] ?? null)) ? ("true") : ("false"));
        echo ";
    var wordpress_editable_roles_list = ";
        // line 25
        echo json_encode(($context["wordpress_editable_roles_list"] ?? null));
        echo ";
    var mailpoet_newsletters_list = ";
        // line 26
        echo json_encode(($context["newsletters_list"] ?? null));
        echo ";
    var mailpoet_product_categories = ";
        // line 27
        echo json_encode(($context["product_categories"] ?? null));
        echo ";
    var mailpoet_products = ";
        // line 28
        echo json_encode(($context["products"] ?? null));
        echo ";
    var mailpoet_subscription_products = ";
        // line 29
        echo json_encode(($context["subscription_products"] ?? null));
        echo ";
    var is_woocommerce_active = ";
        // line 30
        echo json_encode(($context["is_woocommerce_active"] ?? null));
        echo ";
    var mailpoet_can_use_woocommerce_subscriptions = ";
        // line 31
        echo json_encode(($context["can_use_woocommerce_subscriptions"] ?? null));
        echo ";
    var mailpoet_woocommerce_currency_symbol = ";
        // line 32
        echo json_encode(($context["woocommerce_currency_symbol"] ?? null));
        echo ";

  </script>
";
    }

    // line 37
    public function block_translations($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  ";
        echo $this->extensions['MailPoet\Twig\I18n']->localize(["pageTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Lists"), "searchLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("Search"), "loadingItems" => $this->extensions['MailPoet\Twig\I18n']->translate("Loading lists..."), "noItemsFound" => $this->extensions['MailPoet\Twig\I18n']->translate("No lists found"), "selectAllLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("All lists on this page are selected."), "selectedAllLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("All %d lists are selected."), "selectAllLink" => $this->extensions['MailPoet\Twig\I18n']->translate("Select all lists on all pages"), "clearSelection" => $this->extensions['MailPoet\Twig\I18n']->translate("Clear selection"), "permanentlyDeleted" => $this->extensions['MailPoet\Twig\I18n']->translate("%d lists were permanently deleted."), "selectBulkAction" => $this->extensions['MailPoet\Twig\I18n']->translate("Select bulk action"), "bulkActions" => $this->extensions['MailPoet\Twig\I18n']->translate("Bulk Actions"), "apply" => $this->extensions['MailPoet\Twig\I18n']->translate("Apply"), "name" => $this->extensions['MailPoet\Twig\I18n']->translate("Name"), "description" => $this->extensions['MailPoet\Twig\I18n']->translate("Description"), "segmentUpdated" => $this->extensions['MailPoet\Twig\I18n']->translate("List successfully updated!"), "segmentAdded" => $this->extensions['MailPoet\Twig\I18n']->translate("List successfully added!"), "segment" => $this->extensions['MailPoet\Twig\I18n']->translate("List"), "subscribed" => $this->extensions['MailPoet\Twig\I18n']->translate("Subscribed"), "unconfirmed" => $this->extensions['MailPoet\Twig\I18n']->translate("Unconfirmed"), "unsubscribed" => $this->extensions['MailPoet\Twig\I18n']->translate("Unsubscribed"), "inactive" => $this->extensions['MailPoet\Twig\I18n']->translate("Inactive"), "bounced" => $this->extensions['MailPoet\Twig\I18n']->translate("Bounced"), "createdOn" => $this->extensions['MailPoet\Twig\I18n']->translate("Created on"), "oneSegmentTrashed" => $this->extensions['MailPoet\Twig\I18n']->translate("1 list was moved to the trash. Note that deleting a list does not delete its subscribers."), "multipleSegmentsTrashed" => $this->extensions['MailPoet\Twig\I18n']->translate("%\$1d lists were moved to the trash. Note that deleting a list does not delete its subscribers."), "oneSegmentDeleted" => $this->extensions['MailPoet\Twig\I18n']->translate("1 list was permanently deleted. Note that deleting a list does not delete its subscribers."), "multipleSegmentsDeleted" => $this->extensions['MailPoet\Twig\I18n']->translate("%\$1d lists were permanently deleted. Note that deleting a list does not delete its subscribers."), "oneSegmentRestored" => $this->extensions['MailPoet\Twig\I18n']->translate("1 list has been restored from the Trash."), "multipleSegmentsRestored" => $this->extensions['MailPoet\Twig\I18n']->translate("%\$1d lists have been restored from the Trash."), "duplicate" => $this->extensions['MailPoet\Twig\I18n']->translate("Duplicate"), "listDuplicated" => $this->extensions['MailPoet\Twig\I18n']->translate("List \"%\$1s\" has been duplicated."), "update" => $this->extensions['MailPoet\Twig\I18n']->translate("Update"), "forceSync" => $this->extensions['MailPoet\Twig\I18n']->translate("Force Sync"), "readMore" => $this->extensions['MailPoet\Twig\I18n']->translate("Read More"), "listSynchronized" => $this->extensions['MailPoet\Twig\I18n']->translate("List \"%\$1s\" has been synchronized."), "viewSubscribers" => $this->extensions['MailPoet\Twig\I18n']->translate("View Subscribers"), "new" => $this->extensions['MailPoet\Twig\I18n']->translate("New List"), "newSegment" => $this->extensions['MailPoet\Twig\I18n']->translate("New Segment"), "edit" => $this->extensions['MailPoet\Twig\I18n']->translate("Edit"), "trash" => $this->extensions['MailPoet\Twig\I18n']->translate("Trash"), "moveToTrash" => $this->extensions['MailPoet\Twig\I18n']->translate("Move to trash"), "emptyTrash" => $this->extensions['MailPoet\Twig\I18n']->translate("Empty Trash"), "selectAll" => $this->extensions['MailPoet\Twig\I18n']->translate("Select All"), "restore" => $this->extensions['MailPoet\Twig\I18n']->translate("Restore"), "deletePermanently" => $this->extensions['MailPoet\Twig\I18n']->translate("Delete permanently"), "save" => $this->extensions['MailPoet\Twig\I18n']->translate("Save"), "trashAndDisable" => $this->extensions['MailPoet\Twig\I18n']->translate("Trash and disable"), "restoreAndEnable" => $this->extensions['MailPoet\Twig\I18n']->translate("Restore and enable"), "previousPage" => $this->extensions['MailPoet\Twig\I18n']->translate("Previous page"), "firstPage" => $this->extensions['MailPoet\Twig\I18n']->translate("First page"), "nextPage" => $this->extensions['MailPoet\Twig\I18n']->translate("Next page"), "lastPage" => $this->extensions['MailPoet\Twig\I18n']->translate("Last page"), "currentPage" => $this->extensions['MailPoet\Twig\I18n']->translate("Current page"), "pageOutOf" => $this->extensions['MailPoet\Twig\I18n']->translate("of"), "numberOfItemsSingular" => $this->extensions['MailPoet\Twig\I18n']->translate("1 item"), "numberOfItemsMultiple" => $this->extensions['MailPoet\Twig\I18n']->translate("%\$1d items"), "allSendingPausedHeader" => $this->extensions['MailPoet\Twig\I18n']->translate("All sending is currently paused!"), "allSendingPausedBody" => $this->extensions['MailPoet\Twig\I18n']->translate("Your key to send with MailPoet is invalid."), "allSendingPausedLink" => $this->extensions['MailPoet\Twig\I18n']->translate("Purchase a key"), "segmentDescriptionTip" => $this->extensions['MailPoet\Twig\I18n']->translate("This text box is for your own use and is never shown to your subscribers."), "backToList" => $this->extensions['MailPoet\Twig\I18n']->translate("Back"), "subscribersInPlanCount" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("%\$1d / %\$2d", "count / total subscribers"), "subscribersInPlan" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("%s subscribers in your plan", "number of subscribers in a sending plan"), "subscribersInPlanTooltip" => $this->extensions['MailPoet\Twig\I18n']->translate("This is the total of subscribed, unconfirmed and inactive subscribers we count when you are sending with MailPoet Sending Service. The count excludes unsubscribed and bounced (invalid) email addresses."), "mailpoetSubscribers" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("%s MailPoet subscribers", "number of subscribers in the plugin"), "mailpoetSubscribersTooltipFree" => $this->extensions['MailPoet\Twig\I18n']->translate("This is the total of all subscribers including %\$1d WordPress users. To exclude WordPress users, please purchase one of our premium plans."), "mailpoetSubscribersTooltipPremium" => $this->extensions['MailPoet\Twig\I18n']->translate("This is the total of all subscribers excluding all WordPress users."), "pageTitleSegments" => $this->extensions['MailPoet\Twig\I18n']->translate("Segments"), "formPageTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Segment"), "formSegmentTitle" => $this->extensions['MailPoet\Twig\I18n']->translate("Segment"), "descriptionTip" => $this->extensions['MailPoet\Twig\I18n']->translate("This text box is for your own use and is never shown to your subscribers."), "dynamicSegmentUpdated" => $this->extensions['MailPoet\Twig\I18n']->translate("Segment successfully updated!"), "dynamicSegmentAdded" => $this->extensions['MailPoet\Twig\I18n']->translate("Segment successfully added!"), "segmentType" => $this->extensions['MailPoet\Twig\I18n']->translate("Type"), "wpUserRole" => $this->extensions['MailPoet\Twig\I18n']->translate("Subscriber"), "email" => $this->extensions['MailPoet\Twig\I18n']->translate("Email"), "nameColumn" => $this->extensions['MailPoet\Twig\I18n']->translate("Name"), "subscribersCountColumn" => $this->extensions['MailPoet\Twig\I18n']->translate("Number of subscribers"), "updatedAtColumn" => $this->extensions['MailPoet\Twig\I18n']->translate("Modified on"), "missingPluginMessageColumn" => $this->extensions['MailPoet\Twig\I18n']->translate("Missing plugin message"), "loadingDynamicSegmentItems" => $this->extensions['MailPoet\Twig\I18n']->translate("Loading data…"), "noDynamicSegmentItemsFound" => $this->extensions['MailPoet\Twig\I18n']->translate("No segments found"), "numberOfItemsSingular" => $this->extensions['MailPoet\Twig\I18n']->translate("1 item"), "numberOfItemsMultiple" => $this->extensions['MailPoet\Twig\I18n']->translate("%\$1d items"), "previousPage" => $this->extensions['MailPoet\Twig\I18n']->translate("Previous page"), "firstPage" => $this->extensions['MailPoet\Twig\I18n']->translate("First page"), "nextPage" => $this->extensions['MailPoet\Twig\I18n']->translate("Next page"), "lastPage" => $this->extensions['MailPoet\Twig\I18n']->translate("Last page"), "currentPage" => $this->extensions['MailPoet\Twig\I18n']->translate("Current page"), "pageOutOf" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("of", "Page X of Y"), "notSentYet" => $this->extensions['MailPoet\Twig\I18n']->translate("Not sent yet"), "selectLinkPlaceholder" => $this->extensions['MailPoet\Twig\I18n']->translate("Select link"), "selectNewsletterPlaceholder" => $this->extensions['MailPoet\Twig\I18n']->translate("Select email"), "selectActionPlaceholder" => $this->extensions['MailPoet\Twig\I18n']->translate("Select action"), "selectUserRolePlaceholder" => $this->extensions['MailPoet\Twig\I18n']->translate("Select user role"), "emailActionOpened" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("opened", "Dynamic segment creation: when newsletter was opened"), "emailActionOpensAbsoluteCount" => $this->extensions['MailPoet\Twig\I18n']->translate("# of opens"), "emailActionOpens" => $this->extensions['MailPoet\Twig\I18n']->translate("opens"), "emailActionDays" => $this->extensions['MailPoet\Twig\I18n']->translate("days"), "emailActionOpensSentence" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("{condition} {opens} opens", "The result will be \"more than 20 opens\""), "emailActionOpensDaysSentence" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("in the last {days} days", "The result will be \"in the last 5 days\""), "moreThan" => $this->extensions['MailPoet\Twig\I18n']->translate("more than"), "lessThan" => $this->extensions['MailPoet\Twig\I18n']->translate("less than"), "before" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("before", "Meaning: \"Subscriber subscribed before Aprile\""), "after" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("after", "Meaning: \"Subscriber subscribed after April"), "inTheLast" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("in the last", "Meaning: \"Subscriber subscribed in the last 3 days\""), "notInTheLast" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("not in the last", "Meaning: \"Subscriber subscribed not in the last 3 days\""), "emailActionNotOpened" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("not opened", "Dynamic segment creation: when newsletter was not opened"), "emailActionClicked" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("clicked", "Dynamic segment creation: when a newsletter link was clicked"), "emailActionClickedAnyEmail" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("clicked any email", "Dynamic segment creation: when a newsletter link in any email was clicked"), "emailActionNotClicked" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("not clicked", "Dynamic segment creation: when a newsletter link was not clicked"), "searchLabel" => $this->extensions['MailPoet\Twig\I18n']->translate("Search"), "segmentsTip" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Tip", "A note about dynamic segments usage"), "segmentsTipText" => $this->extensions['MailPoet\Twig\I18n']->translate("segments allow you to group your subscribers by other criteria, such as events and actions."), "segmentsTipLink" => $this->extensions['MailPoet\Twig\I18n']->translate("Read more."), "subscribedDate" => $this->extensions['MailPoet\Twig\I18n']->translate("subscribed date"), "segmentsSubscriber" => $this->extensions['MailPoet\Twig\I18n']->translate("has WordPress user role"), "segmentsActiveSubscription" => $this->extensions['MailPoet\Twig\I18n']->translate("has an active subscription"), "woocommerceSubscriptions" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("WooCommerce Subscriptions", "Dynamic segment creation: User selects this to use any WooCommerce Subscriptions filters"), "selectWooSubscription" => $this->extensions['MailPoet\Twig\I18n']->translate("Search subscriptions"), "oneDynamicSegmentTrashed" => $this->extensions['MailPoet\Twig\I18n']->translate("1 segment was moved to the trash."), "multipleDynamicSegmentsTrashed" => $this->extensions['MailPoet\Twig\I18n']->translate("%\$1d segments were moved to the trash."), "oneDynamicSegmentRestored" => $this->extensions['MailPoet\Twig\I18n']->translate("1 segment has been restored from the Trash."), "multipleDynamicSegmentsRestored" => $this->extensions['MailPoet\Twig\I18n']->translate("%\$1d segments have been restored from the Trash."), "multipleDynamicSegmentsDeleted" => $this->extensions['MailPoet\Twig\I18n']->translate("%\$1d segments were permanently deleted."), "oneDynamicSegmentDeleted" => $this->extensions['MailPoet\Twig\I18n']->translate("1 segment was permanently deleted."), "wooNumberOfOrders" => $this->extensions['MailPoet\Twig\I18n']->translate("# of orders"), "equal" => $this->extensions['MailPoet\Twig\I18n']->translate("equal"), "moreThan" => $this->extensions['MailPoet\Twig\I18n']->translate("more than"), "lessThan" => $this->extensions['MailPoet\Twig\I18n']->translate("less than"), "wooNumberOfOrdersCount" => $this->extensions['MailPoet\Twig\I18n']->translate("count"), "daysPlaceholder" => $this->extensions['MailPoet\Twig\I18n']->translate("days"), "days" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("days", "Appears together with `inTheLast` when creating a new WooCommerce segment based on the number of orders."), "inTheLast" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("in the last", "Appears together with `days` when creating a new WooCommerce segment based on the number of orders."), "wooNumberOfOrdersOrders" => $this->extensions['MailPoet\Twig\I18n']->translate("orders"), "wooPurchasedCategory" => $this->extensions['MailPoet\Twig\I18n']->translate("purchased in this category"), "wooPurchasedProduct" => $this->extensions['MailPoet\Twig\I18n']->translate("purchased this product"), "wooTotalSpent" => $this->extensions['MailPoet\Twig\I18n']->translate("total spent"), "wooTotalSpentAmount" => $this->extensions['MailPoet\Twig\I18n']->translate("amount"), "selectWooPurchasedCategory" => $this->extensions['MailPoet\Twig\I18n']->translate("Search category"), "selectWooPurchasedProduct" => $this->extensions['MailPoet\Twig\I18n']->translate("Search products"), "woocommerce" => $this->extensions['MailPoet\Twig\I18n']->translateWithContext("WooCommerce", "Dynamic segment creation: User selects this to use any woocommerce filters"), "dynamicSegmentSizeIsCalculated" => $this->extensions['MailPoet\Twig\I18n']->translate("Calculating segment size…"), "dynamicSegmentSizeCalculatingTimeout" => $this->extensions['MailPoet\Twig\I18n']->translate("Segment size calculation has timed out. You can still save the segment."), "dynamicSegmentSize" => $this->extensions['MailPoet\Twig\I18n']->translate("This segment has %\$1d subscribers.")]);
        // line 195
        echo "
";
    }

    public function getTemplateName()
    {
        return "segments.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 195,  138 => 38,  134 => 37,  126 => 32,  122 => 31,  118 => 30,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  74 => 19,  70 => 18,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "segments.html", "C:\\laragon\\www\\projetSam\\wp-content\\plugins\\mailpoet\\views\\segments.html");
    }
}
