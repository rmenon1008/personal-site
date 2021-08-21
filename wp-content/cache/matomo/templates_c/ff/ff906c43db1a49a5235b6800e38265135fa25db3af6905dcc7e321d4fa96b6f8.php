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

/* @UserCountryMap/realtimeMap.twig */
class __TwigTemplate_968cb11f144beb1c0e6080dbddfb8d3bcb4f41e11745b8f5c7416fe7ff5e5486 extends Template
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
        echo "<div class=\"card\"><div class=\"RealTimeMap card-content\" style=\"position:relative; overflow:hidden;\"
     data-standalone=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, ((array_key_exists("mapIsStandaloneNotWidget", $context)) ? (_twig_default_filter((isset($context["mapIsStandaloneNotWidget"]) || array_key_exists("mapIsStandaloneNotWidget", $context) ? $context["mapIsStandaloneNotWidget"] : (function () { throw new RuntimeError('Variable "mapIsStandaloneNotWidget" does not exist.', 2, $this->source); })()), 0)) : (0)), "html", null, true);
        echo "\"
     data-config=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["config"]) || array_key_exists("config", $context) ? $context["config"] : (function () { throw new RuntimeError('Variable "config" does not exist.', 3, $this->source); })())), "html", null, true);
        echo "\"
     tabindex=\"0\">
    <div class=\"RealTimeMap_container\">
        <div class=\"RealTimeMap_map\" style=\"overflow:hidden;\"></div>
        <div class=\"realTimeMap_overlay\">
            ";
        // line 8
        if (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "showFooterMessage", [], "any", true, true, false, 8)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "showFooterMessage", [], "any", false, false, false, 8), true)) : (true))) {
            // line 9
            echo "            <span class=\"showing_visits_of\" style=\"display:none;\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_ShowingVisits"]), "html", null, true);
            echo "
                <span class=\"realTimeMap_timeSpan\" style=\"font-weight:bold;\"></span>
            </span>
            ";
        }
        // line 13
        echo "            <span class=\"no_data\" style=\"display:none;\">";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["CoreHome_ThereIsNoDataForThisReport"]), "html", null, true);
        echo "</span>
            <span class=\"loading_data\">";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
        echo "...</span>
            <img src=\"plugins/UserCountryMap/images/realtimemap-loading.gif\" style=\"vertical-align:baseline;position:relative;left:-2px;\">
        </div>
        ";
        // line 17
        if (((twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "showDateTime", [], "any", true, true, false, 17)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "showDateTime", [], "any", false, false, false, 17), true)) : (true))) {
            // line 18
            echo "        <div class=\"realTimeMap_overlay realTimeMap_datetime\"></div>
        ";
        }
        // line 20
        echo "    </div>
    <div class=\"RealTimeMap_meta\">
        <span class=\"loadingPiwik\">
            <img src=\"plugins/Morpheus/images/loading-blue.gif\"> ";
        // line 23
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_LoadingData"]), "html", null, true);
        echo "...
        </span>
    </div>

    ";
        // line 27
        if ((isset($context["userIsSuperUser"]) || array_key_exists("userIsSuperUser", $context) ? $context["userIsSuperUser"] : (function () { throw new RuntimeError('Variable "userIsSuperUser" does not exist.', 27, $this->source); })())) {
            // line 28
            echo "        <div style=\"display:none;margin-top:20px;margin-bottom:0;\" id=\"realTimeMapNoVisitsInfo\" class=\"alert alert-info\">
            <p>";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_NoVisitsInfo"]), "html", null, true);
            echo "</p>
            <p>";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountryMap_NoVisitsInfo2"]), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        // line 33
        echo "    </div>
</div>
<script type=\"text/javascript\">UserCountryMap.RealtimeMap.initElements();</script>";
    }

    public function getTemplateName()
    {
        return "@UserCountryMap/realtimeMap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 33,  100 => 30,  96 => 29,  93 => 28,  91 => 27,  84 => 23,  79 => 20,  75 => 18,  73 => 17,  67 => 14,  62 => 13,  54 => 9,  52 => 8,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\"><div class=\"RealTimeMap card-content\" style=\"position:relative; overflow:hidden;\"
     data-standalone=\"{{ mapIsStandaloneNotWidget|default(0) }}\"
     data-config=\"{{ config|json_encode }}\"
     tabindex=\"0\">
    <div class=\"RealTimeMap_container\">
        <div class=\"RealTimeMap_map\" style=\"overflow:hidden;\"></div>
        <div class=\"realTimeMap_overlay\">
            {% if config.showFooterMessage|default(true) %}
            <span class=\"showing_visits_of\" style=\"display:none;\">{{ 'UserCountryMap_ShowingVisits'|translate }}
                <span class=\"realTimeMap_timeSpan\" style=\"font-weight:bold;\"></span>
            </span>
            {% endif %}
            <span class=\"no_data\" style=\"display:none;\">{{ 'CoreHome_ThereIsNoDataForThisReport'|translate }}</span>
            <span class=\"loading_data\">{{ 'General_LoadingData'|translate }}...</span>
            <img src=\"plugins/UserCountryMap/images/realtimemap-loading.gif\" style=\"vertical-align:baseline;position:relative;left:-2px;\">
        </div>
        {% if config.showDateTime|default(true) %}
        <div class=\"realTimeMap_overlay realTimeMap_datetime\"></div>
        {% endif %}
    </div>
    <div class=\"RealTimeMap_meta\">
        <span class=\"loadingPiwik\">
            <img src=\"plugins/Morpheus/images/loading-blue.gif\"> {{ 'General_LoadingData'|translate }}...
        </span>
    </div>

    {% if userIsSuperUser %}
        <div style=\"display:none;margin-top:20px;margin-bottom:0;\" id=\"realTimeMapNoVisitsInfo\" class=\"alert alert-info\">
            <p>{{ 'UserCountryMap_NoVisitsInfo'|translate }}</p>
            <p>{{ 'UserCountryMap_NoVisitsInfo2'|translate }}</p>
        </div>
    {% endif %}
    </div>
</div>
<script type=\"text/javascript\">UserCountryMap.RealtimeMap.initElements();</script>", "@UserCountryMap/realtimeMap.twig", "/home/rohan/Desktop/Personal_Site_WordPress/wp-content/plugins/matomo/app/plugins/UserCountryMap/templates/realtimeMap.twig");
    }
}
