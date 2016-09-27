<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4fd7a97df59fdb549686c206e2a2541cc2e485c93c070e6144d131d6a1e5e7ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29c47564673495ce8bae887d943dc36d0d8130283b66125c9624edf8124c1bdb = $this->env->getExtension("native_profiler");
        $__internal_29c47564673495ce8bae887d943dc36d0d8130283b66125c9624edf8124c1bdb->enter($__internal_29c47564673495ce8bae887d943dc36d0d8130283b66125c9624edf8124c1bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c47564673495ce8bae887d943dc36d0d8130283b66125c9624edf8124c1bdb->leave($__internal_29c47564673495ce8bae887d943dc36d0d8130283b66125c9624edf8124c1bdb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_791fe4e677603087fc37d5cbbf9b3f529cc0853f299c50aa854df0aef13c7912 = $this->env->getExtension("native_profiler");
        $__internal_791fe4e677603087fc37d5cbbf9b3f529cc0853f299c50aa854df0aef13c7912->enter($__internal_791fe4e677603087fc37d5cbbf9b3f529cc0853f299c50aa854df0aef13c7912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_791fe4e677603087fc37d5cbbf9b3f529cc0853f299c50aa854df0aef13c7912->leave($__internal_791fe4e677603087fc37d5cbbf9b3f529cc0853f299c50aa854df0aef13c7912_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9f002cf4221d31737991f3cd4b42586f5089c69101ee4f75be2853db07a8e3cf = $this->env->getExtension("native_profiler");
        $__internal_9f002cf4221d31737991f3cd4b42586f5089c69101ee4f75be2853db07a8e3cf->enter($__internal_9f002cf4221d31737991f3cd4b42586f5089c69101ee4f75be2853db07a8e3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9f002cf4221d31737991f3cd4b42586f5089c69101ee4f75be2853db07a8e3cf->leave($__internal_9f002cf4221d31737991f3cd4b42586f5089c69101ee4f75be2853db07a8e3cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c68e9ba2d6d7e309c3c9d7f274694610971721a5b5615a9da188fcd463579a3 = $this->env->getExtension("native_profiler");
        $__internal_0c68e9ba2d6d7e309c3c9d7f274694610971721a5b5615a9da188fcd463579a3->enter($__internal_0c68e9ba2d6d7e309c3c9d7f274694610971721a5b5615a9da188fcd463579a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0c68e9ba2d6d7e309c3c9d7f274694610971721a5b5615a9da188fcd463579a3->leave($__internal_0c68e9ba2d6d7e309c3c9d7f274694610971721a5b5615a9da188fcd463579a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
