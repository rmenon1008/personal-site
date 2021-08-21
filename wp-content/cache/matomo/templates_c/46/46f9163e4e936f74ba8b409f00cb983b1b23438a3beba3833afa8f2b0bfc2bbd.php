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

/* @Goals/_addEditGoal.twig */
class __TwigTemplate_d60e18df08f66b07ad4239be53b0062c08364937c2c0484af2bd55dbc827908c extends Template
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
        echo "
";
        // line 2
        $macros["ajax"] = $this->macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@Goals/_addEditGoal.twig", 2)->unwrap();
        // line 3
        echo twig_call_macro($macros["ajax"], "macro_errorDiv", [], 3, $context, $this->getSourceContext());
        echo "

<script type=\"text/javascript\">
    ";
        // line 6
        if ((isset($context["userCanEditGoals"]) || array_key_exists("userCanEditGoals", $context) ? $context["userCanEditGoals"] : (function () { throw new RuntimeError('Variable "userCanEditGoals" does not exist.', 6, $this->source); })())) {
            // line 7
            echo "        ";
            if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
                // line 8
                echo "            piwik.goals = ";
                echo (isset($context["goalsJSON"]) || array_key_exists("goalsJSON", $context) ? $context["goalsJSON"] : (function () { throw new RuntimeError('Variable "goalsJSON" does not exist.', 8, $this->source); })());
                echo ";
        ";
            }
            // line 10
            echo "    ";
        } else {
            // line 11
            echo "        piwik.goals = ";
            echo (isset($context["goalsJSON"]) || array_key_exists("goalsJSON", $context) ? $context["goalsJSON"] : (function () { throw new RuntimeError('Variable "goalsJSON" does not exist.', 11, $this->source); })());
            echo ";
    ";
        }
        // line 13
        echo "
</script>

<div piwik-manage-goals
        ";
        // line 17
        if ((isset($context["userCanEditGoals"]) || array_key_exists("userCanEditGoals", $context) ? $context["userCanEditGoals"] : (function () { throw new RuntimeError('Variable "userCanEditGoals" does not exist.', 17, $this->source); })())) {
            // line 18
            echo "            ";
            if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
                // line 19
                echo "                ";
                if ((isset($context["idGoal"]) || array_key_exists("idGoal", $context) ? $context["idGoal"] : (function () { throw new RuntimeError('Variable "idGoal" does not exist.', 19, $this->source); })())) {
                    // line 20
                    echo "                    show-goal=\"";
                    echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, (isset($context["idGoal"]) || array_key_exists("idGoal", $context) ? $context["idGoal"] : (function () { throw new RuntimeError('Variable "idGoal" does not exist.', 20, $this->source); })()), "js"), "html", null, true);
                    echo "\"
                ";
                }
                // line 22
                echo "            ";
            } else {
                // line 23
                echo "                show-add-goal=\"true\"
            ";
            }
            // line 25
            echo "        ";
        }
        echo ">

    ";
        // line 27
        if ( !array_key_exists("onlyShowAddNewGoal", $context)) {
            // line 28
            echo "        ";
            $this->loadTemplate("@Goals/_listGoalEdit.twig", "@Goals/_addEditGoal.twig", 28)->display($context);
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        if ((isset($context["userCanEditGoals"]) || array_key_exists("userCanEditGoals", $context) ? $context["userCanEditGoals"] : (function () { throw new RuntimeError('Variable "userCanEditGoals" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "        ";
            $this->loadTemplate("@Goals/_formAddGoal.twig", "@Goals/_addEditGoal.twig", 31)->display($context);
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <a id='bottom'></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Goals/_addEditGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 33,  115 => 32,  112 => 31,  109 => 30,  106 => 29,  103 => 28,  101 => 27,  95 => 25,  91 => 23,  88 => 22,  82 => 20,  79 => 19,  76 => 18,  74 => 17,  68 => 13,  62 => 11,  59 => 10,  53 => 8,  50 => 7,  48 => 6,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% import 'ajaxMacros.twig' as ajax %}
{{ ajax.errorDiv() }}

<script type=\"text/javascript\">
    {% if userCanEditGoals %}
        {% if onlyShowAddNewGoal is not defined %}
            piwik.goals = {{ goalsJSON|raw }};
        {% endif %}
    {% else %}
        piwik.goals = {{ goalsJSON|raw }};
    {% endif %}

</script>

<div piwik-manage-goals
        {% if userCanEditGoals %}
            {% if onlyShowAddNewGoal is not defined %}
                {% if idGoal %}
                    show-goal=\"{{ idGoal|e('js') }}\"
                {% endif %}
            {% else %}
                show-add-goal=\"true\"
            {% endif %}
        {% endif %}>

    {% if onlyShowAddNewGoal is not defined %}
        {% include \"@Goals/_listGoalEdit.twig\" %}
    {% endif %}
    {% if userCanEditGoals %}
        {% include \"@Goals/_formAddGoal.twig\" %}
    {% endif %}
    <a id='bottom'></a>
</div>
", "@Goals/_addEditGoal.twig", "/home/rohan/Desktop/Personal_Site_WordPress/wp-content/plugins/matomo/app/plugins/Goals/templates/_addEditGoal.twig");
    }
}
