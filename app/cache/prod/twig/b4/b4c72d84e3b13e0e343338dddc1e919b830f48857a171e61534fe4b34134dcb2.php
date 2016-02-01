<?php

/* default/rpssl.html.twig */
class __TwigTemplate_418d7c6abb6a28e4c98de0881b10a06175cc895ff5cec8c2ae417f3c5d7dc530 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/rpssl.html.twig", 1);
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
        $__internal_dad2bdfd6c15159472f774aa76b331b4c6cb77d12b79d40b54e375cb5e47857b = $this->env->getExtension("native_profiler");
        $__internal_dad2bdfd6c15159472f774aa76b331b4c6cb77d12b79d40b54e375cb5e47857b->enter($__internal_dad2bdfd6c15159472f774aa76b331b4c6cb77d12b79d40b54e375cb5e47857b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/rpssl.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dad2bdfd6c15159472f774aa76b331b4c6cb77d12b79d40b54e375cb5e47857b->leave($__internal_dad2bdfd6c15159472f774aa76b331b4c6cb77d12b79d40b54e375cb5e47857b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_091b42ac20e2035dc9aa6449224fdf831e6ce300160931a1d4edf047be48c6b9 = $this->env->getExtension("native_profiler");
        $__internal_091b42ac20e2035dc9aa6449224fdf831e6ce300160931a1d4edf047be48c6b9->enter($__internal_091b42ac20e2035dc9aa6449224fdf831e6ce300160931a1d4edf047be48c6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Play Rock Paper Scissors Spock Lizard! | ";
        
        $__internal_091b42ac20e2035dc9aa6449224fdf831e6ce300160931a1d4edf047be48c6b9->leave($__internal_091b42ac20e2035dc9aa6449224fdf831e6ce300160931a1d4edf047be48c6b9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1793500687865953417dd9650f8eacff35a3794581fe7a8b4be8195aaabde4d = $this->env->getExtension("native_profiler");
        $__internal_b1793500687865953417dd9650f8eacff35a3794581fe7a8b4be8195aaabde4d->enter($__internal_b1793500687865953417dd9650f8eacff35a3794581fe7a8b4be8195aaabde4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">

\t<h1>Rock Paper Scissors Spock Lizard</h1>
\t<p class=\"lead\">Player 1 can enter his name, select his option of rock, paper, scissors, Spock or lizard and then hide his choice and let player 2 make his move.  Once both players have made their selection pres the green play button and it will get the results!</p>

\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
";
        
        $__internal_b1793500687865953417dd9650f8eacff35a3794581fe7a8b4be8195aaabde4d->leave($__internal_b1793500687865953417dd9650f8eacff35a3794581fe7a8b4be8195aaabde4d_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e0d139e3ac1ffa602c1a6c54ccbea21876273d134b7dc3b4aa33cc407ca07fe = $this->env->getExtension("native_profiler");
        $__internal_6e0d139e3ac1ffa602c1a6c54ccbea21876273d134b7dc3b4aa33cc407ca07fe->enter($__internal_6e0d139e3ac1ffa602c1a6c54ccbea21876273d134b7dc3b4aa33cc407ca07fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6e0d139e3ac1ffa602c1a6c54ccbea21876273d134b7dc3b4aa33cc407ca07fe->leave($__internal_6e0d139e3ac1ffa602c1a6c54ccbea21876273d134b7dc3b4aa33cc407ca07fe_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b00381a3d32d7846ada8a2bc780f00c125541c60cb3e18b83d002d859968fed9 = $this->env->getExtension("native_profiler");
        $__internal_b00381a3d32d7846ada8a2bc780f00c125541c60cb3e18b83d002d859968fed9->enter($__internal_b00381a3d32d7846ada8a2bc780f00c125541c60cb3e18b83d002d859968fed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b00381a3d32d7846ada8a2bc780f00c125541c60cb3e18b83d002d859968fed9->leave($__internal_b00381a3d32d7846ada8a2bc780f00c125541c60cb3e18b83d002d859968fed9_prof);

    }

    public function getTemplateName()
    {
        return "default/rpssl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 18,  81 => 17,  70 => 12,  66 => 11,  62 => 10,  55 => 5,  49 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Play Rock Paper Scissors Spock Lizard! | {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/* */
/* 	<h1>Rock Paper Scissors Spock Lizard</h1>*/
/* 	<p class="lead">Player 1 can enter his name, select his option of rock, paper, scissors, Spock or lizard and then hide his choice and let player 2 make his move.  Once both players have made their selection pres the green play button and it will get the results!</p>*/
/* */
/* 	{{ form_start(form) }}*/
/* 	{{ form_widget(form) }}*/
/* 	{{ form_end(form) }}*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
