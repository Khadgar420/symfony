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

/* @CHCookieConsent/cookie_consent.html.twig */
class __TwigTemplate_b167987bdffd6c5855a89c3510239df7db0e0aebff626873025350b4aab60a69 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'script' => [$this, 'block_script'],
            'title' => [$this, 'block_title'],
            'intro' => [$this, 'block_intro'],
            'read_more' => [$this, 'block_read_more'],
            'read_more_link' => [$this, 'block_read_more_link'],
            'toggle_details' => [$this, 'block_toggle_details'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CHCookieConsent/cookie_consent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CHCookieConsent/cookie_consent.html.twig"));

        // line 1
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), [0 => "@CHCookieConsent/form/cookie_consent_theme.html.twig"], true);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('script', $context, $blocks);
        // line 8
        echo "
<div class=\"ch-cookie-consent ch-cookie-consent--";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "-theme ch-cookie-consent--";
        echo twig_escape_filter($this->env, (isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 9, $this->source); })()), "html", null, true);
        echo " ";
        if ((isset($context["simplified"]) || array_key_exists("simplified", $context) ? $context["simplified"] : (function () { throw new RuntimeError('Variable "simplified" does not exist.', 9, $this->source); })())) {
            echo "ch-cookie-consent--simplified";
        }
        echo "\" id=\"ch-cookies\">
    ";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('intro', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->displayBlock('read_more', $context, $blocks);
        // line 20
        echo " 

    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "ch-cookie-consent__form"]]);
        echo "
        <div class=\"ch-cookie-consent__category-group\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 25
            echo "                ";
            if (0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 25), "block_prefixes", [], "any", false, false, false, 25), 0, [], "array", false, false, false, 25), "button")) {
                // line 26
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
                echo "
                ";
            }
            // line 28
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>

        <div class=\"ch-cookie-consent__btn-group\">
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'rest');
        echo "
            ";
        // line 33
        if ((isset($context["simplified"]) || array_key_exists("simplified", $context) ? $context["simplified"] : (function () { throw new RuntimeError('Variable "simplified" does not exist.', 33, $this->source); })())) {
            // line 34
            echo "                ";
            $this->displayBlock('toggle_details', $context, $blocks);
            // line 40
            echo "            ";
        }
        // line 41
        echo "        </div>
    ";
        // line 42
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 4
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/chcookieconsent/js/cookie_consent.js"), "html", null, true);
        echo "\"></script>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 11
        echo "        <h3 class=\"ch-cookie-consent__title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.title", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</h3>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_intro($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "intro"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "intro"));

        // line 15
        echo "        <p class=\"ch-cookie-consent__intro\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.intro", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</p>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_read_more($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "read_more"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "read_more"));

        // line 19
        echo "        <a class=\"ch-cookie-consent__read-more\" href=\"";
        $this->displayBlock('read_more_link', $context, $blocks);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.read_more", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</a>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_read_more_link($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "read_more_link"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "read_more_link"));

        echo "/privacy-statement";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_toggle_details($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toggle_details"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toggle_details"));

        // line 35
        echo "                    <div class=\"ch-cookie-consent__toggle-details\">
                        <span class=\"ch-cookie-consent__toggle-details-show\">";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.show_details", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</span>
                        <span class=\"ch-cookie-consent__toggle-details-hide\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ch_cookie_consent.hide_details", [], "CHCookieConsentBundle"), "html", null, true);
        echo "</span>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@CHCookieConsent/cookie_consent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 37,  271 => 36,  268 => 35,  258 => 34,  225 => 19,  215 => 18,  202 => 15,  192 => 14,  179 => 11,  169 => 10,  156 => 5,  153 => 4,  143 => 3,  129 => 42,  126 => 41,  123 => 40,  120 => 34,  118 => 33,  114 => 32,  109 => 29,  103 => 28,  97 => 26,  94 => 25,  90 => 24,  85 => 22,  81 => 20,  79 => 18,  76 => 17,  74 => 14,  71 => 13,  69 => 10,  59 => 9,  56 => 8,  54 => 3,  51 => 2,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% form_theme form '@CHCookieConsent/form/cookie_consent_theme.html.twig' %}

{% block script %}

    <script type=\"text/javascript\" src=\"{{ asset('bundles/chcookieconsent/js/cookie_consent.js') }}\"></script>
    
{% endblock %}

<div class=\"ch-cookie-consent ch-cookie-consent--{{ theme }}-theme ch-cookie-consent--{{ position }} {% if simplified %}ch-cookie-consent--simplified{% endif %}\" id=\"ch-cookies\">
    {% block title %}
        <h3 class=\"ch-cookie-consent__title\">{{ 'ch_cookie_consent.title'|trans({}, 'CHCookieConsentBundle') }}</h3>
    {% endblock %}

    {% block intro %}
        <p class=\"ch-cookie-consent__intro\">{{ 'ch_cookie_consent.intro'|trans({}, 'CHCookieConsentBundle') }}</p>
    {% endblock %}

    {% block read_more %}
        <a class=\"ch-cookie-consent__read-more\" href=\"{% block read_more_link %}/privacy-statement{% endblock %}\">{{ 'ch_cookie_consent.read_more'|trans({}, 'CHCookieConsentBundle') }}</a>
    {% endblock %} 

    {{ form_start(form, {'attr': {'class': 'ch-cookie-consent__form'}}) }}
        <div class=\"ch-cookie-consent__category-group\">
            {% for child in form %}
                {% if child.vars.block_prefixes[0] != 'button' %}
                    {{ form_row(child) }}
                {% endif %}
            {% endfor %}
        </div>

        <div class=\"ch-cookie-consent__btn-group\">
            {{ form_rest(form) }}
            {% if simplified %}
                {% block toggle_details %}
                    <div class=\"ch-cookie-consent__toggle-details\">
                        <span class=\"ch-cookie-consent__toggle-details-show\">{{ 'ch_cookie_consent.show_details'|trans({}, 'CHCookieConsentBundle') }}</span>
                        <span class=\"ch-cookie-consent__toggle-details-hide\">{{ 'ch_cookie_consent.hide_details'|trans({}, 'CHCookieConsentBundle') }}</span>
                    </div>
                {% endblock %}
            {% endif %}
        </div>
    {{ form_end(form) }}
</div>

", "@CHCookieConsent/cookie_consent.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\vendor\\connectholland\\cookie-consent-bundle\\Resources\\views\\cookie_consent.html.twig");
    }
}
