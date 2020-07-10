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

/* blog/show.html.twig */
class __TwigTemplate_a252cc871efaeb8dc41a6662ba048d067b50c080dcc29fd1487fd0543f1272ed extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "



 
    


<div class=\"container-md\">

        <div class=\"articleshow\">
            <div class=\"ArticleTitle col-12\">
                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "
            </div>



        </div>
        <div class=\"col-xl\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23), "html", null, true);
        echo "\" alt=\"\">
            <br>
            <br>
            <br>

            ";
        // line 28
        $context["strategy"] = "html";
        // line 29
        echo "
            ";
        // line 31
        echo "    

            <p id=\"contenu-article\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "content", [], "any", false, false, false, 33), "html");
        echo " </p>
            <br>
            <br>
            <br>

          ";
        // line 39
        echo "            <p id=\"info-article\">Ecrit le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 39, $this->source); })()), "createdAt", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 39, $this->source); })()), "createdAt", [], "any", false, false, false, 39), "H:i"), "html", null, true);
        echo " dans la catégorie ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 39, $this->source); })()), "category", [], "any", false, false, false, 39), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</p>

        </div>

        ";
        // line 43
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 44
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Edit</a>
        ";
        }
        // line 46
        echo "
        <div class=\"comments\">
            <div class=\"ArticleCommentaire\">
              ";
        // line 49
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 49, $this->source); })()), "comments", [], "any", false, false, false, 49)), "html", null, true);
        echo "  Commentaires
            </div>

            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 52, $this->source); })()), "comments", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            echo " 
            <div class=\"col-12 comment\">
                <div class=\"userinfo\">
                    <a href=\"cdv\" id=\"comslide\"><img src=\"./img/logodusite.png\" id=\"avatarcom\" alt=\"imgcdv\"></a>
                    <p>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 56), "html", null, true);
            echo " (<small>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 56), "d/m/Y à H:i"), "html", null, true);
            echo "</small>)</p>

                </div>
                     ";
            // line 59
            $context["strategy"] = "html";
            // line 60
            echo "
";
            // line 62
            echo "
                    <div class=\"lecommentaire\">
                        <br>
                        <br>
                        <p id=\"paragraph\"> ";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 66), "html");
            echo " </p>


                    </div>

                    ";
            // line 72
            echo "            </div>
            <br>
        <br>
        
        
  

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
   
  


    ";
        // line 85
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85)) {
            // line 86
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 86, $this->source); })()), 'form_start');
            echo "


<div class=\"col-6 form\">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 89, $this->source); })()), "content", [], "any", false, false, false, 89), 'row', ["attr" => ["placeholder" => "Restez courtois"]]);
            echo "</div>
<div class=\"col-6 form\"><button type=\"submit\" class=\"btn btn-success\">Commenter</button></div>

";
            // line 92
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 92, $this->source); })()), 'form_end');
            echo "
<br>
<br>
<br>
<br>
<br>
<br>


<br>
";
        } else {
            // line 103
            echo "<h2 id=\"comcon\">Connectez vous pour commenter ! </h2>
<br>
<br>
<br>
<div class=\"col-6 form\">
<a href=\"";
            // line 108
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" class=\"btn btn-primary\">Connectez vous</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


";
        }
        // line 121
        echo "

  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

    </div>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 121,  239 => 108,  232 => 103,  218 => 92,  212 => 89,  206 => 86,  204 => 85,  197 => 80,  184 => 72,  176 => 66,  170 => 62,  167 => 60,  165 => 59,  157 => 56,  148 => 52,  142 => 49,  137 => 46,  131 => 44,  129 => 43,  117 => 39,  109 => 33,  105 => 31,  102 => 29,  100 => 28,  92 => 23,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}




 
    


<div class=\"container-md\">

        <div class=\"articleshow\">
            <div class=\"ArticleTitle col-12\">
                {{article.title}}
            </div>



        </div>
        <div class=\"col-xl\">
            <img src=\"{{article.image}}\" alt=\"\">
            <br>
            <br>
            <br>

            {% set strategy = 'html' %}

            {% autoescape 'html' %}
    

            <p id=\"contenu-article\">{{ article.content|escape('html')}} </p>
            <br>
            <br>
            <br>

          {% endautoescape %}
            <p id=\"info-article\">Ecrit le {{article.createdAt | date('d/m/Y')}} à {{article.createdAt | date('H:i')}} dans la catégorie {{ article.category.title }}</p>

        </div>

        {% if is_granted('ROLE_ADMIN') %}
<a href=\"{{ path('blog_edit', {'id': article.id}) }}\" class=\"btn btn-danger\">Edit</a>
        {% endif %}

        <div class=\"comments\">
            <div class=\"ArticleCommentaire\">
              {{ article.comments | length }}  Commentaires
            </div>

            {% for comment in article.comments %} 
            <div class=\"col-12 comment\">
                <div class=\"userinfo\">
                    <a href=\"cdv\" id=\"comslide\"><img src=\"./img/logodusite.png\" id=\"avatarcom\" alt=\"imgcdv\"></a>
                    <p>{{comment.author}} (<small>{{comment.createdAt | date('d/m/Y à H:i')}}</small>)</p>

                </div>
                     {% set strategy = 'html' %}

{% autoescape 'html' %}

                    <div class=\"lecommentaire\">
                        <br>
                        <br>
                        <p id=\"paragraph\"> {{ comment.content|escape('html')}} </p>


                    </div>

                    {% endautoescape %}
            </div>
            <br>
        <br>
        
        
  

    {% endfor %}

   
  


    {% if app.user %}
{{form_start(commentForm)}}


<div class=\"col-6 form\">{{form_row(commentForm.content,{ 'attr': {'placeholder':'Restez courtois'}})}}</div>
<div class=\"col-6 form\"><button type=\"submit\" class=\"btn btn-success\">Commenter</button></div>

{{form_end(commentForm)}}
<br>
<br>
<br>
<br>
<br>
<br>


<br>
{% else %}
<h2 id=\"comcon\">Connectez vous pour commenter ! </h2>
<br>
<br>
<br>
<div class=\"col-6 form\">
<a href=\"{{path('security_login')}}\" class=\"btn btn-primary\">Connectez vous</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


{% endif %}


  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

    </div>




{% endblock %}", "blog/show.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\blog\\show.html.twig");
    }
}
