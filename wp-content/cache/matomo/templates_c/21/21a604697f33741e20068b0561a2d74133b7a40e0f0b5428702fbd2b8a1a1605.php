<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Transitions/transitions.twig */
class __TwigTemplate_0e5a0ada40dd1468764c03cf3e997b3e179ba1ce78476cf08101fcc9d504a3b2 extends Template
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
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 1, $this->source); })())) {
            echo "<div piwik-content-block
                          help-text=\"";
            // line 2
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Transitions_FeatureDescription"]), "html_attr");
            echo "\"
                          help-url=\"https://matomo.org/docs/transitions/\"
                          content-title=\"";
            // line 4
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Transitions_Transitions"]), "html_attr");
            echo "\">";
        }
        // line 5
        echo "
<div id=\"transitions_report\" ";
        // line 6
        if ((isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 6, $this->source); })())) {
            echo "class=\"widgetBody\"";
        }
        echo " ng-controller=\"TransitionSwitcherController as transitionSwitcher\">
    <div class=\"row\"> 
        <div class=\"col s12 m3\">
            <div piwik-field uicontrol=\"select\" name=\"actionType\"
                 ng-model=\"transitionSwitcher.actionType\"
                 ng-change=\"transitionSwitcher.onActionTypeChange(transitionSwitcher.actionType)\"
                 data-title=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_ActionType"]), "html_attr");
        echo "\"
                 full-width=\"true\"
                 options='transitionSwitcher.actionTypeOptions'>
            </div>
        </div>
        <div class=\"col s12 m9\">
            <div piwik-field uicontrol=\"select\" name=\"actionName\"
                 ng-model=\"transitionSwitcher.actionName\"
                 ng-change=\"transitionSwitcher.onActionNameChange(transitionSwitcher.actionName)\"
                 data-title=\"";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Transitions_TopX", 100]), "html_attr");
        echo "\"
                 full-width=\"true\"
                 data-disabled=\"!transitionSwitcher.isEnabled\"
                 options='transitionSwitcher.actionNameOptions'>
            </div>
        </div>
    </div>

    <div piwik-activity-indicator loading=\"transitionSwitcher.isLoading\"></div>

    <div class=\"loadingPiwik\" ng-show=\"!transitionSwitcher.isLoading\" style=\"display:none\" id=\"transitions_inline_loading\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"\"/> <span>";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
        echo "</span>
    </div>

    <div class=\"popoverContainer\" ng-show=\"!transitionSwitcher.isLoading && transitionSwitcher.isEnabled\">

    </div>

    <div id=\"Transitions_Error_Container\" ng-show=\"!transitionSwitcher.isLoading\">

    </div>

    <div class=\"alert alert-info\">
        ";
        // line 44
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Transitions_AvailableInOtherReports"]), "html", null, true);
        echo "
        ";
        // line 45
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_PageUrls"]), "html", null, true);
        echo ", ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_SubmenuPageTitles"]), "html", null, true);
        echo ",
        ";
        // line 46
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_SubmenuPagesEntry"]), "html", null, true);
        echo "
        ";
        // line 47
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_And"]), "html", null, true);
        echo "
        ";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Actions_SubmenuPagesExit"]), "html", null, true);
        echo ".
        ";
        // line 49
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Transitions_AvailableInOtherReports2", "<span class=\"icon-transition\"></span>"]);
        echo "
    </div>
</div>

";
        // line 53
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 53, $this->source); })())) {
            echo "</div>";
        }
    }

    public function getTemplateName()
    {
        return "@Transitions/transitions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 53,  127 => 49,  123 => 48,  119 => 47,  115 => 46,  109 => 45,  105 => 44,  90 => 32,  76 => 21,  64 => 12,  53 => 6,  50 => 5,  46 => 4,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not isWidget %}<div piwik-content-block
                          help-text=\"{{ 'Transitions_FeatureDescription'|translate|e('html_attr') }}\"
                          help-url=\"https://matomo.org/docs/transitions/\"
                          content-title=\"{{ 'Transitions_Transitions'|translate|e('html_attr') }}\">{% endif %}

<div id=\"transitions_report\" {% if isWidget %}class=\"widgetBody\"{% endif %} ng-controller=\"TransitionSwitcherController as transitionSwitcher\">
    <div class=\"row\"> 
        <div class=\"col s12 m3\">
            <div piwik-field uicontrol=\"select\" name=\"actionType\"
                 ng-model=\"transitionSwitcher.actionType\"
                 ng-change=\"transitionSwitcher.onActionTypeChange(transitionSwitcher.actionType)\"
                 data-title=\"{{ 'Actions_ActionType'|translate|e('html_attr') }}\"
                 full-width=\"true\"
                 options='transitionSwitcher.actionTypeOptions'>
            </div>
        </div>
        <div class=\"col s12 m9\">
            <div piwik-field uicontrol=\"select\" name=\"actionName\"
                 ng-model=\"transitionSwitcher.actionName\"
                 ng-change=\"transitionSwitcher.onActionNameChange(transitionSwitcher.actionName)\"
                 data-title=\"{{ 'Transitions_TopX'|translate(100)|e('html_attr') }}\"
                 full-width=\"true\"
                 data-disabled=\"!transitionSwitcher.isEnabled\"
                 options='transitionSwitcher.actionNameOptions'>
            </div>
        </div>
    </div>

    <div piwik-activity-indicator loading=\"transitionSwitcher.isLoading\"></div>

    <div class=\"loadingPiwik\" ng-show=\"!transitionSwitcher.isLoading\" style=\"display:none\" id=\"transitions_inline_loading\">
        <img src=\"plugins/Morpheus/images/loading-blue.gif\" alt=\"\"/> <span>{{ 'General_LoadingData'|translate }}</span>
    </div>

    <div class=\"popoverContainer\" ng-show=\"!transitionSwitcher.isLoading && transitionSwitcher.isEnabled\">

    </div>

    <div id=\"Transitions_Error_Container\" ng-show=\"!transitionSwitcher.isLoading\">

    </div>

    <div class=\"alert alert-info\">
        {{ 'Transitions_AvailableInOtherReports'|translate }}
        {{ 'Actions_PageUrls'|translate }}, {{ 'Actions_SubmenuPageTitles'|translate }},
        {{ 'Actions_SubmenuPagesEntry'|translate }}
        {{ 'General_And'|translate }}
        {{ 'Actions_SubmenuPagesExit'|translate }}.
        {{ 'Transitions_AvailableInOtherReports2'|translate('<span class=\"icon-transition\"></span>')|raw }}
    </div>
</div>

{% if not isWidget %}</div>{% endif %}
", "@Transitions/transitions.twig", "/home/rohan/Desktop/Personal_Site_WordPress/wp-content/plugins/matomo/app/plugins/Transitions/templates/transitions.twig");
    }
}
