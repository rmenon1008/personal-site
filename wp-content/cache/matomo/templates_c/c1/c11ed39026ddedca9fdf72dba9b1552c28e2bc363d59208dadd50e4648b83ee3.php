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

/* @Goals/_formAddGoal.twig */
class __TwigTemplate_cf908da28513589891e1197cf9836efc06993aa6b6d37acbe3bdab79d9896b4f extends Template
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
        echo "<div piwik-content-block
     content-title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_AddNewGoal"]), "html_attr");
        echo "\"
     class=\"addEditGoal\"
     ng-show=\"manageGoals.showEditGoal\">

    ";
        // line 6
        if ((array_key_exists("addNewGoalIntro", $context) && (isset($context["addNewGoalIntro"]) || array_key_exists("addNewGoalIntro", $context) ? $context["addNewGoalIntro"] : (function () { throw new RuntimeError('Variable "addNewGoalIntro" does not exist.', 6, $this->source); })()))) {
            // line 7
            echo "        ";
            echo (isset($context["addNewGoalIntro"]) || array_key_exists("addNewGoalIntro", $context) ? $context["addNewGoalIntro"] : (function () { throw new RuntimeError('Variable "addNewGoalIntro" does not exist.', 7, $this->source); })());
            echo "
    ";
        }
        // line 9
        echo "
    <div piwik-form>
        <div piwik-field uicontrol=\"text\" name=\"goal_name\"
             ng-model=\"manageGoals.goal.name\"
             maxlength=\"50\"
             data-title=\"";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_GoalName"]), "html_attr");
        echo "\">
        </div>

        <div piwik-field uicontrol=\"text\" name=\"goal_description\"
             ng-model=\"manageGoals.goal.description\"
             maxlength=\"255\"
             data-title=\"";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html_attr");
        echo "\">
        </div>

        <div class=\"row goalIsTriggeredWhen\">
            <div class=\"col s12\">
                <h3>";
        // line 25
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_GoalIsTriggered"]), "html_attr");
        echo "</h3>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12 m6 goalTriggerType\">
                <div piwik-field uicontrol=\"select\" name=\"trigger_type\"
                     ng-model=\"manageGoals.goal.triggerType\"
                     ng-change=\"manageGoals.changedTriggerType()\"
                     full-width=\"true\"
                     options=\"";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["goalTriggerTypeOptions"]) || array_key_exists("goalTriggerTypeOptions", $context) ? $context["goalTriggerTypeOptions"] : (function () { throw new RuntimeError('Variable "goalTriggerTypeOptions" does not exist.', 35, $this->source); })())), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"col s12 m6\">
                <div piwik-alert=\"info\" ng-show=\"manageGoals.goal.triggerType == 'manually'\">
                    ";
        // line 40
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_WhereVisitedPageManuallyCallsJavascriptTrackerLearnMore", "<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/tracking-javascript-guide#manually-trigger-goal-conversions'>", "</a>"]);
        echo "
                </div>

                <div piwik-field uicontrol=\"radio\" name=\"match_attribute\"
                     ng-show=\"manageGoals.goal.triggerType != 'manually'\"
                     full-width=\"true\"
                     ng-model=\"manageGoals.goal.matchAttribute\"
                     ng-change=\"manageGoals.initPatternType()\"
                     options=\"";
        // line 48
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["goalMatchAttributeOptions"]) || array_key_exists("goalMatchAttributeOptions", $context) ? $context["goalMatchAttributeOptions"] : (function () { throw new RuntimeError('Variable "goalMatchAttributeOptions" does not exist.', 48, $this->source); })())), "html", null, true);
        echo "\">
                </div>
            </div>
        </div>

        <div class=\"row whereTheMatchAttrbiute\" ng-show=\"manageGoals.goal.triggerType != 'manually'\">
            <h3 class=\"col s12\">";
        // line 54
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_WhereThe"]), "html_attr");
        echo "
                <span ng-show=\"manageGoals.goal.matchAttribute == 'url'\">
                    ";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_URL"]), "html", null, true);
        echo "
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'title'\">
                    ";
        // line 59
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_PageTitle"]), "html", null, true);
        echo "
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'file'\">
                    ";
        // line 62
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Filename"]), "html", null, true);
        echo "
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'external_website'\">
                    ";
        // line 65
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_ExternalWebsiteUrl"]), "html", null, true);
        echo "
                </span>
                <span ng-show=\"manageGoals.goal.matchAttribute == 'visit_duration'\">
                    ";
        // line 68
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_VisitDuration"]), "html", null, true);
        echo "
                </span>
            </h3>
        </div>

        <div class=\"row\" ng-show=\"manageGoals.goal.triggerType != 'manually'\">
            <div class=\"col s12 m6 l4\"
                 ng-show=\"manageGoals.goal.matchAttribute == 'event'\">
                <div piwik-field uicontrol=\"select\" name=\"event_type\"
                     ng-model=\"manageGoals.goal.eventType\"
                     full-width=\"true\"
                     options=\"";
        // line 79
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["eventTypeOptions"]) || array_key_exists("eventTypeOptions", $context) ? $context["eventTypeOptions"] : (function () { throw new RuntimeError('Variable "eventTypeOptions" does not exist.', 79, $this->source); })())), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"col s12 m6 l4\" ng-if=\"!manageGoals.isMatchAttributeNumeric()\">
                <div piwik-field uicontrol=\"select\" name=\"pattern_type\"
                     ng-model=\"manageGoals.goal.patternType\"
                     full-width=\"true\"
                     options=\"";
        // line 87
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["patternTypeOptions"]) || array_key_exists("patternTypeOptions", $context) ? $context["patternTypeOptions"] : (function () { throw new RuntimeError('Variable "patternTypeOptions" does not exist.', 87, $this->source); })())), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"col s12 m6 l4\" ng-if=\"manageGoals.isMatchAttributeNumeric()\">
                <div piwik-field uicontrol=\"select\" name=\"pattern_type\"
                     ng-model=\"manageGoals.goal.patternType\"
                     full-width=\"true\"
                     options=\"";
        // line 95
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["numericComparisonTypeOptions"]) || array_key_exists("numericComparisonTypeOptions", $context) ? $context["numericComparisonTypeOptions"] : (function () { throw new RuntimeError('Variable "numericComparisonTypeOptions" does not exist.', 95, $this->source); })())), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"col s12 m6 l4\">
                <div piwik-field uicontrol=\"text\" name=\"pattern\"
                     ng-model=\"manageGoals.goal.pattern\"
                     maxlength=\"255\"
                     data-title=\"";
        // line 103
        echo "{{ manageGoals.getPatternFieldLabel() }}";
        echo "\"
                     full-width=\"true\">
                </div>
            </div>

            <div id=\"examples_pattern\" class=\"col s12\" piwik-alert=\"info\">
                <span ng-show=\"manageGoals.goal.matchAttribute == 'url'\">
                    ";
        // line 110
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Contains", "'checkout/confirmation'"]), "html", null, true);
        echo "
                    <br />";
        // line 111
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_IsExactly", "'http://example.com/thank-you.html'"]), "html", null, true);
        echo "
                    <br />";
        // line 112
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_MatchesExpression", "'(.*)\\/demo\\/(.*)'"]), "html", null, true);
        echo "
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'title'\">
                    ";
        // line 115
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Contains", "'Order confirmation'"]), "html", null, true);
        echo "
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'file'\">
                    ";
        // line 118
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Contains", "'files/brochure.pdf'"]), "html", null, true);
        echo "
                   <br />";
        // line 119
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_IsExactly", "'http://example.com/files/brochure.pdf'"]), "html", null, true);
        echo "
                   <br />";
        // line 120
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_MatchesExpression", "'(.*)\\.zip'"]), "html", null, true);
        echo "
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'external_website'\">
                    ";
        // line 123
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Contains", "'amazon.com'"]), "html", null, true);
        echo "
                   <br />";
        // line 124
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_IsExactly", "'http://mypartner.com/landing.html'"]), "html", null, true);
        echo "
                   <br />";
        // line 125
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_MatchesExpression", "'http://www.amazon.com\\/(.*)\\/yourAffiliateId'"]), "html", null, true);
        echo "
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'event'\">
                    ";
        // line 128
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Contains", "'video'"]), "html", null, true);
        echo "
                   <br />";
        // line 129
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_IsExactly", "'click'"]), "html", null, true);
        echo "
                   <br />";
        // line 130
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_MatchesExpression", "'(.*)_banner'"]), "html", null, true);
        echo "\"
                </span>
                <span ng-show=\"manageGoals.goal.matchAttribute == 'visit_duration'\">
                    ";
        // line 133
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ForExampleShort"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_AtLeastMinutes", "5", "0.5"]), "html", null, true);
        echo "
                </span>
            </div>
        </div>

        <div piwik-field uicontrol=\"checkbox\" name=\"case_sensitive\"
             ng-model=\"manageGoals.goal.caseSensitive\"
             ng-show=\"manageGoals.goal.triggerType != 'manually' && !manageGoals.isMatchAttributeNumeric()\"
             data-title=\"";
        // line 141
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_CaseSensitive"]), "html_attr");
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Optional"]), "html_attr");
        echo "\">
        </div>

        <div piwik-field uicontrol=\"radio\" name=\"allow_multiple\"
             ng-model=\"manageGoals.goal.allowMultiple\"
             ng-if=\"manageGoals.goal.matchAttribute !== 'visit_duration'\"
             options=\"";
        // line 147
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["allowMultipleOptions"]) || array_key_exists("allowMultipleOptions", $context) ? $context["allowMultipleOptions"] : (function () { throw new RuntimeError('Variable "allowMultipleOptions" does not exist.', 147, $this->source); })())), "html", null, true);
        echo "\"
             introduction=\"";
        // line 148
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_AllowMultipleConversionsPerVisit"]), "html_attr");
        echo "\"
             inline-help=\"";
        // line 149
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_HelpOneConversionPerVisit"]), "html_attr");
        echo "\">
        </div>

        <h3>";
        // line 152
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_GoalRevenue"]), "html", null, true);
        echo " ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_Optional"]), "html", null, true);
        echo "</h3>

        <div piwik-field uicontrol=\"number\" name=\"revenue\"
             ng-model=\"manageGoals.goal.revenue\"
             placeholder=\"";
        // line 156
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_DefaultRevenueLabel"]), "html", null, true);
        echo "\"
             inline-help=\"";
        // line 157
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_DefaultRevenueHelp"]), "html_attr");
        echo "\">
        </div>

        <div piwik-field uicontrol=\"checkbox\" name=\"use_event_value\"
             ng-model=\"manageGoals.goal.useEventValueAsRevenue\"
             data-title=\"";
        // line 162
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_UseEventValueAsRevenue"]), "html_attr");
        echo "\"
             ng-show=\"manageGoals.goal.matchAttribute == 'event'\"
             inline-help=\"";
        // line 164
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_EventValueAsRevenueHelp"]), "html_attr");
        echo " &lt;br/&gt;&lt;br/&gt; ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_EventValueAsRevenueHelp2"]), "html_attr");
        echo "\"
        >
        </div>

        ";
        // line 168
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.endGoalEditTable"]);
        echo "

        <input type=\"hidden\" name=\"goalIdUpdate\" value=\"\"/>
        <div piwik-save-button
             saving=\"manageGoals.isLoading\"
             onconfirm=\"manageGoals.save()\"
             ng-value=\"manageGoals.goal.submitText\"></div>

        ";
        // line 176
        if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
            // line 177
            echo "            <div class='entityCancel' ng-show=\"manageGoals.showEditGoal\" ng-click=\"manageGoals.showListOfReports()\">
                ";
            // line 178
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OrCancel", "<a class='entityCancelLink'>", "</a>"]);
            echo "
            </div>
        ";
        }
        // line 181
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@Goals/_formAddGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 181,  383 => 178,  380 => 177,  378 => 176,  367 => 168,  358 => 164,  353 => 162,  345 => 157,  341 => 156,  332 => 152,  326 => 149,  322 => 148,  318 => 147,  307 => 141,  294 => 133,  286 => 130,  280 => 129,  274 => 128,  266 => 125,  260 => 124,  254 => 123,  246 => 120,  240 => 119,  234 => 118,  226 => 115,  218 => 112,  212 => 111,  206 => 110,  196 => 103,  185 => 95,  174 => 87,  163 => 79,  149 => 68,  143 => 65,  137 => 62,  131 => 59,  125 => 56,  120 => 54,  111 => 48,  100 => 40,  92 => 35,  79 => 25,  71 => 20,  62 => 14,  55 => 9,  49 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-block
     content-title=\"{{ 'Goals_AddNewGoal'|translate|e('html_attr') }}\"
     class=\"addEditGoal\"
     ng-show=\"manageGoals.showEditGoal\">

    {% if addNewGoalIntro is defined and addNewGoalIntro %}
        {{ addNewGoalIntro|raw }}
    {% endif %}

    <div piwik-form>
        <div piwik-field uicontrol=\"text\" name=\"goal_name\"
             ng-model=\"manageGoals.goal.name\"
             maxlength=\"50\"
             data-title=\"{{ 'Goals_GoalName'|translate|e('html_attr') }}\">
        </div>

        <div piwik-field uicontrol=\"text\" name=\"goal_description\"
             ng-model=\"manageGoals.goal.description\"
             maxlength=\"255\"
             data-title=\"{{ 'General_Description'|translate|e('html_attr') }}\">
        </div>

        <div class=\"row goalIsTriggeredWhen\">
            <div class=\"col s12\">
                <h3>{{ 'Goals_GoalIsTriggered'|translate|e('html_attr') }}</h3>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col s12 m6 goalTriggerType\">
                <div piwik-field uicontrol=\"select\" name=\"trigger_type\"
                     ng-model=\"manageGoals.goal.triggerType\"
                     ng-change=\"manageGoals.changedTriggerType()\"
                     full-width=\"true\"
                     options=\"{{ goalTriggerTypeOptions|json_encode }}\">
                </div>
            </div>
            <div class=\"col s12 m6\">
                <div piwik-alert=\"info\" ng-show=\"manageGoals.goal.triggerType == 'manually'\">
                    {{ 'Goals_WhereVisitedPageManuallyCallsJavascriptTrackerLearnMore'|translate(\"<a target='_blank' rel='noreferrer noopener' href='https://developer.matomo.org/guides/tracking-javascript-guide#manually-trigger-goal-conversions'>\",\"</a>\")|raw }}
                </div>

                <div piwik-field uicontrol=\"radio\" name=\"match_attribute\"
                     ng-show=\"manageGoals.goal.triggerType != 'manually'\"
                     full-width=\"true\"
                     ng-model=\"manageGoals.goal.matchAttribute\"
                     ng-change=\"manageGoals.initPatternType()\"
                     options=\"{{ goalMatchAttributeOptions|json_encode }}\">
                </div>
            </div>
        </div>

        <div class=\"row whereTheMatchAttrbiute\" ng-show=\"manageGoals.goal.triggerType != 'manually'\">
            <h3 class=\"col s12\">{{ 'Goals_WhereThe'|translate|e('html_attr') }}
                <span ng-show=\"manageGoals.goal.matchAttribute == 'url'\">
                    {{ 'Goals_URL'|translate }}
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'title'\">
                    {{ 'Goals_PageTitle'|translate }}
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'file'\">
                    {{ 'Goals_Filename'|translate }}
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'external_website'\">
                    {{ 'Goals_ExternalWebsiteUrl'|translate }}
                </span>
                <span ng-show=\"manageGoals.goal.matchAttribute == 'visit_duration'\">
                    {{ 'Goals_VisitDuration'|translate }}
                </span>
            </h3>
        </div>

        <div class=\"row\" ng-show=\"manageGoals.goal.triggerType != 'manually'\">
            <div class=\"col s12 m6 l4\"
                 ng-show=\"manageGoals.goal.matchAttribute == 'event'\">
                <div piwik-field uicontrol=\"select\" name=\"event_type\"
                     ng-model=\"manageGoals.goal.eventType\"
                     full-width=\"true\"
                     options=\"{{ eventTypeOptions|json_encode }}\">
                </div>
            </div>

            <div class=\"col s12 m6 l4\" ng-if=\"!manageGoals.isMatchAttributeNumeric()\">
                <div piwik-field uicontrol=\"select\" name=\"pattern_type\"
                     ng-model=\"manageGoals.goal.patternType\"
                     full-width=\"true\"
                     options=\"{{ patternTypeOptions|json_encode }}\">
                </div>
            </div>

            <div class=\"col s12 m6 l4\" ng-if=\"manageGoals.isMatchAttributeNumeric()\">
                <div piwik-field uicontrol=\"select\" name=\"pattern_type\"
                     ng-model=\"manageGoals.goal.patternType\"
                     full-width=\"true\"
                     options=\"{{ numericComparisonTypeOptions|json_encode }}\">
                </div>
            </div>

            <div class=\"col s12 m6 l4\">
                <div piwik-field uicontrol=\"text\" name=\"pattern\"
                     ng-model=\"manageGoals.goal.pattern\"
                     maxlength=\"255\"
                     data-title=\"{{ \"{{ manageGoals.getPatternFieldLabel() }}\"|raw }}\"
                     full-width=\"true\">
                </div>
            </div>

            <div id=\"examples_pattern\" class=\"col s12\" piwik-alert=\"info\">
                <span ng-show=\"manageGoals.goal.matchAttribute == 'url'\">
                    {{ 'General_ForExampleShort'|translate }} {{ 'Goals_Contains'|translate(\"'checkout/confirmation'\") }}
                    <br />{{ 'General_ForExampleShort'|translate }} {{ 'Goals_IsExactly'|translate(\"'http://example.com/thank-you.html'\") }}
                    <br />{{ 'General_ForExampleShort'|translate }} {{ 'Goals_MatchesExpression'|translate(\"'(.*)\\\\\\/demo\\\\\\/(.*)'\") }}
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'title'\">
                    {{ 'General_ForExampleShort'|translate }} {{ 'Goals_Contains'|translate(\"'Order confirmation'\") }}
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'file'\">
                    {{ 'General_ForExampleShort'|translate }} {{ 'Goals_Contains'|translate(\"'files/brochure.pdf'\") }}
                   <br />{{ 'General_ForExampleShort'|translate }} {{ 'Goals_IsExactly'|translate(\"'http://example.com/files/brochure.pdf'\") }}
                   <br />{{ 'General_ForExampleShort'|translate }} {{ 'Goals_MatchesExpression'|translate(\"'(.*)\\\\\\.zip'\") }}
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'external_website'\">
                    {{ 'General_ForExampleShort'|translate }} {{ 'Goals_Contains'|translate(\"'amazon.com'\") }}
                   <br />{{ 'General_ForExampleShort'|translate }} {{ 'Goals_IsExactly'|translate(\"'http://mypartner.com/landing.html'\") }}
                   <br />{{ 'General_ForExampleShort'|translate }} {{ 'Goals_MatchesExpression'|translate(\"'http://www.amazon.com\\\\\\/(.*)\\\\\\/yourAffiliateId'\") }}
                </span>
               <span ng-show=\"manageGoals.goal.matchAttribute == 'event'\">
                    {{ 'General_ForExampleShort'|translate }} {{ 'Goals_Contains'|translate(\"'video'\") }}
                   <br />{{ 'General_ForExampleShort'|translate }} {{ 'Goals_IsExactly'|translate(\"'click'\") }}
                   <br />{{ 'General_ForExampleShort'|translate }} {{ 'Goals_MatchesExpression'|translate(\"'(.*)_banner'\") }}\"
                </span>
                <span ng-show=\"manageGoals.goal.matchAttribute == 'visit_duration'\">
                    {{ 'General_ForExampleShort'|translate }} {{ 'Goals_AtLeastMinutes'|translate('5', '0.5') }}
                </span>
            </div>
        </div>

        <div piwik-field uicontrol=\"checkbox\" name=\"case_sensitive\"
             ng-model=\"manageGoals.goal.caseSensitive\"
             ng-show=\"manageGoals.goal.triggerType != 'manually' && !manageGoals.isMatchAttributeNumeric()\"
             data-title=\"{{ 'Goals_CaseSensitive'|translate|e('html_attr') }} {{ 'Goals_Optional'|translate|e('html_attr') }}\">
        </div>

        <div piwik-field uicontrol=\"radio\" name=\"allow_multiple\"
             ng-model=\"manageGoals.goal.allowMultiple\"
             ng-if=\"manageGoals.goal.matchAttribute !== 'visit_duration'\"
             options=\"{{ allowMultipleOptions|json_encode }}\"
             introduction=\"{{ 'Goals_AllowMultipleConversionsPerVisit'|translate|e('html_attr') }}\"
             inline-help=\"{{ 'Goals_HelpOneConversionPerVisit'|translate|e('html_attr') }}\">
        </div>

        <h3>{{ 'Goals_GoalRevenue'|translate }} {{ 'Goals_Optional'|translate }}</h3>

        <div piwik-field uicontrol=\"number\" name=\"revenue\"
             ng-model=\"manageGoals.goal.revenue\"
             placeholder=\"{{ 'Goals_DefaultRevenueLabel'|translate }}\"
             inline-help=\"{{ 'Goals_DefaultRevenueHelp'|translate|e('html_attr') }}\">
        </div>

        <div piwik-field uicontrol=\"checkbox\" name=\"use_event_value\"
             ng-model=\"manageGoals.goal.useEventValueAsRevenue\"
             data-title=\"{{ 'Goals_UseEventValueAsRevenue'|translate|e('html_attr') }}\"
             ng-show=\"manageGoals.goal.matchAttribute == 'event'\"
             inline-help=\"{{ 'Goals_EventValueAsRevenueHelp'|translate|e('html_attr') }} &lt;br/&gt;&lt;br/&gt; {{ 'Goals_EventValueAsRevenueHelp2'|translate|e('html_attr') }}\"
        >
        </div>

        {{ postEvent(\"Template.endGoalEditTable\") }}

        <input type=\"hidden\" name=\"goalIdUpdate\" value=\"\"/>
        <div piwik-save-button
             saving=\"manageGoals.isLoading\"
             onconfirm=\"manageGoals.save()\"
             ng-value=\"manageGoals.goal.submitText\"></div>

        {% if onlyShowAddNewGoal is not defined %}
            <div class='entityCancel' ng-show=\"manageGoals.showEditGoal\" ng-click=\"manageGoals.showListOfReports()\">
                {{ 'General_OrCancel'|translate(\"<a class='entityCancelLink'>\",\"</a>\")|raw }}
            </div>
        {% endif %}
    </div>

</div>
", "@Goals/_formAddGoal.twig", "/home/rohan/Desktop/Personal_Site_WordPress/wp-content/plugins/matomo/app/plugins/Goals/templates/_formAddGoal.twig");
    }
}
