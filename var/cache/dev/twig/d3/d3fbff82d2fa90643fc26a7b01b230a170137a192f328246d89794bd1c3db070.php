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

/* blog/index.html.twig */
class __TwigTemplate_86afe483b2252dcf4ec8ec9c57cad15af58ba05deca8eebea6fe25b2dbab6e89 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "






  <div class=\"container-md\">
";
        // line 15
        $context["article"] = "articles";
        // line 16
        echo "

        <div class=\"articleshow row\">
        <div class=\"col-12\">
            <div class=\"allarticle\">
             ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["articleCount"]) || array_key_exists("articleCount", $context) ? $context["articleCount"] : (function () { throw new RuntimeError('Variable "articleCount" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "   Articles
            </div>

         </div>   
            <br>
               ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 27
            echo "
               
  
    
            <div class=\"col-3 article\" style=\"background-image: url('";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 31), "html", null, true);
            echo "');\" onclick=\"location.href='";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "'\">
            
            
                <div class=\"extrait\">
                    <p> ";
            // line 35
            $context["strategy"] = "html";
            // line 36
            echo "
                      ";
            // line 38
            echo "                          

                          ";
            // line 40
            echo twig_escape_filter($this->env, ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 40)), 50)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 40), 0, 80) . "...")) : (twig_get_attribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 40))), "html", null, true);
            echo "
                      ";
            // line 41
            echo "</p>

                </div>

                
              
    </div>
    
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>

        </div>
        </div>
        
    </div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 50,  127 => 41,  123 => 40,  119 => 38,  116 => 36,  114 => 35,  105 => 31,  99 => 27,  95 => 26,  87 => 21,  80 => 16,  78 => 15,  68 => 7,  58 => 6,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}




{% block body %}







  <div class=\"container-md\">
{% set article ='articles' %}


        <div class=\"articleshow row\">
        <div class=\"col-12\">
            <div class=\"allarticle\">
             {{ articleCount }}   Articles
            </div>

         </div>   
            <br>
               {% for article in articles  %}

               
  
    
            <div class=\"col-3 article\" style=\"background-image: url('{{article.image}}');\" onclick=\"location.href='{{ path('blog_show', {'id': article.id}) }}'\">
            
            
                <div class=\"extrait\">
                    <p> {% set strategy = 'html' %}

                      {% autoescape 'html' %}
                          

                          {{ article.content|length > 50 ? article.content|slice(0, 80) ~ '...' : article.content  }}
                      {% endautoescape %}</p>

                </div>

                
              
    </div>
    
{% endfor %}
        </div>

        </div>
        </div>
        
    </div>

    {% endblock %}
", "blog/index.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\blog\\index.html.twig");
    }
}
