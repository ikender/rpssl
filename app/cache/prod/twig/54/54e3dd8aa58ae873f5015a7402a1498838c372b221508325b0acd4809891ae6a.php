<?php

/* default/index.html.twig */
class __TwigTemplate_4e5c39b7afdd0f0e09954556294f3542b9f044d1f831dcd28d28a07a1f3228ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
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
        $__internal_853cb309447c98bad302f00589cdb4d972044fd7f3570e94fddec8d9065cdcf7 = $this->env->getExtension("native_profiler");
        $__internal_853cb309447c98bad302f00589cdb4d972044fd7f3570e94fddec8d9065cdcf7->enter($__internal_853cb309447c98bad302f00589cdb4d972044fd7f3570e94fddec8d9065cdcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_853cb309447c98bad302f00589cdb4d972044fd7f3570e94fddec8d9065cdcf7->leave($__internal_853cb309447c98bad302f00589cdb4d972044fd7f3570e94fddec8d9065cdcf7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_927828dde6e96124e2f4825e63cc5217490b23ce62df41f1ebc00c3a7c29f416 = $this->env->getExtension("native_profiler");
        $__internal_927828dde6e96124e2f4825e63cc5217490b23ce62df41f1ebc00c3a7c29f416->enter($__internal_927828dde6e96124e2f4825e63cc5217490b23ce62df41f1ebc00c3a7c29f416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Home | ";
        
        $__internal_927828dde6e96124e2f4825e63cc5217490b23ce62df41f1ebc00c3a7c29f416->leave($__internal_927828dde6e96124e2f4825e63cc5217490b23ce62df41f1ebc00c3a7c29f416_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_00dfb4d35df219e42bd708f026527e6892779754d4bdf90ed14d4ed3413ae649 = $this->env->getExtension("native_profiler");
        $__internal_00dfb4d35df219e42bd708f026527e6892779754d4bdf90ed14d4ed3413ae649->enter($__internal_00dfb4d35df219e42bd708f026527e6892779754d4bdf90ed14d4ed3413ae649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">

\t<h1>Rock Paper Scissors Spock Lizard! Code Challenge<br /><small>From Mike Napier and Ryan Fickel @ Advisors Excel</small></h1>

\t<blockquote>
\t\t<p>We would like you to take this code challenge to see how you utilize Symfony, problem solve and look at your code style.</p>
\t\t<p>Build a player versus computer web application version of \"Rock Paper Scissors Spock Lizard\".</p>
\t\t<p>Here's an explanation of how the game works. http://www.samkass.com/theories/RPSSL.html</p>
\t</blockquote>

\t<p class=\"lead\">The general idea of the application is as follows.</p>
\t<p>A user visits the application and is able to choose between rock, paper, scissors, spock or lizard. The application randomly chooses the computers choice and the user is presented with the computers choice along with who won the battle.</p>
\t<p>The user should be able to view statistics on how many times the player has won, how many times the computer has won and how many times each has chosen which option (rock, paper, etc...).</p>

\t<ul>Requirements
\t\t<li>Create the application using Symfony version 2.6 or above.</li>
\t\t<li>Store statistics in an sql database (MySQL or PostgreSQL preferred) using Doctrine.</li>
\t\t<li>Utilize GIT for source control and host your repository somewhere where we can access it when you are done. Please commit your code as you develop.</li>
\t\t<li>If you have somewhere to deploy the finished application to please do so.</li>
\t\t<li>Feel free to go as simple as you want with the front end design, we are more interested in the backend and wont judge you based on how it looks.</li>
\t\t<li>Authentication is <strong>not</strong> a requirement.</li>
\t</ul>

</div>
";
        
        $__internal_00dfb4d35df219e42bd708f026527e6892779754d4bdf90ed14d4ed3413ae649->leave($__internal_00dfb4d35df219e42bd708f026527e6892779754d4bdf90ed14d4ed3413ae649_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6cfd76edf53364bf0c9c516dcba1e1f132957799f53fe0f2c8a53923a21bf7fb = $this->env->getExtension("native_profiler");
        $__internal_6cfd76edf53364bf0c9c516dcba1e1f132957799f53fe0f2c8a53923a21bf7fb->enter($__internal_6cfd76edf53364bf0c9c516dcba1e1f132957799f53fe0f2c8a53923a21bf7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6cfd76edf53364bf0c9c516dcba1e1f132957799f53fe0f2c8a53923a21bf7fb->leave($__internal_6cfd76edf53364bf0c9c516dcba1e1f132957799f53fe0f2c8a53923a21bf7fb_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fee8dd7f26e3c84a67cd80e710f81d86c8cec6ee873157d90bf3e4c47e008b8a = $this->env->getExtension("native_profiler");
        $__internal_fee8dd7f26e3c84a67cd80e710f81d86c8cec6ee873157d90bf3e4c47e008b8a->enter($__internal_fee8dd7f26e3c84a67cd80e710f81d86c8cec6ee873157d90bf3e4c47e008b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fee8dd7f26e3c84a67cd80e710f81d86c8cec6ee873157d90bf3e4c47e008b8a->leave($__internal_fee8dd7f26e3c84a67cd80e710f81d86c8cec6ee873157d90bf3e4c47e008b8a_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  86 => 31,  55 => 5,  49 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Home | {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/* */
/* 	<h1>Rock Paper Scissors Spock Lizard! Code Challenge<br /><small>From Mike Napier and Ryan Fickel @ Advisors Excel</small></h1>*/
/* */
/* 	<blockquote>*/
/* 		<p>We would like you to take this code challenge to see how you utilize Symfony, problem solve and look at your code style.</p>*/
/* 		<p>Build a player versus computer web application version of "Rock Paper Scissors Spock Lizard".</p>*/
/* 		<p>Here's an explanation of how the game works. http://www.samkass.com/theories/RPSSL.html</p>*/
/* 	</blockquote>*/
/* */
/* 	<p class="lead">The general idea of the application is as follows.</p>*/
/* 	<p>A user visits the application and is able to choose between rock, paper, scissors, spock or lizard. The application randomly chooses the computers choice and the user is presented with the computers choice along with who won the battle.</p>*/
/* 	<p>The user should be able to view statistics on how many times the player has won, how many times the computer has won and how many times each has chosen which option (rock, paper, etc...).</p>*/
/* */
/* 	<ul>Requirements*/
/* 		<li>Create the application using Symfony version 2.6 or above.</li>*/
/* 		<li>Store statistics in an sql database (MySQL or PostgreSQL preferred) using Doctrine.</li>*/
/* 		<li>Utilize GIT for source control and host your repository somewhere where we can access it when you are done. Please commit your code as you develop.</li>*/
/* 		<li>If you have somewhere to deploy the finished application to please do so.</li>*/
/* 		<li>Feel free to go as simple as you want with the front end design, we are more interested in the backend and wont judge you based on how it looks.</li>*/
/* 		<li>Authentication is <strong>not</strong> a requirement.</li>*/
/* 	</ul>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
