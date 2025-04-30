<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* weather/show.html.twig */
class __TwigTemplate_bde3cbef67d4df81a74af0d035166f4d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "weather/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "weather/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        yield "    ";
        if ((array_key_exists("weather", $context) &&  !(null === (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 4, $this->source); })())))) {
            // line 5
            yield "        Погода в ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 5, $this->source); })()), "city", [], "any", false, false, false, 5), "html", null, true);
            yield "
    ";
        } elseif ((        // line 6
array_key_exists("error", $context) &&  !(null === (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })())))) {
            // line 7
            yield "        Ошибка
    ";
        } else {
            // line 9
            yield "        Погода
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        yield "    <div class=\"min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-200 to-blue-400 p-6\">
        <div class=\"bg-white shadow-xl rounded-xl p-8 w-full max-w-md\">
            ";
        // line 16
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 16, $this->source); })())) {
            // line 17
            yield "                <h2 class=\"text-xl font-semibold text-red-600\">Ошибка: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 17, $this->source); })()), "html", null, true);
            yield "</h2>
            ";
        } elseif (        // line 18
(isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 18, $this->source); })())) {
            // line 19
            yield "                <h2 class=\"text-2xl font-bold mb-4 text-blue-800\">
                    Погода в ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 20, $this->source); })()), "city", [], "any", false, false, false, 20), "html", null, true);
            yield ", ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 20, $this->source); })()), "country", [], "any", false, false, false, 20), "html", null, true);
            yield "
                </h2>
                <ul class=\"space-y-2 text-gray-700\">
                    <li><strong>Температура:</strong> ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 23, $this->source); })()), "temperature", [], "any", false, false, false, 23), "html", null, true);
            yield "°C</li>
                    <li><strong>Состояние:</strong> ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 24, $this->source); })()), "condition", [], "any", false, false, false, 24), "html", null, true);
            yield "</li>
                    <li><strong>Влажность:</strong> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 25, $this->source); })()), "humidity", [], "any", false, false, false, 25), "html", null, true);
            yield "%</li>
                    <li><strong>Скорость ветра:</strong> ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 26, $this->source); })()), "windSpeed", [], "any", false, false, false, 26), "html", null, true);
            yield " км/ч</li>
                    <li><strong>Обновлено:</strong> ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["weather"]) || array_key_exists("weather", $context) ? $context["weather"] : (function () { throw new RuntimeError('Variable "weather" does not exist.', 27, $this->source); })()), "lastUpdated", [], "any", false, false, false, 27), "html", null, true);
            yield "</li>
                </ul>
            ";
        }
        // line 30
        yield "
            <div class=\"mt-6\">
                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("weather_index");
        yield "\"
                   class=\"inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition\">
                    ← Назад
                </a>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "weather/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  152 => 32,  148 => 30,  142 => 27,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  118 => 20,  115 => 19,  113 => 18,  108 => 17,  106 => 16,  102 => 14,  92 => 13,  82 => 9,  78 => 7,  76 => 6,  71 => 5,  68 => 4,  58 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    {% if weather is defined and weather is not null %}
        Погода в {{ weather.city }}
    {% elseif error is defined and error is not null %}
        Ошибка
    {% else %}
        Погода
    {% endif %}
{% endblock %}

{% block body %}
    <div class=\"min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-200 to-blue-400 p-6\">
        <div class=\"bg-white shadow-xl rounded-xl p-8 w-full max-w-md\">
            {% if error %}
                <h2 class=\"text-xl font-semibold text-red-600\">Ошибка: {{ error }}</h2>
            {% elseif weather %}
                <h2 class=\"text-2xl font-bold mb-4 text-blue-800\">
                    Погода в {{ weather.city }}, {{ weather.country }}
                </h2>
                <ul class=\"space-y-2 text-gray-700\">
                    <li><strong>Температура:</strong> {{ weather.temperature }}°C</li>
                    <li><strong>Состояние:</strong> {{ weather.condition }}</li>
                    <li><strong>Влажность:</strong> {{ weather.humidity }}%</li>
                    <li><strong>Скорость ветра:</strong> {{ weather.windSpeed }} км/ч</li>
                    <li><strong>Обновлено:</strong> {{ weather.lastUpdated }}</li>
                </ul>
            {% endif %}

            <div class=\"mt-6\">
                <a href=\"{{ path('weather_index') }}\"
                   class=\"inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md transition\">
                    ← Назад
                </a>
            </div>
        </div>
    </div>
{% endblock %}
", "weather/show.html.twig", "/var/www/symfony/templates/weather/show.html.twig");
    }
}
