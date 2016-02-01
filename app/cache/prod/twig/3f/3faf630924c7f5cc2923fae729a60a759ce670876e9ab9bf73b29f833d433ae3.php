<?php

/* default/results.html.twig */
class __TwigTemplate_3ee74e41fbc3d46446052385bbbab147dfcf72dbbf62cc13db8d3d5a9b142f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/results.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_144d0cde48fcf61ce93b775bb4433cc7f3a29c39e5d79809746684fd648e9acc = $this->env->getExtension("native_profiler");
        $__internal_144d0cde48fcf61ce93b775bb4433cc7f3a29c39e5d79809746684fd648e9acc->enter($__internal_144d0cde48fcf61ce93b775bb4433cc7f3a29c39e5d79809746684fd648e9acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/results.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144d0cde48fcf61ce93b775bb4433cc7f3a29c39e5d79809746684fd648e9acc->leave($__internal_144d0cde48fcf61ce93b775bb4433cc7f3a29c39e5d79809746684fd648e9acc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_85d0dd71405e594fd68f2da96f75ce799c5e942ddfba7e060e372bbb4764548f = $this->env->getExtension("native_profiler");
        $__internal_85d0dd71405e594fd68f2da96f75ce799c5e942ddfba7e060e372bbb4764548f->enter($__internal_85d0dd71405e594fd68f2da96f75ce799c5e942ddfba7e060e372bbb4764548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Results for your game! | ";
        
        $__internal_85d0dd71405e594fd68f2da96f75ce799c5e942ddfba7e060e372bbb4764548f->leave($__internal_85d0dd71405e594fd68f2da96f75ce799c5e942ddfba7e060e372bbb4764548f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e3ad1211d0c01a022e81597e680ff4434c59f1de1886753ec7ec5c1a8d1f7c08 = $this->env->getExtension("native_profiler");
        $__internal_e3ad1211d0c01a022e81597e680ff4434c59f1de1886753ec7ec5c1a8d1f7c08->enter($__internal_e3ad1211d0c01a022e81597e680ff4434c59f1de1886753ec7ec5c1a8d1f7c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">

\t<h1>Rock Paper Scissors Spock Lizard Results!</h1>

\t<div class=\"text-center\">
\t\t<div class=\"actionName\">Rock!</div>
\t\t<div class=\"actionName\">Paper!</div>
\t\t<div class=\"actionName\">Scissors!</div>
\t\t<div class=\"actionName\">Spock!</div>
\t\t<div class=\"actionName\">Lizard!</div>
\t</div>

\t<div id=\"results\" class=\"text-center\">
\t\t<p>Here are the results you have been longing for!</p>
\t\t<div class=\"col-xs-6 lead\">
\t\t\t<p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "player1name", array()), "html", null, true);
        echo " threw</p>
\t\t\t<p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "player1action", array()), array(), "array"), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<div class=\"col-xs-6 lead\">
\t\t\t<p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "player2name", array()), "html", null, true);
        echo " threw</p>
\t\t\t<p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "player2action", array()), array(), "array"), "html", null, true);
        echo "</p>
\t\t</div>
\t\t<p class=\"lead\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), $this->getAttribute((isset($context["compare"]) ? $context["compare"] : $this->getContext($context, "compare")), "action1", array()), array(), "array"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["compare"]) ? $context["compare"] : $this->getContext($context, "compare")), "result", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), $this->getAttribute((isset($context["compare"]) ? $context["compare"] : $this->getContext($context, "compare")), "action2", array()), array(), "array"), "html", null, true);
        echo "!</p>
\t</div>

\t<div><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("rpssl"), "html", null, true);
        echo "\" class=\"btn btn-primary\">Play Again?</a></div>

</div>
";
        
        $__internal_e3ad1211d0c01a022e81597e680ff4434c59f1de1886753ec7ec5c1a8d1f7c08->leave($__internal_e3ad1211d0c01a022e81597e680ff4434c59f1de1886753ec7ec5c1a8d1f7c08_prof);

    }

    // line 35
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1fde45847880d28995bcc31e6522966580f94b748237f787de3806e69b744704 = $this->env->getExtension("native_profiler");
        $__internal_1fde45847880d28995bcc31e6522966580f94b748237f787de3806e69b744704->enter($__internal_1fde45847880d28995bcc31e6522966580f94b748237f787de3806e69b744704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1fde45847880d28995bcc31e6522966580f94b748237f787de3806e69b744704->leave($__internal_1fde45847880d28995bcc31e6522966580f94b748237f787de3806e69b744704_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4da1a45c80db0543527c34a871614b2e7346642c1ccbd19b4b0cf8f28acf2387 = $this->env->getExtension("native_profiler");
        $__internal_4da1a45c80db0543527c34a871614b2e7346642c1ccbd19b4b0cf8f28acf2387->enter($__internal_4da1a45c80db0543527c34a871614b2e7346642c1ccbd19b4b0cf8f28acf2387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4da1a45c80db0543527c34a871614b2e7346642c1ccbd19b4b0cf8f28acf2387->leave($__internal_4da1a45c80db0543527c34a871614b2e7346642c1ccbd19b4b0cf8f28acf2387_prof);

    }

    public function getTemplateName()
    {
        return "default/results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 36,  112 => 35,  101 => 30,  91 => 27,  86 => 25,  82 => 24,  76 => 21,  72 => 20,  55 => 5,  49 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Results for your game! | {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/* */
/* 	<h1>Rock Paper Scissors Spock Lizard Results!</h1>*/
/* */
/* 	<div class="text-center">*/
/* 		<div class="actionName">Rock!</div>*/
/* 		<div class="actionName">Paper!</div>*/
/* 		<div class="actionName">Scissors!</div>*/
/* 		<div class="actionName">Spock!</div>*/
/* 		<div class="actionName">Lizard!</div>*/
/* 	</div>*/
/* */
/* 	<div id="results" class="text-center">*/
/* 		<p>Here are the results you have been longing for!</p>*/
/* 		<div class="col-xs-6 lead">*/
/* 			<p>{{ request.player1name }} threw</p>*/
/* 			<p>{{ actions[request.player1action] }}</p>*/
/* 		</div>*/
/* 		<div class="col-xs-6 lead">*/
/* 			<p>{{ request.player2name }} threw</p>*/
/* 			<p>{{ actions[request.player2action] }}</p>*/
/* 		</div>*/
/* 		<p class="lead">{{ actions[compare.action1] }} {{ compare.result }} {{ actions[compare.action2] }}!</p>*/
/* 	</div>*/
/* */
/* 	<div><a href="{{ asset('rpssl') }}" class="btn btn-primary">Play Again?</a></div>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
