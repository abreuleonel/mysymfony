<?php

/* base.html.twig */
class __TwigTemplate_ce80a8d249a6da1f00c2a28df13f9b685c3a37763d28c7013528147dce09e7dd extends Twig_Template
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
        $__internal_77f340b493c484f305ce19dc9b815551885ed455615b21cbe76bd6c81afbcd61 = $this->env->getExtension("native_profiler");
        $__internal_77f340b493c484f305ce19dc9b815551885ed455615b21cbe76bd6c81afbcd61->enter($__internal_77f340b493c484f305ce19dc9b815551885ed455615b21cbe76bd6c81afbcd61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_77f340b493c484f305ce19dc9b815551885ed455615b21cbe76bd6c81afbcd61->leave($__internal_77f340b493c484f305ce19dc9b815551885ed455615b21cbe76bd6c81afbcd61_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f08a253ac47eab4a8a16a6e77b95c28d90a9e2c8fcf3c93b368a92351666cce8 = $this->env->getExtension("native_profiler");
        $__internal_f08a253ac47eab4a8a16a6e77b95c28d90a9e2c8fcf3c93b368a92351666cce8->enter($__internal_f08a253ac47eab4a8a16a6e77b95c28d90a9e2c8fcf3c93b368a92351666cce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f08a253ac47eab4a8a16a6e77b95c28d90a9e2c8fcf3c93b368a92351666cce8->leave($__internal_f08a253ac47eab4a8a16a6e77b95c28d90a9e2c8fcf3c93b368a92351666cce8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c34d8021c9d3a0b637eacaf5df09cc9817ed59f168264693989f5367451a111f = $this->env->getExtension("native_profiler");
        $__internal_c34d8021c9d3a0b637eacaf5df09cc9817ed59f168264693989f5367451a111f->enter($__internal_c34d8021c9d3a0b637eacaf5df09cc9817ed59f168264693989f5367451a111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c34d8021c9d3a0b637eacaf5df09cc9817ed59f168264693989f5367451a111f->leave($__internal_c34d8021c9d3a0b637eacaf5df09cc9817ed59f168264693989f5367451a111f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5136c059c8d38149c3e535ad81acd9edec365c58387da9a020a548283a0de3a = $this->env->getExtension("native_profiler");
        $__internal_b5136c059c8d38149c3e535ad81acd9edec365c58387da9a020a548283a0de3a->enter($__internal_b5136c059c8d38149c3e535ad81acd9edec365c58387da9a020a548283a0de3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b5136c059c8d38149c3e535ad81acd9edec365c58387da9a020a548283a0de3a->leave($__internal_b5136c059c8d38149c3e535ad81acd9edec365c58387da9a020a548283a0de3a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6e7f516826324716d390f16fbc02667f2fb774d0e983a994bf215757fbf4a9c = $this->env->getExtension("native_profiler");
        $__internal_c6e7f516826324716d390f16fbc02667f2fb774d0e983a994bf215757fbf4a9c->enter($__internal_c6e7f516826324716d390f16fbc02667f2fb774d0e983a994bf215757fbf4a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c6e7f516826324716d390f16fbc02667f2fb774d0e983a994bf215757fbf4a9c->leave($__internal_c6e7f516826324716d390f16fbc02667f2fb774d0e983a994bf215757fbf4a9c_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
