<?php

/* default/stats.html.twig */
class __TwigTemplate_8c59400036df2e6b23ce05532bbb9443880218e6a1386ef8786b7b713c9eb011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/stats.html.twig", 1);
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
        $__internal_cc949d9ed45b4662740c9a6dadc090fb5db5bb5c73467acc885237cc3ee3b19c = $this->env->getExtension("native_profiler");
        $__internal_cc949d9ed45b4662740c9a6dadc090fb5db5bb5c73467acc885237cc3ee3b19c->enter($__internal_cc949d9ed45b4662740c9a6dadc090fb5db5bb5c73467acc885237cc3ee3b19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/stats.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc949d9ed45b4662740c9a6dadc090fb5db5bb5c73467acc885237cc3ee3b19c->leave($__internal_cc949d9ed45b4662740c9a6dadc090fb5db5bb5c73467acc885237cc3ee3b19c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0da5bcf27ec70245cd2fe8bc4c9ff34861e1e071f19f9cb315e87a369abc85f8 = $this->env->getExtension("native_profiler");
        $__internal_0da5bcf27ec70245cd2fe8bc4c9ff34861e1e071f19f9cb315e87a369abc85f8->enter($__internal_0da5bcf27ec70245cd2fe8bc4c9ff34861e1e071f19f9cb315e87a369abc85f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Stats | ";
        
        $__internal_0da5bcf27ec70245cd2fe8bc4c9ff34861e1e071f19f9cb315e87a369abc85f8->leave($__internal_0da5bcf27ec70245cd2fe8bc4c9ff34861e1e071f19f9cb315e87a369abc85f8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_47e31bf22b1a87a9b437a40d9bd36488a5eb0ccea2fa8d7a6c0d47b7461cb5bf = $this->env->getExtension("native_profiler");
        $__internal_47e31bf22b1a87a9b437a40d9bd36488a5eb0ccea2fa8d7a6c0d47b7461cb5bf->enter($__internal_47e31bf22b1a87a9b437a40d9bd36488a5eb0ccea2fa8d7a6c0d47b7461cb5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">

\t<h1>Rock Paper Scissors Spock Lizard Stats</h1>

<table class=\"table table-striped table-hover datatables\">
\t<thead>
\t\t<tr>
\t\t\t<th>Player 1 Name</th>
\t\t\t<th>Player 1 Action</th>
\t\t\t<th>Player 2 Name</th>
\t\t\t<th>Player 2 Action</th>
\t\t\t<th>Winner</th>
\t\t</tr>
\t</thead>
\t<tbody>
";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["history"]) ? $context["history"] : $this->getContext($context, "history")));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 21
            echo "\t\t<tr>
\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "player1name", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), $this->getAttribute($context["v"], "player1action", array()), array(), "array"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "player2name", array()), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), $this->getAttribute($context["v"], "player2action", array()), array(), "array"), "html", null, true);
            echo "</td>
\t";
            // line 26
            if ($this->getAttribute($context["v"], "winner", array())) {
                // line 27
                echo "\t\t\t<td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")), $this->getAttribute($context["v"], "winner", array()), array(), "array"), "html", null, true);
                echo "</td>
\t";
            } else {
                // line 29
                echo "\t\t\t<td>Tie</td>
\t";
            }
            // line 31
            echo "\t\t</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t</tbody>
</table>

</div>
";
        
        $__internal_47e31bf22b1a87a9b437a40d9bd36488a5eb0ccea2fa8d7a6c0d47b7461cb5bf->leave($__internal_47e31bf22b1a87a9b437a40d9bd36488a5eb0ccea2fa8d7a6c0d47b7461cb5bf_prof);

    }

    // line 39
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ad317cb9cf12aa267f856d7c110af14cadb89f0b6967f3b2fff5610cd97cb034 = $this->env->getExtension("native_profiler");
        $__internal_ad317cb9cf12aa267f856d7c110af14cadb89f0b6967f3b2fff5610cd97cb034->enter($__internal_ad317cb9cf12aa267f856d7c110af14cadb89f0b6967f3b2fff5610cd97cb034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ad317cb9cf12aa267f856d7c110af14cadb89f0b6967f3b2fff5610cd97cb034->leave($__internal_ad317cb9cf12aa267f856d7c110af14cadb89f0b6967f3b2fff5610cd97cb034_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_108a38539fd6bf2609b1ff69191123c9dd2a406b72c9dc6e7982aaa43eaa7d99 = $this->env->getExtension("native_profiler");
        $__internal_108a38539fd6bf2609b1ff69191123c9dd2a406b72c9dc6e7982aaa43eaa7d99->enter($__internal_108a38539fd6bf2609b1ff69191123c9dd2a406b72c9dc6e7982aaa43eaa7d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_108a38539fd6bf2609b1ff69191123c9dd2a406b72c9dc6e7982aaa43eaa7d99->leave($__internal_108a38539fd6bf2609b1ff69191123c9dd2a406b72c9dc6e7982aaa43eaa7d99_prof);

    }

    public function getTemplateName()
    {
        return "default/stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  125 => 39,  114 => 33,  107 => 31,  103 => 29,  97 => 27,  95 => 26,  91 => 25,  87 => 24,  83 => 23,  79 => 22,  76 => 21,  72 => 20,  55 => 5,  49 => 4,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block title %}Stats | {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/* */
/* 	<h1>Rock Paper Scissors Spock Lizard Stats</h1>*/
/* */
/* <table class="table table-striped table-hover datatables">*/
/* 	<thead>*/
/* 		<tr>*/
/* 			<th>Player 1 Name</th>*/
/* 			<th>Player 1 Action</th>*/
/* 			<th>Player 2 Name</th>*/
/* 			<th>Player 2 Action</th>*/
/* 			<th>Winner</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* {% for v in history %}*/
/* 		<tr>*/
/* 			<td>{{ v.player1name }}</td>*/
/* 			<td>{{ actions[v.player1action] }}</td>*/
/* 			<td>{{ v.player2name }}</td>*/
/* 			<td>{{ actions[v.player2action] }}</td>*/
/* 	{% if v.winner %}*/
/* 			<td>{{ actions[v.winner] }}</td>*/
/* 	{% else %}*/
/* 			<td>Tie</td>*/
/* 	{% endif %}*/
/* 		</tr>*/
/* {% endfor %}*/
/* 	</tbody>*/
/* </table>*/
/* */
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}{% endblock %}*/
/* {% block javascripts %}{% endblock %}*/
/* */
