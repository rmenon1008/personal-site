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

/* @Referrers/campaignBuilder.twig */
class __TwigTemplate_701006eb921a74a4c2e197e12a01f93c5bcadeecdc892240da80143f16b71e0c extends Template
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
        echo "<div class=\"widgetBody\">
    <p>";
        // line 2
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Referrers_URLCampaignBuilderIntro", "<a href=\"https://matomo.org/docs/tracking-campaigns-url-builder/\" rel=\"noreferrer noopener\">", "</a>", "<a href=\"https://matomo.org/docs/tracking-campaigns/\" rel=\"noreferrer noopener\">", "</a>"]);
        echo "</p>
    <div matomo-campaign-builder has-extra-plugin=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["hasExtraPlugin"]) || array_key_exists("hasExtraPlugin", $context) ? $context["hasExtraPlugin"] : (function () { throw new RuntimeError('Variable "hasExtraPlugin" does not exist.', 3, $this->source); })()), "html_attr");
        echo "\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "@Referrers/campaignBuilder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"widgetBody\">
    <p>{{ 'Referrers_URLCampaignBuilderIntro'|translate('<a href=\"https://matomo.org/docs/tracking-campaigns-url-builder/\" rel=\"noreferrer noopener\">', '</a>', '<a href=\"https://matomo.org/docs/tracking-campaigns/\" rel=\"noreferrer noopener\">', '</a>')|raw }}</p>
    <div matomo-campaign-builder has-extra-plugin=\"{{ hasExtraPlugin|e('html_attr') }}\"></div>
</div>", "@Referrers/campaignBuilder.twig", "/home/rohan/Desktop/Personal_Site_WordPress/wp-content/plugins/matomo/app/plugins/Referrers/templates/campaignBuilder.twig");
    }
}
