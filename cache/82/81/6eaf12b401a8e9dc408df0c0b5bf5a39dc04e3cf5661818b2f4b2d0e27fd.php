<?php

/* semantic-ui.html */
class __TwigTemplate_82816eaf12b401a8e9dc408df0c0b5bf5a39dc04e3cf5661818b2f4b2d0e27fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html> 
\t<head>
\t\t<meta charset=\"utf-8\">
\t\t<title>Eddy-Dev - ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
\t\t<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"./vendor/semantic/ui/dist/semantic.min.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"./web/core.css\">
\t\t<script src=\"http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js\"></script>
\t\t<script src=\"./vendor/semantic/ui/dist/semantic.min.js\"></script>
\t</head>
\t<body>
\t\t<div class=\"ui inverted page grid masthead segment\" id=\"header\">
\t    \t<div class=\"column\">
\t    \t\t<div class=\"inverted secondary pointing ui menu\">
\t        \t\t<h1 class=\"ui inverted header\">
\t          \t\t\t<img src=\"./web/StrichHalb.png\" alt=\"Logo\" height=70 class=\"logo\">
\t          \t\t\tEddy-Dev
\t        \t\t</h1>
\t      \t\t</div>
\t    \t</div>
\t  \t</div>
\t  \t<div class=\"ui inverted page grid masthead segment\">
\t  \t    <div class=\"ui two wide column\">Test</div>
\t        <div class=\"twelve wide column\">
\t        \t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["navigation"]) ? $context["navigation"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "\t    \t    <div class=\"column\">
\t    \t\t    <div class=\"inverted secondary pointing ui menu\">
\t        \t\t    <h2 class=\"ui inverted header\">
\t          \t\t\t";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "caption", array()), "html", null, true);
            echo "
\t        \t\t    </h2>
\t        \t    </div>
\t      \t\t</div>
\t      \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t    \t</div>
\t  \t</div>
\t</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "semantic-ui.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 35,  58 => 30,  53 => 27,  49 => 26,  25 => 5,  19 => 1,);
    }
}
