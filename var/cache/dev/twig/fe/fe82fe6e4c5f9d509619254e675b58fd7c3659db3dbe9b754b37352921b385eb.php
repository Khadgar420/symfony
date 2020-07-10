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

/* blog/home.html.twig */
class __TwigTemplate_cb2950361a0485a5a31e10dbf5270ab8fd9d8100b4b6d8b1b38e9e057a917272 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ch_cookie_consent.show_if_cookie_consent_not_set"));
        echo "

 
    

 <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/carouselpadpourpre.jpg"), "html", null, true);
        echo "\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/carouselhardware.jpg"), "html", null, true);
        echo "\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/lepadpourpregaminghardware.jpg"), "html", null, true);
        echo "\" alt=\"...\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

    <div class=\"articlecontainer9\">
        <div class=\"lastarticle\">
            Les derniers articles !
        </div>



    <div class=\"row\">

    
                ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 51
            echo "   
  
    
            <div class=\"col-sm article\" style=\"background-image: url('";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 54), "html", null, true);
            echo "');\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "'\">
            
            
                <div class=\"extrait\">
                    <p> ";
            // line 58
            $context["strategy"] = "html";
            // line 59
            echo "
                      ";
            // line 61
            echo "                          

                          ";
            // line 63
            echo twig_escape_filter($this->env, ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 63)), 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 63), 0, 80) . "...")) : (twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 63))), "html", null, true);
            echo "
                      ";
            // line 64
            echo "</p>

                </div>

                
              
    </div>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "           
            
        
    </div>

 


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 73,  157 => 64,  153 => 63,  149 => 61,  146 => 59,  144 => 58,  135 => 54,  130 => 51,  126 => 50,  100 => 27,  94 => 24,  88 => 21,  72 => 8,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block body %}


{{ render_esi(path('ch_cookie_consent.show_if_cookie_consent_not_set')) }}

 
    

 <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
            <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"{{asset('build/images/carouselpadpourpre.jpg')}}\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{asset('build/images/carouselhardware.jpg')}}\" alt=\"...\">
            </div>
            <div class=\"carousel-item\">
                <img src=\"{{asset('build/images/lepadpourpregaminghardware.jpg')}}\" alt=\"...\">
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>

    <div class=\"articlecontainer9\">
        <div class=\"lastarticle\">
            Les derniers articles !
        </div>



    <div class=\"row\">

    
                {% for article in articles  %}
   
  
    
            <div class=\"col-sm article\" style=\"background-image: url('{{article.image}}');\" onclick=\"location.href='{{ path('blog_show', {'id': article.id}) }}'\">
            
            
                <div class=\"extrait\">
                    <p> {% set strategy = 'html' %}

                      {% autoescape 'html' %}
                          

                          {{ article.content|length > 50 ? article.content|slice(0, 80) ~ '...' : article.content  }}
                      {% endautoescape %}</p>

                </div>

                
              
    </div>
    
{% endfor %}
           
            
        
    </div>

 


{% endblock %}

", "blog/home.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\blog\\home.html.twig");
    }
}
