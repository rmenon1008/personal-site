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

/* @Goals/addNewGoal.twig */
class __TwigTemplate_f13e241d542e9c8384a6415363b9715af6876b54a3f202bd4a5566046097e48e extends Template
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
        if ((isset($context["userCanEditGoals"]) || array_key_exists("userCanEditGoals", $context) ? $context["userCanEditGoals"] : (function () { throw new RuntimeError('Variable "userCanEditGoals" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    ";
            ob_start();
            // line 3
            echo "        <p>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_NewGoalIntro"]), "html", null, true);
            echo "</p>
        <p>";
            // line 4
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_LearnMoreAboutGoalTrackingDocumentation", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/docs/tracking-goals-web-analytics/'>", "</a>"]);
            echo "</p>
    ";
            $context["addNewGoalIntro"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 6
            echo "
    ";
            // line 7
            $this->loadTemplate("@Goals/_addEditGoal.twig", "@Goals/addNewGoal.twig", 7)->display($context);
            // line 8
            echo "
    <br/><br/>

";
        } else {
            // line 12
            echo "    <div piwik-content-block content-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_AddNewGoal"]), "html_attr");
            echo "\">
        <p>
            ";
            // line 14
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_NoGoalsNeedAccess2"]);
            echo "
        </p>
        <p>
            ";
            // line 17
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_LearnMoreAboutGoalTrackingDocumentation", "<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/docs/tracking-goals-web-analytics/'>", "</a>"]);
            echo "
        </p>
    </div>
    ";
            // line 20
            echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.afterGoalCannotAddNewGoal"]);
            echo "

";
        }
    }

    public function getTemplateName()
    {
        return "@Goals/addNewGoal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  75 => 17,  69 => 14,  63 => 12,  57 => 8,  55 => 7,  52 => 6,  47 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if userCanEditGoals %}
    {% set addNewGoalIntro %}
        <p>{{ 'Goals_NewGoalIntro'|translate }}</p>
        <p>{{ 'Goals_LearnMoreAboutGoalTrackingDocumentation'|translate(\"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/docs/tracking-goals-web-analytics/'>\",\"</a>\")|raw }}</p>
    {% endset %}

    {% include \"@Goals/_addEditGoal.twig\" %}

    <br/><br/>

{% else %}
    <div piwik-content-block content-title=\"{{ 'Goals_AddNewGoal'|translate|e('html_attr') }}\">
        <p>
            {{ 'Goals_NoGoalsNeedAccess2'|translate|raw }}
        </p>
        <p>
            {{ 'Goals_LearnMoreAboutGoalTrackingDocumentation'|translate(\"<a target='_blank' rel='noreferrer noopener' href='https://matomo.org/docs/tracking-goals-web-analytics/'>\",\"</a>\")|raw }}
        </p>
    </div>
    {{ postEvent(\"Template.afterGoalCannotAddNewGoal\") }}

{% endif %}
", "@Goals/addNewGoal.twig", "/home/rohan/Desktop/Personal_Site_WordPress/wp-content/plugins/matomo/app/plugins/Goals/templates/addNewGoal.twig");
    }
}
