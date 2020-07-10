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

/* security/login.html.twig */
class __TwigTemplate_6b992e541f6fa02484e4f16247d83e17c73bba10ee01297bb8b1cfb52f7386a8 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "


<div class=\"container-md\">
<br>
<br>
<br>
<br>
<br>

<div class=\"col-6 form\">
<form action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\">
<div class=\"form-group\">
<input type=\"text\" placeholder=\"Adresse email....\" required name=\"_username\" class=\"form-control\">
</div>
</div>


<div class=\"col-6 form\">
<div class=\"form-group\">
<input type=\"password\" placeholder=\"Mot de passe....\" required name=\"_password\" class=\"form-control\">
</div>

</div>

<div class=\"col-6 form\">

<div class=\"form-group\">
<button type=\"submit\" class=\"btn btn-success\">Connexion</button>
</div>

</div>

</form>
<div class=\"col-6 form\">

<a href=\"/inscription\" id=\"connexion\">Pas de compte ? Inscrivez vous ! </a>

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
<br>
<br>
<br>
<br>
<br>
</div>

";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\Users\\NZXT\\Documents\\Symfony\\Symfony\\templates\\security\\login.html.twig");
    }
}
