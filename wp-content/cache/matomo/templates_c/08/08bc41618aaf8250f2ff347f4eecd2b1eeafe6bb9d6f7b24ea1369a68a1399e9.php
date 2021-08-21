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

/* @CoreHome/getRowEvolutionPopover.twig */
class __TwigTemplate_a821f5df5ed8de66a14d6f97337c225c04730b2947895a5073b802032f21debe extends Template
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
        $context["seriesColorCount"] = twig_constant("Piwik\\Plugins\\CoreVisualizations\\Visualizations\\JqplotGraph\\Evolution::SERIES_COLOR_COUNT");
        // line 2
        echo "<div class=\"rowevolution\">
    <div class=\"popover-title\">";
        // line 3
        echo (isset($context["popoverTitle"]) || array_key_exists("popoverTitle", $context) ? $context["popoverTitle"] : (function () { throw new RuntimeError('Variable "popoverTitle" does not exist.', 3, $this->source); })());
        echo "</div>
    <div class=\"graph\">
        ";
        // line 5
        echo (isset($context["graph"]) || array_key_exists("graph", $context) ? $context["graph"] : (function () { throw new RuntimeError('Variable "graph" does not exist.', 5, $this->source); })());
        echo "
    </div>
    <div class=\"metrics-container\">
        <h2>";
        // line 8
        echo (isset($context["availableMetricsText"]) || array_key_exists("availableMetricsText", $context) ? $context["availableMetricsText"] : (function () { throw new RuntimeError('Variable "availableMetricsText" does not exist.', 8, $this->source); })());
        echo "</h2>

        <div class=\"alert alert-info\">
            ";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["RowEvolution_Documentation"]), "html", null, true);
        echo "
        </div>
        <table class=\"metrics\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-thing=\"";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["seriesColorCount"]) || array_key_exists("seriesColorCount", $context) ? $context["seriesColorCount"] : (function () { throw new RuntimeError('Variable "seriesColorCount" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["metrics"]) || array_key_exists("metrics", $context) ? $context["metrics"] : (function () { throw new RuntimeError('Variable "metrics" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["metric"]) {
            // line 15
            echo "                <tr data-i=\"";
            echo \Piwik\piwik_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" ";
            if (((twig_get_attribute($this->env, $this->source, $context["metric"], "hide", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["metric"], "hide", [], "any", false, false, false, 15))) : (""))) {
                echo "style=\"display:none\"";
            }
            echo ">
                    <td class=\"sparkline\">
                        ";
            // line 17
            echo twig_get_attribute($this->env, $this->source, $context["metric"], "sparkline", [], "any", false, false, false, 17);
            echo "
                    </td>
                    <td class=\"text\">
                        <span class=\"evolution-graph-colors\" data-name=\"series";
            // line 20
            echo \Piwik\piwik_escape_filter($this->env, (($context["i"] % (isset($context["seriesColorCount"]) || array_key_exists("seriesColorCount", $context) ? $context["seriesColorCount"] : (function () { throw new RuntimeError('Variable "seriesColorCount" does not exist.', 20, $this->source); })())) + 1), "html", null, true);
            echo "\">";
            // line 21
            echo twig_get_attribute($this->env, $this->source, $context["metric"], "label", [], "any", false, false, false, 21);
            // line 22
            echo "</span>
                        ";
            // line 23
            if (twig_get_attribute($this->env, $this->source, $context["metric"], "details", [], "any", false, false, false, 23)) {
                echo ":
                            <span class=\"details\" title=\"";
                // line 24
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["metric"], "minmax", [], "any", false, false, false, 24), "html", null, true);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["metric"], "details", [], "any", false, false, false, 24);
                echo "</span>
                        ";
            }
            // line 26
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['metric'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </table>
    </div>
    <div class=\"compare-container\">
        <h2>";
        // line 32
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["RowEvolution_CompareRows"]), "html", null, true);
        echo "</h2>

        <div class=\"alert alert-info\">
            ";
        // line 35
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["RowEvolution_CompareDocumentation"]);
        echo "
        </div>
        <a href=\"#\" class=\"rowevolution-startmulti\">» ";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["RowEvolution_PickARow"]), "html", null, true);
        echo "</a>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/getRowEvolutionPopover.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 37,  126 => 35,  120 => 32,  115 => 29,  107 => 26,  100 => 24,  96 => 23,  93 => 22,  91 => 21,  88 => 20,  82 => 17,  72 => 15,  68 => 14,  64 => 13,  59 => 11,  53 => 8,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set seriesColorCount = constant(\"Piwik\\\\Plugins\\\\CoreVisualizations\\\\Visualizations\\\\JqplotGraph\\\\Evolution::SERIES_COLOR_COUNT\") %}
<div class=\"rowevolution\">
    <div class=\"popover-title\">{{ popoverTitle | raw }}</div>
    <div class=\"graph\">
        {{ graph|raw }}
    </div>
    <div class=\"metrics-container\">
        <h2>{{ availableMetricsText|raw }}</h2>

        <div class=\"alert alert-info\">
            {{ 'RowEvolution_Documentation'|translate }}
        </div>
        <table class=\"metrics\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" data-thing=\"{{ seriesColorCount }}\">
            {% for i, metric in metrics %}
                <tr data-i=\"{{ i }}\" {% if metric.hide|default %}style=\"display:none\"{% endif %}>
                    <td class=\"sparkline\">
                        {{ metric.sparkline|raw }}
                    </td>
                    <td class=\"text\">
                        <span class=\"evolution-graph-colors\" data-name=\"series{{ (i % seriesColorCount) + 1 }}\">
                            {{- metric.label|raw -}}
                        </span>
                        {% if metric.details %}:
                            <span class=\"details\" title=\"{{ metric.minmax }}\">{{ metric.details|raw }}</span>
                        {% endif %}
                    </td>
                </tr>
            {% endfor %}
        </table>
    </div>
    <div class=\"compare-container\">
        <h2>{{ 'RowEvolution_CompareRows'|translate }}</h2>

        <div class=\"alert alert-info\">
            {{ 'RowEvolution_CompareDocumentation'|translate|raw }}
        </div>
        <a href=\"#\" class=\"rowevolution-startmulti\">» {{ 'RowEvolution_PickARow'|translate }}</a>
    </div>
</div>
", "@CoreHome/getRowEvolutionPopover.twig", "/home/rohan/Desktop/Personal_Site_WordPress/wp-content/plugins/matomo/app/plugins/CoreHome/templates/getRowEvolutionPopover.twig");
    }
}
