<?php

/* base.html.twig */
class __TwigTemplate_57f21b630ecb8f16452b2ac37d753871a7a6a1bffceee857f79a3438b2974568 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ba071a6addc26090a7434b2421c94bbe7777fee94fb591a5501e4ba485b03d4 = $this->env->getExtension("native_profiler");
        $__internal_1ba071a6addc26090a7434b2421c94bbe7777fee94fb591a5501e4ba485b03d4->enter($__internal_1ba071a6addc26090a7434b2421c94bbe7777fee94fb591a5501e4ba485b03d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "Rock Paper Scissors Spock Lizard!</title>

\t\t<meta charset=\"utf-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />

\t\t<!-- css -->
\t\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t<link href=\"//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css\" rel=\"stylesheet\" />
\t\t<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
\t\t";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
\t\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
\t\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t\t<![endif]-->
\t</head>
\t<body>

";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
\t\t<!-- Fixed navbar -->
\t\t<nav class=\"navbar navbar-default navbar-fixed-top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(""), "html", null, true);
        echo "\">RPSSL</a>
\t\t\t\t</div>
\t\t\t\t<div id=\"navbar\" class=\"navbar-collapse collapse\">
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(""), "html", null, true);
        echo "\" title=\"Return to the home page\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"http://www.samkass.com/theories/RPSSL.html\" target=\"_blank\" title=\"About Rock Paper Scissors Spock Lizard\">About</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rpssl"), "html", null, true);
        echo "\" title=\"Play Rock Paper Scissors Spock Lizard\">Play</a></li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav navbar-nav navbar-right\">
\t\t\t\t\t\t<li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("stats"), "html", null, true);
        echo "\" title=\"Gameplay Statisitcs for Rock Paper Scissors Spock Lizard\">Statistics</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div><!--/.nav-collapse -->
\t\t\t</div>
\t\t</nav>


\t\t<!-- javascripts -->
\t\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
\t\t<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js\"></script>
\t\t<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "
\t</body>
</html>";
        
        $__internal_1ba071a6addc26090a7434b2421c94bbe7777fee94fb591a5501e4ba485b03d4->leave($__internal_1ba071a6addc26090a7434b2421c94bbe7777fee94fb591a5501e4ba485b03d4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_aaf7dabd92fc4594718672171ebd83449db72d82ca2c9caf8af28788d4234129 = $this->env->getExtension("native_profiler");
        $__internal_aaf7dabd92fc4594718672171ebd83449db72d82ca2c9caf8af28788d4234129->enter($__internal_aaf7dabd92fc4594718672171ebd83449db72d82ca2c9caf8af28788d4234129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_aaf7dabd92fc4594718672171ebd83449db72d82ca2c9caf8af28788d4234129->leave($__internal_aaf7dabd92fc4594718672171ebd83449db72d82ca2c9caf8af28788d4234129_prof);

    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6de7935ed627e1e027ac9010aa55c7e5a938166512024c9bc55fbec32c0fcde = $this->env->getExtension("native_profiler");
        $__internal_b6de7935ed627e1e027ac9010aa55c7e5a938166512024c9bc55fbec32c0fcde->enter($__internal_b6de7935ed627e1e027ac9010aa55c7e5a938166512024c9bc55fbec32c0fcde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b6de7935ed627e1e027ac9010aa55c7e5a938166512024c9bc55fbec32c0fcde->leave($__internal_b6de7935ed627e1e027ac9010aa55c7e5a938166512024c9bc55fbec32c0fcde_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c25e1b8ebb87b725baf2362e80fae992723e250a1012e72fdd1b7ce2e9961a5 = $this->env->getExtension("native_profiler");
        $__internal_4c25e1b8ebb87b725baf2362e80fae992723e250a1012e72fdd1b7ce2e9961a5->enter($__internal_4c25e1b8ebb87b725baf2362e80fae992723e250a1012e72fdd1b7ce2e9961a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4c25e1b8ebb87b725baf2362e80fae992723e250a1012e72fdd1b7ce2e9961a5->leave($__internal_4c25e1b8ebb87b725baf2362e80fae992723e250a1012e72fdd1b7ce2e9961a5_prof);

    }

    // line 57
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d5e9009aadbb19a509b587d7d2287e1fefb75ffe16a7f6370048bc25c249ddab = $this->env->getExtension("native_profiler");
        $__internal_d5e9009aadbb19a509b587d7d2287e1fefb75ffe16a7f6370048bc25c249ddab->enter($__internal_d5e9009aadbb19a509b587d7d2287e1fefb75ffe16a7f6370048bc25c249ddab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d5e9009aadbb19a509b587d7d2287e1fefb75ffe16a7f6370048bc25c249ddab->leave($__internal_d5e9009aadbb19a509b587d7d2287e1fefb75ffe16a7f6370048bc25c249ddab_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 57,  150 => 24,  139 => 14,  128 => 4,  119 => 58,  117 => 57,  113 => 56,  108 => 54,  96 => 45,  90 => 42,  85 => 40,  78 => 36,  65 => 25,  63 => 24,  52 => 15,  50 => 14,  46 => 13,  41 => 11,  31 => 4,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* 	<head>*/
/* 		<title>{% block title %}{% endblock %}Rock Paper Scissors Spock Lizard!</title>*/
/* */
/* 		<meta charset="utf-8" />*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge" />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1" />*/
/* */
/* 		<!-- css -->*/
/* 		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />*/
/* 		<link href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css" rel="stylesheet" />*/
/* 		<link href="{{ asset('css/custom.css') }}" rel="stylesheet" />*/
/* 		{% block stylesheets %}{% endblock %}*/
/* */
/* 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/* 		<!--[if lt IE 9]>*/
/* 			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/* 			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/* 		<![endif]-->*/
/* 	</head>*/
/* 	<body>*/
/* */
/* {% block body %}{% endblock %}*/
/* */
/* 		<!-- Fixed navbar -->*/
/* 		<nav class="navbar navbar-default navbar-fixed-top">*/
/* 			<div class="container">*/
/* 				<div class="navbar-header">*/
/* 					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/* 						<span class="sr-only">Toggle navigation</span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 						<span class="icon-bar"></span>*/
/* 					</button>*/
/* 					<a class="navbar-brand" href="{{ asset('') }}">RPSSL</a>*/
/* 				</div>*/
/* 				<div id="navbar" class="navbar-collapse collapse">*/
/* 					<ul class="nav navbar-nav">*/
/* 						<li><a href="{{ asset('') }}" title="Return to the home page">Home</a></li>*/
/* 						<li><a href="http://www.samkass.com/theories/RPSSL.html" target="_blank" title="About Rock Paper Scissors Spock Lizard">About</a></li>*/
/* 						<li><a href="{{ asset('rpssl') }}" title="Play Rock Paper Scissors Spock Lizard">Play</a></li>*/
/* 					</ul>*/
/* 					<ul class="nav navbar-nav navbar-right">*/
/* 						<li><a href="{{ asset('stats') }}" title="Gameplay Statisitcs for Rock Paper Scissors Spock Lizard">Statistics</a></li>*/
/* 					</ul>*/
/* 				</div><!--/.nav-collapse -->*/
/* 			</div>*/
/* 		</nav>*/
/* */
/* */
/* 		<!-- javascripts -->*/
/* 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* 		<script src="{{ asset('js/bootstrap.min.js') }}"></script>*/
/* 		<script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>*/
/* 		<script src="{{ asset('js/custom.js') }}"></script>*/
/* 		{% block javascripts %}{% endblock %}*/
/* */
/* 	</body>*/
/* </html>*/
